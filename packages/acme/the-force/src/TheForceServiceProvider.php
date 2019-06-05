<?php

namespace Acme\TheForce;

use Illuminate\Support\ServiceProvider;

class TheForceServiceProvider extends ServiceProvider
{

     protected $commands = [
        'Acme\TheForce\Commands\DisplayUsers',
    ];


    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

         // register our controller
        $this->app->make('Acme\TheForce\TheForceController');
        $this->loadViewsFrom(__DIR__.'/views', 'the-force');
        $this->commands($this->commands);
        $this->app->bind('the-force-message', function() {

            return new Message();
         });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'\routes.php';
    }
}
