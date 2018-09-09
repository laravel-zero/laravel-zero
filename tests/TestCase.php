<?php

namespace Tests;

use Illuminate\Support\Facades\Facade;
use LaravelZero\Framework\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;
}
