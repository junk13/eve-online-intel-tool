<?php
/**
 * GetUniverseGraphicsGraphicIdOk
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
 * GetUniverseGraphicsGraphicIdOk Class Doc Comment
 *
 * @category Class
 * @description 200 ok object
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetUniverseGraphicsGraphicIdOk implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'get_universe_graphics_graphic_id_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'graphic_id' => 'int',
        'graphic_file' => 'string',
        'sof_race_name' => 'string',
        'sof_fation_name' => 'string',
        'sof_dna' => 'string',
        'sof_hull_name' => 'string',
        'collision_file' => 'string',
        'icon_folder' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'graphic_id' => 'int32',
        'graphic_file' => null,
        'sof_race_name' => null,
        'sof_fation_name' => null,
        'sof_dna' => null,
        'sof_hull_name' => null,
        'collision_file' => null,
        'icon_folder' => null
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
        'graphic_id' => 'graphic_id',
        'graphic_file' => 'graphic_file',
        'sof_race_name' => 'sof_race_name',
        'sof_fation_name' => 'sof_fation_name',
        'sof_dna' => 'sof_dna',
        'sof_hull_name' => 'sof_hull_name',
        'collision_file' => 'collision_file',
        'icon_folder' => 'icon_folder'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'graphic_id' => 'setGraphicId',
        'graphic_file' => 'setGraphicFile',
        'sof_race_name' => 'setSofRaceName',
        'sof_fation_name' => 'setSofFationName',
        'sof_dna' => 'setSofDna',
        'sof_hull_name' => 'setSofHullName',
        'collision_file' => 'setCollisionFile',
        'icon_folder' => 'setIconFolder'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'graphic_id' => 'getGraphicId',
        'graphic_file' => 'getGraphicFile',
        'sof_race_name' => 'getSofRaceName',
        'sof_fation_name' => 'getSofFationName',
        'sof_dna' => 'getSofDna',
        'sof_hull_name' => 'getSofHullName',
        'collision_file' => 'getCollisionFile',
        'icon_folder' => 'getIconFolder'
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
        $this->container['graphic_id'] = isset($data['graphic_id']) ? $data['graphic_id'] : null;
        $this->container['graphic_file'] = isset($data['graphic_file']) ? $data['graphic_file'] : null;
        $this->container['sof_race_name'] = isset($data['sof_race_name']) ? $data['sof_race_name'] : null;
        $this->container['sof_fation_name'] = isset($data['sof_fation_name']) ? $data['sof_fation_name'] : null;
        $this->container['sof_dna'] = isset($data['sof_dna']) ? $data['sof_dna'] : null;
        $this->container['sof_hull_name'] = isset($data['sof_hull_name']) ? $data['sof_hull_name'] : null;
        $this->container['collision_file'] = isset($data['collision_file']) ? $data['collision_file'] : null;
        $this->container['icon_folder'] = isset($data['icon_folder']) ? $data['icon_folder'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['graphic_id'] === null) {
            $invalidProperties[] = "'graphic_id' can't be null";
        }
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

        if ($this->container['graphic_id'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets graphic_id
     *
     * @return int
     */
    public function getGraphicId()
    {
        return $this->container['graphic_id'];
    }

    /**
     * Sets graphic_id
     *
     * @param int $graphic_id graphic_id integer
     *
     * @return $this
     */
    public function setGraphicId($graphic_id)
    {
        $this->container['graphic_id'] = $graphic_id;

        return $this;
    }

    /**
     * Gets graphic_file
     *
     * @return string
     */
    public function getGraphicFile()
    {
        return $this->container['graphic_file'];
    }

    /**
     * Sets graphic_file
     *
     * @param string $graphic_file graphic_file string
     *
     * @return $this
     */
    public function setGraphicFile($graphic_file)
    {
        $this->container['graphic_file'] = $graphic_file;

        return $this;
    }

    /**
     * Gets sof_race_name
     *
     * @return string
     */
    public function getSofRaceName()
    {
        return $this->container['sof_race_name'];
    }

    /**
     * Sets sof_race_name
     *
     * @param string $sof_race_name sof_race_name string
     *
     * @return $this
     */
    public function setSofRaceName($sof_race_name)
    {
        $this->container['sof_race_name'] = $sof_race_name;

        return $this;
    }

    /**
     * Gets sof_fation_name
     *
     * @return string
     */
    public function getSofFationName()
    {
        return $this->container['sof_fation_name'];
    }

    /**
     * Sets sof_fation_name
     *
     * @param string $sof_fation_name sof_fation_name string
     *
     * @return $this
     */
    public function setSofFationName($sof_fation_name)
    {
        $this->container['sof_fation_name'] = $sof_fation_name;

        return $this;
    }

    /**
     * Gets sof_dna
     *
     * @return string
     */
    public function getSofDna()
    {
        return $this->container['sof_dna'];
    }

    /**
     * Sets sof_dna
     *
     * @param string $sof_dna sof_dna string
     *
     * @return $this
     */
    public function setSofDna($sof_dna)
    {
        $this->container['sof_dna'] = $sof_dna;

        return $this;
    }

    /**
     * Gets sof_hull_name
     *
     * @return string
     */
    public function getSofHullName()
    {
        return $this->container['sof_hull_name'];
    }

    /**
     * Sets sof_hull_name
     *
     * @param string $sof_hull_name sof_hull_name string
     *
     * @return $this
     */
    public function setSofHullName($sof_hull_name)
    {
        $this->container['sof_hull_name'] = $sof_hull_name;

        return $this;
    }

    /**
     * Gets collision_file
     *
     * @return string
     */
    public function getCollisionFile()
    {
        return $this->container['collision_file'];
    }

    /**
     * Sets collision_file
     *
     * @param string $collision_file collision_file string
     *
     * @return $this
     */
    public function setCollisionFile($collision_file)
    {
        $this->container['collision_file'] = $collision_file;

        return $this;
    }

    /**
     * Gets icon_folder
     *
     * @return string
     */
    public function getIconFolder()
    {
        return $this->container['icon_folder'];
    }

    /**
     * Sets icon_folder
     *
     * @param string $icon_folder icon_folder string
     *
     * @return $this
     */
    public function setIconFolder($icon_folder)
    {
        $this->container['icon_folder'] = $icon_folder;

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


