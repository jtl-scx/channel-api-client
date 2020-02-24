<?php declare(strict_types=1);
/**
 * This File is part of JTL-Software
 *
 * User: pkanngiesser
 * Date: 2019/09/19
 */

namespace JTL\SCX\Client\Channel\Api\Event\Model;

use JTL\SCX\Client\Channel\Event\EventType;
use JTL\SCX\Client\Channel\Model\SellerEventOfferEnd;
use JTL\SCX\Client\Channel\Model\SellerEventOfferNew;
use JTL\SCX\Client\Channel\Model\SellerEventOrderCancelled;
use JTL\SCX\Client\Channel\Model\SellerEventOrderConfirmed;
use JTL\SCX\Client\Channel\Model\SellerEventOrderPayment;
use JTL\SCX\Client\Channel\Model\SellerEventOrderShipping;
use JTL\SCX\Client\Channel\Model\SellerEventTest;
use JTL\SCX\Client\Channel\Model\SystemEventNotification;

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
     * @return SellerEventOrderCancelled|SellerEventOrderConfirmed|SellerEventOrderPayment|SellerEventOrderShipping|SellerEventTest|SystemEventNotification|SellerEventOfferNew|SellerEventOfferEnd|null
     */
    public function getEvent()
    {
        return $this->event;
    }
}
