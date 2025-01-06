<?php

namespace Modules\User;
use Illuminate\Support\ServiceProvider;

class UserServiceProvider extends ServiceProvider
{
    public function boot():void
    {
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
//        $this->mergeConfigFrom(__DIR__.'/config.php', 'user');
        $this->app->register(RouteServiceProvider::class);
    }
}
