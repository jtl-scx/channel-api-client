<?php
/**
 * Product
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
 * Product Class Doc Comment
 *
 * @category Class
 * @package  JTL\SCX\Client\Channel
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Product implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Product';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'sku' => 'string',
        'title' => 'string',
        'subTitle' => 'string',
        'description' => 'string',
        'gtin' => 'string',
        'mpn' => 'string',
        'isbn' => 'string',
        'brand' => 'string',
        'srp' => '\JTL\SCX\Client\Channel\Model\Price',
        'productAttributeList' => '\JTL\SCX\Client\Channel\Model\ProductAttribute[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'sku' => null,
        'title' => null,
        'subTitle' => null,
        'description' => null,
        'gtin' => null,
        'mpn' => null,
        'isbn' => null,
        'brand' => null,
        'srp' => null,
        'productAttributeList' => null
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
        'sku' => 'sku',
        'title' => 'title',
        'subTitle' => 'subTitle',
        'description' => 'description',
        'gtin' => 'gtin',
        'mpn' => 'mpn',
        'isbn' => 'isbn',
        'brand' => 'brand',
        'srp' => 'srp',
        'productAttributeList' => 'productAttributeList'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sku' => 'setSku',
        'title' => 'setTitle',
        'subTitle' => 'setSubTitle',
        'description' => 'setDescription',
        'gtin' => 'setGtin',
        'mpn' => 'setMpn',
        'isbn' => 'setIsbn',
        'brand' => 'setBrand',
        'srp' => 'setSrp',
        'productAttributeList' => 'setProductAttributeList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sku' => 'getSku',
        'title' => 'getTitle',
        'subTitle' => 'getSubTitle',
        'description' => 'getDescription',
        'gtin' => 'getGtin',
        'mpn' => 'getMpn',
        'isbn' => 'getIsbn',
        'brand' => 'getBrand',
        'srp' => 'getSrp',
        'productAttributeList' => 'getProductAttributeList'
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
        $this->container['sku'] = isset($data['sku']) ? $data['sku'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['subTitle'] = isset($data['subTitle']) ? $data['subTitle'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['gtin'] = isset($data['gtin']) ? $data['gtin'] : null;
        $this->container['mpn'] = isset($data['mpn']) ? $data['mpn'] : null;
        $this->container['isbn'] = isset($data['isbn']) ? $data['isbn'] : null;
        $this->container['brand'] = isset($data['brand']) ? $data['brand'] : null;
        $this->container['srp'] = isset($data['srp']) ? $data['srp'] : null;
        $this->container['productAttributeList'] = isset($data['productAttributeList']) ? $data['productAttributeList'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['sku'] === null) {
            $invalidProperties[] = "'sku' can't be null";
        }
        if ((mb_strlen($this->container['sku']) > 100)) {
            $invalidProperties[] = "invalid value for 'sku', the character length must be smaller than or equal to 100.";
        }

        if ((mb_strlen($this->container['sku']) < 1)) {
            $invalidProperties[] = "invalid value for 'sku', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) > 100)) {
            $invalidProperties[] = "invalid value for 'title', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) < 1)) {
            $invalidProperties[] = "invalid value for 'title', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['subTitle']) && (mb_strlen($this->container['subTitle']) > 255)) {
            $invalidProperties[] = "invalid value for 'subTitle', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 50000)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 50000.";
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
     * Gets sku
     *
     * @return string
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     *
     * @param string $sku Stock keeping unit is a unique Id used to identify one product.
     *
     * @return $this
     */
    public function setSku($sku)
    {
        if ((mb_strlen($sku) > 100)) {
            throw new \InvalidArgumentException('invalid length for $sku when calling Product., must be smaller than or equal to 100.');
        }
        if ((mb_strlen($sku) < 1)) {
            throw new \InvalidArgumentException('invalid length for $sku when calling Product., must be bigger than or equal to 1.');
        }

        $this->container['sku'] = $sku;

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
        if (!is_null($title) && (mb_strlen($title) > 100)) {
            throw new \InvalidArgumentException('invalid length for $title when calling Product., must be smaller than or equal to 100.');
        }
        if (!is_null($title) && (mb_strlen($title) < 1)) {
            throw new \InvalidArgumentException('invalid length for $title when calling Product., must be bigger than or equal to 1.');
        }

        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets subTitle
     *
     * @return string|null
     */
    public function getSubTitle()
    {
        return $this->container['subTitle'];
    }

    /**
     * Sets subTitle
     *
     * @param string|null $subTitle subTitle
     *
     * @return $this
     */
    public function setSubTitle($subTitle)
    {
        if (!is_null($subTitle) && (mb_strlen($subTitle) > 255)) {
            throw new \InvalidArgumentException('invalid length for $subTitle when calling Product., must be smaller than or equal to 255.');
        }

        $this->container['subTitle'] = $subTitle;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        if (!is_null($description) && (mb_strlen($description) > 50000)) {
            throw new \InvalidArgumentException('invalid length for $description when calling Product., must be smaller than or equal to 50000.');
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets gtin
     *
     * @return string|null
     */
    public function getGtin()
    {
        return $this->container['gtin'];
    }

    /**
     * Sets gtin
     *
     * @param string|null $gtin gtin
     *
     * @return $this
     */
    public function setGtin($gtin)
    {
        $this->container['gtin'] = $gtin;

        return $this;
    }

    /**
     * Gets mpn
     *
     * @return string|null
     */
    public function getMpn()
    {
        return $this->container['mpn'];
    }

    /**
     * Sets mpn
     *
     * @param string|null $mpn mpn
     *
     * @return $this
     */
    public function setMpn($mpn)
    {
        $this->container['mpn'] = $mpn;

        return $this;
    }

    /**
     * Gets isbn
     *
     * @return string|null
     */
    public function getIsbn()
    {
        return $this->container['isbn'];
    }

    /**
     * Sets isbn
     *
     * @param string|null $isbn isbn
     *
     * @return $this
     */
    public function setIsbn($isbn)
    {
        $this->container['isbn'] = $isbn;

        return $this;
    }

    /**
     * Gets brand
     *
     * @return string|null
     */
    public function getBrand()
    {
        return $this->container['brand'];
    }

    /**
     * Sets brand
     *
     * @param string|null $brand brand
     *
     * @return $this
     */
    public function setBrand($brand)
    {
        $this->container['brand'] = $brand;

        return $this;
    }

    /**
     * Gets srp
     *
     * @return \JTL\SCX\Client\Channel\Model\Price|null
     */
    public function getSrp()
    {
        return $this->container['srp'];
    }

    /**
     * Sets srp
     *
     * @param \JTL\SCX\Client\Channel\Model\Price|null $srp srp
     *
     * @return $this
     */
    public function setSrp($srp)
    {
        $this->container['srp'] = $srp;

        return $this;
    }

    /**
     * Gets productAttributeList
     *
     * @return \JTL\SCX\Client\Channel\Model\ProductAttribute[]|null
     */
    public function getProductAttributeList()
    {
        return $this->container['productAttributeList'];
    }

    /**
     * Sets productAttributeList
     *
     * @param \JTL\SCX\Client\Channel\Model\ProductAttribute[]|null $productAttributeList productAttributeList
     *
     * @return $this
     */
    public function setProductAttributeList($productAttributeList)
    {
        $this->container['productAttributeList'] = $productAttributeList;

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


