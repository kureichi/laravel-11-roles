<?php

namespace App\Providers;
use Illuminate\Support\ServiceProvider;
use Gate;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Gate::before(function ($user, $abillity): bool {
            return $user->hasRole('Super Admin') ? true : null;
        });
    }
}
