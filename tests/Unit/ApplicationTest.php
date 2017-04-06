<?php

namespace Tests\Unit;

use App\Console\Application;
use Tests\TestCase;

class ApplicationTest extends TestCase
{
    /**
     * Tests if the application proxies correctly unknown methods
     * into the application container.
     */
    public function testProxyCall(): void
    {
        $app = $this->createApplication();

        $app->setContainer(
            $mock = $this->createMock('\Illuminate\Container\Container')
        );

        $mock->expects($this->exactly(1))
            ->method('bind')
            ->with(
                $this->stringContains('something'),
                $this->callback(function() {
                    return 'foo';
                })
            );

        $app->bind(
            'something',
            function() {
                return 'foo';
            }
        );
    }

    /**
     * Tests if the application proxies correctly is array access.
     * into the application container.
     */
    public function testProxyArrayAccess(): void
    {
        $app = $this->createApplication();

        $app['something'] = function() {
            return 'foo';
        };
        $this->assertTrue(isset($app['something']));
        $this->assertEquals('foo', $app['something']);
        unset($app['something']);
        $this->assertFalse(isset($app['something']));
    }
}
