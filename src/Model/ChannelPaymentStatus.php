<?php
/**
 * ChannelPaymentStatus
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
 * ChannelPaymentStatus Class Doc Comment
 *
 * @category Class
 * @description The current payment status  * **PENDING**: Order is not yet paid. * **PAID**: Order is complete paid. * **PARTIALLY_PAID**: Order is partially paid.
 * @package  JTL\SCX\Client\Channel
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ChannelPaymentStatus
{
    /**
     * Possible values of this enum
     */
    const PENDING = 'PENDING';
    const PAID = 'PAID';
    const PARTIALLY_PAID = 'PARTIALLY_PAID';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PENDING,
            self::PAID,
            self::PARTIALLY_PAID,
        ];
    }
}

