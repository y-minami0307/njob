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
        // 所属 API Service
        $this->app->bind(
            \App\Services\AffiliationsApi\AffiliationsApiServiceInterface::class,
            function ($app) {
                return new \App\Services\AffiliationsApi\AffiliationsApiService();
            },
        );

        // ユーザ Service
        $this->app->bind(
            \App\Services\User\UserServiceInterface::class,
            function ($app) {
                return new \App\Services\User\UserService($app->make(\App\Repositorys\Masters\User\UserRepositoryInterface::class));
            },
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
