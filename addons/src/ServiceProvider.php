<?php

namespace LaunchEmail;

use Statamic\Providers\AddonServiceProvider;

class ServiceProvider extends AddonServiceProvider
{
    protected $utilities = [
        LaunchEmailUtility::class,
    ];

    protected $viewNamespace = 'launch-email';
}
