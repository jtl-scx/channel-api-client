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
use JTL\SCX\Client\Channel\Api\Order\Request\CreateOrderRequest;
use JTL\SCX\Client\Channel\Api\Order\Request\UpdateOrderAddressRequest;
use JTL\SCX\Client\Channel\Api\Order\Request\UpdateOrderStatusRequest;
use JTL\SCX\Client\Channel\Api\Order\Response\CreateOrdersResponse;
use JTL\SCX\Client\Channel\Api\Order\Response\UpdateOrderAddressResponse;
use JTL\SCX\Client\Channel\Api\Order\Response\UpdateOrderStatusResponse;
use JTL\SCX\Client\Channel\Model\OrderStatus;
use JTL\SCX\Client\Channel\Model\OrderStatusList;
use JTL\SCX\Client\Exception\RequestFailedException;

class OrderApi
{
    private AuthAwareApiClient $client;

    public function __construct(AuthAwareApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * @param CreateOrderRequest $request
     * @return CreateOrdersResponse
     * @throws RequestFailedException
     * @throws GuzzleException
     */
    public function create(CreateOrderRequest $request): CreateOrdersResponse
    {
        $response = $this->client->request($request);

        return new CreateOrdersResponse($response->getStatusCode());
    }

    /**
     * @param UpdateOrderStatusRequest $request
     * @return UpdateOrderStatusResponse
     * @throws GuzzleException
     * @throws RequestFailedException
     */
    public function updateStatus(UpdateOrderStatusRequest $request): UpdateOrderStatusResponse
    {
        $response = $this->client->request($request);

        return new UpdateOrderStatusResponse($response->getStatusCode());
    }

    /**
     * @param UpdateOrderAddressRequest $request
     * @return UpdateOrderAddressResponse
     * @throws GuzzleException
     * @throws RequestFailedException
     */
    public function updateAddress(UpdateOrderAddressRequest $request): UpdateOrderAddressResponse
    {
        $response = $this->client->request($request);

        return new UpdateOrderAddressResponse($response->getStatusCode());
    }
}
