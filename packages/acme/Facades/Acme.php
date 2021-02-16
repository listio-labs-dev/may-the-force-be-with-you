<?php

namespace Packages\Acme\Facades;

use Illuminate\Support\Facades\Facade;


class Acme extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'acme';
    }
}