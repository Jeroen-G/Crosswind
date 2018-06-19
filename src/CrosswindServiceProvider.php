<?php

namespace JeroenG\Crosswind;

use Illuminate\Support\ServiceProvider;

class CrosswindServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'jeroeng');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'crosswind');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {

            // Publishing the configuration file.
            $this->publishes([
                __DIR__.'/../config/crosswind.php' => config_path('crosswind.php'),
            ], 'crosswind.config');

            // Publishing the views.
            $this->publishes([
                __DIR__.'/../resources/views' => base_path('resources/views/vendor/crosswind'),
            ], 'crosswind.views');

            // Publishing assets.
            $this->publishes([
                __DIR__.'/../resources/public' => public_path('vendor/crosswind'),
            ], 'crosswind.assets');

            $this->publishes([
                __DIR__ . '/../resources/assets' => base_path('resources/assets/vendor/crosswind'),
            ], 'crosswind.assets');

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/jeroeng'),
            ], 'crosswind.views');*/

            // Registering package commands.
            // $this->commands([]);
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/crosswind.php', 'crosswind');

        // Register the service the package provides.
        $this->app->singleton('crosswind', function ($app) {
            return new Crosswind;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['crosswind'];
    }
}