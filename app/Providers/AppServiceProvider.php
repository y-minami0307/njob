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
        // 部門 API Service
        $this->app->bind(
            \App\Services\DepartmentApi\DepartmentApiServiceInterface::class,
            function ($app) {
                return new \App\Services\DepartmentApi\DepartmentApiService($app->make(\App\Repositorys\Codes\GroupCode\GroupCodeRepositoryInterface::class));
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
