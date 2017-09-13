<?php
/**
 * CreditCardPayment
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Server\Model
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Marketplace
 *
 * API Cloud Loyalty LTM - Webpremios
 *
 * OpenAPI spec version: 1.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Server\Model;

use \ArrayAccess;

/**
 * Class representing the CreditCardPayment model.
 *
 * @package Swagger\Server\Model
 * @author  Swagger Codegen team
 */
class CreditCardPayment implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $_name = 'creditCardPayment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var array[]
      */
    protected static $_attributes = [
        'brand' => ['brand', 'string', null, 'setBrand', 'getBrand'],
        'name' => ['name', 'string', null, 'setName', 'getName'],
        'number' => ['number', 'string', null, 'setNumber', 'getNumber'],
        'expiration_month' => ['expirationMonth', 'string', null, 'setExpirationMonth', 'getExpirationMonth'],
        'expiration_year' => ['expirationYear', 'string', null, 'setExpirationYear', 'getExpirationYear'],
        'security_code' => ['securityCode', 'string', null, 'setSecurityCode', 'getSecurityCode'],
        'portions' => ['portions', 'float', null, 'setPortions', 'getPortions'],
        'value_points' => ['valuePoints', 'float', 'decimal', 'setValuePoints', 'getValuePoints'],
    ];
    

    /**
     * Allowed values of brand
     */
    const BRAND_VISA = 'VISA';
    const BRAND_MASTERCARD = 'MASTERCARD';
    const BRAND_AMERICANEXPRESS = 'AMERICANEXPRESS';
    const BRAND_DINERS = 'DINERS';
    const BRAND_ELO = 'ELO';

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getBrandAllowableValues()
    {
        return [
            self::BRAND_VISA,
            self::BRAND_MASTERCARD,
            self::BRAND_AMERICANEXPRESS,
            self::BRAND_DINERS,
            self::BRAND_ELO,
        ];
    }
    
    /**
     * Bandeira do cartão
     *
     * @var string|null
     */
    protected $brand;

    /**
     * Nome escrito no cartão
     *
     * @var string|null
     */
    protected $name;

    /**
     * Número do cartão
     *
     * @var string|null
     */
    protected $number;

    /**
     * Mês de expiração
     *
     * @var string|null
     */
    protected $expiration_month;

    /**
     * Ano de expiração, somente 2 últimos números
     *
     * @var string|null
     */
    protected $expiration_year;

    /**
     * Código de seguraça do cartão
     *
     * @var string|null
     */
    protected $security_code;

    /**
     * Número de parcelas
     *
     * @var float|null
     */
    protected $portions;

    /**
     * Valor em pontos a serem comprados
     *
     * @var float|null
     */
    protected $value_points;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->brand = isset($data['brand']) ? $data['brand'] : null;
        $this->name = isset($data['name']) ? $data['name'] : null;
        $this->number = isset($data['number']) ? $data['number'] : null;
        $this->expiration_month = isset($data['expiration_month']) ? $data['expiration_month'] : null;
        $this->expiration_year = isset($data['expiration_year']) ? $data['expiration_year'] : null;
        $this->security_code = isset($data['security_code']) ? $data['security_code'] : null;
        $this->portions = isset($data['portions']) ? $data['portions'] : null;
        $this->value_points = isset($data['value_points']) ? $data['value_points'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowedValues = $this->getBrandAllowableValues();
        if (!in_array($this->brand, $allowedValues, true)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'brand', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        return $invalid_properties;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function modelName() {
        return self::$_name;
    }

    /**
     * Array of property to mappings.
     *
     * @return array[]
     */
    public function modelAttributes() {
        
        return self::$_attributes;
    }

    /**
     * Validate all the properties in the model
     *
     * Return true if all passed.
     *
     * @return bool True if all properties are valid
     */
    public function isValid()
    {
        $allowedValues = $this->getBrandAllowableValues();
        if (!in_array($this->brand, $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets brand.
     *
     * @return string|null
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Sets brand.
     *
     * @param string|null $brand  Bandeira do cartão
     *
     * @return $this
     */
    public function setBrand($brand = null)
    {
        $allowedValues = $this->getBrandAllowableValues();
        if ($brand !== null && !in_array($brand, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'brand', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->brand = $brand;

        return $this;
    }

    /**
     * Gets name.
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets name.
     *
     * @param string|null $name  Nome escrito no cartão
     *
     * @return $this
     */
    public function setName($name = null)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Gets number.
     *
     * @return string|null
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Sets number.
     *
     * @param string|null $number  Número do cartão
     *
     * @return $this
     */
    public function setNumber($number = null)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Gets expiration_month.
     *
     * @return string|null
     */
    public function getExpirationMonth()
    {
        return $this->expiration_month;
    }

    /**
     * Sets expiration_month.
     *
     * @param string|null $expiration_month  Mês de expiração
     *
     * @return $this
     */
    public function setExpirationMonth($expiration_month = null)
    {
        $this->expiration_month = $expiration_month;

        return $this;
    }

    /**
     * Gets expiration_year.
     *
     * @return string|null
     */
    public function getExpirationYear()
    {
        return $this->expiration_year;
    }

    /**
     * Sets expiration_year.
     *
     * @param string|null $expiration_year  Ano de expiração, somente 2 últimos números
     *
     * @return $this
     */
    public function setExpirationYear($expiration_year = null)
    {
        $this->expiration_year = $expiration_year;

        return $this;
    }

    /**
     * Gets security_code.
     *
     * @return string|null
     */
    public function getSecurityCode()
    {
        return $this->security_code;
    }

    /**
     * Sets security_code.
     *
     * @param string|null $security_code  Código de seguraça do cartão
     *
     * @return $this
     */
    public function setSecurityCode($security_code = null)
    {
        $this->security_code = $security_code;

        return $this;
    }

    /**
     * Gets portions.
     *
     * @return float|null
     */
    public function getPortions()
    {
        return $this->portions;
    }

    /**
     * Sets portions.
     *
     * @param float|null $portions  Número de parcelas
     *
     * @return $this
     */
    public function setPortions($portions = null)
    {
        $this->portions = $portions;

        return $this;
    }

    /**
     * Gets value_points.
     *
     * @return float|null
     */
    public function getValuePoints()
    {
        return $this->value_points;
    }

    /**
     * Sets value_points.
     *
     * @param float|null $value_points  Valor em pontos a serem comprados
     *
     * @return $this
     */
    public function setValuePoints($value_points = null)
    {
        $this->value_points = $value_points;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->$offset) ? $this->$offset : null;
    }

    /**
     * Sets value based on offset.
     * @param  string  $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        $this->$offset = null;
    }
}

