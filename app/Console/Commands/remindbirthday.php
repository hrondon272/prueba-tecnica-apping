<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use DB;

class remindbirthday extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:remindbirthday';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $reminderDate = DB::select('select reminder_date from reminder where reminder_date = ?', [1]);
        $schedule->command('app:remindbirthday')->everyThreeHours();
    }
}
