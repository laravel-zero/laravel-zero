<?php

namespace Tests;

use LaravelZero\Framework\Kernel;
use LaravelZero\Framework\Application;
use Illuminate\Contracts\Foundation\Application as ApplicationContract;

trait CreatesApplication
{
    /**
     * Creates the application and returns it.
     *
     * @return \Illuminate\Contracts\Foundation\Application
     */
    public function createApplication(): ApplicationContract
    {
        $app = require __DIR__.'/../bootstrap/app.php';

        $app->make(Kernel::class)->bootstrap();

        return $app;
    }
}
