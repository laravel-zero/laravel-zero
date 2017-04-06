<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Console\Commands\Main;

class MainCommandTest extends TestCase
{
    /**
     * The main command test example.
     *
     * @return void
     */
    public function testCall(): void
    {
        $this->app->call((new Main)->getName());

        $this->assertTrue(trim($this->app->output()) === 'Love beautiful code? We do too.');
    }
}
