<?php

namespace App\Services;

class ShippingService
{
    /**
     * @param int $companyNo
     * @param int $weight
     * @return int
     */
    public function calculateFee(int $companyNo, int $weight) : int
    {
        $logistics = LogisticsFactory::create($companyNo);
        return $logistics->calculateFee($weight);
    }
}