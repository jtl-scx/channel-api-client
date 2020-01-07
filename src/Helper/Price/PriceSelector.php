<?php declare(strict_types=1);
/**
 * This File is part of JTL-Software
 *
 * User: rherrgesell
 * Date: 12/17/19
 */

namespace JTL\SCX\Client\Channel\Helper\Price;

use JTL\SCX\Client\Channel\Model\PriceContainer;
use JTL\SCX\Client\Channel\Model\QuantityPrice;

class PriceSelector
{
    public function priceContainerByType(array $priceList, PriceType $priceType): ?PriceContainer
    {
        foreach ($priceList as $priceContainer) {
            if ($priceContainer instanceof PriceContainer && $priceContainer->getId() === (string)$priceType) {
                return $priceContainer;
            }
        }
        return null;
    }

    public function minimumQuantityPriceByType(array $priceList, PriceType $priceType): ?QuantityPrice
    {
        $selectedPrice = null;
        $priceContainer = $this->priceContainerByType($priceList, $priceType);
        $priceList = [];
        if ($priceContainer instanceof PriceContainer) {
            $priceList = $priceContainer->getQuantityPriceList();
        }

        $startQuantity = 9999999999999;
        foreach ($priceList as $quantityPrice) {
            $quantity = (float)$quantityPrice->getQuantity();
            if ($quantity <= $startQuantity) {
                $selectedPrice = $quantityPrice;
                $startQuantity = $quantity;
            }
        }

        return $selectedPrice;
    }
}
