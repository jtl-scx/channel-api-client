<?php declare(strict_types=1);
/**
 * This File is part of JTL-Software
 *
 * User: avermeulen
 * Date: 2020-08-17
 */

namespace JTL\SCX\Client\Channel\Api\Meta;

use JTL\SCX\Client\Api\AuthAwareApiClient;
use JTL\SCX\Client\Channel\Api\Meta\Request\CreatePaymentRulesRequest;
use JTL\SCX\Client\Channel\Api\Meta\Response\CreatePaymentRulesResponse;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\ResponseInterface;

/**
 * @covers \JTL\SCX\Client\Channel\Api\Meta\PaymentRulesApi
 */
class PaymentRulesApiTest extends TestCase
{
    public function testCanCreatePaymentRules():void
    {
        $requestMock = $this->createMock(CreatePaymentRulesRequest::class);

        $responseMock = $this->createMock(ResponseInterface::class);
        $responseMock->method('getStatusCode')->willReturn(201);
        $apiClientMock = $this->createMock(AuthAwareApiClient::class);
        $apiClientMock->expects($this->once())->method('request')->with($requestMock)->willReturn($responseMock);

        $client = new PaymentRulesApi($apiClientMock);
        $this->assertInstanceOf(CreatePaymentRulesResponse::class, $client->create($requestMock));
    }
}
