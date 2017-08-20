<?php

namespace Achmadfatoni\PoslajuLaravel;

use Illuminate\Support\Facades\Facade;

class Poslaju extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Poslaju';
    }

}