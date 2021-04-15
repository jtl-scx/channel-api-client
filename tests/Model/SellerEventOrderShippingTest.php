<?php
/**
 * SellerEventOrderShippingTest
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
 * SellerEventOrderShippingTest Class Doc Comment
 *
 * @category    Class
 * @description SellerEventOrderShipping
 * @package     JTL\SCX\Client\Channel
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 * @covers      \JTL\SCX\Client\Channel\Model\SellerEventOrderShipping
 */
class SellerEventOrderShippingTest extends TestCase
{



    /**
     * Test attribute "sellerId"
     * @test
     */
    public function it_has_a_SellerId(): void
    {
        $sample = $this->buildSampleForDataType('string');
        $sut = new SellerEventOrderShipping(['sellerId' => $sample]);

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
        $sut = new SellerEventOrderShipping();

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
        $sut = new SellerEventOrderShipping(['orderId' => $sample]);

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
        $sut = new SellerEventOrderShipping();

        $this->assertMethodExists($sut, 'setOrderId');
        $sut->setOrderId($sample);
        $this->assertSame($sample, $sut['orderId']);
    }


    /**
     * Test attribute "shippingComplete"
     * @test
     */
    public function it_has_a_ShippingComplete(): void
    {
        $sample = $this->buildSampleForDataType('bool');
        $sut = new SellerEventOrderShipping(['shippingComplete' => $sample]);

        $this->assertMethodExists($sut, 'getShippingComplete');
        $this->assertSame($sample, $sut->getShippingComplete());

        $this->assertArrayHasKey('shippingComplete', $sut);
        $this->assertSame($sample, $sut['shippingComplete']);

    }

    /**
     * Test attribute "shippingComplete"
     * @test
     */
    public function it_has_a_setter_for_ShippingComplete(): void
    {
        $sample = $this->buildSampleForDataType('bool');
        $sut = new SellerEventOrderShipping();

        $this->assertMethodExists($sut, 'setShippingComplete');
        $sut->setShippingComplete($sample);
        $this->assertSame($sample, $sut['shippingComplete']);
    }


    /**
     * Test attribute "shippingItems"
     * @test
     */
    public function it_has_a_ShippingItems(): void
    {
        $sample = $this->buildSampleForDataType('\JTL\SCX\Client\Channel\Model\OrderShippingPosition[]');
        $sut = new SellerEventOrderShipping(['shippingItems' => $sample]);

        $this->assertMethodExists($sut, 'getShippingItems');
        $this->assertSame($sample, $sut->getShippingItems());

        $this->assertArrayHasKey('shippingItems', $sut);
        $this->assertSame($sample, $sut['shippingItems']);

    }

    /**
     * Test attribute "shippingItems"
     * @test
     */
    public function it_has_a_setter_for_ShippingItems(): void
    {
        $sample = $this->buildSampleForDataType('\JTL\SCX\Client\Channel\Model\OrderShippingPosition[]');
        $sut = new SellerEventOrderShipping();

        $this->assertMethodExists($sut, 'setShippingItems');
        $sut->setShippingItems($sample);
        $this->assertSame($sample, $sut['shippingItems']);
    }

    private function assertMethodExists(SellerEventOrderShipping $sut, string $methodName): void
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
