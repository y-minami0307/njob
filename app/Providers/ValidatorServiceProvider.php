<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

class ValidatorServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Validator::extend('alpha_numeric', 'App\Rules\AlphaNumeric@passes');
        Validator::extend('half_width_character', 'App\Rules\HalfWidthCharacter@passes');
        Validator::extend('numeric_only', 'App\Rules\NumericOnly@passes');
    }
}