<?php

namespace Modules\Campaign;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as BaseRouteServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends BaseRouteServiceProvider
{
    public function boot(): void
    {
        $this->routes(function () {

            // Load web routes
            Route::middleware('web')
                ->group(__DIR__ . '/../routes/web.php');

            // Load API routes
            Route::middleware('api')
                ->group(__DIR__ . '/../routes/api.php');
        });
    }
}
