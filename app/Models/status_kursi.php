<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class status_kursi extends Model
{
    use HasFactory;

    protected $guarded =[

    ];

    public function kursi():BelongsTo
    {
        return $this->belongsTo(Kursi::class);
    }

    public function film():BelongsTo
    {
        return $this->belongsTo(Film::class);
    }

    public function penayangan():BelongsTo
    {
        return $this->belongsTo(Penayangan::class);
    }

}
