<?php

namespace Achmadfatoni\PoslajuLaravel;

use Achmadfatoni\Poslaju\Poslaju;
use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;

class PoslajuServiceProvider extends ServiceProvider
{
    public function register()
    {
        App::bind('Poslaju', function () {
            return new Poslaju();
        });

    }

}