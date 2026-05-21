<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Statamic\Facades\Utility;
use App\Utilities\LaunchEmailUtility;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        Utility::extend(function ($utilities) {
            $utilities->register(LaunchEmailUtility::class);
        });
    }
}
