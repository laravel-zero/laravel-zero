<?php

namespace Tests;

use App\Console\Application;

trait CreatesApplication
{
    /**
     * Creates the application.
     *
     * @return \App\Console\Application
     */
    public function createApplication(): Application
    {
        return new Application;
    }
}
