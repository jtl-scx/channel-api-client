<?php declare(strict_types=1);
/**
 * This File is part of JTL-Software
 *
 * User: pkanngiesser
 * Date: 2020/04/24
 */

namespace JTL\SCX\Client\Channel\Api\Report;

use GuzzleHttp\Exception\GuzzleException;
use JTL\SCX\Client\Api\AuthAwareApiClient;
use JTL\SCX\Client\Channel\Api\Report\Request\SendReportRequest;
use JTL\SCX\Client\Channel\Api\Report\Response\SendReportResponse;
use JTL\SCX\Client\Exception\RequestFailedException;

class ReportApi
{
    /**
     * @var AuthAwareApiClient
     */
    private AuthAwareApiClient $client;

    public function __construct(AuthAwareApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * @param SendReportRequest $request
     * @return SendReportResponse
     * @throws GuzzleException
     * @throws RequestFailedException
     */
    public function sendReport(SendReportRequest $request): SendReportResponse
    {
        $response = $this->client->request($request);
        return new SendReportResponse($response->getStatusCode());
    }
}
