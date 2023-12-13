<?php

namespace Gabrielroman\SppTemplates;

use Illuminate\Support\ServiceProvider;

class SppTemplatesServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'spp-templates');
        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/spp-templates'),
            __DIR__ . '/../resources/assets' => public_path('vendor/spp-templates'),
        ]);
    }
}
