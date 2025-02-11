<?php

namespace AlgoYounes\Skeleton\Providers;

use Illuminate\Support\ServiceProvider;

class SkeletonServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->publishes([
            dirname(__DIR__, 2).'/config/skeleton.php' => config_path('skeleton.php'),
        ], 'config');
    }

    public function register(): void
    {
        $this->mergeConfigFrom(dirname(__DIR__, 2).'/config/skeleton.php', 'skeleton');
    }
}
