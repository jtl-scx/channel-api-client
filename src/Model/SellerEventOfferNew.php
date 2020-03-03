<?php
/**
 * SellerEventOfferNew
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

use ArrayAccess;
use JTL\SCX\Client\Channel\ObjectSerializer;

/**
 * SellerEventOfferNew Class Doc Comment
 *
 * @category Class
 * @description List Offer on Channel.  If your current channel implementation process listing in asychronous manner it is recommended to call &#x60;/channel/offer/received&#x60; afterwards to mark wating Offers as in-progress. If a channel process an Offer directly you do not need to mark a Offer as &#x60;in-progress&#x60;. But it is important to mark an Offer as &#x60;successful&#x60; listed. If there are any errors during the listing process it is importand to mark a offer as &#x60;failed&#x60;.
 * @package  JTL\SCX\Client\Channel
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SellerEventOfferNew implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SellerEventOfferNew';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'sellerId' => 'string',
        'offerId' => 'int',
        'channelCategoryId' => 'string',
        'quantity' => 'string',
        'priceList' => '\JTL\SCX\Client\Channel\Model\PriceContainer[]',
        'title' => 'string',
        'subTitle' => 'string',
        'description' => 'string',
        'mainPicture' => 'string',
        'pictureList' => 'string[]',
        'channelAttributeList' => '\JTL\SCX\Client\Channel\Model\ChannelAttribute[]',
        'sku' => 'string',
        'ean' => 'string',
        'gtin' => 'string',
        'upc' => 'string',
        'isbn' => 'string',
        'srp' => '\JTL\SCX\Client\Channel\Model\Price',
        'productAttributeList' => '\JTL\SCX\Client\Channel\Model\ProductAttribute[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'sellerId' => null,
        'offerId' => 'int64',
        'channelCategoryId' => null,
        'quantity' => null,
        'priceList' => null,
        'title' => null,
        'subTitle' => null,
        'description' => null,
        'mainPicture' => null,
        'pictureList' => null,
        'channelAttributeList' => null,
        'sku' => null,
        'ean' => null,
        'gtin' => null,
        'upc' => null,
        'isbn' => null,
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
        'sellerId' => 'sellerId',
        'offerId' => 'offerId',
        'channelCategoryId' => 'channelCategoryId',
        'quantity' => 'quantity',
        'priceList' => 'priceList',
        'title' => 'title',
        'subTitle' => 'subTitle',
        'description' => 'description',
        'mainPicture' => 'mainPicture',
        'pictureList' => 'pictureList',
        'channelAttributeList' => 'channelAttributeList',
        'sku' => 'sku',
        'ean' => 'ean',
        'gtin' => 'gtin',
        'upc' => 'upc',
        'isbn' => 'isbn',
        'srp' => 'srp',
        'productAttributeList' => 'productAttributeList'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sellerId' => 'setSellerId',
        'offerId' => 'setOfferId',
        'channelCategoryId' => 'setChannelCategoryId',
        'quantity' => 'setQuantity',
        'priceList' => 'setPriceList',
        'title' => 'setTitle',
        'subTitle' => 'setSubTitle',
        'description' => 'setDescription',
        'mainPicture' => 'setMainPicture',
        'pictureList' => 'setPictureList',
        'channelAttributeList' => 'setChannelAttributeList',
        'sku' => 'setSku',
        'ean' => 'setEan',
        'gtin' => 'setGtin',
        'upc' => 'setUpc',
        'isbn' => 'setIsbn',
        'srp' => 'setSrp',
        'productAttributeList' => 'setProductAttributeList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sellerId' => 'getSellerId',
        'offerId' => 'getOfferId',
        'channelCategoryId' => 'getChannelCategoryId',
        'quantity' => 'getQuantity',
        'priceList' => 'getPriceList',
        'title' => 'getTitle',
        'subTitle' => 'getSubTitle',
        'description' => 'getDescription',
        'mainPicture' => 'getMainPicture',
        'pictureList' => 'getPictureList',
        'channelAttributeList' => 'getChannelAttributeList',
        'sku' => 'getSku',
        'ean' => 'getEan',
        'gtin' => 'getGtin',
        'upc' => 'getUpc',
        'isbn' => 'getIsbn',
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
        $this->container['sellerId'] = isset($data['sellerId']) ? $data['sellerId'] : null;
        $this->container['offerId'] = isset($data['offerId']) ? $data['offerId'] : null;
        $this->container['channelCategoryId'] = isset($data['channelCategoryId']) ? $data['channelCategoryId'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['priceList'] = isset($data['priceList']) ? $data['priceList'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['subTitle'] = isset($data['subTitle']) ? $data['subTitle'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['mainPicture'] = isset($data['mainPicture']) ? $data['mainPicture'] : null;
        $this->container['pictureList'] = isset($data['pictureList']) ? $data['pictureList'] : null;
        $this->container['channelAttributeList'] = isset($data['channelAttributeList']) ? $data['channelAttributeList'] : null;
        $this->container['sku'] = isset($data['sku']) ? $data['sku'] : null;
        $this->container['ean'] = isset($data['ean']) ? $data['ean'] : null;
        $this->container['gtin'] = isset($data['gtin']) ? $data['gtin'] : null;
        $this->container['upc'] = isset($data['upc']) ? $data['upc'] : null;
        $this->container['isbn'] = isset($data['isbn']) ? $data['isbn'] : null;
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

        if ($this->container['priceList'] === null) {
            $invalidProperties[] = "'priceList' can't be null";
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

        if ($this->container['sku'] === null) {
            $invalidProperties[] = "'sku' can't be null";
        }
        if ((mb_strlen($this->container['sku']) > 100)) {
            $invalidProperties[] = "invalid value for 'sku', the character length must be smaller than or equal to 100.";
        }

        if ((mb_strlen($this->container['sku']) < 1)) {
            $invalidProperties[] = "invalid value for 'sku', the character length must be bigger than or equal to 1.";
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
            throw new \InvalidArgumentException("invalid value for $sellerId when calling SellerEventOfferNew., must conform to the pattern /^\\w{1,50}$/.");
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
     * @param int $offerId Unique Offer Id to identify an Offer on a Sales Channel.
     *
     * @return $this
     */
    public function setOfferId($offerId)
    {

        if (($offerId < 1)) {
            throw new \InvalidArgumentException('invalid value for $offerId when calling SellerEventOfferNew., must be bigger than or equal to 1.');
        }

        $this->container['offerId'] = $offerId;

        return $this;
    }

    /**
     * Gets channelCategoryId
     *
     * @return string|null
     */
    public function getChannelCategoryId()
    {
        return $this->container['channelCategoryId'];
    }

    /**
     * Sets channelCategoryId
     *
     * @param string|null $channelCategoryId channelCategoryId
     *
     * @return $this
     */
    public function setChannelCategoryId($channelCategoryId)
    {
        $this->container['channelCategoryId'] = $channelCategoryId;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return string|null
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param string|null $quantity Offer Quantity
     *
     * @return $this
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
     * @return $this
     */
    public function setPriceList($priceList)
    {
        $this->container['priceList'] = $priceList;

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
            throw new \InvalidArgumentException('invalid length for $title when calling SellerEventOfferNew., must be smaller than or equal to 100.');
        }
        if (!is_null($title) && (mb_strlen($title) < 1)) {
            throw new \InvalidArgumentException('invalid length for $title when calling SellerEventOfferNew., must be bigger than or equal to 1.');
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
            throw new \InvalidArgumentException('invalid length for $subTitle when calling SellerEventOfferNew., must be smaller than or equal to 255.');
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
            throw new \InvalidArgumentException('invalid length for $description when calling SellerEventOfferNew., must be smaller than or equal to 50000.');
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets mainPicture
     *
     * @return string|null
     */
    public function getMainPicture()
    {
        return $this->container['mainPicture'];
    }

    /**
     * Sets mainPicture
     *
     * @param string|null $mainPicture mainPicture
     *
     * @return $this
     */
    public function setMainPicture($mainPicture)
    {
        $this->container['mainPicture'] = $mainPicture;

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
     * @return $this
     */
    public function setPictureList($pictureList)
    {
        $this->container['pictureList'] = $pictureList;

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
     * @param \JTL\SCX\Client\Channel\Model\ChannelAttribute[]|null $channelAttributeList A List of SalesChannel related attributes. Typicaly all required attributes need to be passed through this objects. Required (and also optinal) attributes can be requested using the /meta Data API endpoints.
     *
     * @return $this
     */
    public function setChannelAttributeList($channelAttributeList)
    {
        $this->container['channelAttributeList'] = $channelAttributeList;

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
     * @return $this
     */
    public function setSku($sku)
    {
        if ((mb_strlen($sku) > 100)) {
            throw new \InvalidArgumentException('invalid length for $sku when calling SellerEventOfferNew., must be smaller than or equal to 100.');
        }
        if ((mb_strlen($sku) < 1)) {
            throw new \InvalidArgumentException('invalid length for $sku when calling SellerEventOfferNew., must be bigger than or equal to 1.');
        }

        $this->container['sku'] = $sku;

        return $this;
    }

    /**
     * Gets ean
     *
     * @return string|null
     */
    public function getEan()
    {
        return $this->container['ean'];
    }

    /**
     * Sets ean
     *
     * @param string|null $ean ean
     *
     * @return $this
     */
    public function setEan($ean)
    {
        $this->container['ean'] = $ean;

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
     * Gets upc
     *
     * @return string|null
     */
    public function getUpc()
    {
        return $this->container['upc'];
    }

    /**
     * Sets upc
     *
     * @param string|null $upc upc
     *
     * @return $this
     */
    public function setUpc($upc)
    {
        $this->container['upc'] = $upc;

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


