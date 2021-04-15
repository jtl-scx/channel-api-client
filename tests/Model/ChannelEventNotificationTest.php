<?php
/**
 * ChannelEventNotificationTest
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
 * ChannelEventNotificationTest Class Doc Comment
 *
 * @category    Class
 * @description ChannelEventNotification
 * @package     JTL\SCX\Client\Channel
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 * @covers      \JTL\SCX\Client\Channel\Model\ChannelEventNotification
 */
class ChannelEventNotificationTest extends TestCase
{



    /**
     * Test attribute "channel"
     * @test
     */
    public function it_has_a_Channel(): void
    {
        $sample = $this->buildSampleForDataType('string');
        $sut = new ChannelEventNotification(['channel' => $sample]);

        $this->assertMethodExists($sut, 'getChannel');
        $this->assertSame($sample, $sut->getChannel());

        $this->assertArrayHasKey('channel', $sut);
        $this->assertSame($sample, $sut['channel']);

    }

    /**
     * Test attribute "channel"
     * @test
     */
    public function it_has_a_setter_for_Channel(): void
    {
        $sample = $this->buildSampleForDataType('string');
        $sut = new ChannelEventNotification();

        $this->assertMethodExists($sut, 'setChannel');
        $sut->setChannel($sample);
        $this->assertSame($sample, $sut['channel']);
    }


    /**
     * Test attribute "sellerId"
     * @test
     */
    public function it_has_a_SellerId(): void
    {
        $sample = $this->buildSampleForDataType('string');
        $sut = new ChannelEventNotification(['sellerId' => $sample]);

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
        $sut = new ChannelEventNotification();

        $this->assertMethodExists($sut, 'setSellerId');
        $sut->setSellerId($sample);
        $this->assertSame($sample, $sut['sellerId']);
    }


    /**
     * Test attribute "severity"
     * @test
     */
    public function it_has_a_Severity(): void
    {
        $sample = $this->buildSampleForDataType('\JTL\SCX\Client\Channel\Model\ChannelNotificationSeverity');
        $sut = new ChannelEventNotification(['severity' => $sample]);

        $this->assertMethodExists($sut, 'getSeverity');
        $this->assertSame($sample, $sut->getSeverity());

        $this->assertArrayHasKey('severity', $sut);
        $this->assertSame($sample, $sut['severity']);

    }

    /**
     * Test attribute "severity"
     * @test
     */
    public function it_has_a_setter_for_Severity(): void
    {
        $sample = $this->buildSampleForDataType('\JTL\SCX\Client\Channel\Model\ChannelNotificationSeverity');
        $sut = new ChannelEventNotification();

        $this->assertMethodExists($sut, 'setSeverity');
        $sut->setSeverity($sample);
        $this->assertSame($sample, $sut['severity']);
    }


    /**
     * Test attribute "message"
     * @test
     */
    public function it_has_a_Message(): void
    {
        $sample = $this->buildSampleForDataType('string');
        $sut = new ChannelEventNotification(['message' => $sample]);

        $this->assertMethodExists($sut, 'getMessage');
        $this->assertSame($sample, $sut->getMessage());

        $this->assertArrayHasKey('message', $sut);
        $this->assertSame($sample, $sut['message']);

    }

    /**
     * Test attribute "message"
     * @test
     */
    public function it_has_a_setter_for_Message(): void
    {
        $sample = $this->buildSampleForDataType('string');
        $sut = new ChannelEventNotification();

        $this->assertMethodExists($sut, 'setMessage');
        $sut->setMessage($sample);
        $this->assertSame($sample, $sut['message']);
    }


    /**
     * Test attribute "reference"
     * @test
     */
    public function it_has_a_Reference(): void
    {
        $sample = $this->buildSampleForDataType('\JTL\SCX\Client\Channel\Model\ChannelNotificationReference');
        $sut = new ChannelEventNotification(['reference' => $sample]);

        $this->assertMethodExists($sut, 'getReference');
        $this->assertSame($sample, $sut->getReference());

        $this->assertArrayHasKey('reference', $sut);
        $this->assertSame($sample, $sut['reference']);

    }

    /**
     * Test attribute "reference"
     * @test
     */
    public function it_has_a_setter_for_Reference(): void
    {
        $sample = $this->buildSampleForDataType('\JTL\SCX\Client\Channel\Model\ChannelNotificationReference');
        $sut = new ChannelEventNotification();

        $this->assertMethodExists($sut, 'setReference');
        $sut->setReference($sample);
        $this->assertSame($sample, $sut['reference']);
    }

    private function assertMethodExists(ChannelEventNotification $sut, string $methodName): void
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
