<?php
/**
 * ChannelEventNotification
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
 * ChannelEventNotification Class Doc Comment
 *
 * @category Class
 * @package  JTL\SCX\Client\Channel
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ChannelEventNotification implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ChannelEventNotification';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'sellerId' => 'string',
        'severity' => 'string',
        'message' => 'string',
        'reference' => '\JTL\SCX\Client\Channel\Model\ChannelNotificationReference'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'sellerId' => null,
        'severity' => null,
        'message' => null,
        'reference' => null
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
        'severity' => 'severity',
        'message' => 'message',
        'reference' => 'reference'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sellerId' => 'setSellerId',
        'severity' => 'setSeverity',
        'message' => 'setMessage',
        'reference' => 'setReference'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sellerId' => 'getSellerId',
        'severity' => 'getSeverity',
        'message' => 'getMessage',
        'reference' => 'getReference'
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

    const SEVERITY_INFO = 'INFO';
    const SEVERITY_WARNING = 'WARNING';
    const SEVERITY_ERROR = 'ERROR';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSeverityAllowableValues()
    {
        return [
            self::SEVERITY_INFO,
            self::SEVERITY_WARNING,
            self::SEVERITY_ERROR,
        ];
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
        $this->container['severity'] = isset($data['severity']) ? $data['severity'] : 'INFO';
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['reference'] = isset($data['reference']) ? $data['reference'] : null;
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

        $allowedValues = $this->getSeverityAllowableValues();
        if (!is_null($this->container['severity']) && !in_array($this->container['severity'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'severity', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['message'] === null) {
            $invalidProperties[] = "'message' can't be null";
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
            throw new \InvalidArgumentException("invalid value for $sellerId when calling ChannelEventNotification., must conform to the pattern /^\\w{1,50}$/.");
        }

        $this->container['sellerId'] = $sellerId;

        return $this;
    }

    /**
     * Gets severity
     *
     * @return string|null
     */
    public function getSeverity()
    {
        return $this->container['severity'];
    }

    /**
     * Sets severity
     *
     * @param string|null $severity severity
     *
     * @return $this
     */
    public function setSeverity($severity)
    {
        $allowedValues = $this->getSeverityAllowableValues();
        if (!is_null($severity) && !in_array($severity, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'severity', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['severity'] = $severity;

        return $this;
    }

    /**
     * Gets message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string $message message
     *
     * @return $this
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets reference
     *
     * @return \JTL\SCX\Client\Channel\Model\ChannelNotificationReference|null
     */
    public function getReference()
    {
        return $this->container['reference'];
    }

    /**
     * Sets reference
     *
     * @param \JTL\SCX\Client\Channel\Model\ChannelNotificationReference|null $reference reference
     *
     * @return $this
     */
    public function setReference($reference)
    {
        $this->container['reference'] = $reference;

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

