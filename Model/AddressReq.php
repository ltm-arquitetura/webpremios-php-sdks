<?php
/**
 * AddressReq
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
 * Class representing the AddressReq model.
 *
 * @package Swagger\Server\Model
 * @author  Swagger Codegen team
 */
class AddressReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $_name = 'addressReq';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var array[]
      */
    protected static $_attributes = [
        'street' => ['street', 'string', null, 'setStreet', 'getStreet'],
        'number' => ['number', 'string', null, 'setNumber', 'getNumber'],
        'complement' => ['complement', 'string', null, 'setComplement', 'getComplement'],
        'district' => ['district', 'string', null, 'setDistrict', 'getDistrict'],
        'city' => ['city', 'string', null, 'setCity', 'getCity'],
        'state' => ['state', 'string', null, 'setState', 'getState'],
        'zip_code' => ['zipCode', 'string', null, 'setZipCode', 'getZipCode'],
    ];
    

    /**
     * Allowed values of state
     */
    const STATE_AC = 'AC';
    const STATE_AL = 'AL';
    const STATE_AP = 'AP';
    const STATE_AM = 'AM';
    const STATE_BA = 'BA';
    const STATE_CE = 'CE';
    const STATE_DF = 'DF';
    const STATE_ES = 'ES';
    const STATE_GO = 'GO';
    const STATE_MA = 'MA';
    const STATE_MT = 'MT';
    const STATE_MS = 'MS';
    const STATE_MG = 'MG';
    const STATE_PA = 'PA';
    const STATE_PB = 'PB';
    const STATE_PR = 'PR';
    const STATE_PE = 'PE';
    const STATE_PI = 'PI';
    const STATE_RJ = 'RJ';
    const STATE_RN = 'RN';
    const STATE_RS = 'RS';
    const STATE_RO = 'RO';
    const STATE_RR = 'RR';
    const STATE_SC = 'SC';
    const STATE_SP = 'SP';
    const STATE_SE = 'SE';
    const STATE_TO = 'TO';

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_AC,
            self::STATE_AL,
            self::STATE_AP,
            self::STATE_AM,
            self::STATE_BA,
            self::STATE_CE,
            self::STATE_DF,
            self::STATE_ES,
            self::STATE_GO,
            self::STATE_MA,
            self::STATE_MT,
            self::STATE_MS,
            self::STATE_MG,
            self::STATE_PA,
            self::STATE_PB,
            self::STATE_PR,
            self::STATE_PE,
            self::STATE_PI,
            self::STATE_RJ,
            self::STATE_RN,
            self::STATE_RS,
            self::STATE_RO,
            self::STATE_RR,
            self::STATE_SC,
            self::STATE_SP,
            self::STATE_SE,
            self::STATE_TO,
        ];
    }
    
    /**
     * Logradouro
     *
     * @var string|null
     */
    protected $street;

    /**
     * Número
     *
     * @var string|null
     */
    protected $number;

    /**
     * Complemento
     *
     * @var string|null
     */
    protected $complement;

    /**
     * Bairro
     *
     * @var string|null
     */
    protected $district;

    /**
     * Cidade
     *
     * @var string|null
     */
    protected $city;

    /**
     * Estado
     *
     * @var string|null
     */
    protected $state;

    /**
     * CEP
     *
     * @var string|null
     */
    protected $zip_code;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->street = isset($data['street']) ? $data['street'] : null;
        $this->number = isset($data['number']) ? $data['number'] : null;
        $this->complement = isset($data['complement']) ? $data['complement'] : null;
        $this->district = isset($data['district']) ? $data['district'] : null;
        $this->city = isset($data['city']) ? $data['city'] : null;
        $this->state = isset($data['state']) ? $data['state'] : null;
        $this->zip_code = isset($data['zip_code']) ? $data['zip_code'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowedValues = $this->getStateAllowableValues();
        if (!in_array($this->state, $allowedValues, true)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'state', must be one of '%s'",
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
        $allowedValues = $this->getStateAllowableValues();
        if (!in_array($this->state, $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets street.
     *
     * @return string|null
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Sets street.
     *
     * @param string|null $street  Logradouro
     *
     * @return $this
     */
    public function setStreet($street = null)
    {
        $this->street = $street;

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
     * @param string|null $number  Número
     *
     * @return $this
     */
    public function setNumber($number = null)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Gets complement.
     *
     * @return string|null
     */
    public function getComplement()
    {
        return $this->complement;
    }

    /**
     * Sets complement.
     *
     * @param string|null $complement  Complemento
     *
     * @return $this
     */
    public function setComplement($complement = null)
    {
        $this->complement = $complement;

        return $this;
    }

    /**
     * Gets district.
     *
     * @return string|null
     */
    public function getDistrict()
    {
        return $this->district;
    }

    /**
     * Sets district.
     *
     * @param string|null $district  Bairro
     *
     * @return $this
     */
    public function setDistrict($district = null)
    {
        $this->district = $district;

        return $this;
    }

    /**
     * Gets city.
     *
     * @return string|null
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Sets city.
     *
     * @param string|null $city  Cidade
     *
     * @return $this
     */
    public function setCity($city = null)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Gets state.
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Sets state.
     *
     * @param string|null $state  Estado
     *
     * @return $this
     */
    public function setState($state = null)
    {
        $allowedValues = $this->getStateAllowableValues();
        if ($state !== null && !in_array($state, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'state', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->state = $state;

        return $this;
    }

    /**
     * Gets zip_code.
     *
     * @return string|null
     */
    public function getZipCode()
    {
        return $this->zip_code;
    }

    /**
     * Sets zip_code.
     *
     * @param string|null $zip_code  CEP
     *
     * @return $this
     */
    public function setZipCode($zip_code = null)
    {
        $this->zip_code = $zip_code;

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


