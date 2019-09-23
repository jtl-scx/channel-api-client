<?php declare(strict_types=1);
/**
 * This File is part of JTL-Software
 *
 * User: pkanngiesser
 * Date: 2019/09/23
 */

namespace JTL\SCX\Client\Channel\Api\Event\Response;

use JTL\SCX\Client\Channel\AbstractTestCase;
use JTL\SCX\Client\Channel\Api\Event\Model\EventContainer;
use Mockery;

/**
 * Class GetSellerEventListResponseTest
 * @package JTL\SCX\Client\Channel\Api\Event\Response
 *
 * @covers \JTL\SCX\Client\Channel\Api\Event\Response\GetSellerEventListResponse
 */
class GetSellerEventListResponseTest extends AbstractTestCase
{
    public function testCanBeCreated(): void
    {
        $eventList = [Mockery::mock(EventContainer::class)];
        $statusCode = random_int(1, 1000);

        $response = new GetSellerEventListResponse($eventList, $statusCode);

        $this->assertSame($eventList, $response->getEventList());
        $this->assertSame($statusCode, $response->getStatusCode());
    }
}
