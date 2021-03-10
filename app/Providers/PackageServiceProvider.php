<?php

namespace App\Providers;

use App\View\Components\alert;
use App\View\Components\Forms\Input;
use App\View\Components\Badge;
use App\View\Components\MyLayoutComponent;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
// add a component: php artisan make:component 
// create a service provider
// register a service provider to config/app
class PackageServiceProvider extends ServiceProvider
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
        Blade::component('package-alert', alert::class);
        //
        Blade::component('package-input', Input::class);
        Blade::component('package-badge', Badge::class);
        Blade::component('package-layout', MyLayoutComponent::class);
        Blade::component('layout', MyLayoutComponent::class);
    }
}
