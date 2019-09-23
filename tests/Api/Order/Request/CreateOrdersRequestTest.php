<?php declare(strict_types=1);
/**
 * This File is part of JTL-Software
 *
 * User: pkanngiesser
 * Date: 2019/09/23
 */

namespace JTL\SCX\Client\Channel\Api\Order\Request;

use JTL\SCX\Client\Channel\AbstractTestCase;
use JTL\SCX\Client\Channel\Model\OrderList;
use Mockery;

/**
 * Class CreateOrdersRequestTest
 * @package JTL\SCX\Client\Channel\Api\Order\Request
 *
 * @covers \JTL\SCX\Client\Channel\Api\Order\Request\CreateOrdersRequest
 */
class CreateOrdersRequestTest extends AbstractTestCase
{
    public function testCanBeCreatedAndValidated(): void
    {
        $orderList = Mockery::mock(OrderList::class);
        $request = new CreateOrdersRequest($orderList);

        $request->validate();
        $this->assertSame($orderList, $request->getOrderList());
    }
}
