<?php
/**
 * OrderShippingPosition
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
 * OrderShippingPosition Class Doc Comment
 *
 * @category Class
 * @package  JTL\SCX\Client\Channel
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class OrderShippingPosition implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OrderShippingPosition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'carrier' => 'string',
        'trackingNumber' => 'string',
        'returnTracking' => '\JTL\SCX\Client\Channel\Model\OrderShippingReturnTracking',
        'shippedAt' => '\DateTime',
        'orderItemIdList' => '\JTL\SCX\Client\Channel\Model\OrderShippingPositionItem[]',
        'shippedFrom' => '\JTL\SCX\Client\Channel\Model\OrderShippingShippedFrom'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'carrier' => null,
        'trackingNumber' => null,
        'returnTracking' => null,
        'shippedAt' => 'date-time',
        'orderItemIdList' => null,
        'shippedFrom' => null
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
        'carrier' => 'carrier',
        'trackingNumber' => 'trackingNumber',
        'returnTracking' => 'returnTracking',
        'shippedAt' => 'shippedAt',
        'orderItemIdList' => 'orderItemIdList',
        'shippedFrom' => 'shippedFrom'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'carrier' => 'setCarrier',
        'trackingNumber' => 'setTrackingNumber',
        'returnTracking' => 'setReturnTracking',
        'shippedAt' => 'setShippedAt',
        'orderItemIdList' => 'setOrderItemIdList',
        'shippedFrom' => 'setShippedFrom'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'carrier' => 'getCarrier',
        'trackingNumber' => 'getTrackingNumber',
        'returnTracking' => 'getReturnTracking',
        'shippedAt' => 'getShippedAt',
        'orderItemIdList' => 'getOrderItemIdList',
        'shippedFrom' => 'getShippedFrom'
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
        $this->container['carrier'] = $data['carrier'] ?? null;
        $this->container['trackingNumber'] = $data['trackingNumber'] ?? null;
        $this->container['returnTracking'] = $data['returnTracking'] ?? null;
        $this->container['shippedAt'] = $data['shippedAt'] ?? null;
        $this->container['orderItemIdList'] = $data['orderItemIdList'] ?? null;
        $this->container['shippedFrom'] = $data['shippedFrom'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['carrier'] === null) {
            $invalidProperties[] = "'carrier' can't be null";
        }
        if (!is_null($this->container['orderItemIdList']) && (count($this->container['orderItemIdList']) < 0)) {
            $invalidProperties[] = "invalid value for 'orderItemIdList', number of items must be greater than or equal to 0.";
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
     * Gets carrier
     *
     * @return string
     */
    public function getCarrier()
    {
        return $this->container['carrier'];
    }

    /**
     * Sets carrier
     *
     * @param string $carrier carrier
     *
     * @return self
     */
    public function setCarrier($carrier)
    {
        $this->container['carrier'] = $carrier;

        return $this;
    }

    /**
     * Gets trackingNumber
     *
     * @return string|null
     */
    public function getTrackingNumber()
    {
        return $this->container['trackingNumber'];
    }

    /**
     * Sets trackingNumber
     *
     * @param string|null $trackingNumber trackingNumber
     *
     * @return self
     */
    public function setTrackingNumber($trackingNumber)
    {
        $this->container['trackingNumber'] = $trackingNumber;

        return $this;
    }

    /**
     * Gets returnTracking
     *
     * @return \JTL\SCX\Client\Channel\Model\OrderShippingReturnTracking|null
     */
    public function getReturnTracking()
    {
        return $this->container['returnTracking'];
    }

    /**
     * Sets returnTracking
     *
     * @param \JTL\SCX\Client\Channel\Model\OrderShippingReturnTracking|null $returnTracking returnTracking
     *
     * @return self
     */
    public function setReturnTracking($returnTracking)
    {
        $this->container['returnTracking'] = $returnTracking;

        return $this;
    }

    /**
     * Gets shippedAt
     *
     * @return \DateTime|null
     */
    public function getShippedAt()
    {
        return $this->container['shippedAt'];
    }

    /**
     * Sets shippedAt
     *
     * @param \DateTime|null $shippedAt shippedAt
     *
     * @return self
     */
    public function setShippedAt($shippedAt)
    {
        $this->container['shippedAt'] = $shippedAt;

        return $this;
    }

    /**
     * Gets orderItemIdList
     *
     * @return \JTL\SCX\Client\Channel\Model\OrderShippingPositionItem[]|null
     */
    public function getOrderItemIdList()
    {
        return $this->container['orderItemIdList'];
    }

    /**
     * Sets orderItemIdList
     *
     * @param \JTL\SCX\Client\Channel\Model\OrderShippingPositionItem[]|null $orderItemIdList Container to describe what items are included.
     *
     * @return self
     */
    public function setOrderItemIdList($orderItemIdList)
    {


        if (!is_null($orderItemIdList) && (count($orderItemIdList) < 0)) {
            throw new \InvalidArgumentException('invalid length for $orderItemIdList when calling OrderShippingPosition., number of items must be greater than or equal to 0.');
        }
        $this->container['orderItemIdList'] = $orderItemIdList;

        return $this;
    }

    /**
     * Gets shippedFrom
     *
     * @return \JTL\SCX\Client\Channel\Model\OrderShippingShippedFrom|null
     */
    public function getShippedFrom()
    {
        return $this->container['shippedFrom'];
    }

    /**
     * Sets shippedFrom
     *
     * @param \JTL\SCX\Client\Channel\Model\OrderShippingShippedFrom|null $shippedFrom shippedFrom
     *
     * @return self
     */
    public function setShippedFrom($shippedFrom)
    {
        $this->container['shippedFrom'] = $shippedFrom;

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


