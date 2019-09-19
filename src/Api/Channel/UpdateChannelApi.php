<?php declare(strict_types=1);
/**
 * This File is part of JTL-Software
 *
 * User: pkanngiesser
 * Date: 2019/09/19
 */

namespace JTL\SCX\Client\Channel\Api\Channel;

use JTL\SCX\Client\Api\AbstractApi;
use JTL\SCX\Client\Channel\Api\Channel\Request\UpdateChannelRequest;
use JTL\SCX\Client\Channel\Api\Channel\Response\UpdateChannelResponse;
use JTL\SCX\Client\Exception\RequestFailedException;

class UpdateChannelApi extends AbstractApi
{
    /**
     * @param UpdateChannelRequest $channelRequest
     * @return UpdateChannelResponse
     * @throws RequestFailedException
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
