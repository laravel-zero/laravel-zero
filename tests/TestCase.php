<?php

namespace Tests;

use PHPUnit\Framework\TestCase as BaseTestCase;
use Illuminate\Foundation\Testing\Concerns\InteractsWithConsole;
use Illuminate\Foundation\Testing\Concerns\InteractsWithContainer;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication,
        InteractsWithConsole,
        InteractsWithContainer;

    /**
     * Holds an application instance.
     *
     * @var \Illuminate\Contracts\Foundation\Application
     */
    protected $app;

    /**
     * Setup the test environment.
     *
     * @return void
     */
    protected function setUp()
    {
        $this->app = $this->createApplication();
    }
}
