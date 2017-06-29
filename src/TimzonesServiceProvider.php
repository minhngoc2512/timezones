<?php

namespace Minh\Timezones;

use Illuminate\Support\ServiceProvider;

class TimzonesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
         $this->loadViewsFrom(__DIR__ . '/views', 'timezones');
        $this->loadRoutesFrom(__DIR__.'/routes.php');
        $this->publishes([

            __DIR__ . '/views' => base_path('resources/views/timezones')], 'views');
        //

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
