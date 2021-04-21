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
 * OpenAPI Generator version: 5.1.0
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
      * @param OrderShippingReturnTracking
      * @param \DateTime
      * @param OrderShippingPositionItem
      * @param OrderShippingShippedFrom
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
     * @codeCoverageIgnore
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     * @codeCoverageIgnore
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
     * @codeCoverageIgnore
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @codeCoverageIgnore
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @codeCoverageIgnore
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     * @codeCoverageIgnore
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
     * @codeCoverageIgnore
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['carrier'] === null) {
            $invalidProperties[] = "'carrier' can't be null";
        }
        if (!is_null($this->container['orderItemIdList']) && (is_countable($this->container['orderItemIdList']) && count($this->container['orderItemIdList']) < 0)) {
            $invalidProperties[] = "invalid value for 'orderItemIdList', number of items must be greater than or equal to 0.";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     * @codeCoverageIgnore
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    public function getCarrier(): string
    {
        return $this->container['carrier'];
    }

    public function setCarrier(string $carrier): OrderShippingPosition
    {
        $this->container['carrier'] = $carrier;
        return $this;
    }


    public function getTrackingNumber(): ?string
    {
        return $this->container['trackingNumber'];
    }

    public function setTrackingNumber(?string $trackingNumber): OrderShippingPosition
    {
        $this->container['trackingNumber'] = $trackingNumber;
        return $this;
    }


    public function getReturnTracking(): ?OrderShippingReturnTracking
    {
        return $this->container['returnTracking'];
    }

    public function setReturnTracking(?OrderShippingReturnTracking $returnTracking): OrderShippingPosition
    {
        $this->container['returnTracking'] = $returnTracking;
        return $this;
    }


    public function getShippedAt(): ?\DateTime
    {
        return $this->container['shippedAt'];
    }

    public function setShippedAt(?\DateTime $shippedAt): OrderShippingPosition
    {
        $this->container['shippedAt'] = $shippedAt;
        return $this;
    }


    public function getOrderItemIdList(): ?array
    {
        return $this->container['orderItemIdList'];
    }

    public function setOrderItemIdList(?array $orderItemIdList): OrderShippingPosition
    {
        $this->container['orderItemIdList'] = $orderItemIdList;
        return $this;
    }


    public function getShippedFrom(): ?OrderShippingShippedFrom
    {
        return $this->container['shippedFrom'];
    }

    public function setShippedFrom(?OrderShippingShippedFrom $shippedFrom): OrderShippingPosition
    {
        $this->container['shippedFrom'] = $shippedFrom;
        return $this;
    }

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
     * @codeCoverageIgnore
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
     * @codeCoverageIgnore
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
     * @codeCoverageIgnore
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     * @codeCoverageIgnore
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            $this->jsonSerialize(),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     * @codeCoverageIgnore
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode($this->jsonSerialize());
    }
}


