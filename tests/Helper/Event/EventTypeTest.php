<?php declare(strict_types=1);
/**
 * This File is part of JTL-Software
 *
 * User: rherrgesell
 * Date: 1/31/20
 */

namespace JTL\SCX\Client\Channel\Helper\Event;

use JTL\SCX\Client\Channel\Model\SellerEventOfferEnd;
use JTL\SCX\Client\Channel\Model\SellerEventOfferNew;
use JTL\SCX\Client\Channel\Model\SellerEventOfferUpdate;
use JTL\SCX\Client\Channel\Model\SellerEventOrderCancelled;
use JTL\SCX\Client\Channel\Model\SellerEventOrderConfirmed;
use JTL\SCX\Client\Channel\Model\SellerEventOrderPayment;
use JTL\SCX\Client\Channel\Model\SellerEventOrderShipping;
use JTL\SCX\Client\Channel\Model\SellerEventTest;
use JTL\SCX\Client\Channel\Model\SystemEventNotification;
use PHPUnit\Framework\TestCase;

/**
 * @covers \JTL\SCX\Client\Channel\Helper\Event\EventType
 */
class EventTypeTest extends TestCase
{
    public function mapProvider(): array
    {
        return [
            [SystemEventNotification::class, EventType::SystemNotification()],
            [SellerEventTest::class, EventType::SellerEventTest()],
            [SellerEventOrderConfirmed::class, EventType::SellerOrderConfirmed()],
            [SellerEventOrderShipping::class, EventType::SellerOrderShipping()],
            [SellerEventOrderPayment::class, EventType::SellerOrderPayment()],
            [SellerEventOrderCancelled::class, EventType::SellerOrderCancelled()],
            [SellerEventOfferNew::class, EventType::SellerOfferNew()],
            [SellerEventOfferUpdate::class, EventType::SellerOfferUpdate()],
            [SellerEventOfferEnd::class, EventType::SellerOfferEnd()],
            [\stdClass::class, new EventType('FooBarEvent')],
        ];
    }

    /**
     * @dataProvider mapProvider
     */
    public function testCanMapToCorrectModelClass(string $expectation, EventType $type)
    {
        $this->assertEquals($expectation, $type->getEventModelClass());
    }

    public function testCanBuildWithUnknownEvent()
    {
        $this->assertInstanceOf(EventType::class, new EventType('foobardingens'));
    }

    public function isUnknownEventType()
    {
        $this->assertTrue((new EventType('foobardingens'))->isUnknownEventType());
        $this->assertFalse(EventType::SellerEventTest()->isUnknownEventType());
    }
}
