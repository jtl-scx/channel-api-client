<?php declare(strict_types=1);
/**
 * This File is part of JTL-Software
 *
 * User: pkanngiesser
 * Date: 2019/09/23
 */

namespace JTL\SCX\Client\Channel\Api\Order;

use JTL\SCX\Client\Api\AuthAwareApiClient;
use JTL\SCX\Client\Channel\AbstractTestCase;
use JTL\SCX\Client\Channel\Api\Order\Request\CreateOrdersRequest;
use JTL\SCX\Client\Channel\Api\Order\Response\CreateOrdersResponse;
use Psr\Http\Message\ResponseInterface;

/**
 * Class CreateOrdersApiTest
 * @package JTL\SCX\Client\Channel\Api\Order
 *
 * @covers \JTL\SCX\Client\Channel\Api\Order\OrdersApi
 */
class OrdersApiTest extends AbstractTestCase
{
    public function testCreate(): void
    {
        $requestMock = $this->createMock(CreateOrdersRequest::class);
        $responseMock = $this->createMock(ResponseInterface::class);
        $responseMock->method('getStatusCode')->willReturn(200);

        $apiClientMock = $this->createMock(AuthAwareApiClient::class);
        $apiClientMock->expects($this->once())->method('request')->with($requestMock)->willReturn($responseMock);

        $client = new OrdersApi($apiClientMock);
        $this->assertInstanceOf(CreateOrdersResponse::class, $client->create($requestMock));
    }
}
