<?php
/**
 * SellerInventoryItem
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
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace JTL\SCX\Client\Channel\Model;

use \ArrayAccess;
use \JTL\SCX\Client\Channel\ObjectSerializer;

/**
 * SellerInventoryItem Class Doc Comment
 *
 * @category Class
 * @package  JTL\SCX\Client\Channel
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class SellerInventoryItem implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

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
        'channelOfferId' => 'string',
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
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'offerId' => 'int64',
        'channelOfferId' => null,
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
        'channelOfferId' => 'channelOfferId',
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
        'channelOfferId' => 'setChannelOfferId',
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
        'channelOfferId' => 'getChannelOfferId',
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
        $this->container['offerId'] = $data['offerId'] ?? null;
        $this->container['channelOfferId'] = $data['channelOfferId'] ?? null;
        $this->container['sku'] = $data['sku'] ?? null;
        $this->container['ean'] = $data['ean'] ?? null;
        $this->container['quantity'] = $data['quantity'] ?? null;
        $this->container['priceList'] = $data['priceList'] ?? null;
        $this->container['title'] = $data['title'] ?? null;
        $this->container['channelCategoryId'] = $data['channelCategoryId'] ?? null;
        $this->container['channelAttributeList'] = $data['channelAttributeList'] ?? null;
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

        if (!is_null($this->container['channelOfferId']) && (mb_strlen($this->container['channelOfferId']) > 50)) {
            $invalidProperties[] = "invalid value for 'channelOfferId', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['channelOfferId']) && (mb_strlen($this->container['channelOfferId']) < 1)) {
            $invalidProperties[] = "invalid value for 'channelOfferId', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['sku']) && (mb_strlen($this->container['sku']) > 150)) {
            $invalidProperties[] = "invalid value for 'sku', the character length must be smaller than or equal to 150.";
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
     * @return self
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
     * Gets channelOfferId
     *
     * @return string|null
     */
    public function getChannelOfferId()
    {
        return $this->container['channelOfferId'];
    }

    /**
     * Sets channelOfferId
     *
     * @param string|null $channelOfferId Channel defined unique Offer Id to identify an Offer on a Sales Channel.
     *
     * @return self
     */
    public function setChannelOfferId($channelOfferId)
    {
        if (!is_null($channelOfferId) && (mb_strlen($channelOfferId) > 50)) {
            throw new \InvalidArgumentException('invalid length for $channelOfferId when calling SellerInventoryItem., must be smaller than or equal to 50.');
        }
        if (!is_null($channelOfferId) && (mb_strlen($channelOfferId) < 1)) {
            throw new \InvalidArgumentException('invalid length for $channelOfferId when calling SellerInventoryItem., must be bigger than or equal to 1.');
        }

        $this->container['channelOfferId'] = $channelOfferId;

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
     * @return self
     */
    public function setSku($sku)
    {
        if (!is_null($sku) && (mb_strlen($sku) > 150)) {
            throw new \InvalidArgumentException('invalid length for $sku when calling SellerInventoryItem., must be smaller than or equal to 150.');
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
     * @return self
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
     * @return self
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
     * @return self
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
     * @return self
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
     * @return self
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
     * @return self
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
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
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
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
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


