<?php

namespace Codehubmvs\Abstracts\Tests;

use Codehubmvs\Abstracts\AbstractsBaseServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    protected function getEnvironmentSetUp($app): void
    {
        $app['config']->set('database.default', 'testing');
    }

    protected function getPackageProviders($app): array
    {
        return [
            AbstractsBaseServiceProvider::class,
        ];
    }
}
