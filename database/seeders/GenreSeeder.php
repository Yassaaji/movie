<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $genres = ['aksi', 'horor', 'romantis', 'drama', 'komedi', 'animasi'];

        foreach ($genres as $genre) {
            DB::table('genres')->insert([
                'genre' => $genre,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
    }
}
}
