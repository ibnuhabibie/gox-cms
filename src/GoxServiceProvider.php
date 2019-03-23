<?php

namespace Mungil\Gox;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class GoxServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Route::group($this->routeConfiguration(), function () {
            $this->loadRoutesFrom(__DIR__.'/Http/routes.php');
        });

        $this->publishes([
            __DIR__.'/../public' => public_path('vendor/gox'),
        ], 'gox-assets');

        $this->loadViewsFrom(
            __DIR__.'/../resources/views', 'gox'
        );
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/gox.php', 'gox');
    }

    private function routeConfiguration()
    {
        return [
            'namespace' => 'Mungil\Gox\Http\Controllers',
            'prefix' => config('gox.path')
        ];
    }

}