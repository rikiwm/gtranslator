<?php

namespace Rikimukhraa\Gtranslator;

use Illuminate\Support\ServiceProvider;

class GtranslatorServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Memuat view dari package
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'gtranslator');

        // Mempublikasikan assets
        $this->publishes([
            __DIR__.'/../resources/js' => public_path('vendor/gtranslator/js'),
        ], 'public');
    }

    public function register()
    {
        // Register package services here
    }
}
