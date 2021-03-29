<?php declare(strict_types=1);
/**
 * This File is part of JTL-Software
 *
 * User: pkanngiesser
 * Date: 2021/03/22
 */

namespace JTL\SCX\Client\Channel\Api\Order\Request;

use JTL\SCX\Client\Channel\Api\AbstractScxApiRequest;
use JTL\SCX\Client\Channel\Model\RefundProcessingResult;

class SendRefundProcessingResultRequest extends AbstractScxApiRequest
{
    private RefundProcessingResult $refundProcessingResult;

    public function __construct(RefundProcessingResult $refundProcessingResult)
    {
        $this->refundProcessingResult = $refundProcessingResult;
    }

    public function getUrl(): string
    {
        return '/v1/channel/order/refund/processing-result';
    }

    public function getHttpMethod(): string
    {
        return self::HTTP_METHOD_POST;
    }

    public function getBody(): ?string
    {
        return (string)$this->refundProcessingResult;
    }

    public function getRefundProcessingResult(): RefundProcessingResult
    {
        return $this->refundProcessingResult;
    }
}
