<?php

namespace LaunchEmail;

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
        return view('launch-email::launch-email');
    }

    public function handle()
    {
        return $this->content();
    }
}
