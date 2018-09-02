<?php

namespace Tests;

use LaravelZero\Framework\Kernel;
use LaravelZero\Framework\Application;

trait CreatesApplication
{
    /**
     * Creates the application.
     *
     * @return \Illuminate\Contracts\Foundation\Application
     */
    public function createApplication()
    {
        $app = require __DIR__.'/../bootstrap/app.php';

        $app->make(Kernel::class)->bootstrap();

        return $app;
    }
}
