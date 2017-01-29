<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Main extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'main';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'The main app command';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Love beautiful code? We do too.');
    }
}
