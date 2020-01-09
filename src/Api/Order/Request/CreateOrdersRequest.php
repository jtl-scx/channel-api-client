<?php declare(strict_types=1);
/**
 * This File is part of JTL-Software
 *
 * User: pkanngiesser
 * Date: 2019/09/20
 */

namespace JTL\SCX\Client\Channel\Api\Order\Request;

use JTL\SCX\Client\Channel\Model\OrderList;
use JTL\SCX\Client\Channel\Api\AbstractScxApiRequest;

class CreateOrdersRequest extends AbstractScxApiRequest
{
    /**
     * @var OrderList
     */
    private $orderList;

    /**
     * CreateOrdersRequest constructor.
     * @param OrderList $orderList
     */
    public function __construct(OrderList $orderList)
    {
        $this->orderList = $orderList;
    }

    /**
     * @return OrderList
     */
    public function getOrderList(): OrderList
    {
        return $this->orderList;
    }


    public function validate(): void
    {
    }
}
