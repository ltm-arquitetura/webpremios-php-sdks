<?php
/**
 * PurchaseAuthItems
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
use Swagger\Server\Model\PurchaseAuthVendor;
use Swagger\Server\Model\Category;
use Swagger\Server\Model\Price;

/**
 * Class representing the PurchaseAuthItems model.
 *
 * 
 *
 * @package Swagger\Server\Model
 * @author  Swagger Codegen team
 */
class PurchaseAuthItems implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $_name = 'purchaseAuthItems';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var array[]
      */
    protected static $_attributes = [
        'product_id' => ['productId', 'string', null, 'setProductId', 'getProductId'],
        'vendor_sku_id' => ['vendorSkuId', 'string', null, 'setVendorSkuId', 'getVendorSkuId'],
        'sku_id' => ['skuId', 'string', null, 'setSkuId', 'getSkuId'],
        'name' => ['name', 'string', null, 'setName', 'getName'],
        'quantity' => ['quantity', 'string', null, 'setQuantity', 'getQuantity'],
        'category' => ['category', 'Swagger\Server\Model\Category', null, 'setCategory', 'getCategory'],
        'image_url' => ['imageUrl', 'string', null, 'setImageUrl', 'getImageUrl'],
        'price' => ['price', 'Swagger\Server\Model\Price', null, 'setPrice', 'getPrice'],
        'vendor' => ['vendor', 'Swagger\Server\Model\PurchaseAuthVendor', null, 'setVendor', 'getVendor'],
    ];
    

    
    /**
     * Identificador do produto
     *
     * @var string|null
     */
    protected $product_id;

    /**
     * Identificador do SKU no parceiro
     *
     * @var string|null
     */
    protected $vendor_sku_id;

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

    /**
     * Quantidade
     *
     * @var string|null
     */
    protected $quantity;

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

    /**     * @var PurchaseAuthVendor|null
     */
    protected $vendor;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->product_id = isset($data['product_id']) ? $data['product_id'] : null;
        $this->vendor_sku_id = isset($data['vendor_sku_id']) ? $data['vendor_sku_id'] : null;
        $this->sku_id = isset($data['sku_id']) ? $data['sku_id'] : null;
        $this->name = isset($data['name']) ? $data['name'] : null;
        $this->quantity = isset($data['quantity']) ? $data['quantity'] : null;
        $this->category = isset($data['category']) ? $data['category'] : null;
        $this->image_url = isset($data['image_url']) ? $data['image_url'] : null;
        $this->price = isset($data['price']) ? $data['price'] : null;
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
     * Gets product_id.
     *
     * @return string|null
     */
    public function getProductId()
    {
        return $this->product_id;
    }

    /**
     * Sets product_id.
     *
     * @param string|null $product_id  Identificador do produto
     *
     * @return $this
     */
    public function setProductId($product_id = null)
    {
        $this->product_id = $product_id;

        return $this;
    }

    /**
     * Gets vendor_sku_id.
     *
     * @return string|null
     */
    public function getVendorSkuId()
    {
        return $this->vendor_sku_id;
    }

    /**
     * Sets vendor_sku_id.
     *
     * @param string|null $vendor_sku_id  Identificador do SKU no parceiro
     *
     * @return $this
     */
    public function setVendorSkuId($vendor_sku_id = null)
    {
        $this->vendor_sku_id = $vendor_sku_id;

        return $this;
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
     * Gets quantity.
     *
     * @return string|null
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets quantity.
     *
     * @param string|null $quantity  Quantidade
     *
     * @return $this
     */
    public function setQuantity($quantity = null)
    {
        $this->quantity = $quantity;

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
     * Gets vendor.
     *
     * @return PurchaseAuthVendor|null
     */
    public function getVendor()
    {
        return $this->vendor;
    }

    /**
     * Sets vendor.
     *
     * @param PurchaseAuthVendor|null $vendor
     *
     * @return $this
     */
    public function setVendor(PurchaseAuthVendor $vendor = null)
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


