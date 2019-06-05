<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class DisplayUsers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'users:diplay';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Display users in the database';

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
     * @return mixed
     */
    public function handle()
    {
        $users = DB::table('users')->get();
    }
}
