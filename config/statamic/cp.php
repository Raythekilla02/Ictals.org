<?php

return [

    'enabled' => env('CP_ENABLED', true),

    'route' => env('CP_ROUTE', 'cp'),

    'start_page' => 'dashboard',

    'stylesheets' => [
        // public_path('css/cp.css'),
    ],

    'scripts' => [
        //
    ],

    'nav' => [
        'Launch Email' => 'https://mail.zoho.com/zm/#mail/folder/inbox',
    ],

];
