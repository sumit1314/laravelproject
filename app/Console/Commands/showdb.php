<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\db;

class showdb extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'showdb';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'show current db';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //
        $this->info(db::connection()->getdatabasename());
      
    }
}



