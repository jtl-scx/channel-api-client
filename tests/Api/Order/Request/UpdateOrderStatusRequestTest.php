<?php declare(strict_types=1);
/**
 * This File is part of JTL-Software
 *
 * User: avermeulen
 * Date: 2020-03-03
 */

namespace JTL\SCX\Client\Channel\Api\Order\Request;

use JTL\SCX\Client\Channel\Model\OrderStatusList;
use PHPUnit\Framework\TestCase;

/**
 * Class UpdateOrderStatusRequestTest
 * @package JTL\SCX\Client\Channel\Api\Order\Request
 *
 * @covers \JTL\SCX\Client\Channel\Api\Order\Request\UpdateOrderStatusRequest
 */
class UpdateOrderStatusRequestTest extends TestCase
{
    public function testCanBeCreatedAndUsed(): void
    {
        $orderStatusList = $this->createMock(OrderStatusList::class);

        $request = new UpdateOrderStatusRequest($orderStatusList);

        $this->assertSame($orderStatusList, $request->getOrderStatusList());
        $this->assertSame((string)$orderStatusList, $request->getBody());
        $this->assertSame('PUT', $request->getHttpMethod());
        $this->assertSame('/channel/order/status', $request->getUrl());
    }
}
