<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Monolog\Handler\ChromePHPHandler;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //

        if ($this->app->environment('local')) {
            $this->app->configureMonologUsing(function($monolog) {
                $monolog->pushHandler(new ChromePHPHandler());
            });
        }
    }
}
