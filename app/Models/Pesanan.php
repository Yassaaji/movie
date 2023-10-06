<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pesanan extends Model
{
    use HasFactory;

    protected $guarded = [

    ];

    public function Bank():BelongsTo
    {
        return $this->belongsTo(Bank::class);
    }

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function ewallet():BelongsTo
    {
        return $this->belongsTo(Ewallet::class);
    }

    public function film():BelongsTo
    {
        return $this->belongsTo(Film::class);
    }

    public function ticket():BelongsTo
    {
        return $this->belongsTo(Ticket::class);
    }


    public function notifikasi():BelongsTo
    {
        return $this->belongsTo(notifikasi::class);
    }


}
