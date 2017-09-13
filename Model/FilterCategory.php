<?php
/**
 * FilterCategory
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
use Swagger\Server\Model\Subcategory;

/**
 * Class representing the FilterCategory model.
 *
 * @package Swagger\Server\Model
 * @author  Swagger Codegen team
 */
class FilterCategory implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $_name = 'filterCategory';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var array[]
      */
    protected static $_attributes = [
        'id' => ['id', 'string', null, 'setId', 'getId'],
        'name' => ['name', 'string', null, 'setName', 'getName'],
        'slug' => ['slug', 'string', null, 'setSlug', 'getSlug'],
        'quantity' => ['quantity', 'int', null, 'setQuantity', 'getQuantity'],
        'subcategories' => ['subcategories', 'Swagger\Server\Model\Subcategory[]', null, 'setSubcategories', 'getSubcategories'],
    ];
    

    
    /**
     * Identificador da categoria
     *
     * @var string|null
     */
    protected $id;

    /**
     * Nome da categoria
     *
     * @var string|null
     */
    protected $name;

    /**
     * URL amigável da categoria
     *
     * @var string|null
     */
    protected $slug;

    /**
     * Quantidade de registros
     *
     * @var int|null
     */
    protected $quantity;

    /**     * @var Subcategory[]|null
     */
    protected $subcategories;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->id = isset($data['id']) ? $data['id'] : null;
        $this->name = isset($data['name']) ? $data['name'] : null;
        $this->slug = isset($data['slug']) ? $data['slug'] : null;
        $this->quantity = isset($data['quantity']) ? $data['quantity'] : null;
        $this->subcategories = isset($data['subcategories']) ? $data['subcategories'] : null;
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
     * @param string|null $id  Identificador da categoria
     *
     * @return $this
     */
    public function setId($id = null)
    {
        $this->id = $id;

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
     * @param string|null $name  Nome da categoria
     *
     * @return $this
     */
    public function setName($name = null)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Gets slug.
     *
     * @return string|null
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Sets slug.
     *
     * @param string|null $slug  URL amigável da categoria
     *
     * @return $this
     */
    public function setSlug($slug = null)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Gets quantity.
     *
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets quantity.
     *
     * @param int|null $quantity  Quantidade de registros
     *
     * @return $this
     */
    public function setQuantity($quantity = null)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Gets subcategories.
     *
     * @return Subcategory[]|null
     */
    public function getSubcategories()
    {
        return $this->subcategories;
    }

    /**
     * Sets subcategories.
     *
     * @param Subcategory[]|null $subcategories
     *
     * @return $this
     */
    public function setSubcategories(array $subcategories = null)
    {
        $this->subcategories = $subcategories;

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


