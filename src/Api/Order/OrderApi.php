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
use JTL\SCX\Client\ApiResponseDeserializer;
use JTL\SCX\Client\Channel\Api\Order\Request\CancelOrderRequest;
use JTL\SCX\Client\Channel\Api\Order\Request\CreateOrderRequest;
use JTL\SCX\Client\Channel\Api\Order\Request\UpdateOrderAddressRequest;
use JTL\SCX\Client\Channel\Api\Order\Request\UpdateOrderStatusRequest;
use JTL\SCX\Client\Channel\Api\Order\Response\AbstractOrderResponse;
use JTL\SCX\Client\Channel\Api\Order\Response\CancelOrderResponse;
use JTL\SCX\Client\Channel\Api\Order\Response\CreateOrdersResponse;
use JTL\SCX\Client\Channel\Api\Order\Response\UpdateOrderAddressResponse;
use JTL\SCX\Client\Channel\Api\Order\Response\UpdateOrderStatusResponse;
use JTL\SCX\Client\Channel\Model\ErrorResponseList;
use JTL\SCX\Client\Exception\RequestFailedException;
use JTL\SCX\Client\ResponseDeserializer;
use Psr\Http\Message\ResponseInterface;

class OrderApi
{
    private AuthAwareApiClient $client;
    private ResponseDeserializer $responseDeserializer;

    public function __construct(AuthAwareApiClient $client, ResponseDeserializer $responseDeserializer = null)
    {
        $this->client = $client;
        $this->responseDeserializer = $responseDeserializer ?? new ApiResponseDeserializer();
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

        return $this->createResponse($response, CreateOrdersResponse::class);
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

        return $this->createResponse($response, UpdateOrderStatusResponse::class);
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

        return $this->createResponse($response, UpdateOrderAddressResponse::class);
    }

    public function cancel(CancelOrderRequest $request): CancelOrderResponse
    {
        $response = $this->client->request($request);
        return $this->createResponse($response, CancelOrderResponse::class);
    }

    /**
     * @param ResponseInterface $apiResponse
     * @param string $responseClass
     * @return AbstractOrderResponse|CreateOrdersResponse|UpdateOrderStatusResponse|UpdateOrderAddressResponse|CancelOrderResponse
     */
    private function createResponse(ResponseInterface $apiResponse, string $responseClass): AbstractOrderResponse
    {
        $responseBody = trim((string)$apiResponse->getBody()->getContents());
        if (strlen($responseBody) > 0) {
            /** @var ErrorResponseList $errorResponse */
            $errorResponse = $this->responseDeserializer->deserializeObject($responseBody, ErrorResponseList::class);
            $errorList = $errorResponse->getErrorList();
        }

        return new $responseClass($apiResponse->getStatusCode(), $errorList ?? null);
    }
}
