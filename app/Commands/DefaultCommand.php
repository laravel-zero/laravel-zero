<?php

namespace App\Commands;

use NunoMaduro\ZeroFramework\Commands\AbstractCommand;

// use Illuminate\Database\Capsule\Manager as DB;

class DefaultCommand extends AbstractCommand
{
    /**
     * The name of the command.
     *
     * @var string
     */
    protected $name = 'default';

    /**
     * The description of the command.
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
