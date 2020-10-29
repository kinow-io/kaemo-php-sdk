<?php
/**
 * Cart
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
 * OpenAPI spec version: 1.4.14
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
 * Cart Class Doc Comment
 *
 * @category    Class */
/**
 * @package     Kinow\Client
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
        'date_add' => 'string',
        'date_upd' => 'string',
        'id_customer' => 'int',
        'id_currency' => 'int',
        'id_lang' => 'int',
        'total' => 'float',
        'total_without_tax' => 'float',
        'total_trial' => 'float',
        'available_checkout_processes' => 'string[]',
        'cart_rules' => '\Kinow\Client\Model\CartRule[]',
        'products' => '\Kinow\Client\Model\Product[]'
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
        'date_add' => 'date_add',
        'date_upd' => 'date_upd',
        'id_customer' => 'id_customer',
        'id_currency' => 'id_currency',
        'id_lang' => 'id_lang',
        'total' => 'total',
        'total_without_tax' => 'total_without_tax',
        'total_trial' => 'total_trial',
        'available_checkout_processes' => 'available_checkout_processes',
        'cart_rules' => 'cart_rules',
        'products' => 'products'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'date_add' => 'setDateAdd',
        'date_upd' => 'setDateUpd',
        'id_customer' => 'setIdCustomer',
        'id_currency' => 'setIdCurrency',
        'id_lang' => 'setIdLang',
        'total' => 'setTotal',
        'total_without_tax' => 'setTotalWithoutTax',
        'total_trial' => 'setTotalTrial',
        'available_checkout_processes' => 'setAvailableCheckoutProcesses',
        'cart_rules' => 'setCartRules',
        'products' => 'setProducts'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'date_add' => 'getDateAdd',
        'date_upd' => 'getDateUpd',
        'id_customer' => 'getIdCustomer',
        'id_currency' => 'getIdCurrency',
        'id_lang' => 'getIdLang',
        'total' => 'getTotal',
        'total_without_tax' => 'getTotalWithoutTax',
        'total_trial' => 'getTotalTrial',
        'available_checkout_processes' => 'getAvailableCheckoutProcesses',
        'cart_rules' => 'getCartRules',
        'products' => 'getProducts'
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

    const AVAILABLE_CHECKOUT_PROCESSES_FREE = 'free';
    const AVAILABLE_CHECKOUT_PROCESSES_URL = 'url';
    const AVAILABLE_CHECKOUT_PROCESSES_PAYMENT_INTENT = 'payment_intent';
    const AVAILABLE_CHECKOUT_PROCESSES_PAYMENT_AUTHORIZATION = 'payment_authorization';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getAvailableCheckoutProcessesAllowableValues()
    {
        return [
            self::AVAILABLE_CHECKOUT_PROCESSES_FREE,
            self::AVAILABLE_CHECKOUT_PROCESSES_URL,
            self::AVAILABLE_CHECKOUT_PROCESSES_PAYMENT_INTENT,
            self::AVAILABLE_CHECKOUT_PROCESSES_PAYMENT_AUTHORIZATION,
        ];
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
        $this->container['date_add'] = isset($data['date_add']) ? $data['date_add'] : null;
        $this->container['date_upd'] = isset($data['date_upd']) ? $data['date_upd'] : null;
        $this->container['id_customer'] = isset($data['id_customer']) ? $data['id_customer'] : null;
        $this->container['id_currency'] = isset($data['id_currency']) ? $data['id_currency'] : null;
        $this->container['id_lang'] = isset($data['id_lang']) ? $data['id_lang'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['total_without_tax'] = isset($data['total_without_tax']) ? $data['total_without_tax'] : null;
        $this->container['total_trial'] = isset($data['total_trial']) ? $data['total_trial'] : null;
        $this->container['available_checkout_processes'] = isset($data['available_checkout_processes']) ? $data['available_checkout_processes'] : null;
        $this->container['cart_rules'] = isset($data['cart_rules']) ? $data['cart_rules'] : null;
        $this->container['products'] = isset($data['products']) ? $data['products'] : null;
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
     * Gets total_trial
     * @return float
     */
    public function getTotalTrial()
    {
        return $this->container['total_trial'];
    }

    /**
     * Sets total_trial
     * @param float $total_trial
     * @return $this
     */
    public function setTotalTrial($total_trial)
    {
        $this->container['total_trial'] = $total_trial;

        return $this;
    }

    /**
     * Gets available_checkout_processes
     * @return string[]
     */
    public function getAvailableCheckoutProcesses()
    {
        return $this->container['available_checkout_processes'];
    }

    /**
     * Sets available_checkout_processes
     * @param string[] $available_checkout_processes
     * @return $this
     */
    public function setAvailableCheckoutProcesses($available_checkout_processes)
    {
        $allowed_values = array('free', 'url', 'payment_intent', 'payment_authorization');
        if (!is_null($available_checkout_processes) && (array_diff($available_checkout_processes, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'available_checkout_processes', must be one of 'free', 'url', 'payment_intent', 'payment_authorization'");
        }
        $this->container['available_checkout_processes'] = $available_checkout_processes;

        return $this;
    }

    /**
     * Gets cart_rules
     * @return \Kinow\Client\Model\CartRule[]
     */
    public function getCartRules()
    {
        return $this->container['cart_rules'];
    }

    /**
     * Sets cart_rules
     * @param \Kinow\Client\Model\CartRule[] $cart_rules
     * @return $this
     */
    public function setCartRules($cart_rules)
    {
        $this->container['cart_rules'] = $cart_rules;

        return $this;
    }

    /**
     * Gets products
     * @return \Kinow\Client\Model\Product[]
     */
    public function getProducts()
    {
        return $this->container['products'];
    }

    /**
     * Sets products
     * @param \Kinow\Client\Model\Product[] $products
     * @return $this
     */
    public function setProducts($products)
    {
        $this->container['products'] = $products;

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


