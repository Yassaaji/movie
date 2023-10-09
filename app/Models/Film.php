<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Film extends Model
{
    use HasFactory;

    protected $guarded=[

    ];

    public function ticket():HasMany
    {
        return $this->hasMany(Ticket::class);
    }

    public function pesanan():HasMany
    {
        return $this->hasMany(Pesanan::class);
    }

    public function ruangan():BelongsTo
    {
        return $this->belongsTo(Ruangan::class);
    }

    public function status_kursi():HasMany
    {
        return $this->hasMany(status_kursi::class);
    }

    public function genre():BelongsTo
    {
        return $this->belongsTo(Genre::class);
    }
    public function komentar():HasMany
    {
        return $this->hasMany(Komentar::class);
    }

    public function penayangan():HasMany
    {
        return $this->hasMany(Penayangan::class);
    }

    public function rate():HasMany
    {
        return $this->hasMany(Rate::class);
    }

}
