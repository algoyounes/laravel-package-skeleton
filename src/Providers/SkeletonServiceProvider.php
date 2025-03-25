<?php

namespace AlgoYounes\Skeleton\Providers;

use Illuminate\Support\ServiceProvider;

class SkeletonServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->publishConfig();
    }

    public function register(): void
    {
        $this->registerConfig();
    }

    // Boot methods :
    private function publishConfig(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                dirname(__DIR__, 2).'/config/skeleton.php' => config_path('skeleton.php'),
            ], 'config');
        }
    }

    // Register methods :
    private function registerConfig(): void
    {
        $this->mergeConfigFrom(dirname(__DIR__, 2).'/config/skeleton.php', 'skeleton');
    }
}
