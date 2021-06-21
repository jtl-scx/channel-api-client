<?php declare(strict_types=1);
/**
 * This File is part of JTL-Software
 *
 * User: marius
 * Date: 4/29/21
 */

namespace JTL\SCX\Client\Channel\Api\Order\Request;

use JTL\SCX\Client\Channel\Api\AbstractScxApiRequest;
use JTL\SCX\Client\Channel\Model\ReturnAnnouncement;

class ReturnOrderRequest extends AbstractScxApiRequest
{
    private ReturnAnnouncement $returnAnnouncement;

    public function __construct(ReturnAnnouncement $returnAnnouncement)
    {
        $this->returnAnnouncement = $returnAnnouncement;
    }

    public function getUrl(): string
    {
        return '/v1/channel/order/return';
    }

    public function getHttpMethod(): string
    {
        return self::HTTP_METHOD_POST;
    }

    public function getBody(): ?string
    {
        return (String)$this->returnAnnouncement;
    }

    public function getReturnAnnouncement(): ReturnAnnouncement
    {
        return $this->returnAnnouncement;
    }
}
