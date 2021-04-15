<?php
/**
 * SellerEventOrderReturnReceivedTest
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
 * SellerEventOrderReturnReceivedTest Class Doc Comment
 *
 * @category    Class
 * @description SellerEventOrderReturnReceived
 * @package     JTL\SCX\Client\Channel
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 * @covers      \JTL\SCX\Client\Channel\Model\SellerEventOrderReturnReceived
 */
class SellerEventOrderReturnReceivedTest extends TestCase
{



    /**
     * Test attribute "sellerId"
     * @test
     */
    public function it_has_a_SellerId(): void
    {
        $sample = $this->buildSampleForDataType('string');
        $sut = new SellerEventOrderReturnReceived(['sellerId' => $sample]);

        $this->assertMethodExists($sut, 'getSellerId');
        $this->assertSame($sample, $sut->getSellerId());

        $this->assertArrayHasKey('sellerId', $sut);
        $this->assertSame($sample, $sut['sellerId']);

    }

    /**
     * Test attribute "sellerId"
     * @test
     */
    public function it_has_a_setter_for_SellerId(): void
    {
        $sample = $this->buildSampleForDataType('string');
        $sut = new SellerEventOrderReturnReceived();

        $this->assertMethodExists($sut, 'setSellerId');
        $sut->setSellerId($sample);
        $this->assertSame($sample, $sut['sellerId']);
    }


    /**
     * Test attribute "orderId"
     * @test
     */
    public function it_has_a_OrderId(): void
    {
        $sample = $this->buildSampleForDataType('string');
        $sut = new SellerEventOrderReturnReceived(['orderId' => $sample]);

        $this->assertMethodExists($sut, 'getOrderId');
        $this->assertSame($sample, $sut->getOrderId());

        $this->assertArrayHasKey('orderId', $sut);
        $this->assertSame($sample, $sut['orderId']);

    }

    /**
     * Test attribute "orderId"
     * @test
     */
    public function it_has_a_setter_for_OrderId(): void
    {
        $sample = $this->buildSampleForDataType('string');
        $sut = new SellerEventOrderReturnReceived();

        $this->assertMethodExists($sut, 'setOrderId');
        $sut->setOrderId($sample);
        $this->assertSame($sample, $sut['orderId']);
    }


    /**
     * Test attribute "sellerReturnId"
     * @test
     */
    public function it_has_a_SellerReturnId(): void
    {
        $sample = $this->buildSampleForDataType('string');
        $sut = new SellerEventOrderReturnReceived(['sellerReturnId' => $sample]);

        $this->assertMethodExists($sut, 'getSellerReturnId');
        $this->assertSame($sample, $sut->getSellerReturnId());

        $this->assertArrayHasKey('sellerReturnId', $sut);
        $this->assertSame($sample, $sut['sellerReturnId']);

    }

    /**
     * Test attribute "sellerReturnId"
     * @test
     */
    public function it_has_a_setter_for_SellerReturnId(): void
    {
        $sample = $this->buildSampleForDataType('string');
        $sut = new SellerEventOrderReturnReceived();

        $this->assertMethodExists($sut, 'setSellerReturnId');
        $sut->setSellerReturnId($sample);
        $this->assertSame($sample, $sut['sellerReturnId']);
    }


    /**
     * Test attribute "channelReturnId"
     * @test
     */
    public function it_has_a_ChannelReturnId(): void
    {
        $sample = $this->buildSampleForDataType('string');
        $sut = new SellerEventOrderReturnReceived(['channelReturnId' => $sample]);

        $this->assertMethodExists($sut, 'getChannelReturnId');
        $this->assertSame($sample, $sut->getChannelReturnId());

        $this->assertArrayHasKey('channelReturnId', $sut);
        $this->assertSame($sample, $sut['channelReturnId']);

    }

    /**
     * Test attribute "channelReturnId"
     * @test
     */
    public function it_has_a_setter_for_ChannelReturnId(): void
    {
        $sample = $this->buildSampleForDataType('string');
        $sut = new SellerEventOrderReturnReceived();

        $this->assertMethodExists($sut, 'setChannelReturnId');
        $sut->setChannelReturnId($sample);
        $this->assertSame($sample, $sut['channelReturnId']);
    }


    /**
     * Test attribute "orderItem"
     * @test
     */
    public function it_has_a_OrderItem(): void
    {
        $sample = $this->buildSampleForDataType('\JTL\SCX\Client\Channel\Model\ReturnReceivedOrderItem[]');
        $sut = new SellerEventOrderReturnReceived(['orderItem' => $sample]);

        $this->assertMethodExists($sut, 'getOrderItem');
        $this->assertSame($sample, $sut->getOrderItem());

        $this->assertArrayHasKey('orderItem', $sut);
        $this->assertSame($sample, $sut['orderItem']);

    }

    /**
     * Test attribute "orderItem"
     * @test
     */
    public function it_has_a_setter_for_OrderItem(): void
    {
        $sample = $this->buildSampleForDataType('\JTL\SCX\Client\Channel\Model\ReturnReceivedOrderItem[]');
        $sut = new SellerEventOrderReturnReceived();

        $this->assertMethodExists($sut, 'setOrderItem');
        $sut->setOrderItem($sample);
        $this->assertSame($sample, $sut['orderItem']);
    }

    private function assertMethodExists(SellerEventOrderReturnReceived $sut, string $methodName): void
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
