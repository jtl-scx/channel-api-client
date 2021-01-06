<?php declare(strict_types=1);
/**
 * This File is part of JTL-Software
 *
 * User: pkanngiesser
 * Date: 2019/09/23
 */

namespace JTL\SCX\Client\Channel\Api\Order;

use JTL\SCX\Client\Api\AuthAwareApiClient;
use JTL\SCX\Client\Channel\Api\Order\Request\CreateOrderRequest;
use JTL\SCX\Client\Channel\Api\Order\Request\GetInvoiceRequest;
use JTL\SCX\Client\Channel\Api\Order\Request\RequestOrderCancellationRequest;
use JTL\SCX\Client\Channel\Api\Order\Request\UpdateOrderAddressRequest;
use JTL\SCX\Client\Channel\Api\Order\Request\UpdateOrderStatusRequest;
use JTL\SCX\Client\Channel\Api\Order\Request\UploadInvoiceRequest;
use JTL\SCX\Client\Channel\Api\Order\Response\AbstractOrderResponse;
use JTL\SCX\Client\Channel\Api\Order\Response\CreateOrdersResponse;
use JTL\SCX\Client\Channel\Api\Order\Response\InvoiceResponse;
use JTL\SCX\Client\Channel\Api\Order\Response\RequestOrderCancellationResponse;
use JTL\SCX\Client\Channel\Api\Order\Response\UpdateOrderAddressResponse;
use JTL\SCX\Client\Channel\Api\Order\Response\UpdateOrderStatusResponse;
use JTL\SCX\Client\Channel\Api\Order\Response\UploadInvoiceResponse;
use JTL\SCX\Client\Channel\Model\ErrorResponseList;
use JTL\SCX\Client\Channel\Model\InlineResponse500;
use JTL\SCX\Client\ResponseDeserializer;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamInterface;

/**
 * Class CreateOrdersApiTest
 * @package JTL\SCX\Client\Channel\Api\Order
 *
 * @covers \JTL\SCX\Client\Channel\Api\Order\OrderApi
 */
class OrderApiTest extends TestCase
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

    public function testCanRequestOrderCancellation(): void
    {
        $request = $this->createStub(RequestOrderCancellationRequest::class);
        $streamMock = $this->createMock(StreamInterface::class);
        $streamMock->method('getContents')->willReturn(null);
        $responseMock = $this->createMock(ResponseInterface::class);
        $responseMock->method('getStatusCode')->willReturn(200);
        $responseMock->method('getBody')->willReturn($streamMock);

        $apiClientMock = $this->createMock(AuthAwareApiClient::class);
        $apiClientMock->expects($this->once())->method('request')->with($request)->willReturn($responseMock);

        $client = new OrderApi($apiClientMock);
        $this->assertInstanceOf(RequestOrderCancellationResponse::class, $client->requestOrderCancellation($request));
    }

    public function testCanRetrieveResponseWithError(): void
    {
        $errorJson = '{"foo": "bar"}';

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
        $response = $client->create($requestMock);
        $this->assertInstanceOf(AbstractOrderResponse::class, $response);
        $this->assertTrue($response->hasError());
    }

    public function testItCanDownloadAInvoiceSuccessfully(): void
    {
        $apiClientMock = $this->createMock(AuthAwareApiClient::class);
        $deserializerStub = $this->createStub(ResponseDeserializer::class);

        $client = new OrderApi($apiClientMock, $deserializerStub);

        $testDocument = $this->createStub(StreamInterface::class);

        $request = $this->createMock(GetInvoiceRequest::class);

        $responseMock = $this->createMock(ResponseInterface::class);
        $responseMock->method('getStatusCode')->willReturn(200);
        $responseMock->method('getBody')->willReturn($testDocument);

        $apiClientMock->expects($this->once())->method('request')->with($request)->willReturn($responseMock);

        $response = $client->getInvoice($request);

        $this->assertInstanceOf(InvoiceResponse::class, $response);
        $this->assertTrue($response->isSuccessful());
        $this->assertSame($testDocument, $response->getDocument());
    }

    public function testItCanUploadAInvoiceSuccessfully(): void
    {
        $apiClientMock = $this->createMock(AuthAwareApiClient::class);
        $deserializerStub = $this->createStub(ResponseDeserializer::class);

        $client = new OrderApi($apiClientMock, $deserializerStub);

        $request = $this->createMock(UploadInvoiceRequest::class);

        $responseMock = $this->createMock(ResponseInterface::class);
        $responseMock->method('getStatusCode')->willReturn(201);

        $apiClientMock->expects($this->once())->method('request')->with($request)->willReturn($responseMock);

        $response = $client->uploadInvoice($request);

        $this->assertInstanceOf(UploadInvoiceResponse::class, $response);
        $this->assertTrue($response->isSuccessful());
    }
}
