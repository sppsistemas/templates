<?php

namespace Gabrielroman\SppTemplates;

use Illuminate\Support\ServiceProvider;

class SppTemplatesServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'spp-templates');
        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/gabiroman/spp-templates'),
            __DIR__ . '/../resources/assets' => public_path('gabiroman/spp-templates'),
        ]);
    }
}
