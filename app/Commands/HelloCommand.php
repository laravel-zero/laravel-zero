<?php

namespace App\Commands;

use LaravelZero\Framework\Commands\AbstractCommand;

// use Illuminate\Database\Capsule\Manager as DB;

class HelloCommand extends AbstractCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'hello';

    /**
     * The description of the command.
     *
     * @var string
     */
    protected $description = 'The hello app command';

    /**
     * Execute the console command. Here goes the command
     * code.
     *
     * @return void
     */
    public function handle(): void
    {
        $this->info('Love beautiful code? We do too.');
        $this->notify('Hello Artisan', 'Enjoy the fresh air!');
        $this->comment('Wanna see more? Type `php your-command-name list`');
    }
}
