<?php

namespace Deployman;

use Illuminate\Support\ServiceProvider;

class DeploymanServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $configPath = __DIR__ . '/../config/deployman.php';
        if (function_exists('config_path'))
        {
            $publishPath = config_path('deployman.php');
        }
        else {
            $publishPath = base_path('config/deployman.php');
        }
        $this->publishes([$configPath => $publishPath], 'config');
    }

    public function register()
    {
        $configPath = __DIR__ . '/../config/deployman.php';
        $this->mergeConfigFrom($configPath, 'deployman');
    }
}