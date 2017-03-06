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
     * The container.
     *
     * @var \Illuminate\Contracts\Container\Container
     */
    private $container;

    /**
     * The dispatcher.
     *
     * @var \Illuminate\Contracts\Events\Dispatcher
     */
    private $dispatcher;

    /**
     * Create a new console application.
     *
     * @param  Container  $container
     * @param  Dispatcher $dispatcher
     */
    public function __construct(Container $container, Dispatcher $dispatcher)
    {
        parent::__construct($container, $dispatcher, self::VERSION);

        // Holds the container.
        $this->container = $container;

        // Holds the dispatcher.
        $this->dispatcher = $dispatcher;

        // Register the app main command.
        $command = $this->add(new Commands\Main);

        // Sets the app main command as default.
        $this->registerBaseCommands()
            ->registerBaseBindings()
            ->setDefaultCommand($command->getName());
    }

    /**
     * Register the basic commands into the app.
     *
     * @return $this
     */
    private function registerBaseCommands()
    {
        // Register the build command.
        $this->add(new Commands\Build);

        // Register the install command.
        $this->add(new Commands\Install);

        return $this;
    }

    /**
     * Register the basic bindings into the container.
     *
     * @return $this
     */
    private function registerBaseBindings()
    {
        $this->container->instance('app', $this);

        return $this;
    }
}
