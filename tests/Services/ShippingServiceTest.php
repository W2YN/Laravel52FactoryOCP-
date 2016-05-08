<?php

use App\Services\ShippingService;

class ShippingServiceTest extends TestCase
{
    /** @test */
    public function 黑貓單元測試()
    {
        /** arrange */
        $companyNo = 0;
        $weight = 1;
        $expected = 110;

        /** act */
        $target = App::make(ShippingService::class);
        $actual = $target->calculateFee($companyNo, $weight);

        /** assert */
        $this->assertEquals($expected, $actual);
    }
}
