<?php

namespace Designbycode\Kite\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Designbycode\Kite\Kite
 */
class Kite extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Designbycode\Kite\Kite::class;
    }
}
