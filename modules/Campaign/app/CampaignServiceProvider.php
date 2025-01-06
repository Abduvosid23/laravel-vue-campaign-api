<?php
namespace Modules\Campaign;

use Illuminate\Support\ServiceProvider;

class CampaignServiceProvider extends ServiceProvider
{
    public function boot():void
    {
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        $this->app->register(RouteServiceProvider::class);
    }
}

