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
 * @______method static EventType SellerOfferStockUpdate()
 * @______method static EventType SellerOfferPriceUpdate()
 */
class EventType extends Enum
{
    const SystemNotification = 'System:Notification';
    const SellerEventTest = 'System:Test';
    const SellerOrderConfirmed = 'Seller:Order.Confirmed';
    const SellerOrderShipping = 'Seller:Order.Shipping';
    const SellerOrderPayment = 'Seller:Order.Payment';
    const SellerOrderCancelled = 'Seller:Order.Cancelled';
    const SellerOfferNew = 'Seller:Offer.New';
    const SellerOfferUpdate = 'Seller:Offer.Update';
    const SellerOfferEnd = 'Seller:Offer.End';

    // reserved for future release
    // const SellerOfferStockUpdate = 'Seller:Offer.StockUpdate';
    // const SellerOfferPriceUpdate = 'Seller:Offer.PriceUpdate';

    /**
     * Allow EventType to build event there is an unknown event type.
     * New Event Types may be realistic scenario when working with SCX Channel API
     *
     * @param $value
     * @return bool
     */
    public static function isValid($value)
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
            case $this::SellerOrderConfirmed():
                return SellerEventOrderConfirmed::class;
            case $this::SellerOrderShipping():
                return SellerEventOrderShipping::class;
            case $this::SellerOrderPayment():
                return SellerEventOrderPayment::class;
            case $this::SellerOrderCancelled():
                return SellerEventOrderCancelled::class;
            case $this::SellerOfferNew():
                return SellerEventOfferNew::class;
            case $this::SellerOfferUpdate():
                return SellerEventOfferUpdate::class;
            case $this::SellerOfferEnd():
                return SellerEventOfferEnd::class;
        }

        return \stdClass::class;
    }

    public function isUnknownEventType(): bool
    {
        return $this->getEventModelClass() === \stdClass::class;
    }
}
