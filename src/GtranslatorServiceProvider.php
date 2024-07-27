<?php

namespace Rikimukhraa\Gtranslator;

use Illuminate\Support\ServiceProvider;

class GtranslatorServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/resources/views', 'gtranslator');
        $this->publishes([
            __DIR__.'/resources/js' => public_path('vendor/gtranslator/js'),
            __DIR__.'/resources/css' => public_path('vendor/gtranslator/css'),
        ], 'public');
    }

    public function register()
    {
        // Register package services here
    }
}
