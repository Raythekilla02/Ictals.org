<?php

namespace LaunchEmail;

use Statamic\Utilities\Utility;

class LaunchEmailUtility extends Utility
{
    public function handle()
    {
        return view('launch-email');
    }
}
