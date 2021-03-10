<?php

namespace App\Providers;

use App\Http\Middleware\EnsureTokenIsValue;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->singleton(EnsureTokenIsValue::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        // listen db query
        DB::listen(function($query){
            echo $query->sql. ", time: ".$query->time;
        });
    }

    
}
