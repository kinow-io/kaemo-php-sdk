<?php
/**
 * Pagination
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
 * Pagination Class Doc Comment
 *
 * @category    Class */
/**
 * @package     Kinow\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Pagination implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Pagination';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'total' => 'int',
        'current_page' => 'int',
        'per_page' => 'int',
        'last_page' => 'int',
        'next_page_url' => 'string',
        'prev_page_url' => 'string',
        'from' => 'int',
        'to' => 'int'
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
        'total' => 'total',
        'current_page' => 'current_page',
        'per_page' => 'per_page',
        'last_page' => 'last_page',
        'next_page_url' => 'next_page_url',
        'prev_page_url' => 'prev_page_url',
        'from' => 'from',
        'to' => 'to'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'total' => 'setTotal',
        'current_page' => 'setCurrentPage',
        'per_page' => 'setPerPage',
        'last_page' => 'setLastPage',
        'next_page_url' => 'setNextPageUrl',
        'prev_page_url' => 'setPrevPageUrl',
        'from' => 'setFrom',
        'to' => 'setTo'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'total' => 'getTotal',
        'current_page' => 'getCurrentPage',
        'per_page' => 'getPerPage',
        'last_page' => 'getLastPage',
        'next_page_url' => 'getNextPageUrl',
        'prev_page_url' => 'getPrevPageUrl',
        'from' => 'getFrom',
        'to' => 'getTo'
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
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['current_page'] = isset($data['current_page']) ? $data['current_page'] : null;
        $this->container['per_page'] = isset($data['per_page']) ? $data['per_page'] : null;
        $this->container['last_page'] = isset($data['last_page']) ? $data['last_page'] : null;
        $this->container['next_page_url'] = isset($data['next_page_url']) ? $data['next_page_url'] : null;
        $this->container['prev_page_url'] = isset($data['prev_page_url']) ? $data['prev_page_url'] : null;
        $this->container['from'] = isset($data['from']) ? $data['from'] : null;
        $this->container['to'] = isset($data['to']) ? $data['to'] : null;
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
     * Gets total
     * @return int
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     * @param int $total
     * @return $this
     */
    public function setTotal($total)
    {
        $this->container['total'] = $total;

        return $this;
    }

    /**
     * Gets current_page
     * @return int
     */
    public function getCurrentPage()
    {
        return $this->container['current_page'];
    }

    /**
     * Sets current_page
     * @param int $current_page
     * @return $this
     */
    public function setCurrentPage($current_page)
    {
        $this->container['current_page'] = $current_page;

        return $this;
    }

    /**
     * Gets per_page
     * @return int
     */
    public function getPerPage()
    {
        return $this->container['per_page'];
    }

    /**
     * Sets per_page
     * @param int $per_page
     * @return $this
     */
    public function setPerPage($per_page)
    {
        $this->container['per_page'] = $per_page;

        return $this;
    }

    /**
     * Gets last_page
     * @return int
     */
    public function getLastPage()
    {
        return $this->container['last_page'];
    }

    /**
     * Sets last_page
     * @param int $last_page
     * @return $this
     */
    public function setLastPage($last_page)
    {
        $this->container['last_page'] = $last_page;

        return $this;
    }

    /**
     * Gets next_page_url
     * @return string
     */
    public function getNextPageUrl()
    {
        return $this->container['next_page_url'];
    }

    /**
     * Sets next_page_url
     * @param string $next_page_url
     * @return $this
     */
    public function setNextPageUrl($next_page_url)
    {
        $this->container['next_page_url'] = $next_page_url;

        return $this;
    }

    /**
     * Gets prev_page_url
     * @return string
     */
    public function getPrevPageUrl()
    {
        return $this->container['prev_page_url'];
    }

    /**
     * Sets prev_page_url
     * @param string $prev_page_url
     * @return $this
     */
    public function setPrevPageUrl($prev_page_url)
    {
        $this->container['prev_page_url'] = $prev_page_url;

        return $this;
    }

    /**
     * Gets from
     * @return int
     */
    public function getFrom()
    {
        return $this->container['from'];
    }

    /**
     * Sets from
     * @param int $from
     * @return $this
     */
    public function setFrom($from)
    {
        $this->container['from'] = $from;

        return $this;
    }

    /**
     * Gets to
     * @return int
     */
    public function getTo()
    {
        return $this->container['to'];
    }

    /**
     * Sets to
     * @param int $to
     * @return $this
     */
    public function setTo($to)
    {
        $this->container['to'] = $to;

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


