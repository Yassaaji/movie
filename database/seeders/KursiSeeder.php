<?php

namespace Database\Seeders;

use App\Models\Film;
use App\Models\Kursi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KursiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $ruangSymbols = ['A', 'B', 'C'];
        $columns = range(1, 8);
        $ruangCount = 3; // Jumlah ruangan

        foreach ($ruangSymbols as $ruangSymbol) {
            for ($i = 1; $i <= $ruangCount; $i++) {
                foreach ($columns as $column) {
                    $seatNumber = $ruangSymbol . $column;
                    $seat = [
                        'ruangan_id' => $i,
                        'nomor_kursi' => $seatNumber,
                        // Jika Anda memiliki atribut lain pada model Seat, tambahkan di sini
                    ];

                    Kursi::create($seat);
                }
            }
        }

        $this->command->info('Seeder berhasil dijalankan');
    }
}

