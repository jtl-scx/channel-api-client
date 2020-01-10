<?php declare(strict_types=1);
/**
 * This File is part of JTL-Software
 *
 * User: pkanngiesser
 * Date: 2019/09/20
 */

namespace JTL\SCX\Client\Channel\Api\Order;

use GuzzleHttp\Exception\GuzzleException;
use JTL\SCX\Client\Api\AuthAwareApiClient;
use JTL\SCX\Client\Channel\Api\Order\Request\CreateOrdersRequest;
use JTL\SCX\Client\Channel\Api\Order\Response\CreateOrdersResponse;
use JTL\SCX\Client\Exception\RequestFailedException;

class OrdersApi
{
    private AuthAwareApiClient $client;

    public function __construct(AuthAwareApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * @param CreateOrdersRequest $request
     * @return CreateOrdersResponse
     * @throws RequestFailedException
     * @throws GuzzleException
     */
    public function create(CreateOrdersRequest $request): CreateOrdersResponse
    {
        $response = $this->client->request($request);

        return new CreateOrdersResponse($response->getStatusCode());
    }
}
