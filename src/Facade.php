<?php

namespace Emmalin\Test;

use Illuminate\Support\Facades\Facade as IlluminateFacade;

class Facade extends IlluminateFacade
{
    protected static function getFacadeAccessor()
    {
         return 'math'; // Container 名稱
    }
}
