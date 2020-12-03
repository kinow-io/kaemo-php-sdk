<?php
/**
 * CartPrice
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
 * OpenAPI spec version: 1.4.22
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
 * CartPrice Class Doc Comment
 *
 * @category    Class */
/**
 * @package     Kinow\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CartPrice implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CartPrice';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'cart_id' => 'int',
        'total_without_tax' => 'float',
        'total_tax' => 'float',
        'total_discount' => 'float',
        'total_trial' => 'float',
        'total' => 'float',
        'total_without_tax_formatted' => 'string',
        'total_tax_formatted' => 'string',
        'total_discount_formatted' => 'string',
        'total_trial_formatted' => 'string',
        'total_formatted' => 'string'
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
        'cart_id' => 'cart_id',
        'total_without_tax' => 'total_without_tax',
        'total_tax' => 'total_tax',
        'total_discount' => 'total_discount',
        'total_trial' => 'total_trial',
        'total' => 'total',
        'total_without_tax_formatted' => 'total_without_tax_formatted',
        'total_tax_formatted' => 'total_tax_formatted',
        'total_discount_formatted' => 'total_discount_formatted',
        'total_trial_formatted' => 'total_trial_formatted',
        'total_formatted' => 'total_formatted'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'cart_id' => 'setCartId',
        'total_without_tax' => 'setTotalWithoutTax',
        'total_tax' => 'setTotalTax',
        'total_discount' => 'setTotalDiscount',
        'total_trial' => 'setTotalTrial',
        'total' => 'setTotal',
        'total_without_tax_formatted' => 'setTotalWithoutTaxFormatted',
        'total_tax_formatted' => 'setTotalTaxFormatted',
        'total_discount_formatted' => 'setTotalDiscountFormatted',
        'total_trial_formatted' => 'setTotalTrialFormatted',
        'total_formatted' => 'setTotalFormatted'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'cart_id' => 'getCartId',
        'total_without_tax' => 'getTotalWithoutTax',
        'total_tax' => 'getTotalTax',
        'total_discount' => 'getTotalDiscount',
        'total_trial' => 'getTotalTrial',
        'total' => 'getTotal',
        'total_without_tax_formatted' => 'getTotalWithoutTaxFormatted',
        'total_tax_formatted' => 'getTotalTaxFormatted',
        'total_discount_formatted' => 'getTotalDiscountFormatted',
        'total_trial_formatted' => 'getTotalTrialFormatted',
        'total_formatted' => 'getTotalFormatted'
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
        $this->container['cart_id'] = isset($data['cart_id']) ? $data['cart_id'] : null;
        $this->container['total_without_tax'] = isset($data['total_without_tax']) ? $data['total_without_tax'] : null;
        $this->container['total_tax'] = isset($data['total_tax']) ? $data['total_tax'] : null;
        $this->container['total_discount'] = isset($data['total_discount']) ? $data['total_discount'] : null;
        $this->container['total_trial'] = isset($data['total_trial']) ? $data['total_trial'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['total_without_tax_formatted'] = isset($data['total_without_tax_formatted']) ? $data['total_without_tax_formatted'] : null;
        $this->container['total_tax_formatted'] = isset($data['total_tax_formatted']) ? $data['total_tax_formatted'] : null;
        $this->container['total_discount_formatted'] = isset($data['total_discount_formatted']) ? $data['total_discount_formatted'] : null;
        $this->container['total_trial_formatted'] = isset($data['total_trial_formatted']) ? $data['total_trial_formatted'] : null;
        $this->container['total_formatted'] = isset($data['total_formatted']) ? $data['total_formatted'] : null;
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
     * Gets cart_id
     * @return int
     */
    public function getCartId()
    {
        return $this->container['cart_id'];
    }

    /**
     * Sets cart_id
     * @param int $cart_id
     * @return $this
     */
    public function setCartId($cart_id)
    {
        $this->container['cart_id'] = $cart_id;

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
     * Gets total_tax
     * @return float
     */
    public function getTotalTax()
    {
        return $this->container['total_tax'];
    }

    /**
     * Sets total_tax
     * @param float $total_tax
     * @return $this
     */
    public function setTotalTax($total_tax)
    {
        $this->container['total_tax'] = $total_tax;

        return $this;
    }

    /**
     * Gets total_discount
     * @return float
     */
    public function getTotalDiscount()
    {
        return $this->container['total_discount'];
    }

    /**
     * Sets total_discount
     * @param float $total_discount
     * @return $this
     */
    public function setTotalDiscount($total_discount)
    {
        $this->container['total_discount'] = $total_discount;

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
     * Gets total_without_tax_formatted
     * @return string
     */
    public function getTotalWithoutTaxFormatted()
    {
        return $this->container['total_without_tax_formatted'];
    }

    /**
     * Sets total_without_tax_formatted
     * @param string $total_without_tax_formatted
     * @return $this
     */
    public function setTotalWithoutTaxFormatted($total_without_tax_formatted)
    {
        $this->container['total_without_tax_formatted'] = $total_without_tax_formatted;

        return $this;
    }

    /**
     * Gets total_tax_formatted
     * @return string
     */
    public function getTotalTaxFormatted()
    {
        return $this->container['total_tax_formatted'];
    }

    /**
     * Sets total_tax_formatted
     * @param string $total_tax_formatted
     * @return $this
     */
    public function setTotalTaxFormatted($total_tax_formatted)
    {
        $this->container['total_tax_formatted'] = $total_tax_formatted;

        return $this;
    }

    /**
     * Gets total_discount_formatted
     * @return string
     */
    public function getTotalDiscountFormatted()
    {
        return $this->container['total_discount_formatted'];
    }

    /**
     * Sets total_discount_formatted
     * @param string $total_discount_formatted
     * @return $this
     */
    public function setTotalDiscountFormatted($total_discount_formatted)
    {
        $this->container['total_discount_formatted'] = $total_discount_formatted;

        return $this;
    }

    /**
     * Gets total_trial_formatted
     * @return string
     */
    public function getTotalTrialFormatted()
    {
        return $this->container['total_trial_formatted'];
    }

    /**
     * Sets total_trial_formatted
     * @param string $total_trial_formatted
     * @return $this
     */
    public function setTotalTrialFormatted($total_trial_formatted)
    {
        $this->container['total_trial_formatted'] = $total_trial_formatted;

        return $this;
    }

    /**
     * Gets total_formatted
     * @return string
     */
    public function getTotalFormatted()
    {
        return $this->container['total_formatted'];
    }

    /**
     * Sets total_formatted
     * @param string $total_formatted
     * @return $this
     */
    public function setTotalFormatted($total_formatted)
    {
        $this->container['total_formatted'] = $total_formatted;

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


