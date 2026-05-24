<?php

use Statamic\Facades\Utility;
use LaunchEmail\LaunchEmailUtility;

return [
    'name' => 'Launch Email Utility',
    'slug' => 'launch-email',
    'description' => 'Utility to open Zoho Mail',
    'version' => '1.0.0',
    'namespace' => 'LaunchEmail',
    'provider' => \LaunchEmail\ServiceProvider::class,
];

// Register the utility
Utility::register(LaunchEmailUtility::class);
