<?php
/**
 * OfferListingSuccessful
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

use \ArrayAccess;
use \JTL\SCX\Client\Channel\ObjectSerializer;

/**
 * OfferListingSuccessful Class Doc Comment
 *
 * @category Class
 * @package  JTL\SCX\Client\Channel
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OfferListingSuccessful implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OfferListingSuccessful';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'sellerId' => 'string',
        'offerId' => 'int',
        'channelOfferId' => 'string',
        'listedAt' => '\DateTime',
        'listingUrl' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'sellerId' => null,
        'offerId' => 'int64',
        'channelOfferId' => null,
        'listedAt' => 'date-time',
        'listingUrl' => null
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
        'sellerId' => 'sellerId',
        'offerId' => 'offerId',
        'channelOfferId' => 'channelOfferId',
        'listedAt' => 'listedAt',
        'listingUrl' => 'listingUrl'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sellerId' => 'setSellerId',
        'offerId' => 'setOfferId',
        'channelOfferId' => 'setChannelOfferId',
        'listedAt' => 'setListedAt',
        'listingUrl' => 'setListingUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sellerId' => 'getSellerId',
        'offerId' => 'getOfferId',
        'channelOfferId' => 'getChannelOfferId',
        'listedAt' => 'getListedAt',
        'listingUrl' => 'getListingUrl'
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
        $this->container['sellerId'] = isset($data['sellerId']) ? $data['sellerId'] : null;
        $this->container['offerId'] = isset($data['offerId']) ? $data['offerId'] : null;
        $this->container['channelOfferId'] = isset($data['channelOfferId']) ? $data['channelOfferId'] : null;
        $this->container['listedAt'] = isset($data['listedAt']) ? $data['listedAt'] : null;
        $this->container['listingUrl'] = isset($data['listingUrl']) ? $data['listingUrl'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['sellerId'] === null) {
            $invalidProperties[] = "'sellerId' can't be null";
        }
        if (!preg_match("/^\\w{1,50}$/", $this->container['sellerId'])) {
            $invalidProperties[] = "invalid value for 'sellerId', must be conform to the pattern /^\\w{1,50}$/.";
        }

        if ($this->container['offerId'] === null) {
            $invalidProperties[] = "'offerId' can't be null";
        }
        if (($this->container['offerId'] < 1)) {
            $invalidProperties[] = "invalid value for 'offerId', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['channelOfferId']) && (mb_strlen($this->container['channelOfferId']) > 50)) {
            $invalidProperties[] = "invalid value for 'channelOfferId', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['channelOfferId']) && (mb_strlen($this->container['channelOfferId']) < 1)) {
            $invalidProperties[] = "invalid value for 'channelOfferId', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['listedAt'] === null) {
            $invalidProperties[] = "'listedAt' can't be null";
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
     * Gets sellerId
     *
     * @return string
     */
    public function getSellerId()
    {
        return $this->container['sellerId'];
    }

    /**
     * Sets sellerId
     *
     * @param string $sellerId A unique Id identify a Seller on a specific SalesChannel. The SellerId is generated from the Channel itself during the Seller SignUp Process.
     *
     * @return $this
     */
    public function setSellerId($sellerId)
    {

        if ((!preg_match("/^\\w{1,50}$/", $sellerId))) {
            throw new \InvalidArgumentException("invalid value for $sellerId when calling OfferListingSuccessful., must conform to the pattern /^\\w{1,50}$/.");
        }

        $this->container['sellerId'] = $sellerId;

        return $this;
    }

    /**
     * Gets offerId
     *
     * @return int
     */
    public function getOfferId()
    {
        return $this->container['offerId'];
    }

    /**
     * Sets offerId
     *
     * @param int $offerId Unique Offer Id to identify a Offer on a Sales Channel.
     *
     * @return $this
     */
    public function setOfferId($offerId)
    {

        if (($offerId < 1)) {
            throw new \InvalidArgumentException('invalid value for $offerId when calling OfferListingSuccessful., must be bigger than or equal to 1.');
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
     * @param string|null $channelOfferId Channel defined unique Offer Id to identify a Offer on a Sales Channel.
     *
     * @return $this
     */
    public function setChannelOfferId($channelOfferId)
    {
        if (!is_null($channelOfferId) && (mb_strlen($channelOfferId) > 50)) {
            throw new \InvalidArgumentException('invalid length for $channelOfferId when calling OfferListingSuccessful., must be smaller than or equal to 50.');
        }
        if (!is_null($channelOfferId) && (mb_strlen($channelOfferId) < 1)) {
            throw new \InvalidArgumentException('invalid length for $channelOfferId when calling OfferListingSuccessful., must be bigger than or equal to 1.');
        }

        $this->container['channelOfferId'] = $channelOfferId;

        return $this;
    }

    /**
     * Gets listedAt
     *
     * @return \DateTime
     */
    public function getListedAt()
    {
        return $this->container['listedAt'];
    }

    /**
     * Sets listedAt
     *
     * @param \DateTime $listedAt listedAt
     *
     * @return $this
     */
    public function setListedAt($listedAt)
    {
        $this->container['listedAt'] = $listedAt;

        return $this;
    }

    /**
     * Gets listingUrl
     *
     * @return string|null
     */
    public function getListingUrl()
    {
        return $this->container['listingUrl'];
    }

    /**
     * Sets listingUrl
     *
     * @param string|null $listingUrl listingUrl
     *
     * @return $this
     */
    public function setListingUrl($listingUrl)
    {
        $this->container['listingUrl'] = $listingUrl;

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


