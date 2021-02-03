<?php
/**
 * OrderItemStatus
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
 * OrderItemStatus Class Doc Comment
 *
 * @category Class
 * @description The current for order item.  * **UNSHIPPED**: Item is ready for shipping * **SHIPPED**: Item is sent to buyer * **CANCELED_BY_SELLER**: Order is canceled by seller. * **CANCELED_BY_BUYER**: Order is canceled by buyer. * **RETURNED**: Item is returned to Seller. * **REFUNDED**: Item was returned and refunded.
 * @package  JTL\SCX\Client\Channel
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OrderItemStatus
{
    /**
     * Possible values of this enum
     */
    const UNSHIPPED = 'UNSHIPPED';
    const SHIPPED = 'SHIPPED';
    const CANCELED_BY_SELLER = 'CANCELED_BY_SELLER';
    const CANCELED_BY_BUYER = 'CANCELED_BY_BUYER';
    const RETURNED = 'RETURNED';
    const REFUNDED = 'REFUNDED';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UNSHIPPED,
            self::SHIPPED,
            self::CANCELED_BY_SELLER,
            self::CANCELED_BY_BUYER,
            self::RETURNED,
            self::REFUNDED,
        ];
    }
}


