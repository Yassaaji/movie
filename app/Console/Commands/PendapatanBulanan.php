<?php

namespace App\Console\Commands;

use App\Models\Pendapatan;
use Carbon\Carbon;
use Illuminate\Console\Command;

class PendapatanBulanan extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'pendapatan_bulanan';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'deteksi bulan dan tahun sebelumnya';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $now = Carbon::now();
        $bulan_ini = $now->format('m');
        $tahun_ini = $now->format('y');

        $bulan_sebelumnya = $now->subMonth()->format('m');
        $tahun_sebelumnya = $now->format('m');

        $entryBulanSebelumnya = Pendapatan::where('bulan', $bulan_sebelumnya)
        ->where('tahun', $tahun_sebelumnya)
        ->exists();

        if($entryBulanSebelumnya){

        }else{
             // Logika untuk membuat entri baru
            // Misalnya:
            Pendapatan::create([
                'bulan' => $bulan_sebelumnya,
                'tahun' => $tahun_sebelumnya,
                'pendapatan' => 0,
            ]);
            $this->info('Entry for the previous month has been created.');
        }

    }
}
