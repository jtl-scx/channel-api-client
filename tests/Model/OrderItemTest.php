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

use PHPUnit\Framework\TestCase;

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
class OrderItemTest extends TestCase
{



    /**
     * Test attribute "orderItemId"
     * @test
     */
    public function it_has_a_OrderItemId(): void
    {
        $sample = $this->buildSampleForDataType('string');
        $sut = new OrderItem(['orderItemId' => $sample]);

        $this->assertMethodExists($sut, 'getOrderItemId');
        $this->assertSame($sample, $sut->getOrderItemId());

        $this->assertArrayHasKey('orderItemId', $sut);
        $this->assertSame($sample, $sut['orderItemId']);

    }

    /**
     * Test attribute "orderItemId"
     * @test
     */
    public function it_has_a_setter_for_OrderItemId(): void
    {
        $sample = $this->buildSampleForDataType('string');
        $sut = new OrderItem();

        $this->assertMethodExists($sut, 'setOrderItemId');
        $sut->setOrderItemId($sample);
        $this->assertSame($sample, $sut['orderItemId']);
    }


    /**
     * Test attribute "type"
     * @test
     */
    public function it_has_a_Type(): void
    {
        $sample = $this->buildSampleForDataType('string');
        $sut = new OrderItem(['type' => $sample]);

        $this->assertMethodExists($sut, 'getType');
        $this->assertSame($sample, $sut->getType());

        $this->assertArrayHasKey('type', $sut);
        $this->assertSame($sample, $sut['type']);

    }

    /**
     * Test attribute "type"
     * @test
     */
    public function it_has_a_setter_for_Type(): void
    {
        $sample = $this->buildSampleForDataType('string');
        $sut = new OrderItem();

        $this->assertMethodExists($sut, 'setType');
        $sut->setType($sample);
        $this->assertSame($sample, $sut['type']);
    }


    /**
     * Test attribute "itemStatus"
     * @test
     */
    public function it_has_a_ItemStatus(): void
    {
        $sample = $this->buildSampleForDataType('\JTL\SCX\Client\Channel\Model\OrderItemStatus');
        $sut = new OrderItem(['itemStatus' => $sample]);

        $this->assertMethodExists($sut, 'getItemStatus');
        $this->assertSame($sample, $sut->getItemStatus());

        $this->assertArrayHasKey('itemStatus', $sut);
        $this->assertSame($sample, $sut['itemStatus']);

    }

    /**
     * Test attribute "itemStatus"
     * @test
     */
    public function it_has_a_setter_for_ItemStatus(): void
    {
        $sample = $this->buildSampleForDataType('\JTL\SCX\Client\Channel\Model\OrderItemStatus');
        $sut = new OrderItem();

        $this->assertMethodExists($sut, 'setItemStatus');
        $sut->setItemStatus($sample);
        $this->assertSame($sample, $sut['itemStatus']);
    }


    /**
     * Test attribute "itemPaymentStatus"
     * @test
     */
    public function it_has_a_ItemPaymentStatus(): void
    {
        $sample = $this->buildSampleForDataType('\JTL\SCX\Client\Channel\Model\OrderItemPaymentStatus');
        $sut = new OrderItem(['itemPaymentStatus' => $sample]);

        $this->assertMethodExists($sut, 'getItemPaymentStatus');
        $this->assertSame($sample, $sut->getItemPaymentStatus());

        $this->assertArrayHasKey('itemPaymentStatus', $sut);
        $this->assertSame($sample, $sut['itemPaymentStatus']);

    }

    /**
     * Test attribute "itemPaymentStatus"
     * @test
     */
    public function it_has_a_setter_for_ItemPaymentStatus(): void
    {
        $sample = $this->buildSampleForDataType('\JTL\SCX\Client\Channel\Model\OrderItemPaymentStatus');
        $sut = new OrderItem();

        $this->assertMethodExists($sut, 'setItemPaymentStatus');
        $sut->setItemPaymentStatus($sample);
        $this->assertSame($sample, $sut['itemPaymentStatus']);
    }


    /**
     * Test attribute "grossPrice"
     * @test
     */
    public function it_has_a_GrossPrice(): void
    {
        $sample = $this->buildSampleForDataType('string');
        $sut = new OrderItem(['grossPrice' => $sample]);

        $this->assertMethodExists($sut, 'getGrossPrice');
        $this->assertSame($sample, $sut->getGrossPrice());

        $this->assertArrayHasKey('grossPrice', $sut);
        $this->assertSame($sample, $sut['grossPrice']);

    }

