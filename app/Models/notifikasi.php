<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class notifikasi extends Model
{
    use HasFactory;
    protected $guarded=[

    ];

    public function pesanan():HasMany
    {
        return $this->hasMany(Pesanan::class);
    }
}


