<?php

namespace Tests\Integration;

use Tests\TestCase;

class InspiringCommandTest extends TestCase
{
    /** @test */
    public function it_checks_the_inspire_sentence(): void
    {
        $this->app->call('inspiring');

        $this->assertContains('Simplicity is the ultimate sophistication. - Leonardo da Vinci', $this->app->output());
    }
}
