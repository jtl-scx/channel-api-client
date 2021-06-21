<?php declare(strict_types=1);
/**
 * This File is part of JTL-Software
 *
 * User: marius
 * Date: 5/18/21
 */

namespace JTL\SCX\Client\Channel\Api\Order\Request;

use JTL\SCX\Client\Channel\Model\ReturnAnnouncement;
use JTL\SCX\Client\Request\ScxApiRequest;
use PHPUnit\Framework\TestCase;

/**
 * Class ReturnOrderRequest
 *
 * @package JTL\SCX\Client\Channel\Api\Order\Request
 *
 * @covers \JTL\SCX\Client\Channel\Api\Order\Request\ReturnOrderRequest
 */
class ReturnOrderRequestTest extends TestCase
{
    public function testCanGetValues(): void
    {
        $returnAnnouncement = new ReturnAnnouncement([
            'sellerId' => 'slr1',
            'orderId' => 'order1',
            'orderItem' => null,
            'channelReturnId' => 'returnId',
            'returnTracking' => null,
        ]);
        $request = new ReturnOrderRequest($returnAnnouncement);

        self::assertEquals('/v1/channel/order/return', $request->getUrl());
        self::assertEquals(ScxApiRequest::HTTP_METHOD_POST, $request->getHttpMethod());
        self::assertEquals((string)$returnAnnouncement, $request->getBody());
        self::assertSame($returnAnnouncement, $request->getReturnAnnouncement());
    }
}
