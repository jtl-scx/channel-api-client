<?php declare(strict_types=1);
/**
 * This File is part of JTL-Software
 *
 * User: pkanngiesser
 * Date: 2019/09/19
 */

namespace JTL\SCX\Client\Channel\Api\Event\Response;

use JTL\SCX\Client\Channel\Api\Event\Model\EventContainer;
use JTL\SCX\Client\Response\AbstractResponse;

class GetSellerEventListResponse extends AbstractResponse
{
    /**
     * @var EventContainer[]
     */
    private $eventList;

    /**
     * GetSellerEventListResponse constructor.
     * @param EventContainer[] $eventList
     * @param int $statusCode
     */
    public function __construct(array $eventList, int $statusCode)
    {
        $this->eventList = $eventList;
        parent::__construct($statusCode);
    }

    /**
     * @return EventContainer[]
     */
    public function getEventList(): array
    {
        return $this->eventList;
    }
}
