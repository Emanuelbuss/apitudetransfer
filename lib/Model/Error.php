<?php
/**
 * Error
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
 * Error Class Doc Comment
 *
 * @category Class
 * @description The Error Object
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Error implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Error';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'code' => 'string',
'date_time' => 'string',
'description' => 'string',
'field_errors' => '\Swagger\Client\Model\FieldError[]',
'is_bad_request' => 'bool',
'message' => 'string',
'nested_error' => '\Swagger\Client\Model\Error',
'service_name' => 'string',
'trace_id' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'code' => null,
'date_time' => null,
'description' => null,
'field_errors' => null,
'is_bad_request' => null,
'message' => null,
'nested_error' => null,
'service_name' => null,
'trace_id' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes(): array
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats(): array
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
        'code' => 'code',
'date_time' => 'dateTime',
'description' => 'description',
'field_errors' => 'fieldErrors',
'is_bad_request' => 'isBadRequest',
'message' => 'message',
'nested_error' => 'nestedError',
'service_name' => 'serviceName',
'trace_id' => 'traceId'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'code' => 'setCode',
'date_time' => 'setDateTime',
'description' => 'setDescription',
'field_errors' => 'setFieldErrors',
'is_bad_request' => 'setIsBadRequest',
'message' => 'setMessage',
'nested_error' => 'setNestedError',
'service_name' => 'setServiceName',
'trace_id' => 'setTraceId'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'code' => 'getCode',
'date_time' => 'getDateTime',
'description' => 'getDescription',
'field_errors' => 'getFieldErrors',
'is_bad_request' => 'getIsBadRequest',
'message' => 'getMessage',
'nested_error' => 'getNestedError',
'service_name' => 'getServiceName',
'trace_id' => 'getTraceId'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap(): array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters(): array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters(): array
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName(): string
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
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['date_time'] = isset($data['date_time']) ? $data['date_time'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['field_errors'] = isset($data['field_errors']) ? $data['field_errors'] : null;
        $this->container['is_bad_request'] = isset($data['is_bad_request']) ? $data['is_bad_request'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['nested_error'] = isset($data['nested_error']) ? $data['nested_error'] : null;
        $this->container['service_name'] = isset($data['service_name']) ? $data['service_name'] : null;
        $this->container['trace_id'] = isset($data['trace_id']) ? $data['trace_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties(): array
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid(): bool
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets code
     *
     * @return ?string
     */
    public function getCode(): ?string
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string $code Error code
     *
     * @return $this
     */
    public function setCode($code): static
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets date_time
     *
     * @return ?string
     */
    public function getDateTime(): ?string
    {
        return $this->container['date_time'];
    }

    /**
     * Sets date_time
     *
     * @param string $date_time Time and date the error was thrown
     *
     * @return $this
     */
    public function setDateTime($date_time): static
    {
        $this->container['date_time'] = $date_time;

        return $this;
    }

    /**
     * Gets description
     *
     * @return ?string
     */
    public function getDescription(): ?string
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description Error description
     *
     * @return $this
     */
    public function setDescription($description): static
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets field_errors
     *
     * @return ?\Swagger\Client\Model\FieldError[]
     */
    public function getFieldErrors(): ?array
    {
        return $this->container['field_errors'];
    }

    /**
     * Sets field_errors
     *
     * @param \Swagger\Client\Model\FieldError[] $field_errors List of errors caused by field validations
     *
     * @return $this
     */
    public function setFieldErrors($field_errors): static
    {
        $this->container['field_errors'] = $field_errors;

        return $this;
    }

    /**
     * Gets is_bad_request
     *
     * @return ?bool
     */
    public function getIsBadRequest(): ?bool
    {
        return $this->container['is_bad_request'];
    }

    /**
     * Sets is_bad_request
     *
     * @param bool $is_bad_request The error is caused by a bad request from client, it's not due to an internal service
     *
     * @return $this
     */
    public function setIsBadRequest($is_bad_request): static
    {
        $this->container['is_bad_request'] = $is_bad_request;

        return $this;
    }

    /**
     * Gets message
     *
     * @return ?string
     */
    public function getMessage(): ?string
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string $message Error message
     *
     * @return $this
     */
    public function setMessage($message): static
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets nested_error
     *
     * @return ?\Swagger\Client\Model\Error
     */
    public function getNestedError(): ?Error
    {
        return $this->container['nested_error'];
    }

    /**
     * Sets nested_error
     *
     * @param \Swagger\Client\Model\Error $nested_error nested_error
     *
     * @return $this
     */
    public function setNestedError($nested_error): static
    {
        $this->container['nested_error'] = $nested_error;

        return $this;
    }

    /**
     * Gets service_name
     *
     * @return ?string
     */
    public function getServiceName(): ?string
    {
        return $this->container['service_name'];
    }

    /**
     * Sets service_name
     *
     * @param string $service_name The name of the service that threw this error
     *
     * @return $this
     */
    public function setServiceName($service_name): static
    {
        $this->container['service_name'] = $service_name;

        return $this;
    }

    /**
     * Gets trace_id
     *
     * @return ?string
     */
    public function getTraceId(): ?string
    {
        return $this->container['trace_id'];
    }

    /**
     * Sets trace_id
     *
     * @param string $trace_id The trace ID
     *
     * @return $this
     */
    public function setTraceId($trace_id): static
    {
        $this->container['trace_id'] = $trace_id;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
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
    public function offsetGet($offset): mixed
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
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
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
