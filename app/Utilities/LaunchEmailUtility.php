<?php

namespace App\Utilities;

use Statamic\CP\Utilities\Utility;

class LaunchEmailUtility extends Utility
{
    protected static $slug = 'launch-email';

    public function title()
    {
        return 'Launch Email';
    }

    public function icon()
    {
        return 'mail';
    }

    public function content()
    {
        return view('utilities.launch-email');
    }

    public function handle()
    {
        return $this->content();
    }
}
