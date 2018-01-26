<?php

namespace Tests\Feature;

use Tests\TestCase;

class InspiringCommandTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function testInspiringCommand(): void
    {
        $this->app->call('inspiring');

        $this->assertContains('Simplicity is the ultimate sophistication. - Leonardo da Vinci', $this->app->output());
    }
}
