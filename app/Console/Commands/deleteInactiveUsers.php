<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Carbon\Carbon;
use App\User;
use Illuminate\Support\Facades\Log;


class deleteInactiveUsers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:deleteInactiveUsers';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */

    public function deleteInactiveUsers()
    {
        Log::info('test');
        $date = \strtotime(Carbon::now().'- 3 years');
        $users = User::all()->where('last_login_at','>',$date);

        foreach ($users as $user) {
            $user->delete();
        }
    }

    public function handle()
    {
       $this->deleteInactiveUsers();
    }
}
