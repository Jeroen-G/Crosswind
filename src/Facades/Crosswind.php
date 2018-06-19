<?php

namespace JeroenG\Crosswind\Facades;

use Illuminate\Support\Facades\Facade;

class Crosswind extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'crosswind';
    }
}
