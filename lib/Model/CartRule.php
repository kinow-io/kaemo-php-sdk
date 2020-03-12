<?php
/**
 * CartRule
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
 * Client API for Kinow back-office
 *
 * OpenAPI spec version: 1.3.49
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
 * CartRule Class Doc Comment
 *
 * @category    Class */
/**
 * @package     Kaemo\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CartRule implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CartRule';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'id_customer' => 'int',
        'description' => 'string',
        'priority' => 'int',
        'partial_use' => 'bool',
        'code' => 'string',
        'active' => 'bool',
        'date_add' => 'string',
        'date_upd' => 'string',
        'name' => '\Kaemo\Client\Model\I18nField[]',
        'date_from' => 'string',
        'date_to' => 'string',
        'quantity' => 'int',
        'quantity_per_user' => 'int',
        'minimum_amount' => 'int',
        'minimum_amount_tax' => 'int',
        'minimum_amount_currency' => 'int',
        'every_recurring_payments' => 'bool',
        'reduction_percent' => 'float',
        'reduction_amount' => 'float',
        'restriction_groups' => '\Kaemo\Client\Model\CartRuleRestrictionGroup[]'
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
        'id_customer' => 'id_customer',
        'description' => 'description',
        'priority' => 'priority',
        'partial_use' => 'partial_use',
        'code' => 'code',
        'active' => 'active',
        'date_add' => 'date_add',
        'date_upd' => 'date_upd',
        'name' => 'name',
        'date_from' => 'date_from',
        'date_to' => 'date_to',
        'quantity' => 'quantity',
        'quantity_per_user' => 'quantity_per_user',
        'minimum_amount' => 'minimum_amount',
        'minimum_amount_tax' => 'minimum_amount_tax',
        'minimum_amount_currency' => 'minimum_amount_currency',
        'every_recurring_payments' => 'every_recurring_payments',
        'reduction_percent' => 'reduction_percent',
        'reduction_amount' => 'reduction_amount',
        'restriction_groups' => 'restriction_groups'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'id_customer' => 'setIdCustomer',
        'description' => 'setDescription',
        'priority' => 'setPriority',
        'partial_use' => 'setPartialUse',
        'code' => 'setCode',
        'active' => 'setActive',
        'date_add' => 'setDateAdd',
        'date_upd' => 'setDateUpd',
        'name' => 'setName',
        'date_from' => 'setDateFrom',
        'date_to' => 'setDateTo',
        'quantity' => 'setQuantity',
        'quantity_per_user' => 'setQuantityPerUser',
        'minimum_amount' => 'setMinimumAmount',
        'minimum_amount_tax' => 'setMinimumAmountTax',
        'minimum_amount_currency' => 'setMinimumAmountCurrency',
        'every_recurring_payments' => 'setEveryRecurringPayments',
        'reduction_percent' => 'setReductionPercent',
        'reduction_amount' => 'setReductionAmount',
        'restriction_groups' => 'setRestrictionGroups'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'id_customer' => 'getIdCustomer',
        'description' => 'getDescription',
        'priority' => 'getPriority',
        'partial_use' => 'getPartialUse',
        'code' => 'getCode',
        'active' => 'getActive',
        'date_add' => 'getDateAdd',
        'date_upd' => 'getDateUpd',
        'name' => 'getName',
        'date_from' => 'getDateFrom',
        'date_to' => 'getDateTo',
        'quantity' => 'getQuantity',
        'quantity_per_user' => 'getQuantityPerUser',
        'minimum_amount' => 'getMinimumAmount',
        'minimum_amount_tax' => 'getMinimumAmountTax',
        'minimum_amount_currency' => 'getMinimumAmountCurrency',
        'every_recurring_payments' => 'getEveryRecurringPayments',
        'reduction_percent' => 'getReductionPercent',
        'reduction_amount' => 'getReductionAmount',
        'restriction_groups' => 'getRestrictionGroups'
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
        $this->container['id_customer'] = isset($data['id_customer']) ? $data['id_customer'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['partial_use'] = isset($data['partial_use']) ? $data['partial_use'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
        $this->container['date_add'] = isset($data['date_add']) ? $data['date_add'] : null;
        $this->container['date_upd'] = isset($data['date_upd']) ? $data['date_upd'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['date_from'] = isset($data['date_from']) ? $data['date_from'] : null;
        $this->container['date_to'] = isset($data['date_to']) ? $data['date_to'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['quantity_per_user'] = isset($data['quantity_per_user']) ? $data['quantity_per_user'] : null;
        $this->container['minimum_amount'] = isset($data['minimum_amount']) ? $data['minimum_amount'] : null;
        $this->container['minimum_amount_tax'] = isset($data['minimum_amount_tax']) ? $data['minimum_amount_tax'] : null;
        $this->container['minimum_amount_currency'] = isset($data['minimum_amount_currency']) ? $data['minimum_amount_currency'] : null;
        $this->container['every_recurring_payments'] = isset($data['every_recurring_payments']) ? $data['every_recurring_payments'] : null;
        $this->container['reduction_percent'] = isset($data['reduction_percent']) ? $data['reduction_percent'] : null;
        $this->container['reduction_amount'] = isset($data['reduction_amount']) ? $data['reduction_amount'] : null;
        $this->container['restriction_groups'] = isset($data['restriction_groups']) ? $data['restriction_groups'] : null;
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
     * Gets id_customer
     * @return int
     */
    public function getIdCustomer()
    {
        return $this->container['id_customer'];
    }

    /**
     * Sets id_customer
     * @param int $id_customer Limit to a single user
     * @return $this
     */
    public function setIdCustomer($id_customer)
    {
        $this->container['id_customer'] = $id_customer;

        return $this;
    }

    /**
     * Gets description
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     * @param string $description For your eyes only. This will never be displayed to the customer
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets priority
     * @return int
     */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
     * Sets priority
     * @param int $priority Rules are applied by priority. A rule with a priority of \"1\" will be processed before one with a priority of \"2\"
     * @return $this
     */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;

        return $this;
    }

    /**
     * Gets partial_use
     * @return bool
     */
    public function getPartialUse()
    {
        return $this->container['partial_use'];
    }

    /**
     * Sets partial_use
     * @param bool $partial_use Allow to partial use this cart rule. If cart rule amount is greater than total customer order, a new cart rule will be created with the remainder amount.
     * @return $this
     */
    public function setPartialUse($partial_use)
    {
        $this->container['partial_use'] = $partial_use;

        return $this;
    }

    /**
     * Gets code
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     * @param string $code Code used by customer to add it on his cart summary. Caution: rule will automatically be applied to everyone if you leave it blank
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets active
     * @return bool
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     * @param bool $active Status of the cart rule
     * @return $this
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

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
     * Gets name
     * @return \Kaemo\Client\Model\I18nField[]
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param \Kaemo\Client\Model\I18nField[] $name This will be displayed in the cart summary, as well as on the invoice
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets date_from
     * @return string
     */
    public function getDateFrom()
    {
        return $this->container['date_from'];
    }

    /**
     * Sets date_from
     * @param string $date_from Rule starts when this date is reached
     * @return $this
     */
    public function setDateFrom($date_from)
    {
        $this->container['date_from'] = $date_from;

        return $this;
    }

    /**
     * Gets date_to
     * @return string
     */
    public function getDateTo()
    {
        return $this->container['date_to'];
    }

    /**
     * Sets date_to
     * @param string $date_to Rule ends when this date is reached
     * @return $this
     */
    public function setDateTo($date_to)
    {
        $this->container['date_to'] = $date_to;

        return $this;
    }

    /**
     * Gets quantity
     * @return int
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     * @param int $quantity The cart rule will be applied to the first \"X\" orders only
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets quantity_per_user
     * @return int
     */
    public function getQuantityPerUser()
    {
        return $this->container['quantity_per_user'];
    }

    /**
     * Sets quantity_per_user
     * @param int $quantity_per_user A customer will only be able to use the cart rule \"X\" time(s)
     * @return $this
     */
    public function setQuantityPerUser($quantity_per_user)
    {
        $this->container['quantity_per_user'] = $quantity_per_user;

        return $this;
    }

    /**
     * Gets minimum_amount
     * @return int
     */
    public function getMinimumAmount()
    {
        return $this->container['minimum_amount'];
    }

    /**
     * Sets minimum_amount
     * @param int $minimum_amount You can choose a minimum amount for the cart, either with taxes or not
     * @return $this
     */
    public function setMinimumAmount($minimum_amount)
    {
        $this->container['minimum_amount'] = $minimum_amount;

        return $this;
    }

    /**
     * Gets minimum_amount_tax
     * @return int
     */
    public function getMinimumAmountTax()
    {
        return $this->container['minimum_amount_tax'];
    }

    /**
     * Sets minimum_amount_tax
     * @param int $minimum_amount_tax 
     * @return $this
     */
    public function setMinimumAmountTax($minimum_amount_tax)
    {
        $this->container['minimum_amount_tax'] = $minimum_amount_tax;

        return $this;
    }

    /**
     * Gets minimum_amount_currency
     * @return int
     */
    public function getMinimumAmountCurrency()
    {
        return $this->container['minimum_amount_currency'];
    }

    /**
     * Sets minimum_amount_currency
     * @param int $minimum_amount_currency Currency ID
     * @return $this
     */
    public function setMinimumAmountCurrency($minimum_amount_currency)
    {
        $this->container['minimum_amount_currency'] = $minimum_amount_currency;

        return $this;
    }

    /**
     * Gets every_recurring_payments
     * @return bool
     */
    public function getEveryRecurringPayments()
    {
        return $this->container['every_recurring_payments'];
    }

    /**
     * Sets every_recurring_payments
     * @param bool $every_recurring_payments If customer cart contains a subscription, select if cart rule will apply on recurring payments
     * @return $this
     */
    public function setEveryRecurringPayments($every_recurring_payments)
    {
        $this->container['every_recurring_payments'] = $every_recurring_payments;

        return $this;
    }

    /**
     * Gets reduction_percent
     * @return float
     */
    public function getReductionPercent()
    {
        return $this->container['reduction_percent'];
    }

    /**
     * Sets reduction_percent
     * @param float $reduction_percent Discount applied to cart when rule is added (in %).
     * @return $this
     */
    public function setReductionPercent($reduction_percent)
    {
        $this->container['reduction_percent'] = $reduction_percent;

        return $this;
    }

    /**
     * Gets reduction_amount
     * @return float
     */
    public function getReductionAmount()
    {
        return $this->container['reduction_amount'];
    }

    /**
     * Sets reduction_amount
     * @param float $reduction_amount Discount applied to cart when rule is added (in currency).
     * @return $this
     */
    public function setReductionAmount($reduction_amount)
    {
        $this->container['reduction_amount'] = $reduction_amount;

        return $this;
    }

    /**
     * Gets restriction_groups
     * @return \Kaemo\Client\Model\CartRuleRestrictionGroup[]
     */
    public function getRestrictionGroups()
    {
        return $this->container['restriction_groups'];
    }

    /**
     * Sets restriction_groups
     * @param \Kaemo\Client\Model\CartRuleRestrictionGroup[] $restriction_groups
     * @return $this
     */
    public function setRestrictionGroups($restriction_groups)
    {
        $this->container['restriction_groups'] = $restriction_groups;

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


