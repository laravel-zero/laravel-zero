<?php

namespace App;

use NunoMaduro\ZeroFramework\Commands\AbstractCommand;

class DefaultCommand extends AbstractCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'default';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'The default app command';

    /**
     * Execute the console command. Here goes the command
     * code.
     *
     * @return void
     */
    public function handle(): void
    {
        $this->info('Love beautiful code? We do too.');
        $this->notify('Hey Artisan', 'Enjoy the fresh air!');
    }
}
