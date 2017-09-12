<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Commands\HelloCommand;

class HelloCommandTest extends TestCase
{
    /**
     * The hello command test example.
     *
     * @return void
     */
    public function testCall(): void
    {
        $this->app->call((new HelloCommand())->getName());

        $this->assertTrue(strpos($this->app->output(), 'Love beautiful code? We do too.') !== false);
    }
}
