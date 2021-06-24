<?php declare(strict_types=1);
/**
 * This File is part of JTL-Software
 *
 * User: marius
 * Date: 4/29/21
 */

namespace JTL\SCX\Client\Channel\Api\Order\Request;

use JTL\SCX\Client\Channel\Api\AbstractScxApiRequest;
use JTL\SCX\Client\Channel\Model\ReturnProcessingResult;

class ReturnOrderProcessingResultRequest extends AbstractScxApiRequest
{
    private ReturnProcessingResult $result;

    public function __construct(ReturnProcessingResult $returnAnnouncement)
    {
        $this->result = $returnAnnouncement;
    }

    public function getUrl(): string
    {
        return '/v1/channel/order/return/processing-result';
    }

    public function getHttpMethod(): string
    {
        return self::HTTP_METHOD_POST;
    }

    public function getBody(): ?string
    {
        return (string)$this->result;
    }
}
