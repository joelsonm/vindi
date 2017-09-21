<?php

namespace Joelsonm\Vindi\Providers;

use Illuminate\Support\ServiceProvider;
use Joelsonm\Vindi\Vindi;

class VindiServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
           __DIR__.'/../config/vindi.php' => config_path('vindi.php'),
       ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('Joelsonm\Vindi', function ($app) {
            return new Vindi(config()->get('vindi.apikey'));
        });
    }
}
