<?php
/**
 * Description of TestCase.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Yehor Herasymchuk <yehor@dotsplatform.com>
 */

namespace Tests;

use Dots\Glovo\Partner\GlovoPartnerServiceProvider;
use Illuminate\Support\Str;
use Orchestra\Testbench\TestCase as LaravelTestCase;

abstract class TestCase extends LaravelTestCase
{
    protected function getPackageProviders($app): array
    {
        return [
            GlovoPartnerServiceProvider::class,
        ];
    }

    protected function uuid(): string
    {
        return Str::uuid()->__toString();
    }
}
