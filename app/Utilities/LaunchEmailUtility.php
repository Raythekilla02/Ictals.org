<?php

namespace App\Utilities;

use Statamic\CP\Utilities\Utility;

class LaunchEmailUtility extends Utility
{
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
}
