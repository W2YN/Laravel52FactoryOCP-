<?php

namespace App\Services;

use Illuminate\Support\Collection;

class LogisticsFactory
{
    public static function create(int $companyNo = 0) : LogisticsInterface
    {
        $lut = [
            0 => BlackCat::class,
            1 => Hsinchu::class,
            2 => PostOffice::class
        ];
        $className = Collection::make($lut)->get($companyNo, BlackCat::class);

        return new $className;
    }
}