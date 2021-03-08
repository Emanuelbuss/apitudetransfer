<?php
/**
 * TransferServiceContent
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
 * TransferServiceContent Class Doc Comment
 *
 * @category Class
 * @description Transfer content info
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TransferServiceContent implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TransferServiceContent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'category' => '\Swagger\Client\Model\Category',
'customer_transfer_time_info' => '\Swagger\Client\Model\TransferTimeInfo[]',
'images' => '\Swagger\Client\Model\Image[]',
'supplier_transfer_time_info' => '\Swagger\Client\Model\TransferTimeInfo[]',
'transfer_detail_info' => '\Swagger\Client\Model\TransferDetailInfo[]',
'transfer_remarks' => '\Swagger\Client\Model\TransferRemarks[]',
'vehicle' => '\Swagger\Client\Model\Vehicle'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'category' => null,
'customer_transfer_time_info' => null,
'images' => null,
'supplier_transfer_time_info' => null,
'transfer_detail_info' => null,
'transfer_remarks' => null,
'vehicle' => null    ];

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
        'category' => 'category',
'customer_transfer_time_info' => 'customerTransferTimeInfo',
'images' => 'images',
'supplier_transfer_time_info' => 'supplierTransferTimeInfo',
'transfer_detail_info' => 'transferDetailInfo',
'transfer_remarks' => 'transferRemarks',
'vehicle' => 'vehicle'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'category' => 'setCategory',
'customer_transfer_time_info' => 'setCustomerTransferTimeInfo',
'images' => 'setImages',
'supplier_transfer_time_info' => 'setSupplierTransferTimeInfo',
'transfer_detail_info' => 'setTransferDetailInfo',
'transfer_remarks' => 'setTransferRemarks',
'vehicle' => 'setVehicle'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'category' => 'getCategory',
'customer_transfer_time_info' => 'getCustomerTransferTimeInfo',
'images' => 'getImages',
'supplier_transfer_time_info' => 'getSupplierTransferTimeInfo',
'transfer_detail_info' => 'getTransferDetailInfo',
'transfer_remarks' => 'getTransferRemarks',
'vehicle' => 'getVehicle'    ];

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
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['customer_transfer_time_info'] = isset($data['customer_transfer_time_info']) ? $data['customer_transfer_time_info'] : null;
        $this->container['images'] = isset($data['images']) ? $data['images'] : null;
        $this->container['supplier_transfer_time_info'] = isset($data['supplier_transfer_time_info']) ? $data['supplier_transfer_time_info'] : null;
        $this->container['transfer_detail_info'] = isset($data['transfer_detail_info']) ? $data['transfer_detail_info'] : null;
        $this->container['transfer_remarks'] = isset($data['transfer_remarks']) ? $data['transfer_remarks'] : null;
        $this->container['vehicle'] = isset($data['vehicle']) ? $data['vehicle'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['category'] === null) {
            $invalidProperties[] = "'category' can't be null";
        }
        if ($this->container['customer_transfer_time_info'] === null) {
            $invalidProperties[] = "'customer_transfer_time_info' can't be null";
        }
        if ($this->container['images'] === null) {
            $invalidProperties[] = "'images' can't be null";
        }
        if ($this->container['supplier_transfer_time_info'] === null) {
            $invalidProperties[] = "'supplier_transfer_time_info' can't be null";
        }
        if ($this->container['transfer_detail_info'] === null) {
            $invalidProperties[] = "'transfer_detail_info' can't be null";
        }
        if ($this->container['vehicle'] === null) {
            $invalidProperties[] = "'vehicle' can't be null";
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
     * Gets category
     *
     * @return \Swagger\Client\Model\Category
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param \Swagger\Client\Model\Category $category category
     *
     * @return $this
     */
    public function setCategory($category)
    {
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets customer_transfer_time_info
     *
     * @return \Swagger\Client\Model\TransferTimeInfo[]
     */
    public function getCustomerTransferTimeInfo()
    {
        return $this->container['customer_transfer_time_info'];
    }

    /**
     * Sets customer_transfer_time_info
     *
     * @param \Swagger\Client\Model\TransferTimeInfo[] $customer_transfer_time_info Customer transfer time info
     *
     * @return $this
     */
    public function setCustomerTransferTimeInfo($customer_transfer_time_info)
    {
        $this->container['customer_transfer_time_info'] = $customer_transfer_time_info;

        return $this;
    }

    /**
     * Gets images
     *
     * @return \Swagger\Client\Model\Image[]
     */
    public function getImages()
    {
        return $this->container['images'];
    }

    /**
     * Sets images
     *
     * @param \Swagger\Client\Model\Image[] $images Image list
     *
     * @return $this
     */
    public function setImages($images)
    {
        $this->container['images'] = $images;

        return $this;
    }

    /**
     * Gets supplier_transfer_time_info
     *
     * @return \Swagger\Client\Model\TransferTimeInfo[]
     */
    public function getSupplierTransferTimeInfo()
    {
        return $this->container['supplier_transfer_time_info'];
    }

    /**
     * Sets supplier_transfer_time_info
     *
     * @param \Swagger\Client\Model\TransferTimeInfo[] $supplier_transfer_time_info Supplier transfer time info
     *
     * @return $this
     */
    public function setSupplierTransferTimeInfo($supplier_transfer_time_info)
    {
        $this->container['supplier_transfer_time_info'] = $supplier_transfer_time_info;

        return $this;
    }

    /**
     * Gets transfer_detail_info
     *
     * @return \Swagger\Client\Model\TransferDetailInfo[]
     */
    public function getTransferDetailInfo()
    {
        return $this->container['transfer_detail_info'];
    }

    /**
     * Sets transfer_detail_info
     *
     * @param \Swagger\Client\Model\TransferDetailInfo[] $transfer_detail_info Transfer detail info
     *
     * @return $this
     */
    public function setTransferDetailInfo($transfer_detail_info)
    {
        $this->container['transfer_detail_info'] = $transfer_detail_info;

        return $this;
    }

    /**
     * Gets transfer_remarks
     *
     * @return \Swagger\Client\Model\TransferRemarks[]
     */
    public function getTransferRemarks()
    {
        return $this->container['transfer_remarks'];
    }

    /**
     * Sets transfer_remarks
     *
     * @param \Swagger\Client\Model\TransferRemarks[] $transfer_remarks Transfer remarks
     *
     * @return $this
     */
    public function setTransferRemarks($transfer_remarks)
    {
        $this->container['transfer_remarks'] = $transfer_remarks;

        return $this;
    }

    /**
     * Gets vehicle
     *
     * @return \Swagger\Client\Model\Vehicle
     */
    public function getVehicle()
    {
        return $this->container['vehicle'];
    }

    /**
     * Sets vehicle
     *
     * @param \Swagger\Client\Model\Vehicle $vehicle vehicle
     *
     * @return $this
     */
    public function setVehicle($vehicle)
    {
        $this->container['vehicle'] = $vehicle;

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