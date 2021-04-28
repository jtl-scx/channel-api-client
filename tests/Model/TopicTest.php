<?php
/**
 * TopicTest
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
 * TopicTest Class Doc Comment
 *
 * @category    Class
 * @description Topic
 * @package     JTL\SCX\Client\Channel
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 * @covers      \JTL\SCX\Client\Channel\Model\Topic
 */
class TopicTest extends AbstractApiModelTest
{
    /**
     * Test Enum Value "QUESTION"
     * @test
     */
    public function is_a_const_QUESTION(): void
    {
        self::assertEquals('QUESTION', Topic::QUESTION);
        $sut = new Topic('QUESTION');
        self::assertEquals('QUESTION', $sut->getValue());
    }

    /**
     * Test Enum Value Named Constructor "QUESTION"
     * @test
     */
    public function it_can_be_constructed_forQUESTION(): void
    {
        $sut = Topic::QUESTION();
        self::assertInstanceOf(Topic::class, $sut);
    }
    /**
     * Test Enum Value "FEEDBACK"
     * @test
     */
    public function is_a_const_FEEDBACK(): void
    {
        self::assertEquals('FEEDBACK', Topic::FEEDBACK);
        $sut = new Topic('FEEDBACK');
        self::assertEquals('FEEDBACK', $sut->getValue());
    }

    /**
     * Test Enum Value Named Constructor "FEEDBACK"
     * @test
     */
    public function it_can_be_constructed_forFEEDBACK(): void
    {
        $sut = Topic::FEEDBACK();
        self::assertInstanceOf(Topic::class, $sut);
    }
    /**
     * Test Enum Value "DELIVERY"
     * @test
     */
    public function is_a_const_DELIVERY(): void
    {
        self::assertEquals('DELIVERY', Topic::DELIVERY);
        $sut = new Topic('DELIVERY');
        self::assertEquals('DELIVERY', $sut->getValue());
    }

    /**
     * Test Enum Value Named Constructor "DELIVERY"
     * @test
     */
    public function it_can_be_constructed_forDELIVERY(): void
    {
        $sut = Topic::DELIVERY();
        self::assertInstanceOf(Topic::class, $sut);
    }
    /**
     * Test Enum Value "_RETURN"
     * @test
     */
    public function is_a_const__RETURN(): void
    {
        self::assertEquals('RETURN', Topic::_RETURN);
        $sut = new Topic('RETURN');
        self::assertEquals('RETURN', $sut->getValue());
    }

    /**
     * Test Enum Value Named Constructor "_RETURN"
     * @test
     */
    public function it_can_be_constructed_for_RETURN(): void
    {
        $sut = Topic::_RETURN();
        self::assertInstanceOf(Topic::class, $sut);
    }
    /**
     * Test Enum Value "REFUND"
     * @test
     */
    public function is_a_const_REFUND(): void
    {
        self::assertEquals('REFUND', Topic::REFUND);
        $sut = new Topic('REFUND');
        self::assertEquals('REFUND', $sut->getValue());
    }

    /**
     * Test Enum Value Named Constructor "REFUND"
     * @test
     */
    public function it_can_be_constructed_forREFUND(): void
    {
        $sut = Topic::REFUND();
        self::assertInstanceOf(Topic::class, $sut);
    }
    /**
     * Test Enum Value "INCIDENT"
     * @test
     */
    public function is_a_const_INCIDENT(): void
    {
        self::assertEquals('INCIDENT', Topic::INCIDENT);
        $sut = new Topic('INCIDENT');
        self::assertEquals('INCIDENT', $sut->getValue());
    }

    /**
     * Test Enum Value Named Constructor "INCIDENT"
     * @test
     */
    public function it_can_be_constructed_forINCIDENT(): void
    {
        $sut = Topic::INCIDENT();
        self::assertInstanceOf(Topic::class, $sut);
    }

    /**
     * Test allowed values from Enum
     * @test
     */
    public function it_has_correct_set_of_allowed_values(): void
    {
        $allowed = [
            Topic::QUESTION,
            Topic::FEEDBACK,
            Topic::DELIVERY,
            Topic::_RETURN,
            Topic::REFUND,
            Topic::INCIDENT,
        ];
        self::assertEquals($allowed, Topic::getAllowableEnumValues());
    }

}
