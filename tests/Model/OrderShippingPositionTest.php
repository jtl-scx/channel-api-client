<?php
/**
 * OrderShippingPositionTest
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  JTL\SCX\Client\Channel
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * SCX Channel API
 *
 * SCX Channel API
 *
 * The version of the OpenAPI document: 1.0.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.1.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Please update the test case below to test the model.
 */

namespace JTL\SCX\Client\Channel\Model;

use JTL\SCX\Client\Channel\AbstractApiModelTest;

/**
 * OrderShippingPositionTest Class Doc Comment
 *
 * @category    Class
 * @description OrderShippingPosition
 * @package     JTL\SCX\Client\Channel
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 * @covers      \JTL\SCX\Client\Channel\Model\OrderShippingPosition
 */
class OrderShippingPositionTest extends AbstractApiModelTest
{


    /**
     * @return array
     * @dataProvider
     */
    public function expectedInterface(): array
    {
        return [
            'assert property Carrier' => [
                'carrier',
                'string',
                'getCarrier',
                'setCarrier'
            ],
            'assert property TrackingNumber' => [
                'trackingNumber',
                'string',
                'getTrackingNumber',
                'setTrackingNumber'
            ],
            'assert property ReturnTracking' => [
                'returnTracking',
                '\JTL\SCX\Client\Channel\Model\OrderShippingReturnTracking',
                'getReturnTracking',
                'setReturnTracking'
            ],
            'assert property ShippedAt' => [
                'shippedAt',
                '\DateTime',
                'getShippedAt',
                'setShippedAt'
            ],
            'assert property OrderItemIdList' => [
                'orderItemIdList',
                '\JTL\SCX\Client\Channel\Model\OrderShippingPositionItem[]',
                'getOrderItemIdList',
                'setOrderItemIdList'
            ],
            'assert property ShippedFrom' => [
                'shippedFrom',
                '\JTL\SCX\Client\Channel\Model\OrderShippingShippedFrom',
                'getShippedFrom',
                'setShippedFrom'
            ],
        ];
    }

    /**
     * @test
     * @dataProvider expectedInterface
     */
    public function it_has_expected_interface(string $property, string $type, string $expectedGetter, string $expectedSetter): void
    {
        $sample = $this->buildSampleForDataType($type);
        $sut = new OrderShippingPosition([$property => $sample]);

        $this->assertMethodExists($sut, $expectedGetter);
        $this->assertSame($sample, $sut->$expectedGetter());

        $this->assertArrayHasKey($property, $sut);
        $this->assertSame($sample, $sut[$property]);

        $newSample = $this->buildSampleForDataType($type);
        $this->assertMethodExists($sut, $expectedSetter);
        $sut->$expectedSetter($newSample);
        $this->assertSame($newSample, $sut[$property]);
    }

}
