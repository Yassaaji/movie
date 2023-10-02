<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kursi extends Model
{
    use HasFactory;

    public function ruangan():BelongsTo
    {
        return $this->belongsTo(Ruangan::class);
    }

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function ticket():BelongsTo
    {
        return $this->belongsTo(Ticket::class);
    }

    public function status_kursi():HasMany{
        return $this->hasMany(status_kursi::class);
    }

}
