<?php declare(strict_types=1);
/**
 * This File is part of JTL-Software
 *
 * User: pkanngiesser
 * Date: 2019/09/19
 */

namespace JTL\SCX\Client\Channel\Api\Event\Response;

use JTL\SCX\Client\Channel\Api\Event\Model\EventContainerList;
use JTL\SCX\Client\Response\AbstractResponse;

class GetSellerEventListResponse extends AbstractResponse
{
    /**
     * @var EventContainerList
     */
    private $eventList;

    /**
     * GetSellerEventListResponse constructor.
     * @param EventContainerList $eventList
     * @param int $statusCode
     */
    public function __construct(EventContainerList $eventList, int $statusCode)
    {
        $this->eventList = $eventList;
        parent::__construct($statusCode);
    }

    /**
     * @return EventContainerList
     */
    public function getEventList(): EventContainerList
    {
        return $this->eventList;
    }
}
