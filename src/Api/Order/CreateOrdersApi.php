<?php declare(strict_types=1);
/**
 * This File is part of JTL-Software
 *
 * User: pkanngiesser
 * Date: 2019/09/20
 */

namespace JTL\SCX\Client\Channel\Api\Order;

use JTL\SCX\Client\Api\AbstractApi;
use JTL\SCX\Client\Channel\Api\Order\Request\CreateOrdersRequest;
use JTL\SCX\Client\Channel\Api\Order\Response\CreateOrdersResponse;
use JTL\SCX\Client\Exception\RequestFailedException;

class CreateOrdersApi extends AbstractApi
{
    /**
     * @param CreateOrdersRequest $request
     * @return CreateOrdersResponse
     * @throws RequestFailedException
     */
    public function create(CreateOrdersRequest $request): CreateOrdersResponse
    {
        $request->validate();
        $response = $this->request((string)$request->getOrderList());

        return new CreateOrdersResponse($response->getStatusCode());
    }

    /**
     * @return string
     */
    protected function getUrl(): string
    {
        return '/channel/order';
    }

    /**
     * @return string
     */
    protected function getHttpMethod(): string
    {
        return AbstractApi::HTTP_METHOD_POST;
    }
}
