<?php
/**
 * CategoryAttributeConditionalMandantoryBy
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
 * # Changelog  ## 2019-08-27  * add `GET /channel/events` call to retrive all channels avaiable seller events through SCX platform. (EA-1985)
 *
 * The version of the OpenAPI document: 1.0.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.1.1
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
 * CategoryAttributeConditionalMandantoryBy Class Doc Comment
 *
 * @category Class
 * @description This property define conditional manadatory settings
 * @package  JTL\SCX\Client\Channel
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CategoryAttributeConditionalMandantoryBy implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CategoryAttribute_conditionalMandantoryBy';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'attribute_id' => 'int',
        'attribute_values' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'attribute_id' => 'int64',
        'attribute_values' => null
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
        'attribute_id' => 'attributeId',
        'attribute_values' => 'attributeValues'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'attribute_id' => 'setAttributeId',
        'attribute_values' => 'setAttributeValues'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'attribute_id' => 'getAttributeId',
        'attribute_values' => 'getAttributeValues'
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
        $this->container['attribute_id'] = isset($data['attribute_id']) ? $data['attribute_id'] : null;
        $this->container['attribute_values'] = isset($data['attribute_values']) ? $data['attribute_values'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['attribute_id']) && ($this->container['attribute_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'attribute_id', must be bigger than or equal to 1.";
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
     * Gets attribute_id
     *
     * @return int|null
     */
    public function getAttributeId()
    {
        return $this->container['attribute_id'];
    }

    /**
     * Sets attribute_id
     *
     * @param int|null $attribute_id attribute_id
     *
     * @return $this
     */
    public function setAttributeId($attribute_id)
    {

        if (!is_null($attribute_id) && ($attribute_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $attribute_id when calling CategoryAttributeConditionalMandantoryBy., must be bigger than or equal to 1.');
        }

        $this->container['attribute_id'] = $attribute_id;

        return $this;
    }

    /**
     * Gets attribute_values
     *
     * @return string[]|null
     */
    public function getAttributeValues()
    {
        return $this->container['attribute_values'];
    }

    /**
     * Sets attribute_values
     *
     * @param string[]|null $attribute_values attribute_values
     *
     * @return $this
     */
    public function setAttributeValues($attribute_values)
    {
        $this->container['attribute_values'] = $attribute_values;

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
}


