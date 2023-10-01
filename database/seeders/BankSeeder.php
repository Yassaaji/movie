<?php

namespace Database\Seeders;

use App\Models\Bank;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Banks = [
            [
                'bank' => 'bri',
                'nomor_rekening' => 0144000102763333,
            ],
            [
                'bank' => 'bca',
                'nomor_rekening' => 0144000102761111,
            ],
            [
                'bank' => 'mandiri',
                'nomor_rekening' => 0144000102762222,
            ],
        ];

        foreach ($Banks as $bank) {
            Bank::create($bank);
        }

        $this->command->info('Seeder berhasil dijalankan');

    }
}
