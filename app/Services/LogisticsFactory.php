<?php

namespace App\Services;

use Illuminate\Support\Collection;

class LogisticsFactory
{
    public static function create(int $companyNo = 0) : LogisticsInterface
    {
        $lut = config('app.logistics');
        $className = Collection::make($lut)->get($companyNo, BlackCat::class);

        return new $className;
    }
}