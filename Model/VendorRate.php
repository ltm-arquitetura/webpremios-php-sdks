<?php
/**
 * VendorRate
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
 * Class representing the VendorRate model.
 *
 * @package Swagger\Server\Model
 * @author  Swagger Codegen team
 */
class VendorRate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $_name = 'vendorRate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var array[]
      */
    protected static $_attributes = [
        'id' => ['id', 'string', null, 'setId', 'getId'],
        'delivery_date' => ['deliveryDate', '\DateTime', 'date-time', 'setDeliveryDate', 'getDeliveryDate'],
        'total' => ['total', 'float', 'decimal', 'setTotal', 'getTotal'],
    ];
    

    
    /**     * @var string|null
     */
    protected $id;

    /**
     * Data estimada de entrega
     *
     * @var \DateTime|null
     */
    protected $delivery_date;

    /**
     * Valor total dos items do parceiro
     *
     * @var float|null
     */
    protected $total;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->id = isset($data['id']) ? $data['id'] : null;
        $this->delivery_date = isset($data['delivery_date']) ? $data['delivery_date'] : null;
        $this->total = isset($data['total']) ? $data['total'] : null;
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
     * Gets id.
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets id.
     *
     * @param string|null $id
     *
     * @return $this
     */
    public function setId($id = null)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Gets delivery_date.
     *
     * @return \DateTime|null
     */
    public function getDeliveryDate()
    {
        return $this->delivery_date;
    }

    /**
     * Sets delivery_date.
     *
     * @param \DateTime|null $delivery_date  Data estimada de entrega
     *
     * @return $this
     */
    public function setDeliveryDate($delivery_date = null)
    {
        $this->delivery_date = $delivery_date;

        return $this;
    }

    /**
     * Gets total.
     *
     * @return float|null
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Sets total.
     *
     * @param float|null $total  Valor total dos items do parceiro
     *
     * @return $this
     */
    public function setTotal($total = null)
    {
        $this->total = $total;

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


