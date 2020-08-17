<?php
/**
 * Order
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
 * Order Class Doc Comment
 *
 * @category Class
 * @package  JTL\SCX\Client\Channel
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Order implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Order';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'sellerId' => 'string',
        'orderStatus' => '\JTL\SCX\Client\Channel\Model\ChannelOrderStatus',
        'paymentStatus' => '\JTL\SCX\Client\Channel\Model\ChannelPaymentStatus',
        'paymentMethod' => 'string',
        'paymentReference' => 'string',
        'orderId' => 'string',
        'purchasedAt' => '\DateTime',
        'lastChangedAt' => '\DateTime',
        'currency' => 'string',
        'orderItem' => '\JTL\SCX\Client\Channel\Model\OrderItem[]',
        'billingAddress' => '\JTL\SCX\Client\Channel\Model\Address',
        'shippingAddress' => '\JTL\SCX\Client\Channel\Model\Address',
        'note' => 'string',
        'buyer' => '\JTL\SCX\Client\Channel\Model\OrderBuyer'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'sellerId' => null,
        'orderStatus' => null,
        'paymentStatus' => null,
        'paymentMethod' => null,
        'paymentReference' => null,
        'orderId' => null,
        'purchasedAt' => 'date-time',
        'lastChangedAt' => 'date-time',
        'currency' => null,
        'orderItem' => null,
        'billingAddress' => null,
        'shippingAddress' => null,
        'note' => null,
        'buyer' => null
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
        'orderStatus' => 'orderStatus',
        'paymentStatus' => 'paymentStatus',
        'paymentMethod' => 'paymentMethod',
        'paymentReference' => 'paymentReference',
        'orderId' => 'orderId',
        'purchasedAt' => 'purchasedAt',
        'lastChangedAt' => 'lastChangedAt',
        'currency' => 'currency',
        'orderItem' => 'orderItem',
        'billingAddress' => 'billingAddress',
        'shippingAddress' => 'shippingAddress',
        'note' => 'note',
        'buyer' => 'buyer'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sellerId' => 'setSellerId',
        'orderStatus' => 'setOrderStatus',
        'paymentStatus' => 'setPaymentStatus',
        'paymentMethod' => 'setPaymentMethod',
        'paymentReference' => 'setPaymentReference',
        'orderId' => 'setOrderId',
        'purchasedAt' => 'setPurchasedAt',
        'lastChangedAt' => 'setLastChangedAt',
        'currency' => 'setCurrency',
        'orderItem' => 'setOrderItem',
        'billingAddress' => 'setBillingAddress',
        'shippingAddress' => 'setShippingAddress',
        'note' => 'setNote',
        'buyer' => 'setBuyer'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sellerId' => 'getSellerId',
        'orderStatus' => 'getOrderStatus',
        'paymentStatus' => 'getPaymentStatus',
        'paymentMethod' => 'getPaymentMethod',
        'paymentReference' => 'getPaymentReference',
        'orderId' => 'getOrderId',
        'purchasedAt' => 'getPurchasedAt',
        'lastChangedAt' => 'getLastChangedAt',
        'currency' => 'getCurrency',
        'orderItem' => 'getOrderItem',
        'billingAddress' => 'getBillingAddress',
        'shippingAddress' => 'getShippingAddress',
        'note' => 'getNote',
        'buyer' => 'getBuyer'
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
        $this->container['orderStatus'] = isset($data['orderStatus']) ? $data['orderStatus'] : null;
        $this->container['paymentStatus'] = isset($data['paymentStatus']) ? $data['paymentStatus'] : null;
        $this->container['paymentMethod'] = isset($data['paymentMethod']) ? $data['paymentMethod'] : null;
        $this->container['paymentReference'] = isset($data['paymentReference']) ? $data['paymentReference'] : null;
        $this->container['orderId'] = isset($data['orderId']) ? $data['orderId'] : null;
        $this->container['purchasedAt'] = isset($data['purchasedAt']) ? $data['purchasedAt'] : null;
        $this->container['lastChangedAt'] = isset($data['lastChangedAt']) ? $data['lastChangedAt'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['orderItem'] = isset($data['orderItem']) ? $data['orderItem'] : null;
        $this->container['billingAddress'] = isset($data['billingAddress']) ? $data['billingAddress'] : null;
        $this->container['shippingAddress'] = isset($data['shippingAddress']) ? $data['shippingAddress'] : null;
        $this->container['note'] = isset($data['note']) ? $data['note'] : null;
        $this->container['buyer'] = isset($data['buyer']) ? $data['buyer'] : null;
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

        if ($this->container['orderStatus'] === null) {
            $invalidProperties[] = "'orderStatus' can't be null";
        }
        if ($this->container['paymentStatus'] === null) {
            $invalidProperties[] = "'paymentStatus' can't be null";
        }
        if (!is_null($this->container['paymentMethod']) && (mb_strlen($this->container['paymentMethod']) > 150)) {
            $invalidProperties[] = "invalid value for 'paymentMethod', the character length must be smaller than or equal to 150.";
        }

        if (!is_null($this->container['paymentMethod']) && (mb_strlen($this->container['paymentMethod']) < 1)) {
            $invalidProperties[] = "invalid value for 'paymentMethod', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['orderId'] === null) {
            $invalidProperties[] = "'orderId' can't be null";
        }
        if ($this->container['purchasedAt'] === null) {
            $invalidProperties[] = "'purchasedAt' can't be null";
        }
        if ($this->container['lastChangedAt'] === null) {
            $invalidProperties[] = "'lastChangedAt' can't be null";
        }
        if ($this->container['currency'] === null) {
            $invalidProperties[] = "'currency' can't be null";
        }
        if ($this->container['orderItem'] === null) {
            $invalidProperties[] = "'orderItem' can't be null";
        }
        if ($this->container['billingAddress'] === null) {
            $invalidProperties[] = "'billingAddress' can't be null";
        }
        if ($this->container['shippingAddress'] === null) {
            $invalidProperties[] = "'shippingAddress' can't be null";
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
            throw new \InvalidArgumentException("invalid value for $sellerId when calling Order., must conform to the pattern /^\\w{1,50}$/.");
        }

        $this->container['sellerId'] = $sellerId;

        return $this;
    }

    /**
     * Gets orderStatus
     *
     * @return \JTL\SCX\Client\Channel\Model\ChannelOrderStatus
     */
    public function getOrderStatus()
    {
        return $this->container['orderStatus'];
    }

    /**
     * Sets orderStatus
     *
     * @param \JTL\SCX\Client\Channel\Model\ChannelOrderStatus $orderStatus orderStatus
     *
     * @return $this
     */
    public function setOrderStatus($orderStatus)
    {
        $this->container['orderStatus'] = $orderStatus;

        return $this;
    }

    /**
     * Gets paymentStatus
     *
     * @return \JTL\SCX\Client\Channel\Model\ChannelPaymentStatus
     */
    public function getPaymentStatus()
    {
        return $this->container['paymentStatus'];
    }

    /**
     * Sets paymentStatus
     *
     * @param \JTL\SCX\Client\Channel\Model\ChannelPaymentStatus $paymentStatus paymentStatus
     *
     * @return $this
     */
    public function setPaymentStatus($paymentStatus)
    {
        $this->container['paymentStatus'] = $paymentStatus;

        return $this;
    }

    /**
     * Gets paymentMethod
     *
     * @return string|null
     */
    public function getPaymentMethod()
    {
        return $this->container['paymentMethod'];
    }

    /**
     * Sets paymentMethod
     *
     * @param string|null $paymentMethod paymentMethod
     *
     * @return $this
     */
    public function setPaymentMethod($paymentMethod)
    {
        if (!is_null($paymentMethod) && (mb_strlen($paymentMethod) > 150)) {
            throw new \InvalidArgumentException('invalid length for $paymentMethod when calling Order., must be smaller than or equal to 150.');
        }
        if (!is_null($paymentMethod) && (mb_strlen($paymentMethod) < 1)) {
            throw new \InvalidArgumentException('invalid length for $paymentMethod when calling Order., must be bigger than or equal to 1.');
        }

        $this->container['paymentMethod'] = $paymentMethod;

        return $this;
    }

    /**
     * Gets paymentReference
     *
     * @return string|null
     */
    public function getPaymentReference()
    {
        return $this->container['paymentReference'];
    }

    /**
     * Sets paymentReference
     *
     * @param string|null $paymentReference Payment reference can be used to reference or identify a payment transaction
     *
     * @return $this
     */
    public function setPaymentReference($paymentReference)
    {
        $this->container['paymentReference'] = $paymentReference;

        return $this;
    }

    /**
     * Gets orderId
     *
     * @return string
     */
    public function getOrderId()
    {
        return $this->container['orderId'];
    }

    /**
     * Sets orderId
     *
     * @param string $orderId orderId
     *
     * @return $this
     */
    public function setOrderId($orderId)
    {
        $this->container['orderId'] = $orderId;

        return $this;
    }

    /**
     * Gets purchasedAt
     *
     * @return \DateTime
     */
    public function getPurchasedAt()
    {
        return $this->container['purchasedAt'];
    }

    /**
     * Sets purchasedAt
     *
     * @param \DateTime $purchasedAt purchasedAt
     *
     * @return $this
     */
    public function setPurchasedAt($purchasedAt)
    {
        $this->container['purchasedAt'] = $purchasedAt;

        return $this;
    }

    /**
     * Gets lastChangedAt
     *
     * @return \DateTime
     */
    public function getLastChangedAt()
    {
        return $this->container['lastChangedAt'];
    }

    /**
     * Sets lastChangedAt
     *
     * @param \DateTime $lastChangedAt lastChangedAt
     *
     * @return $this
     */
    public function setLastChangedAt($lastChangedAt)
    {
        $this->container['lastChangedAt'] = $lastChangedAt;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string $currency currency
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets orderItem
     *
     * @return \JTL\SCX\Client\Channel\Model\OrderItem[]
     */
    public function getOrderItem()
    {
        return $this->container['orderItem'];
    }

    /**
     * Sets orderItem
     *
     * @param \JTL\SCX\Client\Channel\Model\OrderItem[] $orderItem orderItem
     *
     * @return $this
     */
    public function setOrderItem($orderItem)
    {
        $this->container['orderItem'] = $orderItem;

        return $this;
    }

    /**
     * Gets billingAddress
     *
     * @return \JTL\SCX\Client\Channel\Model\Address
     */
    public function getBillingAddress()
    {
        return $this->container['billingAddress'];
    }

    /**
     * Sets billingAddress
     *
     * @param \JTL\SCX\Client\Channel\Model\Address $billingAddress billingAddress
     *
     * @return $this
     */
    public function setBillingAddress($billingAddress)
    {
        $this->container['billingAddress'] = $billingAddress;

        return $this;
    }

    /**
     * Gets shippingAddress
     *
     * @return \JTL\SCX\Client\Channel\Model\Address
     */
    public function getShippingAddress()
    {
        return $this->container['shippingAddress'];
    }

    /**
     * Sets shippingAddress
     *
     * @param \JTL\SCX\Client\Channel\Model\Address $shippingAddress shippingAddress
     *
     * @return $this
     */
    public function setShippingAddress($shippingAddress)
    {
        $this->container['shippingAddress'] = $shippingAddress;

        return $this;
    }

    /**
     * Gets note
     *
     * @return string|null
     */
    public function getNote()
    {
        return $this->container['note'];
    }

    /**
     * Sets note
     *
     * @param string|null $note A optional note
     *
     * @return $this
     */
    public function setNote($note)
    {
        $this->container['note'] = $note;

        return $this;
    }

    /**
     * Gets buyer
     *
     * @return \JTL\SCX\Client\Channel\Model\OrderBuyer|null
     */
    public function getBuyer()
    {
        return $this->container['buyer'];
    }

    /**
     * Sets buyer
     *
     * @param \JTL\SCX\Client\Channel\Model\OrderBuyer|null $buyer buyer
     *
     * @return $this
     */
    public function setBuyer($buyer)
    {
        $this->container['buyer'] = $buyer;

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


