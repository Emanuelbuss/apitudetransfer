<?php
/**
 * Booking
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Transfer Booking API
 *
 * # APItude Transfer Booking API  APItude also includes now the ability to book transfers. This API will provide you with availability for transfer services and allow you to distribute those not only through the websites but also is thought to support mobile and tablets.  APItude for transfers API is designed to provide Hotelbeds Group clients with a set of API calls to:   * Enable the construction or creation of a complete transfer website or mobile application (app) * Integrate transfer services into existing systems both internal and external. * Integrate transfers contents for transfers into a common CMS for all the products being distributed.  **Transfer Booking API** provides all the needed calls (operations) to develop your booking funnel, confirm a booking and obtain the relevant information for a customer to enjoy the transfer service that he or she bought.  To obtain and cache the static content you can use [Transfers Cache API](), an API designed to return all the static information needed to operate the Transfers BookingAPI as quickly and simple as possible.
 *
 * OpenAPI spec version: 1.0
 * Contact: integrations.btb@hotelbeds.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.24
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * Booking Class Doc Comment
 *
 * @category Class
 * @description Booking details
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Booking implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Booking';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'booking_file_id' => 'string',
'client_reference' => 'string',
'creation_date' => 'string',
'currency' => 'string',
'holder' => '\Swagger\Client\Model\Pax',
'invoice_company' => '\Swagger\Client\Model\InvoiceCompany',
'links' => '\Swagger\Client\Model\Link[]',
'modifications_policies' => '\Swagger\Client\Model\ModificationsPolicies',
'pending_amount' => 'float',
'reference' => 'string',
'remark' => 'string',
'status' => 'string',
'supplier' => '\Swagger\Client\Model\InvoiceCompany',
'total_amount' => 'float',
'total_net_amount' => 'float',
'transfers' => '\Swagger\Client\Model\TransferServiceBookingCancel[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'booking_file_id' => null,
'client_reference' => null,
'creation_date' => null,
'currency' => null,
'holder' => null,
'invoice_company' => null,
'links' => null,
'modifications_policies' => null,
'pending_amount' => null,
'reference' => null,
'remark' => null,
'status' => null,
'supplier' => null,
'total_amount' => null,
'total_net_amount' => null,
'transfers' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'booking_file_id' => 'bookingFileId',
'client_reference' => 'clientReference',
'creation_date' => 'creationDate',
'currency' => 'currency',
'holder' => 'holder',
'invoice_company' => 'invoiceCompany',
'links' => 'links',
'modifications_policies' => 'modificationsPolicies',
'pending_amount' => 'pendingAmount',
'reference' => 'reference',
'remark' => 'remark',
'status' => 'status',
'supplier' => 'supplier',
'total_amount' => 'totalAmount',
'total_net_amount' => 'totalNetAmount',
'transfers' => 'transfers'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'booking_file_id' => 'setBookingFileId',
'client_reference' => 'setClientReference',
'creation_date' => 'setCreationDate',
'currency' => 'setCurrency',
'holder' => 'setHolder',
'invoice_company' => 'setInvoiceCompany',
'links' => 'setLinks',
'modifications_policies' => 'setModificationsPolicies',
'pending_amount' => 'setPendingAmount',
'reference' => 'setReference',
'remark' => 'setRemark',
'status' => 'setStatus',
'supplier' => 'setSupplier',
'total_amount' => 'setTotalAmount',
'total_net_amount' => 'setTotalNetAmount',
'transfers' => 'setTransfers'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'booking_file_id' => 'getBookingFileId',
'client_reference' => 'getClientReference',
'creation_date' => 'getCreationDate',
'currency' => 'getCurrency',
'holder' => 'getHolder',
'invoice_company' => 'getInvoiceCompany',
'links' => 'getLinks',
'modifications_policies' => 'getModificationsPolicies',
'pending_amount' => 'getPendingAmount',
'reference' => 'getReference',
'remark' => 'getRemark',
'status' => 'getStatus',
'supplier' => 'getSupplier',
'total_amount' => 'getTotalAmount',
'total_net_amount' => 'getTotalNetAmount',
'transfers' => 'getTransfers'    ];

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
        return self::$swaggerModelName;
    }

    const STATUS_CONFIRMED = 'CONFIRMED';
const STATUS_CANCELLED = 'CANCELLED';
const STATUS_MODIFIED = 'MODIFIED';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_CONFIRMED,
self::STATUS_CANCELLED,
self::STATUS_MODIFIED,        ];
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
        $this->container['booking_file_id'] = isset($data['booking_file_id']) ? $data['booking_file_id'] : null;
        $this->container['client_reference'] = isset($data['client_reference']) ? $data['client_reference'] : null;
        $this->container['creation_date'] = isset($data['creation_date']) ? $data['creation_date'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['holder'] = isset($data['holder']) ? $data['holder'] : null;
        $this->container['invoice_company'] = isset($data['invoice_company']) ? $data['invoice_company'] : null;
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
        $this->container['modifications_policies'] = isset($data['modifications_policies']) ? $data['modifications_policies'] : null;
        $this->container['pending_amount'] = isset($data['pending_amount']) ? $data['pending_amount'] : null;
        $this->container['reference'] = isset($data['reference']) ? $data['reference'] : null;
        $this->container['remark'] = isset($data['remark']) ? $data['remark'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['supplier'] = isset($data['supplier']) ? $data['supplier'] : null;
        $this->container['total_amount'] = isset($data['total_amount']) ? $data['total_amount'] : null;
        $this->container['total_net_amount'] = isset($data['total_net_amount']) ? $data['total_net_amount'] : null;
        $this->container['transfers'] = isset($data['transfers']) ? $data['transfers'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['creation_date'] === null) {
            $invalidProperties[] = "'creation_date' can't be null";
        }
        if ($this->container['currency'] === null) {
            $invalidProperties[] = "'currency' can't be null";
        }
        if ($this->container['holder'] === null) {
            $invalidProperties[] = "'holder' can't be null";
        }
        if ($this->container['invoice_company'] === null) {
            $invalidProperties[] = "'invoice_company' can't be null";
        }
        if ($this->container['links'] === null) {
            $invalidProperties[] = "'links' can't be null";
        }
        if ($this->container['pending_amount'] === null) {
            $invalidProperties[] = "'pending_amount' can't be null";
        }
        if ($this->container['reference'] === null) {
            $invalidProperties[] = "'reference' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['supplier'] === null) {
            $invalidProperties[] = "'supplier' can't be null";
        }
        if ($this->container['total_amount'] === null) {
            $invalidProperties[] = "'total_amount' can't be null";
        }
        if ($this->container['total_net_amount'] === null) {
            $invalidProperties[] = "'total_net_amount' can't be null";
        }
        if ($this->container['transfers'] === null) {
            $invalidProperties[] = "'transfers' can't be null";
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
     * Gets booking_file_id
     *
     * @return string
     */
    public function getBookingFileId()
    {
        return $this->container['booking_file_id'];
    }

    /**
     * Sets booking_file_id
     *
     * @param string $booking_file_id Booking file id
     *
     * @return $this
     */
    public function setBookingFileId($booking_file_id)
    {
        $this->container['booking_file_id'] = $booking_file_id;

        return $this;
    }

    /**
     * Gets client_reference
     *
     * @return string
     */
    public function getClientReference()
    {
        return $this->container['client_reference'];
    }

    /**
     * Sets client_reference
     *
     * @param string $client_reference Client reference
     *
     * @return $this
     */
    public function setClientReference($client_reference)
    {
        $this->container['client_reference'] = $client_reference;

        return $this;
    }

    /**
     * Gets creation_date
     *
     * @return string
     */
    public function getCreationDate()
    {
        return $this->container['creation_date'];
    }

    /**
     * Sets creation_date
     *
     * @param string $creation_date Creation date
     *
     * @return $this
     */
    public function setCreationDate($creation_date)
    {
        $this->container['creation_date'] = $creation_date;

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
     * @param string $currency Currency code
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets holder
     *
     * @return \Swagger\Client\Model\Pax
     */
    public function getHolder()
    {
        return $this->container['holder'];
    }

    /**
     * Sets holder
     *
     * @param \Swagger\Client\Model\Pax $holder holder
     *
     * @return $this
     */
    public function setHolder($holder)
    {
        $this->container['holder'] = $holder;

        return $this;
    }

    /**
     * Gets invoice_company
     *
     * @return \Swagger\Client\Model\InvoiceCompany
     */
    public function getInvoiceCompany()
    {
        return $this->container['invoice_company'];
    }

    /**
     * Sets invoice_company
     *
     * @param \Swagger\Client\Model\InvoiceCompany $invoice_company invoice_company
     *
     * @return $this
     */
    public function setInvoiceCompany($invoice_company)
    {
        $this->container['invoice_company'] = $invoice_company;

        return $this;
    }

    /**
     * Gets links
     *
     * @return \Swagger\Client\Model\Link[]
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     *
     * @param \Swagger\Client\Model\Link[] $links Links
     *
     * @return $this
     */
    public function setLinks($links)
    {
        $this->container['links'] = $links;

        return $this;
    }

    /**
     * Gets modifications_policies
     *
     * @return \Swagger\Client\Model\ModificationsPolicies
     */
    public function getModificationsPolicies()
    {
        return $this->container['modifications_policies'];
    }

    /**
     * Sets modifications_policies
     *
     * @param \Swagger\Client\Model\ModificationsPolicies $modifications_policies modifications_policies
     *
     * @return $this
     */
    public function setModificationsPolicies($modifications_policies)
    {
        $this->container['modifications_policies'] = $modifications_policies;

        return $this;
    }

    /**
     * Gets pending_amount
     *
     * @return float
     */
    public function getPendingAmount()
    {
        return $this->container['pending_amount'];
    }

    /**
     * Sets pending_amount
     *
     * @param float $pending_amount Pending amount import
     *
     * @return $this
     */
    public function setPendingAmount($pending_amount)
    {
        $this->container['pending_amount'] = $pending_amount;

        return $this;
    }

    /**
     * Gets reference
     *
     * @return string
     */
    public function getReference()
    {
        return $this->container['reference'];
    }

    /**
     * Sets reference
     *
     * @param string $reference Booking reference
     *
     * @return $this
     */
    public function setReference($reference)
    {
        $this->container['reference'] = $reference;

        return $this;
    }

    /**
     * Gets remark
     *
     * @return string
     */
    public function getRemark()
    {
        return $this->container['remark'];
    }

    /**
     * Sets remark
     *
     * @param string $remark Remark
     *
     * @return $this
     */
    public function setRemark($remark)
    {
        $this->container['remark'] = $remark;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status Booking status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets supplier
     *
     * @return \Swagger\Client\Model\InvoiceCompany
     */
    public function getSupplier()
    {
        return $this->container['supplier'];
    }

    /**
     * Sets supplier
     *
     * @param \Swagger\Client\Model\InvoiceCompany $supplier supplier
     *
     * @return $this
     */
    public function setSupplier($supplier)
    {
        $this->container['supplier'] = $supplier;

        return $this;
    }

    /**
     * Gets total_amount
     *
     * @return float
     */
    public function getTotalAmount()
    {
        return $this->container['total_amount'];
    }

    /**
     * Sets total_amount
     *
     * @param float $total_amount TotalAmount import
     *
     * @return $this
     */
    public function setTotalAmount($total_amount)
    {
        $this->container['total_amount'] = $total_amount;

        return $this;
    }

    /**
     * Gets total_net_amount
     *
     * @return float
     */
    public function getTotalNetAmount()
    {
        return $this->container['total_net_amount'];
    }

    /**
     * Sets total_net_amount
     *
     * @param float $total_net_amount TotalNet import
     *
     * @return $this
     */
    public function setTotalNetAmount($total_net_amount)
    {
        $this->container['total_net_amount'] = $total_net_amount;

        return $this;
    }

    /**
     * Gets transfers
     *
     * @return \Swagger\Client\Model\TransferServiceBookingCancel[]
     */
    public function getTransfers()
    {
        return $this->container['transfers'];
    }

    /**
     * Sets transfers
     *
     * @param \Swagger\Client\Model\TransferServiceBookingCancel[] $transfers Transfer details confirmed
     *
     * @return $this
     */
    public function setTransfers($transfers)
    {
        $this->container['transfers'] = $transfers;

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
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
