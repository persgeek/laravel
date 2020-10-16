<?php

namespace App\Providers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;

class RouteProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(App::basePath('routes.php'));
    }
}
