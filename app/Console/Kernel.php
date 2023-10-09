<?php

namespace App\Console;

use App\Models\Film;
use Carbon\Carbon;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        // $schedule->command('inspire')->hourly();



            $schedule->call(function(){
                $currentdate = Carbon::now();
                // dd($currentdate);
                Film::where('jadwal_berakhir',$currentdate)->update(['status'=>'finish']);
                Film::where('jadwal_tayang',$currentdate)->update(['status'=>'nowplaying']);

            })->daily();
            // $schedule->command('pendapatan_bulanan')->monthly();

    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
