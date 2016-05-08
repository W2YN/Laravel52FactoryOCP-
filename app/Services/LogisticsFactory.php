<?php

namespace App\Services;

use App;
use Illuminate\Support\Collection;

class LogisticsFactory
{
    public static function bind(int $companyNo = 0)
    {
        $lut = config('app.logistics');
        $className = Collection::make($lut)->get($companyNo, BlackCat::class);

        App::bind(LogisticsInterface::class, $className);
    }
}