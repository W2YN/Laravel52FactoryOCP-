<?php

namespace App\Services;

class LogisticsFactory
{
    public static function create(int $companyNo = 0) : LogisticsInterface
    {
        switch ($companyNo) {
            case 0:
                return new BlackCat();
            case 1:
                return new Hsinchu();
            case 2:
                return new PostOffice();
            default:
                return new BlackCat();
        }
    }
}