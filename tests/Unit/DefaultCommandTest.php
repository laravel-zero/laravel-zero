<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\DefaultCommand;

class DefaultCommandTest extends TestCase
{
    /**
     * The default command test example.
     *
     * @return void
     */
    public function testCall(): void
    {
        $this->app->call((new DefaultCommand())->getName());

        $this->assertTrue(trim($this->app->output()) === 'Love beautiful code? We do too.');
    }
}
