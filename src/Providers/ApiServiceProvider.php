<?php

namespace WraptApiSdk\Providers;

use Illuminate\Support\ServiceProvider;
use WraptApiSdk\Services\Api;

class ApiServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(Api::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}