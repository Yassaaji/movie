<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Ticket extends Model
{
    use HasFactory;

    protected $guarded=[

    ];

    public function film():BelongsTo
    {
        return $this->belongsTo(Film::class);
    }

    public function ruangan():BelongsTo
    {
        return $this->belongsTo(Ruangan::class);
    }

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    // public function kursi():HasMany
    // {
    //     return $this->hasMany(Kursi::class);
    // }

    // public function pesanan():BelongsTo
    // {
    //     return $this->belongsTo(Pesanan::class);
    // }
}
