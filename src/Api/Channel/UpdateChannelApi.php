<?php declare(strict_types=1);
/**
 * This File is part of JTL-Software
 *
 * User: pkanngiesser
 * Date: 2019/09/19
 */

namespace JTL\SCX\Client\Channel\Api\Channel;

use GuzzleHttp\Exception\GuzzleException;
use JTL\SCX\Client\Api\AbstractApi;
use JTL\SCX\Client\Api\AbstractAuthAwareApi;
use JTL\SCX\Client\Channel\Api\Channel\Request\UpdateChannelRequest;
use JTL\SCX\Client\Channel\Api\Channel\Response\UpdateChannelResponse;
use JTL\SCX\Client\Exception\RequestFailedException;

class UpdateChannelApi extends AbstractAuthAwareApi
{
    /**
     * @param UpdateChannelRequest $channelRequest
     * @return UpdateChannelResponse
     * @throws RequestFailedException
     * @throws GuzzleException
     */
    public function update(UpdateChannelRequest $channelRequest): UpdateChannelResponse
    {
        $response = $this->request((string)$channelRequest->getChannelUpdate());
        return new UpdateChannelResponse($response->getStatusCode());
    }

    /**
     * @return string
     */
    protected function getUrl(): string
    {
        return '/channel';
    }

    /**
     * @return string
     */
    protected function getHttpMethod(): string
    {
        return AbstractApi::HTTP_METHOD_PATCH;
    }
}
