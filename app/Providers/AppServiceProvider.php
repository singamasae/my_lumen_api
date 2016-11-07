<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Http\Repositories\CompanyRepositoryInterface', 'App\Http\Repositories\Impl\CompanyRepository');
        $this->app->bind('App\Http\Services\ReservationServices', 'App\Http\Services\Impl\ReservationServicesImpl');
    }
}
