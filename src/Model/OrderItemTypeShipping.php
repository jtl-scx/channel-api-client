<?php
/**
 * OrderItemTypeShipping
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
 * OrderItemTypeShipping Class Doc Comment
 *
 * @category Class
 * @package  JTL\SCX\Client\Channel
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class OrderItemTypeShipping implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OrderItemTypeShipping';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'orderItemId' => 'string',
        'type' => 'string',
        'grossPrice' => 'string',
        'taxPercent' => 'string',
        'shippingGroup' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'orderItemId' => 'string',
        'type' => null,
        'grossPrice' => null,
        'taxPercent' => null,
        'shippingGroup' => null
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
        'orderItemId' => 'orderItemId',
        'type' => 'type',
        'grossPrice' => 'grossPrice',
        'taxPercent' => 'taxPercent',
        'shippingGroup' => 'shippingGroup'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'orderItemId' => 'setOrderItemId',
        'type' => 'setType',
        'grossPrice' => 'setGrossPrice',
        'taxPercent' => 'setTaxPercent',
        'shippingGroup' => 'setShippingGroup'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'orderItemId' => 'getOrderItemId',
        'type' => 'getType',
        'grossPrice' => 'getGrossPrice',
        'taxPercent' => 'getTaxPercent',
        'shippingGroup' => 'getShippingGroup'
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
        $this->container['orderItemId'] = $data['orderItemId'] ?? null;
        $this->container['type'] = $data['type'] ?? 'SHIPPING';
        $this->container['grossPrice'] = $data['grossPrice'] ?? null;
        $this->container['taxPercent'] = $data['taxPercent'] ?? null;
        $this->container['shippingGroup'] = $data['shippingGroup'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     * @codeCoverageIgnore
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['orderItemId'] === null) {
            $invalidProperties[] = "'orderItemId' can't be null";
        }
        if ((mb_strlen($this->container['orderItemId']) > 50)) {
            $invalidProperties[] = "invalid value for 'orderItemId', the character length must be smaller than or equal to 50.";
        }

        if ((mb_strlen($this->container['orderItemId']) < 1)) {
            $invalidProperties[] = "invalid value for 'orderItemId', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['grossPrice'] === null) {
            $invalidProperties[] = "'grossPrice' can't be null";
        }
        if ($this->container['taxPercent'] === null) {
            $invalidProperties[] = "'taxPercent' can't be null";
        }
        if ($this->container['shippingGroup'] === null) {
            $invalidProperties[] = "'shippingGroup' can't be null";
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


    public function getOrderItemId(): string
    {
        return $this->container['orderItemId'];
    }

    public function setOrderItemId(string $orderItemId): OrderItemTypeShipping
    {
        $this->container['orderItemId'] = $orderItemId;
        return $this;
    }


    public function getType(): string
    {
        return $this->container['type'];
    }

    public function setType(string $type): OrderItemTypeShipping
    {
        $this->container['type'] = $type;
        return $this;
    }


    public function getGrossPrice(): string
    {
        return $this->container['grossPrice'];
    }

    public function setGrossPrice(string $grossPrice): OrderItemTypeShipping
    {
        $this->container['grossPrice'] = $grossPrice;
        return $this;
    }


    public function getTaxPercent(): string
    {
        return $this->container['taxPercent'];
    }

    public function setTaxPercent(string $taxPercent): OrderItemTypeShipping
    {
        $this->container['taxPercent'] = $taxPercent;
        return $this;
    }


    public function getShippingGroup(): string
    {
        return $this->container['shippingGroup'];
    }

    public function setShippingGroup(string $shippingGroup): OrderItemTypeShipping
    {
        $this->container['shippingGroup'] = $shippingGroup;
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


