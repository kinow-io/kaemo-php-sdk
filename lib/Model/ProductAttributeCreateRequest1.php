<?php
/**
 * ProductAttributeCreateRequest1
 *
 * PHP version 5
 *
 * @category Class
 * @package  Kinow\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Kinow API
 *
 * Client API for Kinow back-office
 *
 * OpenAPI spec version: 1.4.10
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Kinow\Client\Model;

use \ArrayAccess;

/**
 * ProductAttributeCreateRequest1 Class Doc Comment
 *
 * @category    Class */
/**
 * @package     Kinow\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ProductAttributeCreateRequest1 implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ProductAttributeCreateRequest_1';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id_customer' => 'int',
        'fingerprint' => 'string',
        'type' => 'string',
        'os' => 'string',
        'application' => 'string'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'id_customer' => 'id_customer',
        'fingerprint' => 'fingerprint',
        'type' => 'type',
        'os' => 'os',
        'application' => 'application'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id_customer' => 'setIdCustomer',
        'fingerprint' => 'setFingerprint',
        'type' => 'setType',
        'os' => 'setOs',
        'application' => 'setApplication'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id_customer' => 'getIdCustomer',
        'fingerprint' => 'getFingerprint',
        'type' => 'getType',
        'os' => 'getOs',
        'application' => 'getApplication'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id_customer'] = isset($data['id_customer']) ? $data['id_customer'] : null;
        $this->container['fingerprint'] = isset($data['fingerprint']) ? $data['fingerprint'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['os'] = isset($data['os']) ? $data['os'] : null;
        $this->container['application'] = isset($data['application']) ? $data['application'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        return true;
    }


    /**
     * Gets id_customer
     * @return int
     */
    public function getIdCustomer()
    {
        return $this->container['id_customer'];
    }

    /**
     * Sets id_customer
     * @param int $id_customer Customer ID to attach this Device
     * @return $this
     */
    public function setIdCustomer($id_customer)
    {
        $this->container['id_customer'] = $id_customer;

        return $this;
    }

    /**
     * Gets fingerprint
     * @return string
     */
    public function getFingerprint()
    {
        return $this->container['fingerprint'];
    }

    /**
     * Sets fingerprint
     * @param string $fingerprint Uniq fingerprint to identify Device
     * @return $this
     */
    public function setFingerprint($fingerprint)
    {
        $this->container['fingerprint'] = $fingerprint;

        return $this;
    }

    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param string $type Device type (eg. Desktop, mobile, STB)
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets os
     * @return string
     */
    public function getOs()
    {
        return $this->container['os'];
    }

    /**
     * Sets os
     * @param string $os Device OS (eg. Windows 10, iOS, Android)
     * @return $this
     */
    public function setOs($os)
    {
        $this->container['os'] = $os;

        return $this;
    }

    /**
     * Gets application
     * @return string
     */
    public function getApplication()
    {
        return $this->container['application'];
    }

    /**
     * Sets application
     * @param string $application Device application (eg. Chrome, Firefox)
     * @return $this
     */
    public function setApplication($application)
    {
        $this->container['application'] = $application;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Kinow\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Kinow\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


