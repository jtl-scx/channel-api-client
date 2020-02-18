<?php declare(strict_types=1);
/**
 * This File is part of JTL-Software
 *
 * User: pkanngiesser
 * Date: 2019/09/19
 */

namespace JTL\SCX\Client\Channel\Api\Price;

use GuzzleHttp\Exception\GuzzleException;
use JTL\SCX\Client\Api\AuthAwareApiClient;
use JTL\SCX\Client\Channel\Api\Price\Request\CreatePriceTypeRequest;
use JTL\SCX\Client\Channel\Api\Price\Response\CreatePriceTypeResponse;
use JTL\SCX\Client\Exception\RequestFailedException;

class PriceApi
{
    private AuthAwareApiClient $client;

    public function __construct(AuthAwareApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * @param CreatePriceTypeRequest $request
     * @return CreatePriceTypeResponse
     * @throws GuzzleException
     * @throws RequestFailedException
     */
    public function create(CreatePriceTypeRequest $request): CreatePriceTypeResponse
    {
        $response = $this->client->request($request);
        return new CreatePriceTypeResponse($response->getStatusCode());
    }
}
