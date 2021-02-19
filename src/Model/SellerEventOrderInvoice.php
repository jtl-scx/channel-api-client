<?php
/**
 * SellerEventOrderInvoice
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
 * SellerEventOrderInvoice Class Doc Comment
 *
 * @category Class
 * @package  JTL\SCX\Client\Channel
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class SellerEventOrderInvoice implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SellerEventOrderInvoice';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'type' => 'string',
        'sellerId' => 'string',
        'orderId' => 'string',
        'invoiceNumber' => 'string',
        'documentId' => 'string',
        'documentExpiresAt' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'type' => null,
        'sellerId' => null,
        'orderId' => null,
        'invoiceNumber' => null,
        'documentId' => null,
        'documentExpiresAt' => 'date-time'
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
        'type' => 'type',
        'sellerId' => 'sellerId',
        'orderId' => 'orderId',
        'invoiceNumber' => 'invoiceNumber',
        'documentId' => 'documentId',
        'documentExpiresAt' => 'documentExpiresAt'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'sellerId' => 'setSellerId',
        'orderId' => 'setOrderId',
        'invoiceNumber' => 'setInvoiceNumber',
        'documentId' => 'setDocumentId',
        'documentExpiresAt' => 'setDocumentExpiresAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'sellerId' => 'getSellerId',
        'orderId' => 'getOrderId',
        'invoiceNumber' => 'getInvoiceNumber',
        'documentId' => 'getDocumentId',
        'documentExpiresAt' => 'getDocumentExpiresAt'
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

    const TYPE_INVOICE = 'INVOICE';
    const TYPE_CREDITNOTE = 'CREDITNOTE';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_INVOICE,
            self::TYPE_CREDITNOTE,
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
        $this->container['type'] = $data['type'] ?? null;
        $this->container['sellerId'] = $data['sellerId'] ?? null;
        $this->container['orderId'] = $data['orderId'] ?? null;
        $this->container['invoiceNumber'] = $data['invoiceNumber'] ?? null;
        $this->container['documentId'] = $data['documentId'] ?? null;
        $this->container['documentExpiresAt'] = $data['documentExpiresAt'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['sellerId'] === null) {
            $invalidProperties[] = "'sellerId' can't be null";
        }
        if (!preg_match("/^\\w{1,50}$/", $this->container['sellerId'])) {
            $invalidProperties[] = "invalid value for 'sellerId', must be conform to the pattern /^\\w{1,50}$/.";
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

        if ($this->container['invoiceNumber'] === null) {
            $invalidProperties[] = "'invoiceNumber' can't be null";
        }
        if ((mb_strlen($this->container['invoiceNumber']) > 128)) {
            $invalidProperties[] = "invalid value for 'invoiceNumber', the character length must be smaller than or equal to 128.";
        }

        if ((mb_strlen($this->container['invoiceNumber']) < 1)) {
            $invalidProperties[] = "invalid value for 'invoiceNumber', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['documentId'] === null) {
            $invalidProperties[] = "'documentId' can't be null";
        }
        if ($this->container['documentExpiresAt'] === null) {
            $invalidProperties[] = "'documentExpiresAt' can't be null";
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
     * @return self
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'type', must be one of '%s'",
                    $type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
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
     * @return self
     */
    public function setSellerId($sellerId)
    {

        if ((!preg_match("/^\\w{1,50}$/", $sellerId))) {
            throw new \InvalidArgumentException("invalid value for $sellerId when calling SellerEventOrderInvoice., must conform to the pattern /^\\w{1,50}$/.");
        }

        $this->container['sellerId'] = $sellerId;

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
     * @return self
     */
    public function setOrderId($orderId)
    {
        if ((mb_strlen($orderId) > 150)) {
            throw new \InvalidArgumentException('invalid length for $orderId when calling SellerEventOrderInvoice., must be smaller than or equal to 150.');
        }
        if ((mb_strlen($orderId) < 1)) {
            throw new \InvalidArgumentException('invalid length for $orderId when calling SellerEventOrderInvoice., must be bigger than or equal to 1.');
        }

        $this->container['orderId'] = $orderId;

        return $this;
    }

    /**
     * Gets invoiceNumber
     *
     * @return string
     */
    public function getInvoiceNumber()
    {
        return $this->container['invoiceNumber'];
    }

    /**
     * Sets invoiceNumber
     *
     * @param string $invoiceNumber invoiceNumber
     *
     * @return self
     */
    public function setInvoiceNumber($invoiceNumber)
    {
        if ((mb_strlen($invoiceNumber) > 128)) {
            throw new \InvalidArgumentException('invalid length for $invoiceNumber when calling SellerEventOrderInvoice., must be smaller than or equal to 128.');
        }
        if ((mb_strlen($invoiceNumber) < 1)) {
            throw new \InvalidArgumentException('invalid length for $invoiceNumber when calling SellerEventOrderInvoice., must be bigger than or equal to 1.');
        }

        $this->container['invoiceNumber'] = $invoiceNumber;

        return $this;
    }

    /**
     * Gets documentId
     *
     * @return string
     */
    public function getDocumentId()
    {
        return $this->container['documentId'];
    }

    /**
     * Sets documentId
     *
     * @param string $documentId documentId
     *
     * @return self
     */
    public function setDocumentId($documentId)
    {
        $this->container['documentId'] = $documentId;

        return $this;
    }

    /**
     * Gets documentExpiresAt
     *
     * @return \DateTime
     */
    public function getDocumentExpiresAt()
    {
        return $this->container['documentExpiresAt'];
    }

    /**
     * Sets documentExpiresAt
     *
     * @param \DateTime $documentExpiresAt documentExpiresAt
     *
     * @return self
     */
    public function setDocumentExpiresAt($documentExpiresAt)
    {
        $this->container['documentExpiresAt'] = $documentExpiresAt;

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


