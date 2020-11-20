<?php declare(strict_types=1);
/**
 * This File is part of JTL-Software
 *
 * User: pkanngiesser
 * Date: 2019/09/23
 */

namespace JTL\SCX\Client\Channel\Api\Seller;

use JTL\SCX\Client\Api\AuthAwareApiClient;
use PHPUnit\Framework\TestCase;
use JTL\SCX\Client\Channel\Api\Seller\Request\CreateSellerRequest;
use JTL\SCX\Client\Channel\Api\Seller\Response\CreateSellerResponse;
use Psr\Http\Message\ResponseInterface;

/**
 * Class CreateSellerApiTest
 * @package JTL\SCX\Client\Channel\Api\Seller
 *
 * @covers \JTL\SCX\Client\Channel\Api\Seller\SellerApi
 */
class SellerApiTest extends TestCase
{
    public function testCreateSeller(): void
    {
        $requestMock = $this->createMock(CreateSellerRequest::class);
        $responseMock = $this->createMock(ResponseInterface::class);
        $responseMock->method('getStatusCode')->willReturn(200);

        $apiClientMock = $this->createMock(AuthAwareApiClient::class);
        $apiClientMock->expects($this->once())->method('request')->with($requestMock)->willReturn($responseMock);

        $client = new SellerApi($apiClientMock);
        $this->assertInstanceOf(CreateSellerResponse::class, $client->create($requestMock));
    }
}
