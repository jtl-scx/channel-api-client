<?php
/**
 * SellerEventListTest
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
 * SellerEventListTest Class Doc Comment
 *
 * @category    Class
 * @description SellerEventList
 * @package     JTL\SCX\Client\Channel
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 * @covers      \JTL\SCX\Client\Channel\Model\SellerEventList
 */
class SellerEventListTest extends TestCase
{



    /**
     * Test attribute "eventList"
     * @test
     */
    public function it_has_a_EventList(): void
    {
        $sample = $this->buildSampleForDataType('\JTL\SCX\Client\Channel\Model\SellerEventListEventList[]');
        $sut = new SellerEventList(['eventList' => $sample]);

        $this->assertMethodExists($sut, 'getEventList');
        $this->assertSame($sample, $sut->getEventList());

        $this->assertArrayHasKey('eventList', $sut);
        $this->assertSame($sample, $sut['eventList']);

    }

    /**
     * Test attribute "eventList"
     * @test
     */
    public function it_has_a_setter_for_EventList(): void
    {
        $sample = $this->buildSampleForDataType('\JTL\SCX\Client\Channel\Model\SellerEventListEventList[]');
        $sut = new SellerEventList();

        $this->assertMethodExists($sut, 'setEventList');
        $sut->setEventList($sample);
        $this->assertSame($sample, $sut['eventList']);
    }

    private function assertMethodExists(SellerEventList $sut, string $methodName): void
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
