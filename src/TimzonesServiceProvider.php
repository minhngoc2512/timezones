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
        $this->publishes([
            __DIR__ . '/migrations' => $this->app->databasePath() . '/migrations'
        ], 'migrations');

        $this->publishes([

            __DIR__ . '/views' => base_path('resources/views/timezones')], 'views');
        if (!$this->app->routesAreCached()) {
            require __DIR__ . '/routes.php';
        }

        //

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        include __DIR__ . '/routes.php';
        $this->app->make('Minh\Timezones\TimezonesController');
        //
    }
}
