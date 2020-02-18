<?php declare(strict_types=1);
/**
 * This File is part of JTL-Software
 *
 * User: rherrgesell
 * Date: 1/7/20
 */

namespace JTL\SCX\Client\Channel\Api\Event\Request;

use JTL\SCX\Client\Channel\Api\AbstractScxApiRequest;
use JTL\SCX\Client\Channel\Model\EventIdList;
use JTL\SCX\Client\Request\ScxApiRequest;

class AcknowledgeEventIdListRequest extends AbstractScxApiRequest
{
    private EventIdList $eventIdListModel;

    public function __construct(array $eventIdList)
    {
        $this->eventIdListModel = new EventIdList();
        $this->eventIdListModel->setEventIdList($eventIdList);
    }

    public function getEventIdListModel(): EventIdList
    {
        return $this->eventIdListModel;
    }

    public function getUrl(): string
    {
        return '/channel/event';
    }

    public function getHttpMethod(): string
    {
        return ScxApiRequest::HTTP_METHOD_DELETE;
    }

    public function getBody(): ?string
    {
        return (string)$this->getEventIdListModel();
    }
}
