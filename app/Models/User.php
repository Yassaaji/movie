<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [

    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($user) {
            // Setel foto profil default jika pengguna baru
            if (!$user->fotoprofil) {
                $user->fotoprofil = 'default.jpg'; // Gantilah dengan nama berkas foto profil default Anda
            }
        });
    }

    public function pesanan():HasMany
    {
        return $this->hasMany(Pesanan::class);
    }

    public function ticket():HasMany
    {
        return $this->hasMany(Ticket::class);
    }

    public function kursi():HasMany
    {
        return $this->hasMany(Kursi::class);
    }

    public function rate():HasMany
    {
        return $this->hasMany(Rate::class);
    }

}
