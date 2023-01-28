<?php

namespace Gsferro\FaStackPing\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class FaStackPingServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../public' => public_path('vendor/fa-stack-ping'),
        ], 'public');

        $this->publishes([
            __DIR__.'/../resources/views/components' => resource_path('views/components/fa-stack-ping'),
        ], 'views');

        Blade::component('components.fa-stack-ping.fa-stack-ping',  'fa-stack-ping');
        Blade::component('components.fa-stack-ping.fa-stack-on',    'fa-stack-on');
        Blade::component('components.fa-stack-ping.fa-stack-off',   'fa-stack-off');
        Blade::directive("FaStackPingCss", function(){
            return " <link href=". asset('vendor/fa-stack-ping/fa-stack-ping.css'). " rel='stylesheet' type='text/css'/> ";
        });
    }
}
