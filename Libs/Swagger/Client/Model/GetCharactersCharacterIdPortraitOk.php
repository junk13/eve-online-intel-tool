<?php
/**
 * GetCharactersCharacterIdPortraitOk
 *
 * PHP version 7
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * EVE Swagger Interface
 *
 * An OpenAPI for EVE Online
 *
 * OpenAPI spec version: 0.7.3
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace WordPress\Plugin\EveOnlineIntelTool\Libs\Swagger\Client\Model;

use \ArrayAccess;
use \WordPress\Plugin\EveOnlineIntelTool\Libs\Swagger\Client\ObjectSerializer;

/**
 * GetCharactersCharacterIdPortraitOk Class Doc Comment
 *
 * @category Class
 * @description 200 ok object
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetCharactersCharacterIdPortraitOk implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'get_characters_character_id_portrait_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'px64x64' => 'string',
        'px128x128' => 'string',
        'px256x256' => 'string',
        'px512x512' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'px64x64' => null,
        'px128x128' => null,
        'px256x256' => null,
        'px512x512' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'px64x64' => 'px64x64',
        'px128x128' => 'px128x128',
        'px256x256' => 'px256x256',
        'px512x512' => 'px512x512'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'px64x64' => 'setPx64x64',
        'px128x128' => 'setPx128x128',
        'px256x256' => 'setPx256x256',
        'px512x512' => 'setPx512x512'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'px64x64' => 'getPx64x64',
        'px128x128' => 'getPx128x128',
        'px256x256' => 'getPx256x256',
        'px512x512' => 'getPx512x512'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['px64x64'] = isset($data['px64x64']) ? $data['px64x64'] : null;
        $this->container['px128x128'] = isset($data['px128x128']) ? $data['px128x128'] : null;
        $this->container['px256x256'] = isset($data['px256x256']) ? $data['px256x256'] : null;
        $this->container['px512x512'] = isset($data['px512x512']) ? $data['px512x512'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets px64x64
     *
     * @return string
     */
    public function getPx64x64()
    {
        return $this->container['px64x64'];
    }

    /**
     * Sets px64x64
     *
     * @param string $px64x64 px64x64 string
     *
     * @return $this
     */
    public function setPx64x64($px64x64)
    {
        $this->container['px64x64'] = $px64x64;

        return $this;
    }

    /**
     * Gets px128x128
     *
     * @return string
     */
    public function getPx128x128()
    {
        return $this->container['px128x128'];
    }

    /**
     * Sets px128x128
     *
     * @param string $px128x128 px128x128 string
     *
     * @return $this
     */
    public function setPx128x128($px128x128)
    {
        $this->container['px128x128'] = $px128x128;

        return $this;
    }

    /**
     * Gets px256x256
     *
     * @return string
     */
    public function getPx256x256()
    {
        return $this->container['px256x256'];
    }

    /**
     * Sets px256x256
     *
     * @param string $px256x256 px256x256 string
     *
     * @return $this
     */
    public function setPx256x256($px256x256)
    {
        $this->container['px256x256'] = $px256x256;

        return $this;
    }

    /**
     * Gets px512x512
     *
     * @return string
     */
    public function getPx512x512()
    {
        return $this->container['px512x512'];
    }

    /**
     * Sets px512x512
     *
     * @param string $px512x512 px512x512 string
     *
     * @return $this
     */
    public function setPx512x512($px512x512)
    {
        $this->container['px512x512'] = $px512x512;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


