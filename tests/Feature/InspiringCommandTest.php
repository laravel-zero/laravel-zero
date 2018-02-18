<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Support\Facades\Artisan;

class InspiringCommandTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function testInspiringCommand(): void
    {
        Artisan::call('inspiring');

        $this->assertContains('Leonardo da Vinci', Artisan::output());
    }
}
