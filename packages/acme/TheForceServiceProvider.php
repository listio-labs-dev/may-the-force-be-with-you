<?php

namespace Packages\Acme;

use Illuminate\Support\ServiceProvider;

class TheForceServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes.php');
        $this->loadViewsFrom(__DIR__.'/views', 'acme');
        
    }

    /**
     * Register any services.
     *
     * @return void
     */
    public function register()
    {
        
        $this->app->singleton('acme', function () {
            return new Acme('\packages\acme\acme');
        });        
        
    }
}
