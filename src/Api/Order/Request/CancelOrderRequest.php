<?php declare(strict_types=1);
/**
 * This File is part of JTL-Software
 *
 * User: mbrandt
 * Date: 12/1/20
 */

namespace JTL\SCX\Client\Channel\Api\Order\Request;

use JTL\SCX\Client\Channel\Api\AbstractScxApiRequest;
use JTL\SCX\Client\Channel\Model\OrderCancellationRequest;
use JTL\SCX\Client\Request\ScxApiRequest;

class CancelOrderRequest extends AbstractScxApiRequest
{
    private OrderCancellationRequest $cancellationRequest;

    public function __construct(OrderCancellationRequest $cancellationRequest)
    {
        $this->cancellationRequest = $cancellationRequest;
    }

    public function getCancellationRequest(): OrderCancellationRequest
    {
        return $this->cancellationRequest;
    }

    public function getUrl(): string
    {
        return '/v1/channel/order/cancellation';
    }

    public function getHttpMethod(): string
    {
        return ScxApiRequest::HTTP_METHOD_POST;
    }

    public function getBody(): ?string
    {
        return (string)$this->cancellationRequest;
    }
}
