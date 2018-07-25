<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if (config('app.env') === 'production' || config('app.env') === 'staging') {
            \URL::forceScheme('https');
        }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        /*
        |--------------------------------------------------------------------------
        | Model
        |--------------------------------------------------------------------------
        */
        $this->app->bind('linkModel', function(){
            return app('App\ORM\Link');
        });

        $this->app->bind('tagModel', function(){
            return app('App\ORM\Tag');
        });

        $this->app->bind('accessModel', function(){
            return app('App\ORM\Access');
        });

    }
}
