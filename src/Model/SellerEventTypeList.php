<?php
/**
 * SellerEventTypeList
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
 * SellerEventTypeList Class Doc Comment
 *
 * @category Class
 * @package  JTL\SCX\Client\Channel
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SellerEventTypeList
{
    /**
     * Possible values of this enum
     */
    const SYSTEMTEST = 'System:Test';
    const SYSTEMNOTIFICATION = 'System:Notification';
    const SELLERORDER_CONFIRMED = 'Seller:Order.Confirmed';
    const SELLERORDER_SHIPPING = 'Seller:Order.Shipping';
    const SELLERORDER_PAYMENT = 'Seller:Order.Payment';
    const SELLERORDER_CANCELLED = 'Seller:Order.Cancelled';
    const SELLEROFFER_NEW = 'Seller:Offer.New';
    const SELLEROFFER_UPDATE = 'Seller:Offer.Update';
    const SELLEROFFER_END = 'Seller:Offer.End';
    const SELLEROFFER_STOCK_UPDATE = 'Seller:Offer.StockUpdate';
    const SELLEROFFER_PRICE_UPDATE = 'Seller:Offer.PriceUpdate';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SYSTEMTEST,
            self::SYSTEMNOTIFICATION,
            self::SELLERORDER_CONFIRMED,
            self::SELLERORDER_SHIPPING,
            self::SELLERORDER_PAYMENT,
            self::SELLERORDER_CANCELLED,
            self::SELLEROFFER_NEW,
            self::SELLEROFFER_UPDATE,
            self::SELLEROFFER_END,
            self::SELLEROFFER_STOCK_UPDATE,
            self::SELLEROFFER_PRICE_UPDATE,
        ];
    }
}


