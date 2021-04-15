<?php
/**
 * PriceTest
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
 * PriceTest Class Doc Comment
 *
 * @category    Class
 * @description Price
 * @package     JTL\SCX\Client\Channel
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 * @covers      \JTL\SCX\Client\Channel\Model\Price
 */
class PriceTest extends TestCase
{



    /**
     * Test attribute "amount"
     * @test
     */
    public function it_has_a_Amount(): void
    {
        $sample = $this->buildSampleForDataType('string');
        $sut = new Price(['amount' => $sample]);

        $this->assertMethodExists($sut, 'getAmount');
        $this->assertSame($sample, $sut->getAmount());

        $this->assertArrayHasKey('amount', $sut);
        $this->assertSame($sample, $sut['amount']);

    }

    /**
     * Test attribute "amount"
     * @test
     */
    public function it_has_a_setter_for_Amount(): void
    {
        $sample = $this->buildSampleForDataType('string');
        $sut = new Price();

        $this->assertMethodExists($sut, 'setAmount');
        $sut->setAmount($sample);
        $this->assertSame($sample, $sut['amount']);
    }


    /**
     * Test attribute "currency"
     * @test
     */
    public function it_has_a_Currency(): void
    {
        $sample = $this->buildSampleForDataType('string');
        $sut = new Price(['currency' => $sample]);

        $this->assertMethodExists($sut, 'getCurrency');
        $this->assertSame($sample, $sut->getCurrency());

        $this->assertArrayHasKey('currency', $sut);
        $this->assertSame($sample, $sut['currency']);

    }

    /**
     * Test attribute "currency"
     * @test
     */
    public function it_has_a_setter_for_Currency(): void
    {
        $sample = $this->buildSampleForDataType('string');
        $sut = new Price();

        $this->assertMethodExists($sut, 'setCurrency');
        $sut->setCurrency($sample);
        $this->assertSame($sample, $sut['currency']);
    }

    private function assertMethodExists(Price $sut, string $methodName): void
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