    /**
     * Test attribute "grossPrice"
     * @test
     */
    public function it_has_a_setter_for_GrossPrice(): void
    {
        $sample = $this->buildSampleForDataType('string');
        $sut = new OrderItem();

        $this->assertMethodExists($sut, 'setGrossPrice');
        $sut->setGrossPrice($sample);
        $this->assertSame($sample, $sut['grossPrice']);
    }


    /**
     * Test attribute "total"
     * @test
     */
    public function it_has_a_Total(): void
    {
        $sample = $this->buildSampleForDataType('string');
        $sut = new OrderItem(['total' => $sample]);

        $this->assertMethodExists($sut, 'getTotal');
        $this->assertSame($sample, $sut->getTotal());

        $this->assertArrayHasKey('total', $sut);
        $this->assertSame($sample, $sut['total']);

    }

    /**
     * Test attribute "total"
     * @test
     */
    public function it_has_a_setter_for_Total(): void
    {
        $sample = $this->buildSampleForDataType('string');
        $sut = new OrderItem();

        $this->assertMethodExists($sut, 'setTotal');
        $sut->setTotal($sample);
        $this->assertSame($sample, $sut['total']);
    }


    /**
     * Test attribute "taxPercent"
     * @test
     */
    public function it_has_a_TaxPercent(): void
    {
        $sample = $this->buildSampleForDataType('string');
        $sut = new OrderItem(['taxPercent' => $sample]);

        $this->assertMethodExists($sut, 'getTaxPercent');
        $this->assertSame($sample, $sut->getTaxPercent());

        $this->assertArrayHasKey('taxPercent', $sut);
        $this->assertSame($sample, $sut['taxPercent']);

    }

    /**
     * Test attribute "taxPercent"
     * @test
     */
    public function it_has_a_setter_for_TaxPercent(): void
    {
        $sample = $this->buildSampleForDataType('string');
        $sut = new OrderItem();

        $this->assertMethodExists($sut, 'setTaxPercent');
        $sut->setTaxPercent($sample);
        $this->assertSame($sample, $sut['taxPercent']);
    }


    /**
     * Test attribute "grossFee"
     * @test
     */
    public function it_has_a_GrossFee(): void
    {
        $sample = $this->buildSampleForDataType('string');
        $sut = new OrderItem(['grossFee' => $sample]);

        $this->assertMethodExists($sut, 'getGrossFee');
        $this->assertSame($sample, $sut->getGrossFee());

        $this->assertArrayHasKey('grossFee', $sut);
        $this->assertSame($sample, $sut['grossFee']);

    }

    /**
     * Test attribute "grossFee"
     * @test
     */
    public function it_has_a_setter_for_GrossFee(): void
    {
        $sample = $this->buildSampleForDataType('string');
        $sut = new OrderItem();

        $this->assertMethodExists($sut, 'setGrossFee');
        $sut->setGrossFee($sample);
        $this->assertSame($sample, $sut['grossFee']);
    }


    /**
     * Test attribute "offerId"
     * @test
     */
    public function it_has_a_OfferId(): void
    {
        $sample = $this->buildSampleForDataType('int');
        $sut = new OrderItem(['offerId' => $sample]);

        $this->assertMethodExists($sut, 'getOfferId');
        $this->assertSame($sample, $sut->getOfferId());

        $this->assertArrayHasKey('offerId', $sut);
        $this->assertSame($sample, $sut['offerId']);

    }

    /**
     * Test attribute "offerId"
     * @test
     */
    public function it_has_a_setter_for_OfferId(): void
    {
        $sample = $this->buildSampleForDataType('int');
        $sut = new OrderItem();

        $this->assertMethodExists($sut, 'setOfferId');
        $sut->setOfferId($sample);
        $this->assertSame($sample, $sut['offerId']);
    }


    /**
     * Test attribute "channelOfferId"
     * @test
     */
    public function it_has_a_ChannelOfferId(): void
    {
        $sample = $this->buildSampleForDataType('string');
        $sut = new OrderItem(['channelOfferId' => $sample]);

        $this->assertMethodExists($sut, 'getChannelOfferId');
        $this->assertSame($sample, $sut->getChannelOfferId());

        $this->assertArrayHasKey('channelOfferId', $sut);
        $this->assertSame($sample, $sut['channelOfferId']);

    }

