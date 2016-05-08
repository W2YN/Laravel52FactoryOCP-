<?php

namespace App\Services;

class LogisticsFactory
{
    public static function create(int $companyNo = 0) : LogisticsInterface
    {
        if ($companyNo == 0) {
            return new BlackCat();
        } elseif ($companyNo == 1) {
            return new Hsinchu();
        } elseif ($companyNo == 2) {
            return new PostOffice();
        } else {
            return new BlackCat();
        }
    }
}