<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Support\Facades\Artisan;

class InspiringCommandTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testInspiringCommand()
    {
	    $this->artisan('inspiring')
	         ->expectsOutput('Simplicity is the ultimate sophistication.')
	         ->assertExitCode(0);
    }
}
