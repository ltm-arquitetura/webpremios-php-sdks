<?php
/**
 * Search
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
use Swagger\Server\Model\VendorSearch;
use Swagger\Server\Model\ProductSearch;
use Swagger\Server\Model\ProductBrand;
use Swagger\Server\Model\FilterCategory;

/**
 * Class representing the Search model.
 *
 * 
 *
 * @package Swagger\Server\Model
 * @author  Swagger Codegen team
 */
class Search implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $_name = 'search';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var array[]
      */
    protected static $_attributes = [
        'products' => ['products', 'Swagger\Server\Model\ProductSearch[]', null, 'setProducts', 'getProducts'],
        'categories' => ['categories', 'Swagger\Server\Model\FilterCategory[]', null, 'setCategories', 'getCategories'],
        'brands' => ['brands', 'Swagger\Server\Model\ProductBrand[]', null, 'setBrands', 'getBrands'],
        'vendors' => ['vendors', 'Swagger\Server\Model\VendorSearch[]', null, 'setVendors', 'getVendors'],
        'lower_price' => ['lowerPrice', 'float', 'decimal', 'setLowerPrice', 'getLowerPrice'],
        'higher_price' => ['higherPrice', 'float', 'decimal', 'setHigherPrice', 'getHigherPrice'],
        'page_index' => ['pageIndex', 'string', null, 'setPageIndex', 'getPageIndex'],
        'last_page' => ['lastPage', 'string', null, 'setLastPage', 'getLastPage'],
    ];
    

    
    /**     * @var ProductSearch[]|null
     */
    protected $products;

    /**     * @var FilterCategory[]|null
     */
    protected $categories;

    /**     * @var ProductBrand[]|null
     */
    protected $brands;

    /**     * @var VendorSearch[]|null
     */
    protected $vendors;

    /**
     * Produtos com menor preço em pontos no resultado
     *
     * @var float|null
     */
    protected $lower_price;

    /**
     * Produtos com maior preço em pontos no resultado
     *
     * @var float|null
     */
    protected $higher_price;

    /**
     * Pagina atual
     *
     * @var string|null
     */
    protected $page_index;

    /**
     * Última página
     *
     * @var string|null
     */
    protected $last_page;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->products = isset($data['products']) ? $data['products'] : null;
        $this->categories = isset($data['categories']) ? $data['categories'] : null;
        $this->brands = isset($data['brands']) ? $data['brands'] : null;
        $this->vendors = isset($data['vendors']) ? $data['vendors'] : null;
        $this->lower_price = isset($data['lower_price']) ? $data['lower_price'] : null;
        $this->higher_price = isset($data['higher_price']) ? $data['higher_price'] : null;
        $this->page_index = isset($data['page_index']) ? $data['page_index'] : null;
        $this->last_page = isset($data['last_page']) ? $data['last_page'] : null;
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
     * Gets products.
     *
     * @return ProductSearch[]|null
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * Sets products.
     *
     * @param ProductSearch[]|null $products
     *
     * @return $this
     */
    public function setProducts(array $products = null)
    {
        $this->products = $products;

        return $this;
    }

    /**
     * Gets categories.
     *
     * @return FilterCategory[]|null
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * Sets categories.
     *
     * @param FilterCategory[]|null $categories
     *
     * @return $this
     */
    public function setCategories(array $categories = null)
    {
        $this->categories = $categories;

        return $this;
    }

    /**
     * Gets brands.
     *
     * @return ProductBrand[]|null
     */
    public function getBrands()
    {
        return $this->brands;
    }

    /**
     * Sets brands.
     *
     * @param ProductBrand[]|null $brands
     *
     * @return $this
     */
    public function setBrands(array $brands = null)
    {
        $this->brands = $brands;

        return $this;
    }

    /**
     * Gets vendors.
     *
     * @return VendorSearch[]|null
     */
    public function getVendors()
    {
        return $this->vendors;
    }

    /**
     * Sets vendors.
     *
     * @param VendorSearch[]|null $vendors
     *
     * @return $this
     */
    public function setVendors(array $vendors = null)
    {
        $this->vendors = $vendors;

        return $this;
    }

    /**
     * Gets lower_price.
     *
     * @return float|null
     */
    public function getLowerPrice()
    {
        return $this->lower_price;
    }

    /**
     * Sets lower_price.
     *
     * @param float|null $lower_price  Produtos com menor preço em pontos no resultado
     *
     * @return $this
     */
    public function setLowerPrice($lower_price = null)
    {
        $this->lower_price = $lower_price;

        return $this;
    }

    /**
     * Gets higher_price.
     *
     * @return float|null
     */
    public function getHigherPrice()
    {
        return $this->higher_price;
    }

    /**
     * Sets higher_price.
     *
     * @param float|null $higher_price  Produtos com maior preço em pontos no resultado
     *
     * @return $this
     */
    public function setHigherPrice($higher_price = null)
    {
        $this->higher_price = $higher_price;

        return $this;
    }

    /**
     * Gets page_index.
     *
     * @return string|null
     */
    public function getPageIndex()
    {
        return $this->page_index;
    }

    /**
     * Sets page_index.
     *
     * @param string|null $page_index  Pagina atual
     *
     * @return $this
     */
    public function setPageIndex($page_index = null)
    {
        $this->page_index = $page_index;

        return $this;
    }

    /**
     * Gets last_page.
     *
     * @return string|null
     */
    public function getLastPage()
    {
        return $this->last_page;
    }

    /**
     * Sets last_page.
     *
     * @param string|null $last_page  Última página
     *
     * @return $this
     */
    public function setLastPage($last_page = null)
    {
        $this->last_page = $last_page;

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


