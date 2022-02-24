<?php

namespace App\Providers;

use Illuminate\Routing\UrlGenerator;
use Illuminate\Support\ServiceProvider;

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
        // if (env('APP_ENV') === 'production') {
        //     $this->app['request']->server->set('HTTPS', true);
        // }
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot( UrlGenerator $url ){
        // if ( env('APP_ENV') == 'production' ){
        //     $url->forceSchema('https'); //5.3
        //     $url->forceScheme('https'); //5.4
        // }
    }
}
