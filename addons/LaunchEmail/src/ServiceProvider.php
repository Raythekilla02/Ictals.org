<?php

namespace LaunchEmail;

use Statamic\Providers\AddonServiceProvider;
use Statamic\Facades\Utility;

class ServiceProvider extends AddonServiceProvider
{
    protected $nav = [
        \LaunchEmail\CpNav::class,
    ];

    public function bootAddon()
    {
        Utility::register(LaunchEmailUtility::class)
            ->title('Launch Email')
            ->icon('email');
    }
}
