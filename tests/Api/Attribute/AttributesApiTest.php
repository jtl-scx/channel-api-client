<?php declare(strict_types=1);
/**
 * This File is part of JTL-Software
 *
 * User: avermeulen
 * Date: 2020-01-13
 */

namespace JTL\SCX\Client\Channel\Api\Attribute;

use JTL\SCX\Client\Api\AuthAwareApiClient;
use JTL\SCX\Client\Channel\Api\Attribute\Request\CreateCategoryAttributesRequest;
use JTL\SCX\Client\Channel\Api\Attribute\Request\CreateGlobalAttributesRequest;
use JTL\SCX\Client\Channel\Api\Attribute\Request\CreateSellerAttributesRequest;
use JTL\SCX\Client\Channel\Api\Attribute\Request\DeleteGlobalAttributeRequest;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\ResponseInterface;

/**
 * Class AttributesApiTest
 * @package JTL\SCX\Client\Channel\Api\Attribute
 *
 * @covers \JTL\SCX\Client\Channel\Api\Attribute\AttributesApi
 */
class AttributesApiTest extends TestCase
{
    public function testCreateSellerAttributes()
    {
        $status = 201;
        $requestMock = $this->createMock(CreateSellerAttributesRequest::class);
        $responseMock = $this->createMock(ResponseInterface::class);
        $responseMock->method('getStatusCode')->willReturn($status);

        $apiClientMock = $this->createMock(AuthAwareApiClient::class);
        $apiClientMock->expects($this->once())->method('request')->with($requestMock)->willReturn($responseMock);

        $client = new AttributesApi($apiClientMock);
        $response = $client->createSellerAttributes($requestMock);

        $this->assertSame($status, $response->getStatusCode());
    }

    public function testDeleteGlobalAttribute()
    {
        $status = 201;
        $requestMock = $this->createMock(DeleteGlobalAttributeRequest::class);
        $responseMock = $this->createMock(ResponseInterface::class);
        $responseMock->method('getStatusCode')->willReturn($status);

        $apiClientMock = $this->createMock(AuthAwareApiClient::class);
        $apiClientMock->expects($this->once())->method('request')->with($requestMock)->willReturn($responseMock);

        $client = new AttributesApi($apiClientMock);
        $response = $client->deleteGlobalAttribute($requestMock);

        $this->assertSame($status, $response->getStatusCode());
    }

    public function testCreateGlobalAttributes()
    {
        $status = 201;
        $requestMock = $this->createMock(CreateGlobalAttributesRequest::class);
        $responseMock = $this->createMock(ResponseInterface::class);
        $responseMock->method('getStatusCode')->willReturn($status);

        $apiClientMock = $this->createMock(AuthAwareApiClient::class);
        $apiClientMock->expects($this->once())->method('request')->with($requestMock)->willReturn($responseMock);

        $client = new AttributesApi($apiClientMock);
        $response = $client->createGlobalAttributes($requestMock);

        $this->assertSame($status, $response->getStatusCode());
    }

    public function testCreateCategoryAttributes()
    {
        $status = 201;
        $requestMock = $this->createMock(CreateCategoryAttributesRequest::class);
        $responseMock = $this->createMock(ResponseInterface::class);
        $responseMock->method('getStatusCode')->willReturn($status);

        $apiClientMock = $this->createMock(AuthAwareApiClient::class);
        $apiClientMock->expects($this->once())->method('request')->with($requestMock)->willReturn($responseMock);

        $client = new AttributesApi($apiClientMock);
        $response = $client->createCategoryAttributes($requestMock);

        $this->assertSame($status, $response->getStatusCode());
    }
}
