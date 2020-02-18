<?php declare(strict_types=1);
/**
 * This File is part of JTL-Software
 *
 * User: pkanngiesser
 * Date: 2019/09/19
 */

namespace JTL\SCX\Client\Channel\Api\Channel;

use GuzzleHttp\Exception\GuzzleException;
use JTL\SCX\Client\Api\AuthAwareApiClient;
use JTL\SCX\Client\Channel\Api\Channel\Request\GetChannelStatusRequest;
use JTL\SCX\Client\Channel\Api\Channel\Request\UpdateChannelRequest;
use JTL\SCX\Client\Channel\Api\Channel\Response\GetChannelStatusResponse;
use JTL\SCX\Client\Channel\Api\Channel\Response\UpdateChannelResponse;
use JTL\SCX\Client\Channel\Model\ChannelStatus;
use JTL\SCX\Client\Exception\RequestFailedException;
use JTL\SCX\Client\ResponseDeserializer;

class ChannelApi
{
    private AuthAwareApiClient $client;
    private ResponseDeserializer $responseDeserializer;

    public function __construct(AuthAwareApiClient $client, ResponseDeserializer $responseDeserializer)
    {
        $this->client = $client;
        $this->responseDeserializer = $responseDeserializer;
    }

    /**
     * @param UpdateChannelRequest $channelRequest
     * @return UpdateChannelResponse
     * @throws RequestFailedException
     * @throws GuzzleException
     */
    public function update(UpdateChannelRequest $channelRequest): UpdateChannelResponse
    {
        $response = $this->client->request($channelRequest);
        return new UpdateChannelResponse($response->getStatusCode());
    }

    /**
     * @param GetChannelStatusRequest $request
     * @return GetChannelStatusResponse
     * @throws GuzzleException
     * @throws RequestFailedException
     */
    public function getStatus(GetChannelStatusRequest $request): GetChannelStatusResponse
    {
        $response = $this->client->request($request);
        /** @var ChannelStatus $model */
        $model = $this->responseDeserializer->deserialize($response, ChannelStatus::class);

        return new GetChannelStatusResponse($model->getChannel(), $response->getStatusCode());
    }
}
