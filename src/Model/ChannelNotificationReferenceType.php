<?php
/**
 * ChannelNotificationReferenceType
 *
 * PHP version 7.2
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
 * OpenAPI Generator version: 5.1.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace JTL\SCX\Client\Channel\Model;
use JTL\SCX\Client\Channel\EnumInterface;

/**
 * ChannelNotificationReferenceType Class Doc Comment
 *
 * @category Class
 * @package  JTL\SCX\Client\Channel
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ChannelNotificationReferenceType implements EnumInterface
{
    private $value;

    /**
     * Possible values of this enum
     */
    const OFFER = 'OFFER';
    const CHANNELOFFER = 'CHANNELOFFER';
    const ORDERITEMID = 'ORDERITEMID';
    const ORDERID = 'ORDERID';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::OFFER,
            self::CHANNELOFFER,
            self::ORDERITEMID,
            self::ORDERID,
        ];
    }

    
    public static function OFFER(): ChannelNotificationReferenceType
    {
        return new self('OFFER');
    }
    
    public static function CHANNELOFFER(): ChannelNotificationReferenceType
    {
        return new self('CHANNELOFFER');
    }
    
    public static function ORDERITEMID(): ChannelNotificationReferenceType
    {
        return new self('ORDERITEMID');
    }
    
    public static function ORDERID(): ChannelNotificationReferenceType
    {
        return new self('ORDERID');
    }
    

    public function __construct($value)
    {
        $this->value = $value;
    }

    public function getValue()
    {
        return $this->value;
    }
}