    /**
     * Test attribute "channelOfferId"
     * @test
     */
    public function it_has_a_setter_for_ChannelOfferId(): void
    {
        $sample = $this->buildSampleForDataType('string');
        $sut = new OrderItem();

        $this->assertMethodExists($sut, 'setChannelOfferId');
        $sut->setChannelOfferId($sample);
        $this->assertSame($sample, $sut['channelOfferId']);
    }


    /**
     * Test attribute "sku"
     * @test
     */
    public function it_has_a_Sku(): void
    {
        $sample = $this->buildSampleForDataType('string');
        $sut = new OrderItem(['sku' => $sample]);

        $this->assertMethodExists($sut, 'getSku');
        $this->assertSame($sample, $sut->getSku());

        $this->assertArrayHasKey('sku', $sut);
        $this->assertSame($sample, $sut['sku']);

    }

    /**
     * Test attribute "sku"
     * @test
     */
    public function it_has_a_setter_for_Sku(): void
    {
        $sample = $this->buildSampleForDataType('string');
        $sut = new OrderItem();

        $this->assertMethodExists($sut, 'setSku');
        $sut->setSku($sample);
        $this->assertSame($sample, $sut['sku']);
    }


    /**
     * Test attribute "quantity"
     * @test
     */
    public function it_has_a_Quantity(): void
    {
        $sample = $this->buildSampleForDataType('string');
        $sut = new OrderItem(['quantity' => $sample]);

        $this->assertMethodExists($sut, 'getQuantity');
        $this->assertSame($sample, $sut->getQuantity());

        $this->assertArrayHasKey('quantity', $sut);
        $this->assertSame($sample, $sut['quantity']);

    }

    /**
     * Test attribute "quantity"
     * @test
     */
    public function it_has_a_setter_for_Quantity(): void
    {
        $sample = $this->buildSampleForDataType('string');
        $sut = new OrderItem();

        $this->assertMethodExists($sut, 'setQuantity');
        $sut->setQuantity($sample);
        $this->assertSame($sample, $sut['quantity']);
    }


    /**
     * Test attribute "title"
     * @test
     */
    public function it_has_a_Title(): void
    {
        $sample = $this->buildSampleForDataType('string');
        $sut = new OrderItem(['title' => $sample]);

        $this->assertMethodExists($sut, 'getTitle');
        $this->assertSame($sample, $sut->getTitle());

        $this->assertArrayHasKey('title', $sut);
        $this->assertSame($sample, $sut['title']);

    }

    /**
     * Test attribute "title"
     * @test
     */
    public function it_has_a_setter_for_Title(): void
    {
        $sample = $this->buildSampleForDataType('string');
        $sut = new OrderItem();

        $this->assertMethodExists($sut, 'setTitle');
        $sut->setTitle($sample);
        $this->assertSame($sample, $sut['title']);
    }


    /**
     * Test attribute "estimatedShippingDate"
     * @test
     */
    public function it_has_a_EstimatedShippingDate(): void
    {
        $sample = $this->buildSampleForDataType('\DateTime');
        $sut = new OrderItem(['estimatedShippingDate' => $sample]);

        $this->assertMethodExists($sut, 'getEstimatedShippingDate');
        $this->assertSame($sample, $sut->getEstimatedShippingDate());

        $this->assertArrayHasKey('estimatedShippingDate', $sut);
        $this->assertSame($sample, $sut['estimatedShippingDate']);

    }

    /**
     * Test attribute "estimatedShippingDate"
     * @test
     */
    public function it_has_a_setter_for_EstimatedShippingDate(): void
    {
        $sample = $this->buildSampleForDataType('\DateTime');
        $sut = new OrderItem();

        $this->assertMethodExists($sut, 'setEstimatedShippingDate');
        $sut->setEstimatedShippingDate($sample);
        $this->assertSame($sample, $sut['estimatedShippingDate']);
    }


    /**
     * Test attribute "estimatedDeliveryDate"
     * @test
     */
    public function it_has_a_EstimatedDeliveryDate(): void
    {
        $sample = $this->buildSampleForDataType('\DateTime');
        $sut = new OrderItem(['estimatedDeliveryDate' => $sample]);

        $this->assertMethodExists($sut, 'getEstimatedDeliveryDate');
        $this->assertSame($sample, $sut->getEstimatedDeliveryDate());

        $this->assertArrayHasKey('estimatedDeliveryDate', $sut);
        $this->assertSame($sample, $sut['estimatedDeliveryDate']);

    }

