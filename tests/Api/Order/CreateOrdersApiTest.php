<?php declare(strict_types=1);
/**
 * This File is part of JTL-Software
 *
 * User: pkanngiesser
 * Date: 2019/09/23
 */

namespace JTL\SCX\Client\Channel\Api\Order;

use JTL\SCX\Client\Api\AbstractApi;
use JTL\SCX\Client\Channel\AbstractTestCase;
use JTL\SCX\Client\Channel\Api\Order\Request\CreateOrdersRequest;
use JTL\SCX\Client\Channel\Model\OrderList;
use Mockery;
use Psr\Http\Message\ResponseInterface;

/**
 * Class CreateOrdersApiTest
 * @package JTL\SCX\Client\Channel\Api\Order
 *
 * @covers \JTL\SCX\Client\Channel\Api\Order\OrdersApi
 */
class CreateOrdersApiTest extends AbstractTestCase
{
    public function testCreate(): void
    {
        $request = Mockery::mock(CreateOrdersRequest::class);
        $response = Mockery::mock(ResponseInterface::class);
        $orderList = Mockery::mock(OrderList::class);
        $body = uniqid('body', true);


        $request->shouldReceive('validate')->once();

        $request->shouldReceive('getOrderList')
            ->once()
            ->andReturn($orderList);

        $orderList->shouldReceive('__toString')
            ->once()
            ->andReturn($body);

        $client = $this->createClientMock($response);
        $configuration = $this->createConfigurationMock();
        $requestFactory = $this->createRequestFactoryMock(AbstractApi::HTTP_METHOD_POST, $body);
        $urlFactory = $this->createUrlFactoryMock('/channel/order');
        [$tokenStorage, $authApi] = $this->createAuthMocks();

        $response->shouldReceive('getStatusCode')
            ->once()
            ->andReturn(200);

        $api = new OrdersApi(
            $configuration,
            $tokenStorage,
            $client,
            $authApi,
            $requestFactory,
            $urlFactory
        );

        $apiResponse = $api->create($request);

        $this->assertSame(200, $apiResponse->getStatusCode());
    }
}
