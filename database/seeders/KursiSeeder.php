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
    public function run(): void
    {
        $rows = ['A', 'B', 'C'];
        $columns = range(1, 8);
        $ruangId = 2; // Ganti dengan ID ruang yang sesuai

        $seats = [];

        // Menghasilkan data kursi berdasarkan baris dan kolom
        foreach ($rows as $row) {
            foreach ($columns as $column) {
                $seatNumber = $row . $column;
                $seat = [
                    'ruangan_id' => $ruangId,
                    'nomor_kursi' => $seatNumber,
                    // Jika Anda memiliki atribut lain pada model Seat, tambahkan di sini
                ];

                $seats[] = $seat;
            }
        }

        // Menyimpan data kursi ke dalam database
        Kursi::insert($seats);
        $this->command->info('Seeder berhasil dijalankan');
    }
}
