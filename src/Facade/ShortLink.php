<?php

namespace Packafa\ShortLink\Facade;

use Illuminate\Support\Facades\Facade;

class ShortLink extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'ShortLink';
    }
}
