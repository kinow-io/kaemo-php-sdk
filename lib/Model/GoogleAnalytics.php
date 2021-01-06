<?php
/**
 * GoogleAnalytics
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
 * OpenAPI spec version: 1.4.26
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
 * GoogleAnalytics Class Doc Comment
 *
 * @category    Class */
/**
 * @package     Kinow\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GoogleAnalytics implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'GoogleAnalytics';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'analytics_id' => 'string',
        'analytics_universal' => 'bool',
        'analytics_user_id' => 'bool'
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
        'analytics_id' => 'analytics_id',
        'analytics_universal' => 'analytics_universal',
        'analytics_user_id' => 'analytics_user_id'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'analytics_id' => 'setAnalyticsId',
        'analytics_universal' => 'setAnalyticsUniversal',
        'analytics_user_id' => 'setAnalyticsUserId'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'analytics_id' => 'getAnalyticsId',
        'analytics_universal' => 'getAnalyticsUniversal',
        'analytics_user_id' => 'getAnalyticsUserId'
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
        $this->container['analytics_id'] = isset($data['analytics_id']) ? $data['analytics_id'] : null;
        $this->container['analytics_universal'] = isset($data['analytics_universal']) ? $data['analytics_universal'] : null;
        $this->container['analytics_user_id'] = isset($data['analytics_user_id']) ? $data['analytics_user_id'] : null;
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
     * Gets analytics_id
     * @return string
     */
    public function getAnalyticsId()
    {
        return $this->container['analytics_id'];
    }

    /**
     * Sets analytics_id
     * @param string $analytics_id
     * @return $this
     */
    public function setAnalyticsId($analytics_id)
    {
        $this->container['analytics_id'] = $analytics_id;

        return $this;
    }

    /**
     * Gets analytics_universal
     * @return bool
     */
    public function getAnalyticsUniversal()
    {
        return $this->container['analytics_universal'];
    }

    /**
     * Sets analytics_universal
     * @param bool $analytics_universal
     * @return $this
     */
    public function setAnalyticsUniversal($analytics_universal)
    {
        $this->container['analytics_universal'] = $analytics_universal;

        return $this;
    }

    /**
     * Gets analytics_user_id
     * @return bool
     */
    public function getAnalyticsUserId()
    {
        return $this->container['analytics_user_id'];
    }

    /**
     * Sets analytics_user_id
     * @param bool $analytics_user_id
     * @return $this
     */
    public function setAnalyticsUserId($analytics_user_id)
    {
        $this->container['analytics_user_id'] = $analytics_user_id;

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


