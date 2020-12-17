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
use JTL\SCX\Client\Channel\Model\SellerEventOrderCancellationAccepted;
use JTL\SCX\Client\Channel\Model\SellerEventOrderCancellationDenied;
use JTL\SCX\Client\Channel\Model\SellerEventOrderCancellationRequest;
use JTL\SCX\Client\Channel\Model\SellerEventOrderPayment;
use JTL\SCX\Client\Channel\Model\SellerEventOrderShipping;
use JTL\SCX\Client\Channel\Model\SellerEventReportRequest;
use JTL\SCX\Client\Channel\Model\SellerEventSellerAttributesUpdateRequest;
use JTL\SCX\Client\Channel\Model\SellerEventTest;
use JTL\SCX\Client\Channel\Model\SellerEventTypeList as M;
use JTL\SCX\Client\Channel\Model\SystemEventNotification;
use MyCLabs\Enum\Enum;

/**
 * Class EventType
 * @method static EventType SystemNotification()
 * @method static EventType SellerEventTest()
 * @method static EventType SellerOrderShipping()
 * @method static EventType SellerOrderPayment()
 * @method static EventType SellerOrderCancellationRequest()
 * @method static EventType SellerOfferNew()
 * @method static EventType SellerOfferUpdate()
 * @method static EventType SellerOfferEnd()
 * @method static EventType SellerOfferStockUpdate()
 * @method static EventType SellerOfferPriceUpdate()
 * @method static EventType SellerReportRequest()
 * @method static EventType SellerChannelUnlinked()
 * @method static EventType SellerMetaSellerAttributesUpdateRequest()
 * @method static EventType SellerOrderCancellationAccept()
 * @method static EventType SellerOrderCancellationDenied()
 */
class EventType extends Enum
{
    public const SellerEventTest = M::SYSTEMTEST;
    public const SystemNotification = M::SYSTEMNOTIFICATION;
    public const SellerOrderShipping = M::SELLERORDER_SHIPPING;
    public const SellerOrderPayment = M::SELLERORDER_PAYMENT;
    public const SellerOfferNew = M::SELLEROFFER_NEW;
    public const SellerOfferUpdate = M::SELLEROFFER_UPDATE;
    public const SellerOfferEnd = M::SELLEROFFER_END;
    public const SellerOfferStockUpdate = M::SELLEROFFER_STOCK_UPDATE;
    public const SellerOfferPriceUpdate = M::SELLEROFFER_PRICE_UPDATE;
    public const SellerReportRequest = M::SELLERREPORT_REQUEST;
    public const SellerChannelUnlinked = M::SELLERCHANNEL_UNLINKED;
    public const SellerMetaSellerAttributesUpdateRequest = M::SELLERMETA_SELLER_ATTRIBUTES_UPDATE_REQUEST;
    public const SellerOrderCancellationAccept = M::SELLERORDER_CANCELLATION_ACCEPTED;
    public const SellerOrderCancellationDenied = M::SELLERORDER_CANCELLATION_DENIED;
    public const SellerOrderCancellationRequest = M::SELLERORDER_CANCELLATION_REQUEST;
    # public const SellerOrderConfirmed = 'Seller:Order.Confirmed';

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
            case $this::SellerMetaSellerAttributesUpdateRequest():
                return SellerEventSellerAttributesUpdateRequest::class;
            case $this::SellerOrderCancellationAccept():
                return SellerEventOrderCancellationAccepted::class;
            case $this::SellerOrderCancellationDenied():
                return SellerEventOrderCancellationDenied::class;
            case $this::SellerOrderCancellationRequest():
                return SellerEventOrderCancellationRequest::class;
        }

        return \stdClass::class;
    }

    public function isUnknownEventType(): bool
    {
        return $this->getEventModelClass() === \stdClass::class;
    }
}
