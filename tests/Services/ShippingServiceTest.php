<?php

use App\Services\BlackCat;
use App\Services\LogisticsInterface;
use App\Services\ShippingService;

class ShippingServiceTest extends TestCase
{
    /** @test */
    public function 黑貓整合測試()
    {
        /** arrange */
        $companyName = 'BlackCat';
        $expected = 110;
        $weight = 1;

        /** act */
        $target = App::make(ShippingService::class);
        $actual = $target->calculateFee($companyName, $weight);

        /** assert */
        $this->assertEquals($expected, $actual);
    }
}
