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
        // 部門 Facade
        $this->app->bind('DepartmentUtil',function () {
            return new \App\Facades\DepartmentUtil($this->app->make(\App\Repositorys\Codes\DepartmentCode\DepartmentCodeRepositoryInterface::class));
        });

        // 役職 Facade
        $this->app->bind('PositionUtil',function () {
            return new \App\Facades\PositionUtil($this->app->make(\App\Repositorys\Codes\PositionCode\PositionCodeRepositoryInterface::class));
        });
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
