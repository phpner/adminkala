<?php

namespace Phpner\Adminka;

use Illuminate\Support\ServiceProvider;

class PhpnerAdminkaProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom( __DIR__ ."/Http/Routes.php");
        $this->loadViewsFrom(__DIR__.'/Resources/', 'phpner');
        $this->loadMigrationsFrom(__DIR__.'/migrations/');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
