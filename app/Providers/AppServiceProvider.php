<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
// esssa
use Illuminate\Support\Facades\Schema;


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
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //essa
        Schema::defaultStringLength(191);
    }
}
