<?php declare(strict_types=1);
/**
 * This File is part of JTL-Software
 *
 * User: rherrgesell
 * Date: 1/7/20
 */

namespace JTL\SCX\Client\Channel\Api\Event\Request;

use JTL\SCX\Client\Channel\Model\EventIdList;
use JTL\SCX\Client\Exception\RequestValidationFailedException;
use JTL\SCX\Client\Request\AbstractRequest;

class AcknowledgeEventIdListRequest extends AbstractRequest
{
    /**
     * @var EventIdList
     */
    private $eventIdListModel;

    /**
     * AcknowledgeEventIdListRequest constructor.
     * @param string[] $eventIdList
     */
    public function __construct(array $eventIdList)
    {
        $this->eventIdListModel = new EventIdList();
        $this->eventIdListModel->setEventIdList($eventIdList);
    }

    /**
     * @return EventIdList
     */
    public function getEventIdListModel(): EventIdList
    {
        return $this->eventIdListModel;
    }

    /**
     * @throws RequestValidationFailedException
     */
    public function validate(): void
    {
        $this->validateModel($this->getEventIdListModel());
    }
}
