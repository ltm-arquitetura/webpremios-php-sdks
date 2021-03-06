<?php
/**
 * Availability
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
 * Class representing the Availability model.
 *
 * 
 *
 * @package Swagger\Server\Model
 * @author  Swagger Codegen team
 */
class Availability implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $_name = 'availability';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var array[]
      */
    protected static $_attributes = [
        'availability' => ['availability', 'bool', null, 'setAvailability', 'isAvailability'],
        'price_from' => ['priceFrom', 'float', 'decimal', 'setPriceFrom', 'getPriceFrom'],
        'price_for' => ['priceFor', 'float', 'decimal', 'setPriceFor', 'getPriceFor'],
    ];
    

    
    /**
     * Disponibilidade do SKU
     *
     * @var bool|null
     */
    protected $availability;

    /**
     * Preço De
     *
     * @var float|null
     */
    protected $price_from;

    /**
     * Preço Por
     *
     * @var float|null
     */
    protected $price_for;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->availability = isset($data['availability']) ? $data['availability'] : null;
        $this->price_from = isset($data['price_from']) ? $data['price_from'] : null;
        $this->price_for = isset($data['price_for']) ? $data['price_for'] : null;
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
        return true;
    }


    /**
     * Gets availability.
     *
     * @return bool|null
     */
    public function isAvailability()
    {
        return $this->availability;
    }

    /**
     * Sets availability.
     *
     * @param bool|null $availability  Disponibilidade do SKU
     *
     * @return $this
     */
    public function setAvailability($availability = null)
    {
        $this->availability = $availability;

        return $this;
    }

    /**
     * Gets price_from.
     *
     * @return float|null
     */
    public function getPriceFrom()
    {
        return $this->price_from;
    }

    /**
     * Sets price_from.
     *
     * @param float|null $price_from  Preço De
     *
     * @return $this
     */
    public function setPriceFrom($price_from = null)
    {
        $this->price_from = $price_from;

        return $this;
    }

    /**
     * Gets price_for.
     *
     * @return float|null
     */
    public function getPriceFor()
    {
        return $this->price_for;
    }

    /**
     * Sets price_for.
     *
     * @param float|null $price_for  Preço Por
     *
     * @return $this
     */
    public function setPriceFor($price_for = null)
    {
        $this->price_for = $price_for;

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


