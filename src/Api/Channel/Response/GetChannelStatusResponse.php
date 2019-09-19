<?php declare(strict_types=1);
/**
 * This File is part of JTL-Software
 *
 * User: pkanngiesser
 * Date: 2019/09/18
 */

namespace JTL\SCX\Client\Channel\Api\Channel\Response;

use JTL\SCX\Client\Channel\Model\SalesChannelData;
use JTL\SCX\Client\Response\AbstractResponse;

class GetChannelStatusResponse extends AbstractResponse
{
    /** @var SalesChannelData */
    private $salesChannelData;

    /**
     * GetChannelStatusResponse constructor.
     * @param SalesChannelData $salesChannelData
     * @param int $statusCode
     */
    public function __construct(SalesChannelData $salesChannelData, int $statusCode)
    {
        $this->salesChannelData = $salesChannelData;
        parent::__construct($statusCode);
    }

    /**
     * @return SalesChannelData
     */
    public function getSalesChannelData(): SalesChannelData
    {
        return $this->salesChannelData;
    }
}
