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
        $this->app->bind(CreateAirlineAction::class, function () {
            return new CreateAirlineAction();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
