<?php
/**
 * ReturnReceivedOrderItemTest
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
 * ReturnReceivedOrderItemTest Class Doc Comment
 *
 * @category    Class
 * @description ReturnReceivedOrderItem
 * @package     JTL\SCX\Client\Channel
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 * @covers      \JTL\SCX\Client\Channel\Model\ReturnReceivedOrderItem
 */
class ReturnReceivedOrderItemTest extends TestCase
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
            'assert property Quantity' => [
                'quantity',
                'string',
                'getQuantity',
                'setQuantity'
            ],
            'assert property ReturnReason' => [
                'returnReason',
                '\JTL\SCX\Client\Channel\Model\ReturnReason',
                'getReturnReason',
                'setReturnReason'
            ],
            'assert property Note' => [
                'note',
                'string',
                'getNote',
                'setNote'
            ],
            'assert property Condition' => [
                'condition',
                '\JTL\SCX\Client\Channel\Model\Condition',
                'getCondition',
                'setCondition'
            ],
            'assert property AcceptReturn' => [
                'acceptReturn',
                'bool',
                'getAcceptReturn',
                'setAcceptReturn'
            ],
            'assert property RequireReturnShipping' => [
                'requireReturnShipping',
                'bool',
                'getRequireReturnShipping',
                'setRequireReturnShipping'
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
        $sut = new ReturnReceivedOrderItem([$property => $sample]);

        $this->assertMethodExists($sut, $expectedGetter);
        $this->assertSame($sample, $sut->$expectedGetter());

        $this->assertArrayHasKey($property, $sut);
        $this->assertSame($sample, $sut[$property]);

        $newSample = $this->buildSampleForDataType($type);
        $this->assertMethodExists($sut, $expectedSetter);
        $sut->$expectedSetter($newSample);
        $this->assertSame($newSample, $sut[$property]);
    }
    
    private function assertMethodExists(ReturnReceivedOrderItem $sut, string $methodName): void
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
