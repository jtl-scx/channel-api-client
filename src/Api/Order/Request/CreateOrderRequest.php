<?php declare(strict_types=1);
/**
 * This File is part of JTL-Software
 *
 * User: pkanngiesser
 * Date: 2019/09/20
 */

namespace JTL\SCX\Client\Channel\Api\Order\Request;

use JTL\SCX\Client\Channel\Api\AbstractScxApiRequest;
use JTL\SCX\Client\Channel\Model\OrderList;
use JTL\SCX\Client\Request\ScxApiRequest;

class CreateOrderRequest extends AbstractScxApiRequest
{
    private OrderList $orderList;

    public function __construct(OrderList $orderList)
    {
        $this->orderList = $orderList;
    }

    public function getOrderList(): OrderList
    {
        return $this->orderList;
    }

    public function getUrl(): string
    {
        return '/channel/order';
    }

    public function getHttpMethod(): string
    {
        return ScxApiRequest::HTTP_METHOD_POST;
    }

    public function getBody(): ?string
    {
        return (string)$this->getOrderList();
    }
}
