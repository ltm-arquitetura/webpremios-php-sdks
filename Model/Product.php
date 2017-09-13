<?php
/**
 * Product
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
use Swagger\Server\Model\ProductVendor;
use Swagger\Server\Model\ProductCategory;
use Swagger\Server\Model\ProductBrand;

/**
 * Class representing the Product model.
 *
 * @package Swagger\Server\Model
 * @author  Swagger Codegen team
 */
class Product implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $_name = 'product';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var array[]
      */
    protected static $_attributes = [
        'id' => ['id', 'string', null, 'setId', 'getId'],
        'original_id' => ['originalId', 'string', null, 'setOriginalId', 'getOriginalId'],
        'name' => ['name', 'string', null, 'setName', 'getName'],
        'image_url' => ['imageUrl', 'string', null, 'setImageUrl', 'getImageUrl'],
        'vendor' => ['vendor', 'Swagger\Server\Model\ProductVendor', null, 'setVendor', 'getVendor'],
        'category' => ['category', 'Swagger\Server\Model\ProductCategory', null, 'setCategory', 'getCategory'],
        'brand' => ['brand', 'Swagger\Server\Model\ProductBrand', null, 'setBrand', 'getBrand'],
    ];
    

    
    /**
     * Identificador do produto
     *
     * @var string|null
     */
    protected $id;

    /**
     * Identificador do produto no parceiro
     *
     * @var string|null
     */
    protected $original_id;

    /**
     * Nome do produto
     *
     * @var string|null
     */
    protected $name;

    /**
     * Imagem do produto
     *
     * @var string|null
     */
    protected $image_url;

    /**     * @var ProductVendor|null
     */
    protected $vendor;

    /**     * @var ProductCategory|null
     */
    protected $category;

    /**     * @var ProductBrand|null
     */
    protected $brand;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->id = isset($data['id']) ? $data['id'] : null;
        $this->original_id = isset($data['original_id']) ? $data['original_id'] : null;
        $this->name = isset($data['name']) ? $data['name'] : null;
        $this->image_url = isset($data['image_url']) ? $data['image_url'] : null;
        $this->vendor = isset($data['vendor']) ? $data['vendor'] : null;
        $this->category = isset($data['category']) ? $data['category'] : null;
        $this->brand = isset($data['brand']) ? $data['brand'] : null;
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
     * @param string|null $id  Identificador do produto
     *
     * @return $this
     */
    public function setId($id = null)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Gets original_id.
     *
     * @return string|null
     */
    public function getOriginalId()
    {
        return $this->original_id;
    }

    /**
     * Sets original_id.
     *
     * @param string|null $original_id  Identificador do produto no parceiro
     *
     * @return $this
     */
    public function setOriginalId($original_id = null)
    {
        $this->original_id = $original_id;

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
     * @param string|null $name  Nome do produto
     *
     * @return $this
     */
    public function setName($name = null)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Gets image_url.
     *
     * @return string|null
     */
    public function getImageUrl()
    {
        return $this->image_url;
    }

    /**
     * Sets image_url.
     *
     * @param string|null $image_url  Imagem do produto
     *
     * @return $this
     */
    public function setImageUrl($image_url = null)
    {
        $this->image_url = $image_url;

        return $this;
    }

    /**
     * Gets vendor.
     *
     * @return ProductVendor|null
     */
    public function getVendor()
    {
        return $this->vendor;
    }

    /**
     * Sets vendor.
     *
     * @param ProductVendor|null $vendor
     *
     * @return $this
     */
    public function setVendor(ProductVendor $vendor = null)
    {
        $this->vendor = $vendor;

        return $this;
    }

    /**
     * Gets category.
     *
     * @return ProductCategory|null
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Sets category.
     *
     * @param ProductCategory|null $category
     *
     * @return $this
     */
    public function setCategory(ProductCategory $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Gets brand.
     *
     * @return ProductBrand|null
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Sets brand.
     *
     * @param ProductBrand|null $brand
     *
     * @return $this
     */
    public function setBrand(ProductBrand $brand = null)
    {
        $this->brand = $brand;

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

