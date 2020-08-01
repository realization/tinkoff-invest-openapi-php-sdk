<?php
/**
 * PlacedMarketOrder
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * OpenAPI
 *
 * tinkoff.ru/invest OpenAPI.
 *
 * OpenAPI spec version: 1.0.0
 * Contact: n.v.melnikov@tinkoff.ru
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.21
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
 * PlacedMarketOrder Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PlacedMarketOrder implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PlacedMarketOrder';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'order_id' => 'string',
'operation' => '\Swagger\Client\Model\OperationType',
'status' => '\Swagger\Client\Model\OrderStatus',
'reject_reason' => 'string',
'message' => 'string',
'requested_lots' => 'int',
'executed_lots' => 'int',
'commission' => '\Swagger\Client\Model\MoneyAmount'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'order_id' => null,
'operation' => null,
'status' => null,
'reject_reason' => null,
'message' => null,
'requested_lots' => null,
'executed_lots' => null,
'commission' => null    ];

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
        'order_id' => 'orderId',
'operation' => 'operation',
'status' => 'status',
'reject_reason' => 'rejectReason',
'message' => 'message',
'requested_lots' => 'requestedLots',
'executed_lots' => 'executedLots',
'commission' => 'commission'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'order_id' => 'setOrderId',
'operation' => 'setOperation',
'status' => 'setStatus',
'reject_reason' => 'setRejectReason',
'message' => 'setMessage',
'requested_lots' => 'setRequestedLots',
'executed_lots' => 'setExecutedLots',
'commission' => 'setCommission'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'order_id' => 'getOrderId',
'operation' => 'getOperation',
'status' => 'getStatus',
'reject_reason' => 'getRejectReason',
'message' => 'getMessage',
'requested_lots' => 'getRequestedLots',
'executed_lots' => 'getExecutedLots',
'commission' => 'getCommission'    ];

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
        $this->container['order_id'] = isset($data['order_id']) ? $data['order_id'] : null;
        $this->container['operation'] = isset($data['operation']) ? $data['operation'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['reject_reason'] = isset($data['reject_reason']) ? $data['reject_reason'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['requested_lots'] = isset($data['requested_lots']) ? $data['requested_lots'] : null;
        $this->container['executed_lots'] = isset($data['executed_lots']) ? $data['executed_lots'] : null;
        $this->container['commission'] = isset($data['commission']) ? $data['commission'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['order_id'] === null) {
            $invalidProperties[] = "'order_id' can't be null";
        }
        if ($this->container['operation'] === null) {
            $invalidProperties[] = "'operation' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['requested_lots'] === null) {
            $invalidProperties[] = "'requested_lots' can't be null";
        }
        if ($this->container['executed_lots'] === null) {
            $invalidProperties[] = "'executed_lots' can't be null";
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
     * Gets operation
     *
     * @return \Swagger\Client\Model\OperationType
     */
    public function getOperation()
    {
        return $this->container['operation'];
    }

    /**
     * Sets operation
     *
     * @param \Swagger\Client\Model\OperationType $operation operation
     *
     * @return $this
     */
    public function setOperation($operation)
    {
        $this->container['operation'] = $operation;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \Swagger\Client\Model\OrderStatus
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \Swagger\Client\Model\OrderStatus $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets reject_reason
     *
     * @return string
     */
    public function getRejectReason()
    {
        return $this->container['reject_reason'];
    }

    /**
     * Sets reject_reason
     *
     * @param string $reject_reason reject_reason
     *
     * @return $this
     */
    public function setRejectReason($reject_reason)
    {
        $this->container['reject_reason'] = $reject_reason;

        return $this;
    }

    /**
     * Gets message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string $message Сообщение об ошибке
     *
     * @return $this
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets requested_lots
     *
     * @return int
     */
    public function getRequestedLots()
    {
        return $this->container['requested_lots'];
    }

    /**
     * Sets requested_lots
     *
     * @param int $requested_lots requested_lots
     *
     * @return $this
     */
    public function setRequestedLots($requested_lots)
    {
        $this->container['requested_lots'] = $requested_lots;

        return $this;
    }

    /**
     * Gets executed_lots
     *
     * @return int
     */
    public function getExecutedLots()
    {
        return $this->container['executed_lots'];
    }

    /**
     * Sets executed_lots
     *
     * @param int $executed_lots executed_lots
     *
     * @return $this
     */
    public function setExecutedLots($executed_lots)
    {
        $this->container['executed_lots'] = $executed_lots;

        return $this;
    }

    /**
     * Gets commission
     *
     * @return \Swagger\Client\Model\MoneyAmount
     */
    public function getCommission()
    {
        return $this->container['commission'];
    }

    /**
     * Sets commission
     *
     * @param \Swagger\Client\Model\MoneyAmount $commission commission
     *
     * @return $this
     */
    public function setCommission($commission)
    {
        $this->container['commission'] = $commission;

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