<?php

namespace Gabiroman\SppTemplates;

use Illuminate\Support\ServiceProvider;

class SppTemplatesServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'spp-templates');

        $this->publishes([
            __DIR__ . '/../resources/views/components' => resource_path('views/components'),
            __DIR__ . '/../src/View/Components' => app_path('View/Components'),
        ]);
    }
}
