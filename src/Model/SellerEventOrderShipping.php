<?php
/**
 * SellerEventOrderShipping
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

use \ArrayAccess;
use \JTL\SCX\Client\Channel\ObjectSerializer;

/**
 * SellerEventOrderShipping Class Doc Comment
 *
 * @category Class
 * @package  JTL\SCX\Client\Channel
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SellerEventOrderShipping implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SellerEventOrderShipping';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'sellerId' => 'string',
        'orderId' => 'string',
        'shippingComplete' => 'bool',
        'shippingItems' => '\JTL\SCX\Client\Channel\Model\OrderShippingPosition[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'sellerId' => null,
        'orderId' => null,
        'shippingComplete' => null,
        'shippingItems' => null
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
        'orderId' => 'orderId',
        'shippingComplete' => 'shippingComplete',
        'shippingItems' => 'shippingItems'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sellerId' => 'setSellerId',
        'orderId' => 'setOrderId',
        'shippingComplete' => 'setShippingComplete',
        'shippingItems' => 'setShippingItems'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sellerId' => 'getSellerId',
        'orderId' => 'getOrderId',
        'shippingComplete' => 'getShippingComplete',
        'shippingItems' => 'getShippingItems'
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
        $this->container['orderId'] = isset($data['orderId']) ? $data['orderId'] : null;
        $this->container['shippingComplete'] = isset($data['shippingComplete']) ? $data['shippingComplete'] : null;
        $this->container['shippingItems'] = isset($data['shippingItems']) ? $data['shippingItems'] : null;
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

        if ($this->container['orderId'] === null) {
            $invalidProperties[] = "'orderId' can't be null";
        }
        if ((mb_strlen($this->container['orderId']) > 150)) {
            $invalidProperties[] = "invalid value for 'orderId', the character length must be smaller than or equal to 150.";
        }

        if ((mb_strlen($this->container['orderId']) < 1)) {
            $invalidProperties[] = "invalid value for 'orderId', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['shippingComplete'] === null) {
            $invalidProperties[] = "'shippingComplete' can't be null";
        }
        if ($this->container['shippingItems'] === null) {
            $invalidProperties[] = "'shippingItems' can't be null";
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
            throw new \InvalidArgumentException("invalid value for $sellerId when calling SellerEventOrderShipping., must conform to the pattern /^\\w{1,50}$/.");
        }

        $this->container['sellerId'] = $sellerId;

        return $this;
    }

    /**
     * Gets orderId
     *
     * @return string
     */
    public function getOrderId()
    {
        return $this->container['orderId'];
    }

    /**
     * Sets orderId
     *
     * @param string $orderId orderId
     *
     * @return $this
     */
    public function setOrderId($orderId)
    {
        if ((mb_strlen($orderId) > 150)) {
            throw new \InvalidArgumentException('invalid length for $orderId when calling SellerEventOrderShipping., must be smaller than or equal to 150.');
        }
        if ((mb_strlen($orderId) < 1)) {
            throw new \InvalidArgumentException('invalid length for $orderId when calling SellerEventOrderShipping., must be bigger than or equal to 1.');
        }

        $this->container['orderId'] = $orderId;

        return $this;
    }

    /**
     * Gets shippingComplete
     *
     * @return bool
     */
    public function getShippingComplete()
    {
        return $this->container['shippingComplete'];
    }

    /**
     * Sets shippingComplete
     *
     * @param bool $shippingComplete When shipping is completed set to \"true\".
     *
     * @return $this
     */
    public function setShippingComplete($shippingComplete)
    {
        $this->container['shippingComplete'] = $shippingComplete;

        return $this;
    }

    /**
     * Gets shippingItems
     *
     * @return \JTL\SCX\Client\Channel\Model\OrderShippingPosition[]
     */
    public function getShippingItems()
    {
        return $this->container['shippingItems'];
    }

    /**
     * Sets shippingItems
     *
     * @param \JTL\SCX\Client\Channel\Model\OrderShippingPosition[] $shippingItems shippingItems
     *
     * @return $this
     */
    public function setShippingItems($shippingItems)
    {
        $this->container['shippingItems'] = $shippingItems;

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


