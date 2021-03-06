<?php
/**
 * CartItem
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
use Swagger\Server\Model\VendorCart;
use Swagger\Server\Model\Category;
use Swagger\Server\Model\Price;

/**
 * Class representing the CartItem model.
 *
 * @package Swagger\Server\Model
 * @author  Swagger Codegen team
 */
class CartItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $_name = 'cartItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var array[]
      */
    protected static $_attributes = [
        'sku_id' => ['skuId', 'string', null, 'setSkuId', 'getSkuId'],
        'name' => ['name', 'string', null, 'setName', 'getName'],
        'category' => ['category', 'Swagger\Server\Model\Category', null, 'setCategory', 'getCategory'],
        'image_url' => ['imageUrl', 'string', null, 'setImageUrl', 'getImageUrl'],
        'price' => ['price', 'Swagger\Server\Model\Price', null, 'setPrice', 'getPrice'],
        'quantity' => ['quantity', 'int', null, 'setQuantity', 'getQuantity'],
        'vendor' => ['vendor', 'Swagger\Server\Model\VendorCart', null, 'setVendor', 'getVendor'],
    ];
    

    
    /**
     * Identificador do SKU
     *
     * @var string|null
     */
    protected $sku_id;

    /**
     * Nome do produto
     *
     * @var string|null
     */
    protected $name;

    /**     * @var Category|null
     */
    protected $category;

    /**
     * URL da imagem do produto
     *
     * @var string|null
     */
    protected $image_url;

    /**     * @var Price|null
     */
    protected $price;

    /**
     * Quantidade de itens
     *
     * @var int|null
     */
    protected $quantity;

    /**     * @var VendorCart|null
     */
    protected $vendor;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->sku_id = isset($data['sku_id']) ? $data['sku_id'] : null;
        $this->name = isset($data['name']) ? $data['name'] : null;
        $this->category = isset($data['category']) ? $data['category'] : null;
        $this->image_url = isset($data['image_url']) ? $data['image_url'] : null;
        $this->price = isset($data['price']) ? $data['price'] : null;
        $this->quantity = isset($data['quantity']) ? $data['quantity'] : null;
        $this->vendor = isset($data['vendor']) ? $data['vendor'] : null;
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
     * Gets sku_id.
     *
     * @return string|null
     */
    public function getSkuId()
    {
        return $this->sku_id;
    }

    /**
     * Sets sku_id.
     *
     * @param string|null $sku_id  Identificador do SKU
     *
     * @return $this
     */
    public function setSkuId($sku_id = null)
    {
        $this->sku_id = $sku_id;

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
     * Gets category.
     *
     * @return Category|null
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Sets category.
     *
     * @param Category|null $category
     *
     * @return $this
     */
    public function setCategory(Category $category = null)
    {
        $this->category = $category;

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
     * @param string|null $image_url  URL da imagem do produto
     *
     * @return $this
     */
    public function setImageUrl($image_url = null)
    {
        $this->image_url = $image_url;

        return $this;
    }

    /**
     * Gets price.
     *
     * @return Price|null
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Sets price.
     *
     * @param Price|null $price
     *
     * @return $this
     */
    public function setPrice(Price $price = null)
    {
        $this->price = $price;

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
     * @param int|null $quantity  Quantidade de itens
     *
     * @return $this
     */
    public function setQuantity($quantity = null)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Gets vendor.
     *
     * @return VendorCart|null
     */
    public function getVendor()
    {
        return $this->vendor;
    }

    /**
     * Sets vendor.
     *
     * @param VendorCart|null $vendor
     *
     * @return $this
     */
    public function setVendor(VendorCart $vendor = null)
    {
        $this->vendor = $vendor;

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


