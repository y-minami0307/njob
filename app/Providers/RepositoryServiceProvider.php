<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // 部門コード Repository
        $this->app->bind(
            \App\Repositorys\Codes\DepartmentCode\DepartmentCodeRepositoryInterface::class,
            \App\Repositorys\Codes\DepartmentCode\DepartmentCodeRepository::class
        );

        // グループコード Repository
        $this->app->bind(
            \App\Repositorys\Codes\GroupCode\GroupCodeRepositoryInterface::class,
            \App\Repositorys\Codes\GroupCode\GroupCodeRepository::class
        );

        // 役職コード Repository
        $this->app->bind(
            \App\Repositorys\Codes\PositionCode\PositionCodeRepositoryInterface::class,
            \App\Repositorys\Codes\PositionCode\PositionCodeRepository::class
        );

        // ユーザ Repository
        $this->app->bind(
            \App\Repositorys\Masters\User\UserRepositoryInterface::class,
            \App\Repositorys\Masters\User\UserRepository::class
        );
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
