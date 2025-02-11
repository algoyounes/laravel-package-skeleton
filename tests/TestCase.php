<?php

namespace AlgoYounes\Skeleton\Tests;

use AlgoYounes\Skeleton\Providers\SkeletonServiceProvider;
use Orchestra\Testbench\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    protected function getPackageProviders($app): array
    {
        return [
            SkeletonServiceProvider::class,
        ];
    }
}
