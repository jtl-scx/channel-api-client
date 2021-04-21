<?php
/**
 * OrderItemTest
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
 * OrderItemTest Class Doc Comment
 *
 * @category    Class
 * @description OrderItem
 * @package     JTL\SCX\Client\Channel
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 * @covers      \JTL\SCX\Client\Channel\Model\OrderItem
 */
class OrderItemTest extends AbstractApiModelTest
{


    /**
     * @return array
     * @dataProvider
     */
    public function expectedInterface(): array
    {
        return [
            'assert property OrderItemId' => [
                'orderItemId',
                'string',
                'getOrderItemId',
                'setOrderItemId'
            ],
            'assert property Type' => [
                'type',
                'string',
                'getType',
                'setType'
            ],
            'assert property ItemStatus' => [
                'itemStatus',
                '\JTL\SCX\Client\Channel\Model\OrderItemStatus',
                'getItemStatus',
                'setItemStatus'
            ],
            'assert property ItemPaymentStatus' => [
                'itemPaymentStatus',
                '\JTL\SCX\Client\Channel\Model\OrderItemPaymentStatus',
                'getItemPaymentStatus',
                'setItemPaymentStatus'
            ],
            'assert property GrossPrice' => [
                'grossPrice',
                'string',
                'getGrossPrice',
                'setGrossPrice'
            ],
            'assert property Total' => [
                'total',
                'string',
                'getTotal',
                'setTotal'
            ],
            'assert property TaxPercent' => [
                'taxPercent',
                'string',
                'getTaxPercent',
                'setTaxPercent'
            ],
            'assert property GrossFee' => [
                'grossFee',
                'string',
                'getGrossFee',
                'setGrossFee'
            ],
            'assert property OfferId' => [
                'offerId',
                'int',
                'getOfferId',
                'setOfferId'
            ],
            'assert property ChannelOfferId' => [
                'channelOfferId',
                'string',
                'getChannelOfferId',
                'setChannelOfferId'
            ],
            'assert property Sku' => [
                'sku',
                'string',
                'getSku',
                'setSku'
            ],
            'assert property Quantity' => [
                'quantity',
                'string',
                'getQuantity',
                'setQuantity'
            ],
            'assert property Title' => [
                'title',
                'string',
                'getTitle',
                'setTitle'
            ],
            'assert property EstimatedShippingDate' => [
                'estimatedShippingDate',
                '\DateTime',
                'getEstimatedShippingDate',
                'setEstimatedShippingDate'
            ],
            'assert property EstimatedDeliveryDate' => [
                'estimatedDeliveryDate',
                '\DateTime',
                'getEstimatedDeliveryDate',
                'setEstimatedDeliveryDate'
            ],
            'assert property RemainingQuantity' => [
                'remainingQuantity',
                'string',
                'getRemainingQuantity',
                'setRemainingQuantity'
            ],
            'assert property ShippingGroup' => [
                'shippingGroup',
                'string',
                'getShippingGroup',
                'setShippingGroup'
            ],
            'assert property Note' => [
                'note',
                'string',
                'getNote',
                'setNote'
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
        $sut = new OrderItem([$property => $sample]);

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
