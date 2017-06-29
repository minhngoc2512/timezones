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
        $this->loadViewsFrom(__DIR__.'/views','timezones');
        $this->publishes([
            __DIR__.'/views' => base_path('resources/views/timezones'),
            __DIR__.'/TimezonesController.php' => base_path('app/Http/Controllers'),

        ]);
        file_put_contents(
            base_path('routes/web.php'),
            file_get_contents(__DIR__.'/routes.php'),
            FILE_APPEND
        );
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        include __DIR__.'/routes.php';
        $this->app->make('Minh\Timezones\TimezonesController');
        //
    }
}
