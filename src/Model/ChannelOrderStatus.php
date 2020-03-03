<?php
/**
 * ChannelOrderStatus
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
 * # Changelog  ## 2019-09-30  * add `/channel/order/address-update` to update address inforation of an existing order. (EA-2140)  ## 2019-08-27  * add `GET /channel/events` call to retrive all channels avaiable seller events through SCX platform. (EA-1985)
 *
 * The version of the OpenAPI document: 1.0.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.2.3
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace JTL\SCX\Client\Channel\Model;
use \JTL\SCX\Client\Channel\ObjectSerializer;

/**
 * ChannelOrderStatus Class Doc Comment
 *
 * @category Class
 * @description The current order status.  * **CREATED**: Order is created but not yet completed. * **ACCEPTED**: Order is placed and checkout process is complete but not yet shipped. * **SHIPPED**: All items in the order have been shipped * **PARTIALLY_SHIPPED**: Some items (but not all) have been shipped. * **CANCELED_BY_SELLER**: Order is canceled by seller. * **CANCELED_BY_BUYER**: Order is canceled by buyer.
 * @package  JTL\SCX\Client\Channel
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ChannelOrderStatus
{
    /**
     * Possible values of this enum
     */
    const CREATED = 'CREATED';
    const ACCEPTED = 'ACCEPTED';
    const SHIPPED = 'SHIPPED';
    const PARTIALLY_SHIPPED = 'PARTIALLY_SHIPPED';
    const CANCELED_BY_SELLER = 'CANCELED_BY_SELLER';
    const CANCELED_BY_BUYER = 'CANCELED_BY_BUYER';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CREATED,
            self::ACCEPTED,
            self::SHIPPED,
            self::PARTIALLY_SHIPPED,
            self::CANCELED_BY_SELLER,
            self::CANCELED_BY_BUYER,
        ];
    }
}

