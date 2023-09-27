<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Kursi extends Model
{
    use HasFactory;

    public function ruangan():BelongsTo
    {
        return $this->belongsTo(Ruangan::class);
    }

}
