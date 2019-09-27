<?php declare(strict_types=1);
/**
 * This File is part of JTL-Software
 *
 * User: pkanngiesser
 * Date: 2019/09/18
 */

namespace JTL\SCX\Client\Channel\Api\Channel;

use GuzzleHttp\Exception\GuzzleException;
use JTL\SCX\Client\Api\AbstractApi;
use JTL\SCX\Client\Api\AbstractAuthAwareApi;
use JTL\SCX\Client\Channel\Api\Channel\Response\GetChannelStatusResponse;
use JTL\SCX\Client\Channel\Model\ChannelStatus;
use JTL\SCX\Client\Channel\ObjectSerializer;
use JTL\SCX\Client\Exception\RequestFailedException;

class GetChannelStatusApi extends AbstractAuthAwareApi
{
    /**
     * @return GetChannelStatusResponse
     * @throws RequestFailedException
     * @throws GuzzleException
     */
    public function getStatus(): GetChannelStatusResponse
    {
        $response = $this->request();
        /** @var ChannelStatus $model */
        $model = ObjectSerializer::deserialize($response->getBody()->getContents(), ChannelStatus::class);

        return new GetChannelStatusResponse($model->getChannel(), $response->getStatusCode());
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
        return AbstractApi::HTTP_METHOD_GET;
    }
}
