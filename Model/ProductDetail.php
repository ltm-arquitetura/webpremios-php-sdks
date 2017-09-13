<?php
/**
 * ProductDetail
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
use Swagger\Server\Model\Sections;
use Swagger\Server\Model\ProductDetailVendor;
use Swagger\Server\Model\ProductSKUDetail;
use Swagger\Server\Model\Features;

/**
 * Class representing the ProductDetail model.
 *
 * @package Swagger\Server\Model
 * @author  Swagger Codegen team
 */
class ProductDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $_name = 'productDetail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var array[]
      */
    protected static $_attributes = [
        'id' => ['id', 'string', null, 'setId', 'getId'],
        'original_id' => ['originalId', 'string', null, 'setOriginalId', 'getOriginalId'],
        'name' => ['name', 'string', null, 'setName', 'getName'],
        'description' => ['description', 'string', null, 'setDescription', 'getDescription'],
        'sections' => ['sections', 'Swagger\Server\Model\Sections[]', null, 'setSections', 'getSections'],
        'skus' => ['skus', 'Swagger\Server\Model\ProductSKUDetail[]', null, 'setSkus', 'getSkus'],
        'features' => ['features', 'Swagger\Server\Model\Features[]', null, 'setFeatures', 'getFeatures'],
        'vendor' => ['vendor', 'Swagger\Server\Model\ProductDetailVendor', null, 'setVendor', 'getVendor'],
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
     * Descrição do produto
     *
     * @var string|null
     */
    protected $description;

    /**
     * Categorização
     *
     * @var Sections[]|null
     */
    protected $sections;

    /**
     * SKUs
     *
     * @var ProductSKUDetail[]|null
     */
    protected $skus;

    /**
     * Características
     *
     * @var Features[]|null
     */
    protected $features;

    /**     * @var ProductDetailVendor|null
     */
    protected $vendor;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->id = isset($data['id']) ? $data['id'] : null;
        $this->original_id = isset($data['original_id']) ? $data['original_id'] : null;
        $this->name = isset($data['name']) ? $data['name'] : null;
        $this->description = isset($data['description']) ? $data['description'] : null;
        $this->sections = isset($data['sections']) ? $data['sections'] : null;
        $this->skus = isset($data['skus']) ? $data['skus'] : null;
        $this->features = isset($data['features']) ? $data['features'] : null;
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
     * Gets description.
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets description.
     *
     * @param string|null $description  Descrição do produto
     *
     * @return $this
     */
    public function setDescription($description = null)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Gets sections.
     *
     * @return Sections[]|null
     */
    public function getSections()
    {
        return $this->sections;
    }

    /**
     * Sets sections.
     *
     * @param Sections[]|null $sections  Categorização
     *
     * @return $this
     */
    public function setSections(array $sections = null)
    {
        $this->sections = $sections;

        return $this;
    }

    /**
     * Gets skus.
     *
     * @return ProductSKUDetail[]|null
     */
    public function getSkus()
    {
        return $this->skus;
    }

    /**
     * Sets skus.
     *
     * @param ProductSKUDetail[]|null $skus  SKUs
     *
     * @return $this
     */
    public function setSkus(array $skus = null)
    {
        $this->skus = $skus;

        return $this;
    }

    /**
     * Gets features.
     *
     * @return Features[]|null
     */
    public function getFeatures()
    {
        return $this->features;
    }

    /**
     * Sets features.
     *
     * @param Features[]|null $features  Características
     *
     * @return $this
     */
    public function setFeatures(array $features = null)
    {
        $this->features = $features;

        return $this;
    }

    /**
     * Gets vendor.
     *
     * @return ProductDetailVendor|null
     */
    public function getVendor()
    {
        return $this->vendor;
    }

    /**
     * Sets vendor.
     *
     * @param ProductDetailVendor|null $vendor
     *
     * @return $this
     */
    public function setVendor(ProductDetailVendor $vendor = null)
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


