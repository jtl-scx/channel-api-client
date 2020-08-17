<?php declare(strict_types=1);
/**
 * This File is part of JTL-Software
 *
 * User: avermeulen
 * Date: 2020-08-17
 */

namespace JTL\SCX\Client\Channel\Api\Meta;

use JTL\SCX\Client\Api\AuthAwareApiClient;
use JTL\SCX\Client\Channel\Api\Meta\Request\CreateShippingRulesRequest;
use JTL\SCX\Client\Channel\Api\Meta\Response\CreateShippingRulesResponse;

class ShippingRulesApi
{
    private AuthAwareApiClient $client;

    public function __construct(AuthAwareApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * @param CreateShippingRulesRequest $request
     * @return CreateShippingRulesResponse
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \JTL\SCX\Client\Exception\RequestFailedException
     */
    public function create(CreateShippingRulesRequest $request): CreateShippingRulesResponse
    {
        $response = $this->client->request($request);
        return new CreateShippingRulesResponse($response->getStatusCode());
    }
}
