<?php
/**
 * GetUniverseSystemsSystemIdOk
 *
 * PHP version 5
 *
 * @category Class
 * @package  WordPress\Plugin\EveOnlineIntelTool\Libs\Swagger\Client
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
 * GetUniverseSystemsSystemIdOk Class Doc Comment
 *
 * @category Class
 * @description 200 ok object
 * @package  WordPress\Plugin\EveOnlineIntelTool\Libs\Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetUniverseSystemsSystemIdOk implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'get_universe_systems_system_id_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'star_id' => 'int',
        'system_id' => 'int',
        'name' => 'string',
        'position' => '\WordPress\Plugin\EveOnlineIntelTool\Libs\Swagger\Client\Model\GetUniverseSystemsSystemIdPosition',
        'security_status' => 'float',
        'security_class' => 'string',
        'constellation_id' => 'int',
        'planets' => '\WordPress\Plugin\EveOnlineIntelTool\Libs\Swagger\Client\Model\GetUniverseSystemsSystemIdPlanet[]',
        'stargates' => 'int[]',
        'stations' => 'int[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'star_id' => 'int32',
        'system_id' => 'int32',
        'name' => null,
        'position' => null,
        'security_status' => 'float',
        'security_class' => null,
        'constellation_id' => 'int32',
        'planets' => null,
        'stargates' => 'int32',
        'stations' => 'int32'
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
        'star_id' => 'star_id',
        'system_id' => 'system_id',
        'name' => 'name',
        'position' => 'position',
        'security_status' => 'security_status',
        'security_class' => 'security_class',
        'constellation_id' => 'constellation_id',
        'planets' => 'planets',
        'stargates' => 'stargates',
        'stations' => 'stations'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'star_id' => 'setStarId',
        'system_id' => 'setSystemId',
        'name' => 'setName',
        'position' => 'setPosition',
        'security_status' => 'setSecurityStatus',
        'security_class' => 'setSecurityClass',
        'constellation_id' => 'setConstellationId',
        'planets' => 'setPlanets',
        'stargates' => 'setStargates',
        'stations' => 'setStations'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'star_id' => 'getStarId',
        'system_id' => 'getSystemId',
        'name' => 'getName',
        'position' => 'getPosition',
        'security_status' => 'getSecurityStatus',
        'security_class' => 'getSecurityClass',
        'constellation_id' => 'getConstellationId',
        'planets' => 'getPlanets',
        'stargates' => 'getStargates',
        'stations' => 'getStations'
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
        $this->container['star_id'] = isset($data['star_id']) ? $data['star_id'] : null;
        $this->container['system_id'] = isset($data['system_id']) ? $data['system_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['position'] = isset($data['position']) ? $data['position'] : null;
        $this->container['security_status'] = isset($data['security_status']) ? $data['security_status'] : null;
        $this->container['security_class'] = isset($data['security_class']) ? $data['security_class'] : null;
        $this->container['constellation_id'] = isset($data['constellation_id']) ? $data['constellation_id'] : null;
        $this->container['planets'] = isset($data['planets']) ? $data['planets'] : null;
        $this->container['stargates'] = isset($data['stargates']) ? $data['stargates'] : null;
        $this->container['stations'] = isset($data['stations']) ? $data['stations'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['star_id'] === null) {
            $invalidProperties[] = "'star_id' can't be null";
        }
        if ($this->container['system_id'] === null) {
            $invalidProperties[] = "'system_id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['position'] === null) {
            $invalidProperties[] = "'position' can't be null";
        }
        if ($this->container['security_status'] === null) {
            $invalidProperties[] = "'security_status' can't be null";
        }
        if ($this->container['constellation_id'] === null) {
            $invalidProperties[] = "'constellation_id' can't be null";
        }
        if ($this->container['planets'] === null) {
            $invalidProperties[] = "'planets' can't be null";
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

        if ($this->container['star_id'] === null) {
            return false;
        }
        if ($this->container['system_id'] === null) {
            return false;
        }
        if ($this->container['name'] === null) {
            return false;
        }
        if ($this->container['position'] === null) {
            return false;
        }
        if ($this->container['security_status'] === null) {
            return false;
        }
        if ($this->container['constellation_id'] === null) {
            return false;
        }
        if ($this->container['planets'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets star_id
     *
     * @return int
     */
    public function getStarId()
    {
        return $this->container['star_id'];
    }

    /**
     * Sets star_id
     *
     * @param int $star_id star_id integer
     *
     * @return $this
     */
    public function setStarId($star_id)
    {
        $this->container['star_id'] = $star_id;

        return $this;
    }

    /**
     * Gets system_id
     *
     * @return int
     */
    public function getSystemId()
    {
        return $this->container['system_id'];
    }

    /**
     * Sets system_id
     *
     * @param int $system_id system_id integer
     *
     * @return $this
     */
    public function setSystemId($system_id)
    {
        $this->container['system_id'] = $system_id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name string
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets position
     *
     * @return \WordPress\Plugin\EveOnlineIntelTool\Libs\Swagger\Client\Model\GetUniverseSystemsSystemIdPosition
     */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
     * Sets position
     *
     * @param \WordPress\Plugin\EveOnlineIntelTool\Libs\Swagger\Client\Model\GetUniverseSystemsSystemIdPosition $position position
     *
     * @return $this
     */
    public function setPosition($position)
    {
        $this->container['position'] = $position;

        return $this;
    }

    /**
     * Gets security_status
     *
     * @return float
     */
    public function getSecurityStatus()
    {
        return $this->container['security_status'];
    }

    /**
     * Sets security_status
     *
     * @param float $security_status security_status number
     *
     * @return $this
     */
    public function setSecurityStatus($security_status)
    {
        $this->container['security_status'] = $security_status;

        return $this;
    }

    /**
     * Gets security_class
     *
     * @return string
     */
    public function getSecurityClass()
    {
        return $this->container['security_class'];
    }

    /**
     * Sets security_class
     *
     * @param string $security_class security_class string
     *
     * @return $this
     */
    public function setSecurityClass($security_class)
    {
        $this->container['security_class'] = $security_class;

        return $this;
    }

    /**
     * Gets constellation_id
     *
     * @return int
     */
    public function getConstellationId()
    {
        return $this->container['constellation_id'];
    }

    /**
     * Sets constellation_id
     *
     * @param int $constellation_id The constellation this solar system is in
     *
     * @return $this
     */
    public function setConstellationId($constellation_id)
    {
        $this->container['constellation_id'] = $constellation_id;

        return $this;
    }

    /**
     * Gets planets
     *
     * @return \WordPress\Plugin\EveOnlineIntelTool\Libs\Swagger\Client\Model\GetUniverseSystemsSystemIdPlanet[]
     */
    public function getPlanets()
    {
        return $this->container['planets'];
    }

    /**
     * Sets planets
     *
     * @param \WordPress\Plugin\EveOnlineIntelTool\Libs\Swagger\Client\Model\GetUniverseSystemsSystemIdPlanet[] $planets planets array
     *
     * @return $this
     */
    public function setPlanets($planets)
    {
        $this->container['planets'] = $planets;

        return $this;
    }

    /**
     * Gets stargates
     *
     * @return int[]
     */
    public function getStargates()
    {
        return $this->container['stargates'];
    }

    /**
     * Sets stargates
     *
     * @param int[] $stargates stargates array
     *
     * @return $this
     */
    public function setStargates($stargates)
    {
        $this->container['stargates'] = $stargates;

        return $this;
    }

    /**
     * Gets stations
     *
     * @return int[]
     */
    public function getStations()
    {
        return $this->container['stations'];
    }

    /**
     * Sets stations
     *
     * @param int[] $stations stations array
     *
     * @return $this
     */
    public function setStations($stations)
    {
        $this->container['stations'] = $stations;

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


