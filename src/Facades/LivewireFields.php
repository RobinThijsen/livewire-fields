<?php

namespace RobinThijsen\LivewireFields\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \VendorName\Skeleton\LivewireFields
 */
class LivewireFields extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \VendorName\Skeleton\LivewireFields::class;
    }
}
