<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Ruangan extends Model
{
    use HasFactory;


    public function ticket():HasMany
    {
        return $this->hasMany(Ticket::class);
    }

    public function kursi():HasMany
    {
        return $this->hasMany(Kursi::class);
    }

}

