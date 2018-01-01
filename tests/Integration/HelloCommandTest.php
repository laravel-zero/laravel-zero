<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Commands\HelloCommand;

class HelloCommandTest extends TestCase
{
    /** @test */
    public function it_checks_the_hello_command_output(): void
    {
        $this->app->call((new HelloCommand())->getName());

        $this->assertContains('Love beautiful code? We do too.', $this->app->output());
    }
}
