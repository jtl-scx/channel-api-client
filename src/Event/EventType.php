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
use JTL\SCX\Client\Channel\Model\SellerEventOrderPayment;
use JTL\SCX\Client\Channel\Model\SellerEventOrderShipping;
use JTL\SCX\Client\Channel\Model\SellerEventReportRequest;
use JTL\SCX\Client\Channel\Model\SellerEventTest;
use JTL\SCX\Client\Channel\Model\SystemEventNotification;
use MyCLabs\Enum\Enum;

/**
 * Class EventType
 * @method static EventType SystemNotification()
 * @method static EventType SellerEventTest()
 * @method static EventType SellerOrderConfirmed()
 * @method static EventType SellerOrderShipping()
 * @method static EventType SellerOrderPayment()
 * @method static EventType SellerOrderCancelled()
 * @method static EventType SellerOfferNew()
 * @method static EventType SellerOfferUpdate()
 * @method static EventType SellerOfferEnd()
 * @method static EventType SellerOfferStockUpdate()
 * @method static EventType SellerOfferPriceUpdate()
 * @method static EventType SellerReportRequest()
 * @method static EventType SellerChannelUnlinked()
 */
class EventType extends Enum
{
    public const SystemNotification = 'System:Notification';
    public const SellerEventTest = 'System:Test';
    public const SellerOrderConfirmed = 'Seller:Order.Confirmed';
    public const SellerOrderShipping = 'Seller:Order.Shipping';
    public const SellerOrderPayment = 'Seller:Order.Payment';
    public const SellerOrderCancelled = 'Seller:Order.Cancelled';
    public const SellerOfferNew = 'Seller:Offer.New';
    public const SellerOfferUpdate = 'Seller:Offer.Update';
    public const SellerOfferEnd = 'Seller:Offer.End';
    public const SellerOfferStockUpdate = 'Seller:Offer.StockUpdate';
    public const SellerOfferPriceUpdate = 'Seller:Offer.PriceUpdate';
    public const SellerReportRequest = 'Seller:Report.Request';
    public const SellerChannelUnlinked = 'Seller:Channel.Unlinked';

    /**
     * Allow EventType to build event there is an unknown event type.
     * New Event Types may be realistic scenario when working with SCX Channel API
     *
     * @param $value
     * @return bool
     */
    public static function isValid($value): bool
    {
        // allow to build object with unknown event types
        return true;
    }

    public function getEventModelClass(): string
    {
        switch ($this) {
            case $this::SellerEventTest():
                return SellerEventTest::class;
            case $this::SystemNotification():
                return SystemEventNotification::class;
            case $this::SellerOrderShipping():
                return SellerEventOrderShipping::class;
            case $this::SellerOrderPayment():
                return SellerEventOrderPayment::class;
            case $this::SellerOfferNew():
                return SellerEventOfferNew::class;
            case $this::SellerOfferUpdate():
                return SellerEventOfferUpdate::class;
            case $this::SellerOfferEnd():
                return SellerEventOfferEnd::class;
            case $this::SellerOfferStockUpdate():
                return SellerEventOfferStockUpdate::class;
            case $this::SellerOfferPriceUpdate():
                return SellerEventOfferPriceUpdate::class;
            case $this::SellerReportRequest():
                return SellerEventReportRequest::class;
            case $this::SellerChannelUnlinked():
                return SellerEventChannelUnlinked::class;
        }

        return \stdClass::class;
    }

    public function isUnknownEventType(): bool
    {
        return $this->getEventModelClass() === \stdClass::class;
    }
}
