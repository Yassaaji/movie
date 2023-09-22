<?php

namespace Database\Seeders;

use App\Models\Ruangan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RuanganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $ruangData = [
            [
                'nama_ruangan' => 'A',
                'kapasitas' => 24,
            ],
            [
                'nama_ruangan' => 'B',
                'kapasitas' => 24,
            ],
            [
                'nama_ruangan' => 'C',
                'kapasitas' => 24,
            ],
        ];

        foreach ($ruangData as $ruang) {
            Ruangan::create($ruang);
        }

        $this->command->info('Seeder berhasil dijalankan');

    }
}
