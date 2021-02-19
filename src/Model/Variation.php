<?php
/**
 * Variation
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
 * Variation Class Doc Comment
 *
 * @category Class
 * @package  JTL\SCX\Client\Channel
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class Variation implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Variation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'offerId' => 'int',
        'sku' => 'string',
        'gtin' => 'string',
        'variationDimensionList' => '\JTL\SCX\Client\Channel\Model\ChannelAttribute[]',
        'quantity' => 'string',
        'priceList' => '\JTL\SCX\Client\Channel\Model\PriceContainer[]',
        'taxPercent' => 'string',
        'pictureList' => 'string[]',
        'title' => 'string',
        'subTitle' => 'string',
        'description' => 'string',
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
        'sku' => null,
        'gtin' => null,
        'variationDimensionList' => null,
        'quantity' => null,
        'priceList' => null,
        'taxPercent' => null,
        'pictureList' => null,
        'title' => null,
        'subTitle' => null,
        'description' => null,
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
        'sku' => 'sku',
        'gtin' => 'gtin',
        'variationDimensionList' => 'variationDimensionList',
        'quantity' => 'quantity',
        'priceList' => 'priceList',
        'taxPercent' => 'taxPercent',
        'pictureList' => 'pictureList',
        'title' => 'title',
        'subTitle' => 'subTitle',
        'description' => 'description',
        'channelAttributeList' => 'channelAttributeList'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'offerId' => 'setOfferId',
        'sku' => 'setSku',
        'gtin' => 'setGtin',
        'variationDimensionList' => 'setVariationDimensionList',
        'quantity' => 'setQuantity',
        'priceList' => 'setPriceList',
        'taxPercent' => 'setTaxPercent',
        'pictureList' => 'setPictureList',
        'title' => 'setTitle',
        'subTitle' => 'setSubTitle',
        'description' => 'setDescription',
        'channelAttributeList' => 'setChannelAttributeList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'offerId' => 'getOfferId',
        'sku' => 'getSku',
        'gtin' => 'getGtin',
        'variationDimensionList' => 'getVariationDimensionList',
        'quantity' => 'getQuantity',
        'priceList' => 'getPriceList',
        'taxPercent' => 'getTaxPercent',
        'pictureList' => 'getPictureList',
        'title' => 'getTitle',
        'subTitle' => 'getSubTitle',
        'description' => 'getDescription',
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
        $this->container['sku'] = $data['sku'] ?? null;
        $this->container['gtin'] = $data['gtin'] ?? null;
        $this->container['variationDimensionList'] = $data['variationDimensionList'] ?? null;
        $this->container['quantity'] = $data['quantity'] ?? null;
        $this->container['priceList'] = $data['priceList'] ?? null;
        $this->container['taxPercent'] = $data['taxPercent'] ?? null;
        $this->container['pictureList'] = $data['pictureList'] ?? null;
        $this->container['title'] = $data['title'] ?? null;
        $this->container['subTitle'] = $data['subTitle'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
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

        if ($this->container['offerId'] === null) {
            $invalidProperties[] = "'offerId' can't be null";
        }
        if (($this->container['offerId'] < 1)) {
            $invalidProperties[] = "invalid value for 'offerId', must be bigger than or equal to 1.";
        }

        if ($this->container['sku'] === null) {
            $invalidProperties[] = "'sku' can't be null";
        }
        if ((mb_strlen($this->container['sku']) > 150)) {
            $invalidProperties[] = "invalid value for 'sku', the character length must be smaller than or equal to 150.";
        }

        if ((mb_strlen($this->container['sku']) < 1)) {
            $invalidProperties[] = "invalid value for 'sku', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['variationDimensionList'] === null) {
            $invalidProperties[] = "'variationDimensionList' can't be null";
        }
        if ($this->container['quantity'] === null) {
            $invalidProperties[] = "'quantity' can't be null";
        }
        if ($this->container['priceList'] === null) {
            $invalidProperties[] = "'priceList' can't be null";
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
     * @return int
     */
    public function getOfferId()
    {
        return $this->container['offerId'];
    }

    /**
     * Sets offerId
     *
     * @param int $offerId Unique Offer Id to identify an Offer on a Sales Channel.
     *
     * @return self
     */
    public function setOfferId($offerId)
    {

        if (($offerId < 1)) {
            throw new \InvalidArgumentException('invalid value for $offerId when calling Variation., must be bigger than or equal to 1.');
        }

        $this->container['offerId'] = $offerId;

        return $this;
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
     * @return self
     */
    public function setSku($sku)
    {
        if ((mb_strlen($sku) > 150)) {
            throw new \InvalidArgumentException('invalid length for $sku when calling Variation., must be smaller than or equal to 150.');
        }
        if ((mb_strlen($sku) < 1)) {
            throw new \InvalidArgumentException('invalid length for $sku when calling Variation., must be bigger than or equal to 1.');
        }

        $this->container['sku'] = $sku;

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
     * @return self
     */
    public function setGtin($gtin)
    {
        $this->container['gtin'] = $gtin;

        return $this;
    }

    /**
     * Gets variationDimensionList
     *
     * @return \JTL\SCX\Client\Channel\Model\ChannelAttribute[]
     */
    public function getVariationDimensionList()
    {
        return $this->container['variationDimensionList'];
    }

    /**
     * Sets variationDimensionList
     *
     * @param \JTL\SCX\Client\Channel\Model\ChannelAttribute[] $variationDimensionList A List of SalesChannel related attributes. These attributes are used to define variation dimensions. You can use up to 10 dimensions to build a multi-variation listing.
     *
     * @return self
     */
    public function setVariationDimensionList($variationDimensionList)
    {


        $this->container['variationDimensionList'] = $variationDimensionList;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return string
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param string $quantity Offer Quantity
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
     * @return \JTL\SCX\Client\Channel\Model\PriceContainer[]
     */
    public function getPriceList()
    {
        return $this->container['priceList'];
    }

    /**
     * Sets priceList
     *
     * @param \JTL\SCX\Client\Channel\Model\PriceContainer[] $priceList priceList
     *
     * @return self
     */
    public function setPriceList($priceList)
    {


        $this->container['priceList'] = $priceList;

        return $this;
    }

    /**
     * Gets taxPercent
     *
     * @return string|null
     */
    public function getTaxPercent()
    {
        return $this->container['taxPercent'];
    }

    /**
     * Sets taxPercent
     *
     * @param string|null $taxPercent taxPercent
     *
     * @return self
     */
    public function setTaxPercent($taxPercent)
    {
        $this->container['taxPercent'] = $taxPercent;

        return $this;
    }

    /**
     * Gets pictureList
     *
     * @return string[]|null
     */
    public function getPictureList()
    {
        return $this->container['pictureList'];
    }

    /**
     * Sets pictureList
     *
     * @param string[]|null $pictureList pictureList
     *
     * @return self
     */
    public function setPictureList($pictureList)
    {


        $this->container['pictureList'] = $pictureList;

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
     * @param string|null $title Title used for this variation listing on SalesChannel. If no title is provided, the SalesChannelOffer title should be used.
     *
     * @return self
     */
    public function setTitle($title)
    {
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
     * @param string|null $subTitle Subtitle used for this variation listing on SalesChannel. If no subtitle is provided, the SalesChannelOffer Subtitel should be used.
     *
     * @return self
     */
    public function setSubTitle($subTitle)
    {
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
     * @param string|null $description Description used for this variation listing on SalesChannel. If no description is provided, the SalesChannelOffer description should be used.
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

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
     * @param \JTL\SCX\Client\Channel\Model\ChannelAttribute[]|null $channelAttributeList A List of SalesChannel related attributes. Typicaly all required attributes need to be passed through this objects. Required (and also optinal) attributes can be requested using the /meta Data API endpoints.  A Channel should merge the SalesChannelOffer channelAttributeList with this Attribute List. This List extends the Attributes from the SalesChannelOffer channelAttributeList property and should be overwrite exisiting Attributes.
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


