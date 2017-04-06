<?php

namespace App\Console;

use \BadMethodCallException;
use Illuminate\Config\Repository;
use Illuminate\Container\Container;
use Illuminate\Events\EventServiceProvider;
use Illuminate\Console\Application as BaseApplication;
use Illuminate\Contracts\Events\Dispatcher as DispatcherContract;
use Illuminate\Contracts\Container\Container as ContainerContract;

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
     * All of the registered service providers.
     *
     * @var array
     */
    private $serviceProviders = [
        EventServiceProvider::class,
    ];

    /**
     * ALl the container aliases.
     *
     * @var array
     */
    private $aliases = [
        'app' => [\Illuminate\Contracts\Container\Container::class],
        'events' => [\Illuminate\Events\Dispatcher::class, \Illuminate\Contracts\Events\Dispatcher::class],
        'config' => [\Illuminate\Config\Repository::class, \Illuminate\Contracts\Config\Repository::class],
    ];

    /**
     * Create a new application.
     *
     * @param  \Illuminate\Contracts\Container\Container $container
     * @param  \Illuminate\Contracts\Events\Dispatcher   $dispatcher
     */
    public function __construct(ContainerContract $container, DispatcherContract $dispatcher)
    {
        parent::__construct($container, $dispatcher, self::VERSION);

        $this->container = $container;

        $this->dispatcher = $dispatcher;

        $this->registerBaseCommands()
            ->registerBaseBindings()
            ->registerServiceProviders()
            ->registerContainerAliases();
    }

    /**
     * Register the basic commands into the app.
     *
     * @return $this
     */
    private function registerBaseCommands(): Application
    {
        $command = $this->add(new Commands\Main);

        $this->setDefaultCommand($command);

        $this->add(new Commands\Build);

        $this->add(new Commands\Install);

        return $this;
    }

    /**
     * Register the basic bindings into the container.
     *
     * @return $this
     */
    private function registerBaseBindings(): Application
    {
        Container::setInstance($this->container);

        $this->container->instance('app', $this);

        $this->container->instance(Container::class, $this->container);

        $this->container->instance('config', new Repository(
            require BASE_PATH . '/' . 'config/config.php'
        ));

        return $this;
    }

    /**
     * Register the services into the container.
     *
     * @return $this
     */
    private function registerServiceProviders(): Application
    {
        array_walk($this->serviceProviders, function($serviceProvider) {
            $instance = (new $serviceProvider($this))->register();

            if (method_exists($instance, 'boot')) {
                $instance->boot();
            }
        });

        return $this;
    }

    /**
     * Register the class aliases in the container.
     *
     * @return $this
     */
    private function registerContainerAliases(): Application
    {
        foreach ($this->aliases as $key => $aliases) {
            foreach ($aliases as $alias) {
                $this->container->alias($key, $alias);
            }
        }

        return $this;
    }

    /**
     * Proxies calls into the container.
     *
     * @param  string $method
     * @param  array  $parameters
     *
     * @return mixed
     *
     * @throws \BadMethodCallException
     */
    public function __call(string $method, array $parameters)
    {
        if (is_callable([$this->container, $method])) {
            return call_user_func_array([$this->container, $method], $parameters);
        }

        throw new BadMethodCallException("Method [{$method}] does not exist.");
    }
}
