<?php declare(strict_types=1);
/**
 * This File is part of JTL-Software
 *
 * User: rherrgesell
 * Date: 1/31/20
 */

namespace JTL\SCX\Client\Channel\Event;

use JTL\SCX\Client\Channel\Model\SellerEventChannelUnlinked;
use JTL\SCX\Client\Channel\Model\SellerEventOfferEnd;
use JTL\SCX\Client\Channel\Model\SellerEventOfferNew;
use JTL\SCX\Client\Channel\Model\SellerEventOfferPriceUpdate;
use JTL\SCX\Client\Channel\Model\SellerEventOfferStockUpdate;
use JTL\SCX\Client\Channel\Model\SellerEventOfferUpdate;
use JTL\SCX\Client\Channel\Model\SellerEventOrderAccept;
use JTL\SCX\Client\Channel\Model\SellerEventOrderCancellationAccepted;
use JTL\SCX\Client\Channel\Model\SellerEventOrderCancellationDenied;
use JTL\SCX\Client\Channel\Model\SellerEventOrderCancellationRequest;
use JTL\SCX\Client\Channel\Model\SellerEventOrderInvoice;
use JTL\SCX\Client\Channel\Model\SellerEventOrderPayment;
use JTL\SCX\Client\Channel\Model\SellerEventOrderShipping;
use JTL\SCX\Client\Channel\Model\SellerEventReportRequest;
use JTL\SCX\Client\Channel\Model\SellerEventSellerAttributesUpdateRequest;
use JTL\SCX\Client\Channel\Model\SellerEventTest;
use JTL\SCX\Client\Channel\Model\SystemEventNotification;
use PHPUnit\Framework\TestCase;

/**
 * @covers \JTL\SCX\Client\Channel\Event\EventType
 */
class EventTypeTest extends TestCase
{
    public function mapProvider(): array
    {
        return [
            [SellerEventTest::class, EventType::SellerEventTest()],
            [SystemEventNotification::class, EventType::SystemNotification()],
            [SellerEventOrderAccept::class, EventType::SellerOrderAccept()],
            [SellerEventOrderShipping::class, EventType::SellerOrderShipping()],
            [SellerEventOrderPayment::class, EventType::SellerOrderPayment()],
            [SellerEventOfferNew::class, EventType::SellerOfferNew()],
            [SellerEventOfferUpdate::class, EventType::SellerOfferUpdate()],
            [SellerEventOfferEnd::class, EventType::SellerOfferEnd()],
            [SellerEventOfferStockUpdate::class, EventType::SellerOfferStockUpdate()],
            [SellerEventOfferPriceUpdate::class, EventType::SellerOfferPriceUpdate()],
            [SellerEventReportRequest::class, EventType::SellerReportRequest()],
            [SellerEventChannelUnlinked::class, EventType::SellerChannelUnlinked()],
            [SellerEventSellerAttributesUpdateRequest::class, EventType::SellerMetaSellerAttributesUpdateRequest()],
            [SellerEventOrderCancellationAccepted::class, EventType::SellerOrderCancellationAccept()],
            [SellerEventOrderCancellationDenied::class, EventType::SellerOrderCancellationDenied()],
            [SellerEventOrderCancellationRequest::class, EventType::SellerOrderCancellationRequest()],
            [SellerEventOrderInvoice::class, EventType::SellerEventOrderInvoice()],
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

    public function testIsUnknownEventType()
    {
        $this->assertTrue((new EventType('foobardingens'))->isUnknownEventType());
        $this->assertFalse(EventType::SellerEventTest()->isUnknownEventType());
    }
}
