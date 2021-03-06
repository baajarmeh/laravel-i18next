<?php
namespace ProcessMaker\i18next;

use Illuminate\Support\ServiceProvider as Provider;

class ServiceProvider extends Provider
{
    public function boot()
    {
        // Load our routes
        $this->loadRoutesFrom(__DIR__.'/routes.php');

        // Load our views
        $this->loadViewsFrom(__DIR__.'/../views', 'i18next');

        // Load our translations
        $this->loadTranslationsFrom(__DIR__.'/../lang', 'i18next');

        $this->publishes([
            __DIR__.'/Config/i18next.php' => base_path('config/i18next.php'),
        ], 'i18next');
    }
}