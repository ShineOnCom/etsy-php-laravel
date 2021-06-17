<?php

namespace Gentor\Etsy\Providers;

use Gentor\Etsy\EtsyService;
use Illuminate\Support\ServiceProvider;

/**
 * Class EtsyServiceProvider
 * @package Gentor\Etsy\Providers
 */
class EtsyServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../../config/etsy.php' => config_path('etsy.php'),
            ], 'config');
        }
    }
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('etsy', function ($app) {
            return new EtsyService($app['session'], $app['config']['etsy']);
        });

        $this->mergeConfigFrom(__DIR__.'/../../config/etsy.php', 'etsy');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['etsy'];
    }

}
