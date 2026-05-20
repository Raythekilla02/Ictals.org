<?php

return [

    'enabled' => env('CP_ENABLED', true),
    'route' => env('CP_ROUTE', 'cp'),

    'auth' => [
        'enabled' => true,
        'redirect_to' => null,
    ],

    'start_page' => 'dashboard',

    'widgets' => [
        //
    ],

    'pagination_size' => 50,
    'pagination_size_options' => [10, 25, 50, 100, 500],

    'link_to_docs' => env('STATAMIC_LINK_TO_DOCS', true),

    'support_url' => env('STATAMIC_SUPPORT_URL', 'https://statamic.com/support'),

    'custom_cms_name' => env('STATAMIC_CUSTOM_CMS_NAME', 'Statamic'),
    'custom_logo_url' => env('STATAMIC_CUSTOM_LOGO_URL', null),
    'custom_dark_logo_url' => env('STATAMIC_CUSTOM_DARK_LOGO_URL', null),
    'custom_logo_text' => env('STATAMIC_CUSTOM_LOGO_TEXT', null),
    'custom_favicon_url' => env('STATAMIC_CUSTOM_FAVICON_URL', null),
    'custom_css_url' => env('STATAMIC_CUSTOM_CSS_URL', null),

    'thumbnail_presets' => [
        // 'medium' => 800,
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Navigation Links
    |--------------------------------------------------------------------------
    */

    'nav' => [
        'Launch Email' => 'https://mail.zoho.com/zm/#mail/folder/inbox',
    ],

];
