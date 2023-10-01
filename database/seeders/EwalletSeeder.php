<?php

namespace Database\Seeders;

use App\Models\Ewallet;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EwalletSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Ewallets = [
            [
                'ewallet' => 'dana',
                'qrcode' => 'dana.jpeg',
            ],
            [
                'ewallet' => 'paypal',
                'qrcode' => 'paypal.jpeg',
            ],
            [
                'ewallet' => 'gopay',
                'qrcode' => 'gopay.jpeg',
            ],
        ];

        foreach ($Ewallets as $ewallet) {
            Ewallet::create($ewallet);
        }

        $this->command->info('Seeder berhasil dijalankan');
    }
}
