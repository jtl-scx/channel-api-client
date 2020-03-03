<?php declare(strict_types=1);
/**
 * This File is part of JTL-Software
 *
 * User: avermeulen
 * Date: 2020-03-03
 */

namespace JTL\SCX\Client\Channel\Api\Order\Request;

use JTL\SCX\Client\Channel\Api\AbstractScxApiRequest;
use JTL\SCX\Client\Channel\Model\OrderStatusList;
use JTL\SCX\Client\Request\ScxApiRequest;

class UpdateOrderStatusRequest extends AbstractScxApiRequest
{
    private OrderStatusList $orderStatusList;

    public function __construct(OrderStatusList $orderStatusList)
    {
        $this->orderStatusList = $orderStatusList;
    }
    public function getHttpMethod(): string
    {
        return ScxApiRequest::HTTP_METHOD_PUT;
    }

    public function getUrl(): string
    {
        return '/channel/order/status';
    }

    public function getOrderStatusList(): OrderStatusList
    {
        return $this->orderStatusList;
    }

    public function getBody(): ?string
    {
        return (string)$this->getOrderStatusList();
    }
}
