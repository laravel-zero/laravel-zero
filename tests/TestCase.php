<?php

namespace Tests;

use PHPUnit\Framework\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

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
