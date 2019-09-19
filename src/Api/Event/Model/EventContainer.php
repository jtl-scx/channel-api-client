<?php declare(strict_types=1);
/**
 * This File is part of JTL-Software
 *
 * User: pkanngiesser
 * Date: 2019/09/19
 */

namespace JTL\SCX\Client\Channel\Api\Event\Model;

use JTL\SCX\Client\Channel\Model\SellerEventOfferEnd;
use JTL\SCX\Client\Channel\Model\SellerEventOrderCancelled;
use JTL\SCX\Client\Channel\Model\SellerEventOrderConfirmed;
use JTL\SCX\Client\Channel\Model\SellerEventOrderPayment;
use JTL\SCX\Client\Channel\Model\SellerEventOrderShipping;
use JTL\SCX\Client\Channel\Model\SellerEventTest;
use JTL\SCX\Client\Channel\Model\SystemEventNotification;

class EventContainer
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var \DateTimeImmutable
     */
    private $createdAt;

    /**
     * @var string
     */
    private $type;

    /**
     * @var SellerEventOfferEnd|SellerEventOrderCancelled|SellerEventOrderConfirmed|SellerEventOrderPayment|SellerEventOrderShipping|SellerEventTest|SystemEventNotification|null
     */
    private $event;

    /**
     * EventContainer constructor.
     * @param string $id
     * @param \DateTimeImmutable $createdAt
     * @param string $type
     * @param SellerEventOfferEnd|SellerEventOrderCancelled|SellerEventOrderConfirmed|SellerEventOrderPayment|SellerEventOrderShipping|SellerEventTest|SystemEventNotification|null $event
     */
    public function __construct(string $id, \DateTimeImmutable $createdAt, string $type, $event)
    {
        $this->id = $id;
        $this->createdAt = $createdAt;
        $this->type = $type;
        $this->event = $event;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return \DateTimeImmutable
     */
    public function getCreatedAt(): \DateTimeImmutable
    {
        return $this->createdAt;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return SellerEventOfferEnd|SellerEventOrderCancelled|SellerEventOrderConfirmed|SellerEventOrderPayment|SellerEventOrderShipping|SellerEventTest|SystemEventNotification|null
     */
    public function getEvent()
    {
        return $this->event;
    }
}
