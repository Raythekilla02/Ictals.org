<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Statamic\CP\Utilities\Utility;
use App\Utilities\LaunchEmailUtility;

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
        Utility::register(LaunchEmailUtility::class);
    }
}
