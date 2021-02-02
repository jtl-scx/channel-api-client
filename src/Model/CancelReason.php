<?php
/**
 * CancelReason
 *
 * PHP version 5
 *
 * @category Class
 * @package  JTL\SCX\Client\Channel
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * SCX Channel API
 *
 * SCX Channel API
 *
 * The version of the OpenAPI document: 1.0.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace JTL\SCX\Client\Channel\Model;
use \JTL\SCX\Client\Channel\ObjectSerializer;

/**
 * CancelReason Class Doc Comment
 *
 * @category Class
 * @description * BUYER_CANCELLED: the buyer cancelled the order. * UNDELIVERABLE_TO_SHIPPING_ADDRESS: Could not deliver to the address given by the buyer. * UNDELIVERABLE_BY_CARRIER: Carrier do not ship to the buyerss location. * OUT_OF_STOCK: The item is out of stock, for example because you are temporarily or permenantly sold out. * DELAYED_INVENTORY: The item is not in your inventory and there is a delay in delivery by the supplier. * PRICING_ERROR: The price on the connected marketplace was incorrect. * OTHER: Well, objvoiusly there is some reason missing in this list.
 * @package  JTL\SCX\Client\Channel
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CancelReason
{
    /**
     * Possible values of this enum
     */
    const BUYER_CANCELLED = 'BUYER_CANCELLED';
    const UNDELIVERABLE_TO_SHIPPING_ADDRESS = 'UNDELIVERABLE_TO_SHIPPING_ADDRESS';
    const UNDELIVERABLE_BY_CARRIER = 'UNDELIVERABLE_BY_CARRIER';
    const OUT_OF_STOCK = 'OUT_OF_STOCK';
    const DELAYED_INVENTORY = 'DELAYED_INVENTORY';
    const PRICING_ERROR = 'PRICING_ERROR';
    const OTHER = 'OTHER';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::BUYER_CANCELLED,
            self::UNDELIVERABLE_TO_SHIPPING_ADDRESS,
            self::UNDELIVERABLE_BY_CARRIER,
            self::OUT_OF_STOCK,
            self::DELAYED_INVENTORY,
            self::PRICING_ERROR,
            self::OTHER,
        ];
    }
}


