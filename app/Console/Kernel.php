<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        \Webkul\Rewards\Console\Commands\CheckRewardExpire::class,
        \Webkul\Rewards\Console\Commands\RewardByDateOfBirth::class,
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->command('booking:cron')->dailyAt('3:00');
        $schedule->command('dob:cron')->daily();
        $schedule->command('reward:expire')->daily();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');
        $this->load(__DIR__.'/../../packages/Webkul/Core/src/Console/Commands');
        $this->load(__DIR__.'/../../packages/Webkul/Rewards/src/Console/Commands');

        require base_path('routes/console.php');
    }
}