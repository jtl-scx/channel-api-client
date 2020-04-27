<?php declare(strict_types=1);
/**
 * This File is part of JTL-Software
 *
 * User: pkanngiesser
 * Date: 2020/04/27
 */

namespace JTL\SCX\Client\Channel\Api\Report;

use JTL\SCX\Client\Api\AuthAwareApiClient;
use JTL\SCX\Client\Channel\AbstractTestCase;
use JTL\SCX\Client\Channel\Api\Report\Request\SendReportRequest;
use JTL\SCX\Client\Channel\Api\Report\Response\SendReportResponse;
use Psr\Http\Message\ResponseInterface;

/**
 * Class ReportApiTest
 * @package JTL\SCX\Client\Channel\Api\Report
 *
 * @covers \JTL\SCX\Client\Channel\Api\Report\ReportApi
 */
class ReportApiTest extends AbstractTestCase
{
    public function testSendReport(): void
    {
        $requestMock = $this->createMock(SendReportRequest::class);

        $responseMock = $this->createMock(ResponseInterface::class);
        $responseMock->method('getStatusCode')->willReturn(200);
        $apiClientMock = $this->createMock(AuthAwareApiClient::class);
        $apiClientMock->expects($this->once())->method('request')->with($requestMock)->willReturn($responseMock);

        $client = new ReportApi($apiClientMock);
        $this->assertInstanceOf(SendReportResponse::class, $client->sendReport($requestMock));
    }
}
