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
        // 所属コード Repository
        $this->app->bind(
            \App\Repositorys\Codes\AffiliationCode\AffiliationCodeRepositoryInterface::class,
            \App\Repositorys\Codes\AffiliationCode\AffiliationCodeRepository::class
        );

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

        // 所属部門 Repository
        $this->app->bind(
            \App\Repositorys\Groups\AffiliationDepartment\AffiliationDepartmentRepositoryInterface::class,
            \App\Repositorys\Groups\AffiliationDepartment\AffiliationDepartmentRepository::class
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
