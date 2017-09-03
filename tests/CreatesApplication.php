<?php

namespace Tests;

use LaravelZero\Framework\Application;

trait CreatesApplication
{
    /**
     * Creates the application and returns it.
     *
     * @return \LaravelZero\Framework\Application
     */
    public function createApplication(): Application
    {
        return new Application;
    }
}
