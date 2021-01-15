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
    const SELLERORDER_ACCEPTED = 'Seller:Order.Accepted';
    const SELLERORDER_SHIPPING = 'Seller:Order.Shipping';
    const SELLERORDER_PAYMENT = 'Seller:Order.Payment';
    const SELLERORDER_CANCELLATION_REQUEST = 'Seller:Order.Cancellation.Request';
    const SELLERORDER_CANCELLATION_ACCEPTED = 'Seller:Order.Cancellation.Accepted';
    const SELLERORDER_CANCELLATION_DENIED = 'Seller:Order.Cancellation.Denied';
    const SELLERORDER_INVOICE = 'Seller:Order.Invoice';
    const SELLEROFFER_NEW = 'Seller:Offer.New';
    const SELLEROFFER_UPDATE = 'Seller:Offer.Update';
    const SELLEROFFER_END = 'Seller:Offer.End';
    const SELLEROFFER_STOCK_UPDATE = 'Seller:Offer.StockUpdate';
    const SELLEROFFER_PRICE_UPDATE = 'Seller:Offer.PriceUpdate';
    const SELLERREPORT_REQUEST = 'Seller:Report.Request';
    const SELLERCHANNEL_UNLINKED = 'Seller:Channel.Unlinked';
    const SELLERMETA_SELLER_ATTRIBUTES_UPDATE_REQUEST = 'Seller:Meta.SellerAttributesUpdateRequest';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SYSTEMTEST,
            self::SYSTEMNOTIFICATION,
            self::SELLERORDER_ACCEPTED,
            self::SELLERORDER_SHIPPING,
            self::SELLERORDER_PAYMENT,
            self::SELLERORDER_CANCELLATION_REQUEST,
            self::SELLERORDER_CANCELLATION_ACCEPTED,
            self::SELLERORDER_CANCELLATION_DENIED,
            self::SELLERORDER_INVOICE,
            self::SELLEROFFER_NEW,
            self::SELLEROFFER_UPDATE,
            self::SELLEROFFER_END,
            self::SELLEROFFER_STOCK_UPDATE,
            self::SELLEROFFER_PRICE_UPDATE,
            self::SELLERREPORT_REQUEST,
            self::SELLERCHANNEL_UNLINKED,
            self::SELLERMETA_SELLER_ATTRIBUTES_UPDATE_REQUEST,
        ];
    }
}


