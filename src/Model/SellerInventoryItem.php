<?php
/**
 * SellerInventoryItem
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
 * OpenAPI Generator version: 4.3.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace JTL\SCX\Client\Channel\Model;

use ArrayAccess;
use JTL\SCX\Client\Channel\ObjectSerializer;

/**
 * SellerInventoryItem Class Doc Comment
 *
 * @category Class
 * @package  JTL\SCX\Client\Channel
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SellerInventoryItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SellerInventoryItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'offerId' => 'int',
        'sku' => 'string',
        'ean' => 'string',
        'quantity' => 'string',
        'priceList' => '\JTL\SCX\Client\Channel\Model\PriceContainer[]',
        'title' => 'string',
        'channelCategoryId' => 'string',
        'channelAttributeList' => '\JTL\SCX\Client\Channel\Model\ChannelAttribute[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'offerId' => 'int64',
        'sku' => null,
        'ean' => null,
        'quantity' => null,
        'priceList' => null,
        'title' => null,
        'channelCategoryId' => null,
        'channelAttributeList' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'offerId' => 'offerId',
        'sku' => 'sku',
        'ean' => 'ean',
        'quantity' => 'quantity',
        'priceList' => 'priceList',
        'title' => 'title',
        'channelCategoryId' => 'channelCategoryId',
        'channelAttributeList' => 'channelAttributeList'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'offerId' => 'setOfferId',
        'sku' => 'setSku',
        'ean' => 'setEan',
        'quantity' => 'setQuantity',
        'priceList' => 'setPriceList',
        'title' => 'setTitle',
        'channelCategoryId' => 'setChannelCategoryId',
        'channelAttributeList' => 'setChannelAttributeList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'offerId' => 'getOfferId',
        'sku' => 'getSku',
        'ean' => 'getEan',
        'quantity' => 'getQuantity',
        'priceList' => 'getPriceList',
        'title' => 'getTitle',
        'channelCategoryId' => 'getChannelCategoryId',
        'channelAttributeList' => 'getChannelAttributeList'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['offerId'] = isset($data['offerId']) ? $data['offerId'] : null;
        $this->container['sku'] = isset($data['sku']) ? $data['sku'] : null;
        $this->container['ean'] = isset($data['ean']) ? $data['ean'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['priceList'] = isset($data['priceList']) ? $data['priceList'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['channelCategoryId'] = isset($data['channelCategoryId']) ? $data['channelCategoryId'] : null;
        $this->container['channelAttributeList'] = isset($data['channelAttributeList']) ? $data['channelAttributeList'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['offerId']) && ($this->container['offerId'] < 1)) {
            $invalidProperties[] = "invalid value for 'offerId', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['sku']) && (mb_strlen($this->container['sku']) > 100)) {
            $invalidProperties[] = "invalid value for 'sku', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['sku']) && (mb_strlen($this->container['sku']) < 1)) {
            $invalidProperties[] = "invalid value for 'sku', the character length must be bigger than or equal to 1.";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets offerId
     *
     * @return int|null
     */
    public function getOfferId()
    {
        return $this->container['offerId'];
    }

    /**
     * Sets offerId
     *
     * @param int|null $offerId Unique Offer Id to identify an Offer on a Sales Channel.
     *
     * @return $this
     */
    public function setOfferId($offerId)
    {

        if (!is_null($offerId) && ($offerId < 1)) {
            throw new \InvalidArgumentException('invalid value for $offerId when calling SellerInventoryItem., must be bigger than or equal to 1.');
        }

        $this->container['offerId'] = $offerId;

        return $this;
    }

    /**
     * Gets sku
     *
     * @return string|null
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     *
     * @param string|null $sku Stock keeping unit is a unique Id used to identify one product.
     *
     * @return $this
     */
    public function setSku($sku)
    {
        if (!is_null($sku) && (mb_strlen($sku) > 100)) {
            throw new \InvalidArgumentException('invalid length for $sku when calling SellerInventoryItem., must be smaller than or equal to 100.');
        }
        if (!is_null($sku) && (mb_strlen($sku) < 1)) {
            throw new \InvalidArgumentException('invalid length for $sku when calling SellerInventoryItem., must be bigger than or equal to 1.');
        }

        $this->container['sku'] = $sku;

        return $this;
    }

    /**
     * Gets ean
     *
     * @return string|null
     */
    public function getEan()
    {
        return $this->container['ean'];
    }

    /**
     * Sets ean
     *
     * @param string|null $ean ean
     *
     * @return $this
     */
    public function setEan($ean)
    {
        $this->container['ean'] = $ean;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return string|null
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param string|null $quantity quantity
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets priceList
     *
     * @return \JTL\SCX\Client\Channel\Model\PriceContainer[]|null
     */
    public function getPriceList()
    {
        return $this->container['priceList'];
    }

    /**
     * Sets priceList
     *
     * @param \JTL\SCX\Client\Channel\Model\PriceContainer[]|null $priceList priceList
     *
     * @return $this
     */
    public function setPriceList($priceList)
    {
        $this->container['priceList'] = $priceList;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets channelCategoryId
     *
     * @return string|null
     */
    public function getChannelCategoryId()
    {
        return $this->container['channelCategoryId'];
    }

    /**
     * Sets channelCategoryId
     *
     * @param string|null $channelCategoryId channelCategoryId
     *
     * @return $this
     */
    public function setChannelCategoryId($channelCategoryId)
    {
        $this->container['channelCategoryId'] = $channelCategoryId;

        return $this;
    }

    /**
     * Gets channelAttributeList
     *
     * @return \JTL\SCX\Client\Channel\Model\ChannelAttribute[]|null
     */
    public function getChannelAttributeList()
    {
        return $this->container['channelAttributeList'];
    }

    /**
     * Sets channelAttributeList
     *
     * @param \JTL\SCX\Client\Channel\Model\ChannelAttribute[]|null $channelAttributeList channelAttributeList
     *
     * @return $this
     */
    public function setChannelAttributeList($channelAttributeList)
    {
        $this->container['channelAttributeList'] = $channelAttributeList;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

