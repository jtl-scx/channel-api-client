<?php declare(strict_types=1);
/**
 * This File is part of JTL-Software
 *
 * User: pkanngiesser
 * Date: 2019/09/23
 */

namespace JTL\SCX\Client\Channel\Api\Event\Model;

use JTL\SCX\Client\Channel\AbstractTestCase;
use JTL\SCX\Client\Channel\Event\EventType;
use JTL\SCX\Client\Channel\Model\SellerEventOfferEnd;

/**
 * Class EventContainerTest
 * @package JTL\SCX\Client\Channel\Api\Event\Model
 *
 * @covers \JTL\SCX\Client\Channel\Api\Event\Model\EventContainer
 */
class EventContainerTest extends AbstractTestCase
{
    public function testCanBeCreated(): void
    {
        $id = uniqid('id', true);
        $createdAt = new \DateTimeImmutable();
        $type = $this->createStub(EventType::class);
        $event = $this->createStub(SellerEventOfferEnd::class);

        $eventContainer = new EventContainer($id, $createdAt, $type, $event);

        $this->assertSame($id, $eventContainer->getId());
        $this->assertSame($createdAt, $eventContainer->getCreatedAt());
        $this->assertSame($type, $eventContainer->getType());
        $this->assertSame($event, $eventContainer->getEvent());
    }
}
