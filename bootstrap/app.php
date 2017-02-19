<?php

/*
|--------------------------------------------------------------------------
| Create The Application
|--------------------------------------------------------------------------
|
| The first thing we will do is create a new Laravel application instance
| which serves as the "glue" for all the components of Laravel, and is
| the IoC container for the system binding all of the various parts.
|
*/

if (! defined('BASE_PATH')) {
    define('BASE_PATH', dirname(__DIR__));
}

$container = new Illuminate\Container\Container;
$dispatcher = new Illuminate\Events\Dispatcher($container);
$app = new App\Console\Application($container, $dispatcher);

/*
|--------------------------------------------------------------------------
| Return The Application
|--------------------------------------------------------------------------
|
| This script returns the application instance. The instance is given to
| the calling script so we can separate the building of the instances
| from the actual running of the application and sending responses.
|
*/

return $app;
