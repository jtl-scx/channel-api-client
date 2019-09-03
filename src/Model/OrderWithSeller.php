<?php
/**
 * OrderWithSeller
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
 * OrderWithSeller Class Doc Comment
 *
 * @category Class
 * @package  JTL\SCX\Client\Channel
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OrderWithSeller implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OrderWithSeller';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'order_status' => '\JTL\SCX\Client\Channel\Model\OrderStatus',
        'payment_status' => '\JTL\SCX\Client\Channel\Model\PaymentStatus',
        'order_id' => 'string',
        'purchased_at' => '\DateTime',
        'last_changed_at' => '\DateTime',
        'currency' => 'string',
        'order_item' => '\JTL\SCX\Client\Channel\Model\OrderItem[]',
        'billing_address' => '\JTL\SCX\Client\Channel\Model\Address',
        'shipping_address' => '\JTL\SCX\Client\Channel\Model\Address',
        'note' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'order_status' => null,
        'payment_status' => null,
        'order_id' => null,
        'purchased_at' => 'date-time',
        'last_changed_at' => 'date-time',
        'currency' => null,
        'order_item' => null,
        'billing_address' => null,
        'shipping_address' => null,
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
        'order_status' => 'orderStatus',
        'payment_status' => 'paymentStatus',
        'order_id' => 'orderId',
        'purchased_at' => 'purchasedAt',
        'last_changed_at' => 'lastChangedAt',
        'currency' => 'currency',
        'order_item' => 'orderItem',
        'billing_address' => 'billingAddress',
        'shipping_address' => 'shippingAddress',
        'note' => 'note'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'order_status' => 'setOrderStatus',
        'payment_status' => 'setPaymentStatus',
        'order_id' => 'setOrderId',
        'purchased_at' => 'setPurchasedAt',
        'last_changed_at' => 'setLastChangedAt',
        'currency' => 'setCurrency',
        'order_item' => 'setOrderItem',
        'billing_address' => 'setBillingAddress',
        'shipping_address' => 'setShippingAddress',
        'note' => 'setNote'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'order_status' => 'getOrderStatus',
        'payment_status' => 'getPaymentStatus',
        'order_id' => 'getOrderId',
        'purchased_at' => 'getPurchasedAt',
        'last_changed_at' => 'getLastChangedAt',
        'currency' => 'getCurrency',
        'order_item' => 'getOrderItem',
        'billing_address' => 'getBillingAddress',
        'shipping_address' => 'getShippingAddress',
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
        $this->container['order_status'] = isset($data['order_status']) ? $data['order_status'] : null;
        $this->container['payment_status'] = isset($data['payment_status']) ? $data['payment_status'] : null;
        $this->container['order_id'] = isset($data['order_id']) ? $data['order_id'] : null;
        $this->container['purchased_at'] = isset($data['purchased_at']) ? $data['purchased_at'] : null;
        $this->container['last_changed_at'] = isset($data['last_changed_at']) ? $data['last_changed_at'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['order_item'] = isset($data['order_item']) ? $data['order_item'] : null;
        $this->container['billing_address'] = isset($data['billing_address']) ? $data['billing_address'] : null;
        $this->container['shipping_address'] = isset($data['shipping_address']) ? $data['shipping_address'] : null;
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

        if ($this->container['order_status'] === null) {
            $invalidProperties[] = "'order_status' can't be null";
        }
        if ($this->container['payment_status'] === null) {
            $invalidProperties[] = "'payment_status' can't be null";
        }
        if ($this->container['order_id'] === null) {
            $invalidProperties[] = "'order_id' can't be null";
        }
        if ($this->container['purchased_at'] === null) {
            $invalidProperties[] = "'purchased_at' can't be null";
        }
        if ($this->container['last_changed_at'] === null) {
            $invalidProperties[] = "'last_changed_at' can't be null";
        }
        if ($this->container['currency'] === null) {
            $invalidProperties[] = "'currency' can't be null";
        }
        if ($this->container['billing_address'] === null) {
            $invalidProperties[] = "'billing_address' can't be null";
        }
        if ($this->container['shipping_address'] === null) {
            $invalidProperties[] = "'shipping_address' can't be null";
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
     * Gets order_status
     *
     * @return \JTL\SCX\Client\Channel\Model\OrderStatus
     */
    public function getOrderStatus()
    {
        return $this->container['order_status'];
    }

    /**
     * Sets order_status
     *
     * @param \JTL\SCX\Client\Channel\Model\OrderStatus $order_status order_status
     *
     * @return $this
     */
    public function setOrderStatus($order_status)
    {
        $this->container['order_status'] = $order_status;

        return $this;
    }

    /**
     * Gets payment_status
     *
     * @return \JTL\SCX\Client\Channel\Model\PaymentStatus
     */
    public function getPaymentStatus()
    {
        return $this->container['payment_status'];
    }

    /**
     * Sets payment_status
     *
     * @param \JTL\SCX\Client\Channel\Model\PaymentStatus $payment_status payment_status
     *
     * @return $this
     */
    public function setPaymentStatus($payment_status)
    {
        $this->container['payment_status'] = $payment_status;

        return $this;
    }

    /**
     * Gets order_id
     *
     * @return string
     */
    public function getOrderId()
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id
     *
     * @param string $order_id order_id
     *
     * @return $this
     */
    public function setOrderId($order_id)
    {
        $this->container['order_id'] = $order_id;

        return $this;
    }

    /**
     * Gets purchased_at
     *
     * @return \DateTime
     */
    public function getPurchasedAt()
    {
        return $this->container['purchased_at'];
    }

    /**
     * Sets purchased_at
     *
     * @param \DateTime $purchased_at purchased_at
     *
     * @return $this
     */
    public function setPurchasedAt($purchased_at)
    {
        $this->container['purchased_at'] = $purchased_at;

        return $this;
    }

    /**
     * Gets last_changed_at
     *
     * @return \DateTime
     */
    public function getLastChangedAt()
    {
        return $this->container['last_changed_at'];
    }

    /**
     * Sets last_changed_at
     *
     * @param \DateTime $last_changed_at last_changed_at
     *
     * @return $this
     */
    public function setLastChangedAt($last_changed_at)
    {
        $this->container['last_changed_at'] = $last_changed_at;

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
     * Gets order_item
     *
     * @return \JTL\SCX\Client\Channel\Model\OrderItem[]|null
     */
    public function getOrderItem()
    {
        return $this->container['order_item'];
    }

    /**
     * Sets order_item
     *
     * @param \JTL\SCX\Client\Channel\Model\OrderItem[]|null $order_item order_item
     *
     * @return $this
     */
    public function setOrderItem($order_item)
    {
        $this->container['order_item'] = $order_item;

        return $this;
    }

    /**
     * Gets billing_address
     *
     * @return \JTL\SCX\Client\Channel\Model\Address
     */
    public function getBillingAddress()
    {
        return $this->container['billing_address'];
    }

    /**
     * Sets billing_address
     *
     * @param \JTL\SCX\Client\Channel\Model\Address $billing_address billing_address
     *
     * @return $this
     */
    public function setBillingAddress($billing_address)
    {
        $this->container['billing_address'] = $billing_address;

        return $this;
    }

    /**
     * Gets shipping_address
     *
     * @return \JTL\SCX\Client\Channel\Model\Address
     */
    public function getShippingAddress()
    {
        return $this->container['shipping_address'];
    }

    /**
     * Sets shipping_address
     *
     * @param \JTL\SCX\Client\Channel\Model\Address $shipping_address shipping_address
     *
     * @return $this
     */
    public function setShippingAddress($shipping_address)
    {
        $this->container['shipping_address'] = $shipping_address;

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


