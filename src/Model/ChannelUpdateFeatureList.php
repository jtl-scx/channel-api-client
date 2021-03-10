<?php
/**
 * ChannelUpdateFeatureList
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
 * SCX Channel API
 *
 * The version of the OpenAPI document: 1.0.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.1
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
 * ChannelUpdateFeatureList Class Doc Comment
 *
 * @category Class
 * @package  JTL\SCX\Client\Channel
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ChannelUpdateFeatureList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ChannelUpdate_featureList';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'invoiceDocumentTransfer' => 'string',
        'priceUpdatesSupported' => 'bool',
        'quantityPriceSupported' => 'bool',
        'remainingQuanitySupported' => 'bool',
        'variationsSupported' => 'bool',
        'returnTrackingRequired' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'invoiceDocumentTransfer' => null,
        'priceUpdatesSupported' => null,
        'quantityPriceSupported' => null,
        'remainingQuanitySupported' => null,
        'variationsSupported' => null,
        'returnTrackingRequired' => null
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
        'invoiceDocumentTransfer' => 'invoiceDocumentTransfer',
        'priceUpdatesSupported' => 'priceUpdatesSupported',
        'quantityPriceSupported' => 'quantityPriceSupported',
        'remainingQuanitySupported' => 'remainingQuanitySupported',
        'variationsSupported' => 'variationsSupported',
        'returnTrackingRequired' => 'returnTrackingRequired'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'invoiceDocumentTransfer' => 'setInvoiceDocumentTransfer',
        'priceUpdatesSupported' => 'setPriceUpdatesSupported',
        'quantityPriceSupported' => 'setQuantityPriceSupported',
        'remainingQuanitySupported' => 'setRemainingQuanitySupported',
        'variationsSupported' => 'setVariationsSupported',
        'returnTrackingRequired' => 'setReturnTrackingRequired'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'invoiceDocumentTransfer' => 'getInvoiceDocumentTransfer',
        'priceUpdatesSupported' => 'getPriceUpdatesSupported',
        'quantityPriceSupported' => 'getQuantityPriceSupported',
        'remainingQuanitySupported' => 'getRemainingQuanitySupported',
        'variationsSupported' => 'getVariationsSupported',
        'returnTrackingRequired' => 'getReturnTrackingRequired'
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

    const INVOICE_DOCUMENT_TRANSFER_NOT_SUPPORTED = 'not-supported';
    const INVOICE_DOCUMENT_TRANSFER_FROM_CHANNEL = 'from-channel';
    const INVOICE_DOCUMENT_TRANSFER_FROM_SELLER = 'from-seller';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getInvoiceDocumentTransferAllowableValues()
    {
        return [
            self::INVOICE_DOCUMENT_TRANSFER_NOT_SUPPORTED,
            self::INVOICE_DOCUMENT_TRANSFER_FROM_CHANNEL,
            self::INVOICE_DOCUMENT_TRANSFER_FROM_SELLER,
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
        $this->container['invoiceDocumentTransfer'] = isset($data['invoiceDocumentTransfer']) ? $data['invoiceDocumentTransfer'] : 'not-supported';
        $this->container['priceUpdatesSupported'] = isset($data['priceUpdatesSupported']) ? $data['priceUpdatesSupported'] : false;
        $this->container['quantityPriceSupported'] = isset($data['quantityPriceSupported']) ? $data['quantityPriceSupported'] : false;
        $this->container['remainingQuanitySupported'] = isset($data['remainingQuanitySupported']) ? $data['remainingQuanitySupported'] : false;
        $this->container['variationsSupported'] = isset($data['variationsSupported']) ? $data['variationsSupported'] : false;
        $this->container['returnTrackingRequired'] = isset($data['returnTrackingRequired']) ? $data['returnTrackingRequired'] : false;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getInvoiceDocumentTransferAllowableValues();
        if (!is_null($this->container['invoiceDocumentTransfer']) && !in_array($this->container['invoiceDocumentTransfer'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'invoiceDocumentTransfer', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets invoiceDocumentTransfer
     *
     * @return string|null
     */
    public function getInvoiceDocumentTransfer()
    {
        return $this->container['invoiceDocumentTransfer'];
    }

    /**
     * Sets invoiceDocumentTransfer
     *
     * @param string|null $invoiceDocumentTransfer Indicates if Invoice can be shared between Channel and Seller Implementation. If this flag is set to `from-seller` a connected client implementation (such as JTL-Wawi) can upload invoice documents using `POST /v1/seller/order/invoice`. When flag is set to `from-channel` a connected client can receive invoice from a Channel by `Channel:Order.Invoice` Event. A value `not-supported` indicates that no invoices can be transmitted between Seller and Channel.
     *
     * @return $this
     */
    public function setInvoiceDocumentTransfer($invoiceDocumentTransfer)
    {
        $allowedValues = $this->getInvoiceDocumentTransferAllowableValues();
        if (!is_null($invoiceDocumentTransfer) && !in_array($invoiceDocumentTransfer, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'invoiceDocumentTransfer', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['invoiceDocumentTransfer'] = $invoiceDocumentTransfer;

        return $this;
    }

    /**
     * Gets priceUpdatesSupported
     *
     * @return bool|null
     */
    public function getPriceUpdatesSupported()
    {
        return $this->container['priceUpdatesSupported'];
    }

    /**
     * Sets priceUpdatesSupported
     *
     * @param bool|null $priceUpdatesSupported Indicates whether the channel is able to process events of type Seller:Offer.PriceUpdate
     *
     * @return $this
     */
    public function setPriceUpdatesSupported($priceUpdatesSupported)
    {
        $this->container['priceUpdatesSupported'] = $priceUpdatesSupported;

        return $this;
    }

    /**
     * Gets quantityPriceSupported
     *
     * @return bool|null
     */
    public function getQuantityPriceSupported()
    {
        return $this->container['quantityPriceSupported'];
    }

    /**
     * Sets quantityPriceSupported
     *
     * @param bool|null $quantityPriceSupported Does the channel support quantity price for quantity greater than 1. In SCX all offer prices are represented by a quantity price data structure. In case there is no support for quantity prices on a certain channel only the price for quantity 1 is taken into account. All other price settings may be ignored by the connected channel.
     *
     * @return $this
     */
    public function setQuantityPriceSupported($quantityPriceSupported)
    {
        $this->container['quantityPriceSupported'] = $quantityPriceSupported;

        return $this;
    }

    /**
     * Gets remainingQuanitySupported
     *
     * @return bool|null
     */
    public function getRemainingQuanitySupported()
    {
        return $this->container['remainingQuanitySupported'];
    }

    /**
     * Sets remainingQuanitySupported
     *
     * @param bool|null $remainingQuanitySupported Indicates if a channel is able to support a remaing quanity with each Order. The feature can be used by a connected client implementation (such as JTL-Wawi) to manage quanity updates on an channel.
     *
     * @return $this
     */
    public function setRemainingQuanitySupported($remainingQuanitySupported)
    {
        $this->container['remainingQuanitySupported'] = $remainingQuanitySupported;

        return $this;
    }

    /**
     * Gets variationsSupported
     *
     * @return bool|null
     */
    public function getVariationsSupported()
    {
        return $this->container['variationsSupported'];
    }

    /**
     * Sets variationsSupported
     *
     * @param bool|null $variationsSupported Does the channel supports listing of variation offers. Variations are multiple similar (but not identical) items in a offer listing. For example, a single offer could contain multiple items of the same brand and model that vary by color and size (like \"Blue, Large\" and \"Black, Medium\"). Each variation can have its own quantity and price.
     *
     * @return $this
     */
    public function setVariationsSupported($variationsSupported)
    {
        $this->container['variationsSupported'] = $variationsSupported;

        return $this;
    }

    /**
     * Gets returnTrackingRequired
     *
     * @return bool|null
     */
    public function getReturnTrackingRequired()
    {
        return $this->container['returnTrackingRequired'];
    }

    /**
     * Sets returnTrackingRequired
     *
     * @param bool|null $returnTrackingRequired Indicates if a channel requires a return tracking code for an order item shipping update.
     *
     * @return $this
     */
    public function setReturnTrackingRequired($returnTrackingRequired)
    {
        $this->container['returnTrackingRequired'] = $returnTrackingRequired;

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


