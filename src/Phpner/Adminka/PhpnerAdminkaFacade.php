<?php

namespace Phpner\Adminka;

use Illuminate\Support\Facades\Facade;

class LaradropFacade extends Facade {

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'phpneradminka';
    }
}
