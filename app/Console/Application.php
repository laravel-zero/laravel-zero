<?php

namespace App\Console;

use Illuminate\Contracts\Events\Dispatcher;
use Illuminate\Contracts\Container\Container;
use Illuminate\Console\Application as BaseApplication;

class Application extends BaseApplication
{
    /**
     * The application version.
     */
    const VERSION = '1.00';

    /**
     * Create a new console application.
     *
     * @param  Container  $container
     * @param  Dispatcher $dispatcher
     */
    public function __construct(Container $container, Dispatcher $dispatcher)
    {
        parent::__construct($container, $dispatcher, self::VERSION);

        // Register the build command.
        $this->add(new Commands\Build);

        // Register the install command.
        $this->add(new Commands\Install);

        // Register the app main command.
        $command = $this->add(new Commands\Main);

        // Sets the app main command as default.
        $this->setDefaultCommand($command->getName());
    }
}