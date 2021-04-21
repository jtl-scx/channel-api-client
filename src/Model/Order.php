<?php
/**
 * Order
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
 * Order Class Doc Comment
 *
 * @category Class
 * @package  JTL\SCX\Client\Channel
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Order implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Order';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @param ChannelOrderStatus
      * @param \DateTime
      * @param ChannelPaymentStatus
      * @param \DateTime
      * @param \DateTime
      * @param OrderItem
      * @param Address
      * @param Address
      * @param OrderBuyer
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'sellerId' => 'string',
        'orderStatus' => '\JTL\SCX\Client\Channel\Model\ChannelOrderStatus',
        'orderAcceptUntil' => '\DateTime',
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
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'sellerId' => null,
        'orderStatus' => null,
        'orderAcceptUntil' => 'date-time',
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
        'sellerId' => 'sellerId',
        'orderStatus' => 'orderStatus',
        'orderAcceptUntil' => 'orderAcceptUntil',
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
        'orderAcceptUntil' => 'setOrderAcceptUntil',
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
        'orderAcceptUntil' => 'getOrderAcceptUntil',
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
        $this->container['sellerId'] = $data['sellerId'] ?? null;
        $this->container['orderStatus'] = $data['orderStatus'] ?? null;
        $this->container['orderAcceptUntil'] = $data['orderAcceptUntil'] ?? null;
        $this->container['paymentStatus'] = $data['paymentStatus'] ?? null;
        $this->container['paymentMethod'] = $data['paymentMethod'] ?? null;
        $this->container['paymentReference'] = $data['paymentReference'] ?? null;
        $this->container['orderId'] = $data['orderId'] ?? null;
        $this->container['purchasedAt'] = $data['purchasedAt'] ?? null;
        $this->container['lastChangedAt'] = $data['lastChangedAt'] ?? null;
        $this->container['currency'] = $data['currency'] ?? null;
        $this->container['orderItem'] = $data['orderItem'] ?? null;
        $this->container['billingAddress'] = $data['billingAddress'] ?? null;
        $this->container['shippingAddress'] = $data['shippingAddress'] ?? null;
        $this->container['note'] = $data['note'] ?? null;
        $this->container['buyer'] = $data['buyer'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     * @codeCoverageIgnore
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
        if (!is_null($this->container['paymentMethod']) && (mb_strlen($this->container['paymentMethod']) > 150)) {
            $invalidProperties[] = "invalid value for 'paymentMethod', the character length must be smaller than or equal to 150.";
        }

        if (!is_null($this->container['paymentMethod']) && (mb_strlen($this->container['paymentMethod']) < 1)) {
            $invalidProperties[] = "invalid value for 'paymentMethod', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['orderId'] === null) {
            $invalidProperties[] = "'orderId' can't be null";
        }
        if ((mb_strlen($this->container['orderId']) > 150)) {
            $invalidProperties[] = "invalid value for 'orderId', the character length must be smaller than or equal to 150.";
        }

        if ((mb_strlen($this->container['orderId']) < 1)) {
            $invalidProperties[] = "invalid value for 'orderId', the character length must be bigger than or equal to 1.";
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


    public function getSellerId(): string
    {
        return $this->container['sellerId'];
    }

    public function setSellerId(string $sellerId): Order
    {
        $this->container['sellerId'] = $sellerId;
        return $this;
    }


    public function getOrderStatus(): ChannelOrderStatus
    {
        return $this->container['orderStatus'];
    }

    public function setOrderStatus(ChannelOrderStatus $orderStatus): Order
    {
        $this->container['orderStatus'] = $orderStatus;
        return $this;
    }


    public function getOrderAcceptUntil(): ?\DateTime
    {
        return $this->container['orderAcceptUntil'];
    }

    public function setOrderAcceptUntil(?\DateTime $orderAcceptUntil): Order
    {
        $this->container['orderAcceptUntil'] = $orderAcceptUntil;
        return $this;
    }


    public function getPaymentStatus(): ?ChannelPaymentStatus
    {
        return $this->container['paymentStatus'];
    }

    public function setPaymentStatus(?ChannelPaymentStatus $paymentStatus): Order
    {
        $this->container['paymentStatus'] = $paymentStatus;
        return $this;
    }


    public function getPaymentMethod(): ?string
    {
        return $this->container['paymentMethod'];
    }

    public function setPaymentMethod(?string $paymentMethod): Order
    {
        $this->container['paymentMethod'] = $paymentMethod;
        return $this;
    }


    public function getPaymentReference(): ?string
    {
        return $this->container['paymentReference'];
    }

    public function setPaymentReference(?string $paymentReference): Order
    {
        $this->container['paymentReference'] = $paymentReference;
        return $this;
    }


    public function getOrderId(): string
    {
        return $this->container['orderId'];
    }

    public function setOrderId(string $orderId): Order
    {
        $this->container['orderId'] = $orderId;
        return $this;
    }


    public function getPurchasedAt(): \DateTime
    {
        return $this->container['purchasedAt'];
    }

    public function setPurchasedAt(\DateTime $purchasedAt): Order
    {
        $this->container['purchasedAt'] = $purchasedAt;
        return $this;
    }


    public function getLastChangedAt(): \DateTime
    {
        return $this->container['lastChangedAt'];
    }

    public function setLastChangedAt(\DateTime $lastChangedAt): Order
    {
        $this->container['lastChangedAt'] = $lastChangedAt;
        return $this;
    }


    public function getCurrency(): string
    {
        return $this->container['currency'];
    }

    public function setCurrency(string $currency): Order
    {
        $this->container['currency'] = $currency;
        return $this;
    }


    public function getOrderItem(): array
    {
        return $this->container['orderItem'];
    }

    public function setOrderItem(array $orderItem): Order
    {
        $this->container['orderItem'] = $orderItem;
        return $this;
    }


    public function getBillingAddress(): ?Address
    {
        return $this->container['billingAddress'];
    }

    public function setBillingAddress(?Address $billingAddress): Order
    {
        $this->container['billingAddress'] = $billingAddress;
        return $this;
    }


    public function getShippingAddress(): ?Address
    {
        return $this->container['shippingAddress'];
    }

    public function setShippingAddress(?Address $shippingAddress): Order
    {
        $this->container['shippingAddress'] = $shippingAddress;
        return $this;
    }


    public function getNote(): ?string
    {
        return $this->container['note'];
    }

    public function setNote(?string $note): Order
    {
        $this->container['note'] = $note;
        return $this;
    }


    public function getBuyer(): ?OrderBuyer
    {
        return $this->container['buyer'];
    }

    public function setBuyer(?OrderBuyer $buyer): Order
    {
        $this->container['buyer'] = $buyer;
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


