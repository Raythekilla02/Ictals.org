<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Statamic\Facades\CP\Nav;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        Nav::extend(function ($nav) {
            $nav->content('Zoho Mail Login')
                ->url('https://www.zoho.com/mail/login.html')
                ->icon('mail');
        });
    }
}
