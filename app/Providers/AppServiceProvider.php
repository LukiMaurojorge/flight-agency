<?php

namespace App\Providers;

use Domain\Airline\Actions\CreateAirlineAction;
use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Foundation\Application;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
