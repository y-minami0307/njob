<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class FacadeServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // 所属部門 Facade
        $this->app->bind('AffiliationDepartmentUtil',function () {
            return new \App\Facades\AffiliationDepartmentUtil($this->app->make(\App\Repositorys\Groups\AffiliationDepartment\AffiliationDepartmentRepositoryInterface::class));
        });

        // 所属 Facade
        $this->app->bind('AffiliationUtil',function () {
            return new \App\Facades\AffiliationUtil($this->app->make(\App\Repositorys\Codes\AffiliationCode\AffiliationCodeRepositoryInterface::class));
        });
        
        // 共通処理 Facade
        $this->app->bind('AppUtil', \App\Facades\AppUtil::class);

        // 部門 Facade
        $this->app->bind('DepartmentUtil',function () {
            return new \App\Facades\DepartmentUtil($this->app->make(\App\Repositorys\Codes\DepartmentCode\DepartmentCodeRepositoryInterface::class));
        });

        // グループ Facade
        $this->app->bind('GroupUtil',function () {
            return new \App\Facades\GroupUtil($this->app->make(\App\Repositorys\Codes\GroupCode\GroupCodeRepositoryInterface::class));
        });

        // 役職 Facade
        $this->app->bind('PositionUtil',function () {
            return new \App\Facades\PositionUtil($this->app->make(\App\Repositorys\Codes\PositionCode\PositionCodeRepositoryInterface::class));
        });

        // ユーザ Facade
        $this->app->bind('UserUtil', \App\Facades\UserUtil::class);
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
