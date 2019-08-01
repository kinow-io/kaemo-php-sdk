<?php
/**
 * Cart
 *
 * PHP version 5
 *
 * @category Class
 * @package  Kaemo\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Kinow API
 *
 * Public api for Kinow back office
 *
 * OpenAPI spec version: 1.1.2
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Kaemo\Client\Model;

use \ArrayAccess;

/**
 * Cart Class Doc Comment
 *
 * @category    Class */
/**
 * @package     Kaemo\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Cart implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Cart';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'id_currency' => 'int',
        'id_customer' => 'int',
        'id_lang' => 'int',
        'date_add' => 'string',
        'date_upd' => 'string',
        'total' => 'float',
        'products' => '\Kaemo\Client\Model\Product[]',
        'cart_rules' => '\Kaemo\Client\Model\CartRule[]',
        'total_without_tax' => 'float'
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
        'id' => 'id',
        'id_currency' => 'id_currency',
        'id_customer' => 'id_customer',
        'id_lang' => 'id_lang',
        'date_add' => 'date_add',
        'date_upd' => 'date_upd',
        'total' => 'total',
        'products' => 'products',
        'cart_rules' => 'cart_rules',
        'total_without_tax' => 'total_without_tax'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'id_currency' => 'setIdCurrency',
        'id_customer' => 'setIdCustomer',
        'id_lang' => 'setIdLang',
        'date_add' => 'setDateAdd',
        'date_upd' => 'setDateUpd',
        'total' => 'setTotal',
        'products' => 'setProducts',
        'cart_rules' => 'setCartRules',
        'total_without_tax' => 'setTotalWithoutTax'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'id_currency' => 'getIdCurrency',
        'id_customer' => 'getIdCustomer',
        'id_lang' => 'getIdLang',
        'date_add' => 'getDateAdd',
        'date_upd' => 'getDateUpd',
        'total' => 'getTotal',
        'products' => 'getProducts',
        'cart_rules' => 'getCartRules',
        'total_without_tax' => 'getTotalWithoutTax'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['id_currency'] = isset($data['id_currency']) ? $data['id_currency'] : null;
        $this->container['id_customer'] = isset($data['id_customer']) ? $data['id_customer'] : null;
        $this->container['id_lang'] = isset($data['id_lang']) ? $data['id_lang'] : null;
        $this->container['date_add'] = isset($data['date_add']) ? $data['date_add'] : null;
        $this->container['date_upd'] = isset($data['date_upd']) ? $data['date_upd'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['products'] = isset($data['products']) ? $data['products'] : null;
        $this->container['cart_rules'] = isset($data['cart_rules']) ? $data['cart_rules'] : null;
        $this->container['total_without_tax'] = isset($data['total_without_tax']) ? $data['total_without_tax'] : null;
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
     * Gets id
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param int $id 
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets id_currency
     * @return int
     */
    public function getIdCurrency()
    {
        return $this->container['id_currency'];
    }

    /**
     * Sets id_currency
     * @param int $id_currency 
     * @return $this
     */
    public function setIdCurrency($id_currency)
    {
        $this->container['id_currency'] = $id_currency;

        return $this;
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
     * @param int $id_customer 
     * @return $this
     */
    public function setIdCustomer($id_customer)
    {
        $this->container['id_customer'] = $id_customer;

        return $this;
    }

    /**
     * Gets id_lang
     * @return int
     */
    public function getIdLang()
    {
        return $this->container['id_lang'];
    }

    /**
     * Sets id_lang
     * @param int $id_lang 
     * @return $this
     */
    public function setIdLang($id_lang)
    {
        $this->container['id_lang'] = $id_lang;

        return $this;
    }

    /**
     * Gets date_add
     * @return string
     */
    public function getDateAdd()
    {
        return $this->container['date_add'];
    }

    /**
     * Sets date_add
     * @param string $date_add 
     * @return $this
     */
    public function setDateAdd($date_add)
    {
        $this->container['date_add'] = $date_add;

        return $this;
    }

    /**
     * Gets date_upd
     * @return string
     */
    public function getDateUpd()
    {
        return $this->container['date_upd'];
    }

    /**
     * Sets date_upd
     * @param string $date_upd 
     * @return $this
     */
    public function setDateUpd($date_upd)
    {
        $this->container['date_upd'] = $date_upd;

        return $this;
    }

    /**
     * Gets total
     * @return float
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     * @param float $total 
     * @return $this
     */
    public function setTotal($total)
    {
        $this->container['total'] = $total;

        return $this;
    }

    /**
     * Gets products
     * @return \Kaemo\Client\Model\Product[]
     */
    public function getProducts()
    {
        return $this->container['products'];
    }

    /**
     * Sets products
     * @param \Kaemo\Client\Model\Product[] $products
     * @return $this
     */
    public function setProducts($products)
    {
        $this->container['products'] = $products;

        return $this;
    }

    /**
     * Gets cart_rules
     * @return \Kaemo\Client\Model\CartRule[]
     */
    public function getCartRules()
    {
        return $this->container['cart_rules'];
    }

    /**
     * Sets cart_rules
     * @param \Kaemo\Client\Model\CartRule[] $cart_rules
     * @return $this
     */
    public function setCartRules($cart_rules)
    {
        $this->container['cart_rules'] = $cart_rules;

        return $this;
    }

    /**
     * Gets total_without_tax
     * @return float
     */
    public function getTotalWithoutTax()
    {
        return $this->container['total_without_tax'];
    }

    /**
     * Sets total_without_tax
     * @param float $total_without_tax 
     * @return $this
     */
    public function setTotalWithoutTax($total_without_tax)
    {
        $this->container['total_without_tax'] = $total_without_tax;

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
            return json_encode(\Kaemo\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Kaemo\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


