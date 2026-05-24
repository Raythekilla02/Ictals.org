<?php

namespace LaunchEmail;

use Statamic\Providers\AddonServiceProvider;
use Statamic\Facades\Utility;

class ServiceProvider extends AddonServiceProvider
{
    public function bootAddon()
    {
        Utility::register(LaunchEmailUtility::class)
            ->title('Launch Email')
            ->icon('email');
    }
}