    /**
     * Test attribute "estimatedDeliveryDate"
     * @test
     */
    public function it_has_a_setter_for_EstimatedDeliveryDate(): void
    {
        $sample = $this->buildSampleForDataType('\DateTime');
        $sut = new OrderItem();

        $this->assertMethodExists($sut, 'setEstimatedDeliveryDate');
        $sut->setEstimatedDeliveryDate($sample);
        $this->assertSame($sample, $sut['estimatedDeliveryDate']);
    }


    /**
     * Test attribute "remainingQuantity"
     * @test
     */
    public function it_has_a_RemainingQuantity(): void
    {
        $sample = $this->buildSampleForDataType('string');
        $sut = new OrderItem(['remainingQuantity' => $sample]);

        $this->assertMethodExists($sut, 'getRemainingQuantity');
        $this->assertSame($sample, $sut->getRemainingQuantity());

        $this->assertArrayHasKey('remainingQuantity', $sut);
        $this->assertSame($sample, $sut['remainingQuantity']);

    }

    /**
     * Test attribute "remainingQuantity"
     * @test
     */
    public function it_has_a_setter_for_RemainingQuantity(): void
    {
        $sample = $this->buildSampleForDataType('string');
        $sut = new OrderItem();

        $this->assertMethodExists($sut, 'setRemainingQuantity');
        $sut->setRemainingQuantity($sample);
        $this->assertSame($sample, $sut['remainingQuantity']);
    }


    /**
     * Test attribute "shippingGroup"
     * @test
     */
    public function it_has_a_ShippingGroup(): void
    {
        $sample = $this->buildSampleForDataType('string');
        $sut = new OrderItem(['shippingGroup' => $sample]);

        $this->assertMethodExists($sut, 'getShippingGroup');
        $this->assertSame($sample, $sut->getShippingGroup());

        $this->assertArrayHasKey('shippingGroup', $sut);
        $this->assertSame($sample, $sut['shippingGroup']);

    }

    /**
     * Test attribute "shippingGroup"
     * @test
     */
    public function it_has_a_setter_for_ShippingGroup(): void
    {
        $sample = $this->buildSampleForDataType('string');
        $sut = new OrderItem();

        $this->assertMethodExists($sut, 'setShippingGroup');
        $sut->setShippingGroup($sample);
        $this->assertSame($sample, $sut['shippingGroup']);
    }


    /**
     * Test attribute "note"
     * @test
     */
    public function it_has_a_Note(): void
    {
        $sample = $this->buildSampleForDataType('string');
        $sut = new OrderItem(['note' => $sample]);

        $this->assertMethodExists($sut, 'getNote');
        $this->assertSame($sample, $sut->getNote());

        $this->assertArrayHasKey('note', $sut);
        $this->assertSame($sample, $sut['note']);

    }

    /**
     * Test attribute "note"
     * @test
     */
    public function it_has_a_setter_for_Note(): void
    {
        $sample = $this->buildSampleForDataType('string');
        $sut = new OrderItem();

        $this->assertMethodExists($sut, 'setNote');
        $sut->setNote($sample);
        $this->assertSame($sample, $sut['note']);
    }

    private function assertMethodExists(OrderItem $sut, string $methodName): void
    {
        try {
            $_ = (new \ReflectionClass($sut))->getMethod($methodName);
        } catch (\ReflectionException $e) {
            self::fail("No public method {$methodName} found in " . get_class($sut));
        }
        $this->assertTrue(true);
    }

    private function buildSampleForDataType(string $dataType)
    {
        $isArray = substr($dataType, -2) === '[]';

        if ($isArray) {
            $dataType = substr($dataType, 0, strlen($dataType)-2);
        }

        $isMap = substr($dataType, 0, 3) === 'map';
        if ($isMap) {
            $isArray = true;
            $dataType = 'string';
        }

        switch ($dataType) {
            case '\SplFileObject':
                $sampleData = new \SplFileObject('php://memory');
                break;
            case 'object':
                $sampleData = $this->createStub('\stdClass');
                break;
            case 'integer':
            case 'int':
                $sampleData = random_int(100, 10000);
                break;
            case 'double':
            case 'float':
                $sampleData = random_int(100, 10000)/pi();
                break;
            case 'bool':
            case 'boolean':
                $sampleData = (bool)random_int(0, 1);
                break;
            case 'string':
            case 'text':
                $sampleData = uniqid('a_string');
                break;
            default:
                $sampleData = $this->createStub($dataType);
        }

        if ($isArray) {
            $sampleData = [$sampleData];
        }
        return $sampleData;
    }
}
