<?php

namespace LaunchEmail;

use Statamic\Providers\AddonServiceProvider;

class ServiceProvider extends AddonServiceProvider
{
    protected $nav = [
        \LaunchEmail\CpNav::class,
    ];
}
