<?php

namespace Tests;

use NunoMaduro\ZeroFramework\Application;

trait CreatesApplication
{
    /**
     * Creates the application and returns it.
     *
     * @return \NunoMaduro\ZeroFramework\Application
     */
    public function createApplication(): Application
    {
        return new Application;
    }
}
