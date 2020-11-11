<?php
/**
 * SessionVideoStat
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
 * OpenAPI spec version: 1.4.17
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
 * SessionVideoStat Class Doc Comment
 *
 * @category    Class */
/**
 * @package     Kinow\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SessionVideoStat implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'SessionVideoStat';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'customer_id' => 'int',
        'video_id' => 'int',
        'date' => 'string',
        'iso_code' => 'string',
        'watched_time' => 'float',
        'watched_number' => 'int',
        'played_number' => 'int'
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
        'customer_id' => 'customer_id',
        'video_id' => 'video_id',
        'date' => 'date',
        'iso_code' => 'iso_code',
        'watched_time' => 'watched_time',
        'watched_number' => 'watched_number',
        'played_number' => 'played_number'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'customer_id' => 'setCustomerId',
        'video_id' => 'setVideoId',
        'date' => 'setDate',
        'iso_code' => 'setIsoCode',
        'watched_time' => 'setWatchedTime',
        'watched_number' => 'setWatchedNumber',
        'played_number' => 'setPlayedNumber'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'customer_id' => 'getCustomerId',
        'video_id' => 'getVideoId',
        'date' => 'getDate',
        'iso_code' => 'getIsoCode',
        'watched_time' => 'getWatchedTime',
        'watched_number' => 'getWatchedNumber',
        'played_number' => 'getPlayedNumber'
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
        $this->container['customer_id'] = isset($data['customer_id']) ? $data['customer_id'] : null;
        $this->container['video_id'] = isset($data['video_id']) ? $data['video_id'] : null;
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['iso_code'] = isset($data['iso_code']) ? $data['iso_code'] : null;
        $this->container['watched_time'] = isset($data['watched_time']) ? $data['watched_time'] : null;
        $this->container['watched_number'] = isset($data['watched_number']) ? $data['watched_number'] : null;
        $this->container['played_number'] = isset($data['played_number']) ? $data['played_number'] : null;
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
     * Gets customer_id
     * @return int
     */
    public function getCustomerId()
    {
        return $this->container['customer_id'];
    }

    /**
     * Sets customer_id
     * @param int $customer_id
     * @return $this
     */
    public function setCustomerId($customer_id)
    {
        $this->container['customer_id'] = $customer_id;

        return $this;
    }

    /**
     * Gets video_id
     * @return int
     */
    public function getVideoId()
    {
        return $this->container['video_id'];
    }

    /**
     * Sets video_id
     * @param int $video_id
     * @return $this
     */
    public function setVideoId($video_id)
    {
        $this->container['video_id'] = $video_id;

        return $this;
    }

    /**
     * Gets date
     * @return string
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     * @param string $date
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets iso_code
     * @return string
     */
    public function getIsoCode()
    {
        return $this->container['iso_code'];
    }

    /**
     * Sets iso_code
     * @param string $iso_code
     * @return $this
     */
    public function setIsoCode($iso_code)
    {
        $this->container['iso_code'] = $iso_code;

        return $this;
    }

    /**
     * Gets watched_time
     * @return float
     */
    public function getWatchedTime()
    {
        return $this->container['watched_time'];
    }

    /**
     * Sets watched_time
     * @param float $watched_time
     * @return $this
     */
    public function setWatchedTime($watched_time)
    {
        $this->container['watched_time'] = $watched_time;

        return $this;
    }

    /**
     * Gets watched_number
     * @return int
     */
    public function getWatchedNumber()
    {
        return $this->container['watched_number'];
    }

    /**
     * Sets watched_number
     * @param int $watched_number
     * @return $this
     */
    public function setWatchedNumber($watched_number)
    {
        $this->container['watched_number'] = $watched_number;

        return $this;
    }

    /**
     * Gets played_number
     * @return int
     */
    public function getPlayedNumber()
    {
        return $this->container['played_number'];
    }

    /**
     * Sets played_number
     * @param int $played_number
     * @return $this
     */
    public function setPlayedNumber($played_number)
    {
        $this->container['played_number'] = $played_number;

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


