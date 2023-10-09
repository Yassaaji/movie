<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Penayangan extends Model
{
    use HasFactory;

    protected $guarded =[

    ];

    public function film():BelongsTo
    {
        return $this->belongsTo(Film::class);
    }

    public function status_kursi():HasMany
    {
        return $this->hasMany(status_kursi::class);
    }

}
