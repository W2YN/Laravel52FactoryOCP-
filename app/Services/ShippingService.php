<?php

namespace App\Services;

class ShippingService
{
    /**
     * @param $companyName
     * @param $weight
     * @return int
     */
    public function calculateFee($companyName, $weight)
    {
        $logistics = LogisticsFactory::create($companyName);
        return $logistics->calculateFee($weight);
    }
}