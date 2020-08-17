<?php
/**
 * OrderItem
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
 * OrderItem Class Doc Comment
 *
 * @category Class
 * @package  JTL\SCX\Client\Channel
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OrderItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OrderItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'orderItemId' => 'string',
        'type' => 'string',
        'grossPrice' => 'string',
        'total' => 'string',
        'taxPercent' => 'string',
        'offerId' => 'int',
        'channelOfferId' => 'string',
        'sku' => 'string',
        'quantity' => 'string',
        'title' => 'string',
        'estimatedShippingDate' => '\DateTime',
        'estimatedDeliveryDate' => '\DateTime',
        'remainingQuantity' => 'string',
        'shippingGroup' => 'string',
        'note' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'orderItemId' => 'int64',
        'type' => null,
        'grossPrice' => null,
        'total' => null,
        'taxPercent' => null,
        'offerId' => 'int64',
        'channelOfferId' => null,
        'sku' => null,
        'quantity' => null,
        'title' => null,
        'estimatedShippingDate' => 'date-time',
        'estimatedDeliveryDate' => 'date-time',
        'remainingQuantity' => null,
        'shippingGroup' => null,
        'note' => null
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
        'orderItemId' => 'orderItemId',
        'type' => 'type',
        'grossPrice' => 'grossPrice',
        'total' => 'total',
        'taxPercent' => 'taxPercent',
        'offerId' => 'offerId',
        'channelOfferId' => 'channelOfferId',
        'sku' => 'sku',
        'quantity' => 'quantity',
        'title' => 'title',
        'estimatedShippingDate' => 'estimatedShippingDate',
        'estimatedDeliveryDate' => 'estimatedDeliveryDate',
        'remainingQuantity' => 'remainingQuantity',
        'shippingGroup' => 'shippingGroup',
        'note' => 'note'
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
        'total' => 'setTotal',
        'taxPercent' => 'setTaxPercent',
        'offerId' => 'setOfferId',
        'channelOfferId' => 'setChannelOfferId',
        'sku' => 'setSku',
        'quantity' => 'setQuantity',
        'title' => 'setTitle',
        'estimatedShippingDate' => 'setEstimatedShippingDate',
        'estimatedDeliveryDate' => 'setEstimatedDeliveryDate',
        'remainingQuantity' => 'setRemainingQuantity',
        'shippingGroup' => 'setShippingGroup',
        'note' => 'setNote'
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
        'total' => 'getTotal',
        'taxPercent' => 'getTaxPercent',
        'offerId' => 'getOfferId',
        'channelOfferId' => 'getChannelOfferId',
        'sku' => 'getSku',
        'quantity' => 'getQuantity',
        'title' => 'getTitle',
        'estimatedShippingDate' => 'getEstimatedShippingDate',
        'estimatedDeliveryDate' => 'getEstimatedDeliveryDate',
        'remainingQuantity' => 'getRemainingQuantity',
        'shippingGroup' => 'getShippingGroup',
        'note' => 'getNote'
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
        $this->container['orderItemId'] = isset($data['orderItemId']) ? $data['orderItemId'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : 'PAYMENT';
        $this->container['grossPrice'] = isset($data['grossPrice']) ? $data['grossPrice'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['taxPercent'] = isset($data['taxPercent']) ? $data['taxPercent'] : null;
        $this->container['offerId'] = isset($data['offerId']) ? $data['offerId'] : null;
        $this->container['channelOfferId'] = isset($data['channelOfferId']) ? $data['channelOfferId'] : null;
        $this->container['sku'] = isset($data['sku']) ? $data['sku'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : '1.0';
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['estimatedShippingDate'] = isset($data['estimatedShippingDate']) ? $data['estimatedShippingDate'] : null;
        $this->container['estimatedDeliveryDate'] = isset($data['estimatedDeliveryDate']) ? $data['estimatedDeliveryDate'] : null;
        $this->container['remainingQuantity'] = isset($data['remainingQuantity']) ? $data['remainingQuantity'] : null;
        $this->container['shippingGroup'] = isset($data['shippingGroup']) ? $data['shippingGroup'] : null;
        $this->container['note'] = isset($data['note']) ? $data['note'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
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

        if (($this->container['orderItemId'] < 1)) {
            $invalidProperties[] = "invalid value for 'orderItemId', must be bigger than or equal to 1.";
        }

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['grossPrice'] === null) {
            $invalidProperties[] = "'grossPrice' can't be null";
        }
        if ($this->container['total'] === null) {
            $invalidProperties[] = "'total' can't be null";
        }
        if ($this->container['taxPercent'] === null) {
            $invalidProperties[] = "'taxPercent' can't be null";
        }
        if (!is_null($this->container['offerId']) && ($this->container['offerId'] < 1)) {
            $invalidProperties[] = "invalid value for 'offerId', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['channelOfferId']) && (mb_strlen($this->container['channelOfferId']) > 50)) {
            $invalidProperties[] = "invalid value for 'channelOfferId', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['channelOfferId']) && (mb_strlen($this->container['channelOfferId']) < 1)) {
            $invalidProperties[] = "invalid value for 'channelOfferId', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['sku']) && (mb_strlen($this->container['sku']) > 100)) {
            $invalidProperties[] = "invalid value for 'sku', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['sku']) && (mb_strlen($this->container['sku']) < 1)) {
            $invalidProperties[] = "invalid value for 'sku', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['shippingGroup'] === null) {
            $invalidProperties[] = "'shippingGroup' can't be null";
        }
        if ($this->container['note'] === null) {
            $invalidProperties[] = "'note' can't be null";
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
     * Gets orderItemId
     *
     * @return string
     */
    public function getOrderItemId()
    {
        return $this->container['orderItemId'];
    }

    /**
     * Sets orderItemId
     *
     * @param string $orderItemId A unique identifier to identify a order item. This ID is provided by the Channel itself an should be used to identify a order item id.
     *
     * @return $this
     */
    public function setOrderItemId($orderItemId)
    {
        if ((mb_strlen($orderItemId) > 50)) {
            throw new \InvalidArgumentException('invalid length for $orderItemId when calling OrderItem., must be smaller than or equal to 50.');
        }
        if (($orderItemId < 1)) {
            throw new \InvalidArgumentException('invalid value for $orderItemId when calling OrderItem., must be bigger than or equal to 1.');
        }

        $this->container['orderItemId'] = $orderItemId;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets grossPrice
     *
     * @return string
     */
    public function getGrossPrice()
    {
        return $this->container['grossPrice'];
    }

    /**
     * Sets grossPrice
     *
     * @param string $grossPrice grossPrice
     *
     * @return $this
     */
    public function setGrossPrice($grossPrice)
    {
        $this->container['grossPrice'] = $grossPrice;

        return $this;
    }

    /**
     * Gets total
     *
     * @return string
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     *
     * @param string $total Overall gross price (quantity * grossPrice)
     *
     * @return $this
     */
    public function setTotal($total)
    {
        $this->container['total'] = $total;

        return $this;
    }

    /**
     * Gets taxPercent
     *
     * @return string
     */
    public function getTaxPercent()
    {
        return $this->container['taxPercent'];
    }

    /**
     * Sets taxPercent
     *
     * @param string $taxPercent taxPercent
     *
     * @return $this
     */
    public function setTaxPercent($taxPercent)
    {
        $this->container['taxPercent'] = $taxPercent;

        return $this;
    }

    /**
     * Gets offerId
     *
     * @return int|null
     */
    public function getOfferId()
    {
        return $this->container['offerId'];
    }

    /**
     * Sets offerId
     *
     * @param int|null $offerId Unique Offer Id to identify an Offer on a Sales Channel.
     *
     * @return $this
     */
    public function setOfferId($offerId)
    {

        if (!is_null($offerId) && ($offerId < 1)) {
            throw new \InvalidArgumentException('invalid value for $offerId when calling OrderItem., must be bigger than or equal to 1.');
        }

        $this->container['offerId'] = $offerId;

        return $this;
    }

    /**
     * Gets channelOfferId
     *
     * @return string|null
     */
    public function getChannelOfferId()
    {
        return $this->container['channelOfferId'];
    }

    /**
     * Sets channelOfferId
     *
     * @param string|null $channelOfferId Channel defined unique Offer Id to identify an Offer on a Sales Channel.
     *
     * @return $this
     */
    public function setChannelOfferId($channelOfferId)
    {
        if (!is_null($channelOfferId) && (mb_strlen($channelOfferId) > 50)) {
            throw new \InvalidArgumentException('invalid length for $channelOfferId when calling OrderItem., must be smaller than or equal to 50.');
        }
        if (!is_null($channelOfferId) && (mb_strlen($channelOfferId) < 1)) {
            throw new \InvalidArgumentException('invalid length for $channelOfferId when calling OrderItem., must be bigger than or equal to 1.');
        }

        $this->container['channelOfferId'] = $channelOfferId;

        return $this;
    }

    /**
     * Gets sku
     *
     * @return string|null
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     *
     * @param string|null $sku Stock keeping unit is a unique Id used to identify one product.
     *
     * @return $this
     */
    public function setSku($sku)
    {
        if (!is_null($sku) && (mb_strlen($sku) > 100)) {
            throw new \InvalidArgumentException('invalid length for $sku when calling OrderItem., must be smaller than or equal to 100.');
        }
        if (!is_null($sku) && (mb_strlen($sku) < 1)) {
            throw new \InvalidArgumentException('invalid length for $sku when calling OrderItem., must be bigger than or equal to 1.');
        }

        $this->container['sku'] = $sku;

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
     * @param string|null $quantity quantity
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

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
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets estimatedShippingDate
     *
     * @return \DateTime|null
     */
    public function getEstimatedShippingDate()
    {
        return $this->container['estimatedShippingDate'];
    }

    /**
     * Sets estimatedShippingDate
     *
     * @param \DateTime|null $estimatedShippingDate estimatedShippingDate
     *
     * @return $this
     */
    public function setEstimatedShippingDate($estimatedShippingDate)
    {
        $this->container['estimatedShippingDate'] = $estimatedShippingDate;

        return $this;
    }

    /**
     * Gets estimatedDeliveryDate
     *
     * @return \DateTime|null
     */
    public function getEstimatedDeliveryDate()
    {
        return $this->container['estimatedDeliveryDate'];
    }

    /**
     * Sets estimatedDeliveryDate
     *
     * @param \DateTime|null $estimatedDeliveryDate estimatedDeliveryDate
     *
     * @return $this
     */
    public function setEstimatedDeliveryDate($estimatedDeliveryDate)
    {
        $this->container['estimatedDeliveryDate'] = $estimatedDeliveryDate;

        return $this;
    }

    /**
     * Gets remainingQuantity
     *
     * @return string|null
     */
    public function getRemainingQuantity()
    {
        return $this->container['remainingQuantity'];
    }

    /**
     * Sets remainingQuantity
     *
     * @param string|null $remainingQuantity Includes the rest of the inventory available on the connected Marketplace. The remaining quanity can be used by a connected client implementation (such as JTL-Wawi) to manage quanity updates.
     *
     * @return $this
     */
    public function setRemainingQuantity($remainingQuantity)
    {
        $this->container['remainingQuantity'] = $remainingQuantity;

        return $this;
    }

    /**
     * Gets shippingGroup
     *
     * @return string
     */
    public function getShippingGroup()
    {
        return $this->container['shippingGroup'];
    }

    /**
     * Sets shippingGroup
     *
     * @param string $shippingGroup The shipping group is a unique identifier about what kind of shipping method and carrier is used to fulfill a order. A shipping group can be given by the connected salesChannel or defined by the seller itself.
     *
     * @return $this
     */
    public function setShippingGroup($shippingGroup)
    {
        $this->container['shippingGroup'] = $shippingGroup;

        return $this;
    }

    /**
     * Gets note
     *
     * @return string
     */
    public function getNote()
    {
        return $this->container['note'];
    }

    /**
     * Sets note
     *
     * @param string $note note
     *
     * @return $this
     */
    public function setNote($note)
    {
        $this->container['note'] = $note;

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


