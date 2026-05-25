<?php

namespace LaunchEmail;

use Statamic\Facades\CP\Nav;

class CpNav
{
    public function extend(Nav $nav)
    {
        $nav->add([
            'name' => 'Zoho Mail',
            'url' => 'https://mail.zoho.com/zm/#mail/folder/inbox',
            'icon' => 'email',
        ]);
    }
}
