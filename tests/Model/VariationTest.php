<?php
/**
 * VariationTest
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
 * VariationTest Class Doc Comment
 *
 * @category    Class
 * @description Variation
 * @package     JTL\SCX\Client\Channel
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 * @covers      \JTL\SCX\Client\Channel\Model\Variation
 */
class VariationTest extends AbstractApiModelTest
{


    /**
     * @return array
     * @dataProvider
     */
    public function expectedInterface(): array
    {
        return [
            'assert property OfferId' => [
                'offerId',
                'int',
                'getOfferId',
                'setOfferId'
            ],
            'assert property Sku' => [
                'sku',
                'string',
                'getSku',
                'setSku'
            ],
            'assert property Gtin' => [
                'gtin',
                'string',
                'getGtin',
                'setGtin'
            ],
            'assert property VariationDimensionList' => [
                'variationDimensionList',
                '\JTL\SCX\Client\Channel\Model\ChannelAttribute[]',
                'getVariationDimensionList',
                'setVariationDimensionList'
            ],
            'assert property Quantity' => [
                'quantity',
                'string',
                'getQuantity',
                'setQuantity'
            ],
            'assert property PriceList' => [
                'priceList',
                '\JTL\SCX\Client\Channel\Model\PriceContainer[]',
                'getPriceList',
                'setPriceList'
            ],
            'assert property TaxPercent' => [
                'taxPercent',
                'string',
                'getTaxPercent',
                'setTaxPercent'
            ],
            'assert property PictureList' => [
                'pictureList',
                'string[]',
                'getPictureList',
                'setPictureList'
            ],
            'assert property Title' => [
                'title',
                'string',
                'getTitle',
                'setTitle'
            ],
            'assert property SubTitle' => [
                'subTitle',
                'string',
                'getSubTitle',
                'setSubTitle'
            ],
            'assert property Description' => [
                'description',
                'string',
                'getDescription',
                'setDescription'
            ],
            'assert property ChannelAttributeList' => [
                'channelAttributeList',
                '\JTL\SCX\Client\Channel\Model\ChannelAttribute[]',
                'getChannelAttributeList',
                'setChannelAttributeList'
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
        $sut = new Variation([$property => $sample]);

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
