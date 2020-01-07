<?php declare(strict_types=1);
/**
 * This File is part of JTL-Software
 *
 * User: rherrgesell
 * Date: 1/7/20
 */

namespace JTL\SCX\Client\Channel\Api\Event;

use JTL\SCX\Client\Api\AbstractApi;
use JTL\SCX\Client\Api\AbstractAuthAwareApi;
use JTL\SCX\Client\Channel\Api\Event\Request\AcknowledgeEventIdListRequest;

class AcknowledgeEventListApi extends AbstractAuthAwareApi
{
    /**
     * @param AcknowledgeEventIdListRequest $request
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \JTL\SCX\Client\Exception\RequestFailedException
     * @throws \JTL\SCX\Client\Exception\RequestValidationFailedException
     */
    public function ack(AcknowledgeEventIdListRequest $request)
    {
        $request->validate();
        $this->request((string)$request->getEventIdListModel());
    }

    /**
     * @inheritDoc
     */
    protected function getUrl(): string
    {
        return '/channel/event';
    }

    /**
     * @inheritDoc
     */
    protected function getHttpMethod(): string
    {
        return AbstractApi::HTTP_METHOD_DELETE;
    }
}
