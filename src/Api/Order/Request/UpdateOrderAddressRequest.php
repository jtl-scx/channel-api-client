<?php declare(strict_types=1);
/**
 * This File is part of JTL-Software
 *
 * User: avermeulen
 * Date: 2020-03-03
 */

namespace JTL\SCX\Client\Channel\Api\Order\Request;

use JTL\SCX\Client\Channel\Api\AbstractScxApiRequest;
use JTL\SCX\Client\Channel\Model\OrderAddressUpdateList;
use JTL\SCX\Client\Request\ScxApiRequest;

class UpdateOrderAddressRequest extends AbstractScxApiRequest
{
    private OrderAddressUpdateList $orderAddressList;

    public function __construct(OrderAddressUpdateList $orderAddressList)
    {
        $this->orderAddressList = $orderAddressList;
    }

    public function getHttpMethod(): string
    {
        return ScxApiRequest::HTTP_METHOD_PUT;
    }

    public function getUrl(): string
    {
        return '/channel/order/address-update';
    }

    public function getOrderAddressList(): OrderAddressUpdateList
    {
        return $this->orderAddressList;
    }

    public function getBody(): ?string
    {
        return (string)$this->getOrderAddressList();
    }
}
