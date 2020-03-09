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
use JTL\SCX\Client\Channel\Api\Order\Request\CreateOrderRequest;
use JTL\SCX\Client\Channel\Api\Order\Request\UpdateOrderAddressRequest;
use JTL\SCX\Client\Channel\Api\Order\Request\UpdateOrderStatusRequest;
use JTL\SCX\Client\Channel\Api\Order\Response\AbstractOrderResponse;
use JTL\SCX\Client\Channel\Api\Order\Response\CreateOrdersResponse;
use JTL\SCX\Client\Channel\Api\Order\Response\UpdateOrderAddressResponse;
use JTL\SCX\Client\Channel\Api\Order\Response\UpdateOrderStatusResponse;
use JTL\SCX\Client\Channel\Model\ErrorResponseList;
use JTL\SCX\Client\Channel\Model\InlineResponse500;
use JTL\SCX\Client\ResponseDeserializer;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamInterface;

/**
 * Class CreateOrdersApiTest
 * @package JTL\SCX\Client\Channel\Api\Order
 *
 * @covers \JTL\SCX\Client\Channel\Api\Order\OrderApi
 */
class OrderApiTest extends AbstractTestCase
{
    public function testCreate(): void
    {
        $requestMock = $this->createMock(CreateOrderRequest::class);
        $streamMock = $this->createMock(StreamInterface::class);
        $streamMock->method('getContents')->willReturn(null);
        $responseMock = $this->createMock(ResponseInterface::class);
        $responseMock->method('getStatusCode')->willReturn(200);
        $responseMock->method('getBody')->willReturn($streamMock);

        $apiClientMock = $this->createMock(AuthAwareApiClient::class);
        $apiClientMock->expects($this->once())->method('request')->with($requestMock)->willReturn($responseMock);

        $client = new OrderApi($apiClientMock);
        $this->assertInstanceOf(CreateOrdersResponse::class, $client->create($requestMock));
    }

    public function testCanUpdateStatus(): void
    {
        $requestMock = $this->createMock(UpdateOrderStatusRequest::class);
        $streamMock = $this->createMock(StreamInterface::class);
        $streamMock->method('getContents')->willReturn(null);
        $responseMock = $this->createMock(ResponseInterface::class);
        $responseMock->method('getStatusCode')->willReturn(200);
        $responseMock->method('getBody')->willReturn($streamMock);

        $apiClientMock = $this->createMock(AuthAwareApiClient::class);
        $apiClientMock->expects($this->once())->method('request')->with($requestMock)->willReturn($responseMock);

        $client = new OrderApi($apiClientMock);
        $this->assertInstanceOf(UpdateOrderStatusResponse::class, $client->updateStatus($requestMock));
    }

    public function testCanUpdateAddress(): void
    {
        $requestMock = $this->createMock(UpdateOrderAddressRequest::class);
        $streamMock = $this->createMock(StreamInterface::class);
        $streamMock->method('getContents')->willReturn(null);
        $responseMock = $this->createMock(ResponseInterface::class);
        $responseMock->method('getStatusCode')->willReturn(200);
        $responseMock->method('getBody')->willReturn($streamMock);

        $apiClientMock = $this->createMock(AuthAwareApiClient::class);
        $apiClientMock->expects($this->once())->method('request')->with($requestMock)->willReturn($responseMock);

        $client = new OrderApi($apiClientMock);
        $this->assertInstanceOf(UpdateOrderAddressResponse::class, $client->updateAddress($requestMock));
    }

    public function testCanRetrieveResponseWithError(): void
    {
        $errorJson ='{"foo": "bar"}';

        $requestMock = $this->createMock(CreateOrderRequest::class);
        $streamMock = $this->createMock(StreamInterface::class);
        $streamMock->method('getContents')->willReturn($errorJson);
        $responseMock = $this->createMock(ResponseInterface::class);
        $responseMock->method('getStatusCode')->willReturn(200);
        $responseMock->method('getBody')->willReturn($streamMock);

        $apiClientMock = $this->createMock(AuthAwareApiClient::class);
        $apiClientMock->expects($this->once())->method('request')->with($requestMock)->willReturn($responseMock);

        $errorResponse = $this->createMock(ErrorResponseList::class);
        $errorResponse->expects($this->atLeastOnce())->method('getErrorList')->willReturn([]);
        $deserializerMock = $this->createMock(ResponseDeserializer::class);
        $deserializerMock->expects($this->once())->method('deserializeObject')->willReturn($errorResponse);

        $client = new OrderApi($apiClientMock, $deserializerMock);
        $response= $client->create($requestMock);
        $this->assertInstanceOf(AbstractOrderResponse::class, $response);
        $this->assertTrue($response->hasError());
    }
}
