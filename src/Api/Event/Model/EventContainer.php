<?php declare(strict_types=1);
/**
 * This File is part of JTL-Software
 *
 * User: pkanngiesser
 * Date: 2019/09/19
 */

namespace JTL\SCX\Client\Channel\Api\Event\Model;

use JTL\SCX\Client\Channel\Event\EventType;
use JTL\SCX\Client\Channel\Model\SellerEventChannelUnlinked as ChannelUnlinked;
use JTL\SCX\Client\Channel\Model\SellerEventOfferEnd as OfferEnd;
use JTL\SCX\Client\Channel\Model\SellerEventOfferNew as OfferNew;
use JTL\SCX\Client\Channel\Model\SellerEventOfferPriceUpdate as PriceUpdate;
use JTL\SCX\Client\Channel\Model\SellerEventOfferStockUpdate as StockUpdate;
use JTL\SCX\Client\Channel\Model\SellerEventOfferUpdate as OfferUpdate;
use JTL\SCX\Client\Channel\Model\SellerEventOrderCancellationAccepted as CancellationAccept;
use JTL\SCX\Client\Channel\Model\SellerEventOrderCancellationDenied as CancellationDenied;
use JTL\SCX\Client\Channel\Model\SellerEventOrderCancellationRequest as CancellationRequest;
use JTL\SCX\Client\Channel\Model\SellerEventOrderPayment as Payment;
use JTL\SCX\Client\Channel\Model\SellerEventOrderShipping as Shipping;
use JTL\SCX\Client\Channel\Model\SellerEventReportRequest as ReportRequest;
use JTL\SCX\Client\Channel\Model\SellerEventSellerAttributesUpdateRequest as SellerAttributeUpdateRequest;
use JTL\SCX\Client\Channel\Model\SellerEventTest as Test;
use JTL\SCX\Client\Channel\Model\SystemEventNotification as Notification;

class EventContainer
{
    private string $id;
    private \DateTimeImmutable $createdAt;
    private EventType $type;
    private $event;

    public function __construct(string $id, \DateTimeImmutable $createdAt, EventType $type, $event)
    {
        $this->id = $id;
        $this->createdAt = $createdAt;
        $this->type = $type;
        $this->event = $event;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getCreatedAt(): \DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function getType(): EventType
    {
        return $this->type;
    }

    /**
     * @return Test|Notification|Shipping|Payment|OfferNew|OfferUpdate|OfferEnd|StockUpdate|PriceUpdate|ReportRequest|ChannelUnlinked|SellerAttributeUpdateRequest|CancellationAccept|CancellationDenied|CancellationRequest
     */
    public function getEvent()
    {
        return $this->event;
    }
}
