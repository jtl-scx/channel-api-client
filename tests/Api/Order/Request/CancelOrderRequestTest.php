<?php declare(strict_types=1);
/**
 * This File is part of JTL-Software
 *
 * User: avermeulen
 * Date: 2020-12-08
 */

namespace JTL\SCX\Client\Channel\Api\Order\Request;

use JTL\SCX\Client\Channel\Model\OrderCancellationRequest;
use PHPUnit\Framework\TestCase;

/**
 * @covers \JTL\SCX\Client\Channel\Api\Order\Request\CancelOrderRequest
 */
class CancelOrderRequestTest extends TestCase
{

    public function testCanBeCreatedAndUsed(): void
    {
        $cancellationRequest = $this->createMock(OrderCancellationRequest::class);

        $request = new CancelOrderRequest($cancellationRequest);

        $this->assertSame($cancellationRequest, $request->getCancellationRequest());
        $this->assertSame((string)$cancellationRequest, $request->getBody());
        $this->assertSame('POST', $request->getHttpMethod());
        $this->assertSame('/v1/channel/order/cancellation', $request->getUrl());
    }
}
