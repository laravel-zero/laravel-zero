<?php

namespace App\Commands;

use LaravelZero\Framework\Commands\AbstractCommand;

class DefaultCommand extends AbstractCommand
{
    /**
     * Want to build an elegant console app?
     *
     * @with Laravel Zero
     */
    public function handle(): void
    {
        $this->notify('Hey Artisan', 'Enjoy the fresh air!');
        $this->ask('Love beautiful code?');
        $this->info('We do too.');

        if ($this->confirm('Do you wish to continue?')) {
            $this->choice('What is your name?', ['Nuno', 'Taylor']);
        }
    }
}
