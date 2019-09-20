<?php
/**
 * SalesChannelData
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

use ArrayAccess;
use JTL\SCX\Client\Channel\ObjectSerializer;

/**
 * SalesChannelData Class Doc Comment
 *
 * @category Class
 * @package  JTL\SCX\Client\Channel
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SalesChannelData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SalesChannelData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'marketplaceList' => 'string[]',
        'displayName' => 'string',
        'website' => 'string',
        'supportContact' => 'string',
        'vendor' => 'string',
        'signUpUrl' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'marketplaceList' => null,
        'displayName' => null,
        'website' => 'uri',
        'supportContact' => 'email',
        'vendor' => null,
        'signUpUrl' => null
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
        'marketplaceList' => 'marketplaceList',
        'displayName' => 'displayName',
        'website' => 'website',
        'supportContact' => 'supportContact',
        'vendor' => 'vendor',
        'signUpUrl' => 'signUpUrl'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'marketplaceList' => 'setMarketplaceList',
        'displayName' => 'setDisplayName',
        'website' => 'setWebsite',
        'supportContact' => 'setSupportContact',
        'vendor' => 'setVendor',
        'signUpUrl' => 'setSignUpUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'marketplaceList' => 'getMarketplaceList',
        'displayName' => 'getDisplayName',
        'website' => 'getWebsite',
        'supportContact' => 'getSupportContact',
        'vendor' => 'getVendor',
        'signUpUrl' => 'getSignUpUrl'
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
        $this->container['marketplaceList'] = isset($data['marketplaceList']) ? $data['marketplaceList'] : null;
        $this->container['displayName'] = isset($data['displayName']) ? $data['displayName'] : null;
        $this->container['website'] = isset($data['website']) ? $data['website'] : null;
        $this->container['supportContact'] = isset($data['supportContact']) ? $data['supportContact'] : null;
        $this->container['vendor'] = isset($data['vendor']) ? $data['vendor'] : null;
        $this->container['signUpUrl'] = isset($data['signUpUrl']) ? $data['signUpUrl'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['displayName'] === null) {
            $invalidProperties[] = "'displayName' can't be null";
        }
        if ($this->container['website'] === null) {
            $invalidProperties[] = "'website' can't be null";
        }
        if ($this->container['supportContact'] === null) {
            $invalidProperties[] = "'supportContact' can't be null";
        }
        if ($this->container['vendor'] === null) {
            $invalidProperties[] = "'vendor' can't be null";
        }
        if ($this->container['signUpUrl'] === null) {
            $invalidProperties[] = "'signUpUrl' can't be null";
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
     * Gets marketplaceList
     *
     * @return string[]|null
     */
    public function getMarketplaceList()
    {
        return $this->container['marketplaceList'];
    }

    /**
     * Sets marketplaceList
     *
     * @param string[]|null $marketplaceList Country ISO code or a list of ISO codes which geografic market is supported.
     *
     * @return $this
     */
    public function setMarketplaceList($marketplaceList)
    {
        $this->container['marketplaceList'] = $marketplaceList;

        return $this;
    }

    /**
     * Gets displayName
     *
     * @return string
     */
    public function getDisplayName()
    {
        return $this->container['displayName'];
    }

    /**
     * Sets displayName
     *
     * @param string $displayName Channel Name
     *
     * @return $this
     */
    public function setDisplayName($displayName)
    {
        $this->container['displayName'] = $displayName;

        return $this;
    }

    /**
     * Gets website
     *
     * @return string
     */
    public function getWebsite()
    {
        return $this->container['website'];
    }

    /**
     * Sets website
     *
     * @param string $website website
     *
     * @return $this
     */
    public function setWebsite($website)
    {
        $this->container['website'] = $website;

        return $this;
    }

    /**
     * Gets supportContact
     *
     * @return string
     */
    public function getSupportContact()
    {
        return $this->container['supportContact'];
    }

    /**
     * Sets supportContact
     *
     * @param string $supportContact supportContact
     *
     * @return $this
     */
    public function setSupportContact($supportContact)
    {
        $this->container['supportContact'] = $supportContact;

        return $this;
    }

    /**
     * Gets vendor
     *
     * @return string
     */
    public function getVendor()
    {
        return $this->container['vendor'];
    }

    /**
     * Sets vendor
     *
     * @param string $vendor vendor
     *
     * @return $this
     */
    public function setVendor($vendor)
    {
        $this->container['vendor'] = $vendor;

        return $this;
    }

    /**
     * Gets signUpUrl
     *
     * @return string
     */
    public function getSignUpUrl()
    {
        return $this->container['signUpUrl'];
    }

    /**
     * Sets signUpUrl
     *
     * @param string $signUpUrl The SignUp URL ist required for register new Sellers with the SCX Channel API. SCX will create a Sign-Up ID to link a seller with SCX.
     *
     * @return $this
     */
    public function setSignUpUrl($signUpUrl)
    {
        $this->container['signUpUrl'] = $signUpUrl;

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


