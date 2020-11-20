<?php declare(strict_types=1);
/**
 * This File is part of JTL-Software
 *
 * User: pkanngiesser
 * Date: 2019/09/23
 */

namespace JTL\SCX\Client\Channel\Api\Event\Response;

use PHPUnit\Framework\TestCase;
use JTL\SCX\Client\Channel\Api\Event\Model\EventContainerList;

/**
 * Class GetSellerEventListResponseTest
 * @package JTL\SCX\Client\Channel\Api\Event\Response
 *
 * @covers \JTL\SCX\Client\Channel\Api\Event\Response\GetSellerEventListResponse
 * @covers \JTL\SCX\Client\Channel\Api\Event\Model\EventContainerList
 */
class GetSellerEventListResponseTest extends TestCase
{
    public function testCanBeCreated(): void
    {
        $eventList = new EventContainerList();
        $statusCode = random_int(1, 1000);

        $response = new GetSellerEventListResponse($eventList, $statusCode);

        $this->assertSame($eventList, $response->getEventList());
        $this->assertSame($statusCode, $response->getStatusCode());
    }
}
