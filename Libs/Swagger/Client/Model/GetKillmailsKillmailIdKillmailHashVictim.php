<?php
/**
 * GetKillmailsKillmailIdKillmailHashVictim
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
 * GetKillmailsKillmailIdKillmailHashVictim Class Doc Comment
 *
 * @category Class
 * @description victim object
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetKillmailsKillmailIdKillmailHashVictim implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'get_killmails_killmail_id_killmail_hash_victim';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'character_id' => 'int',
        'corporation_id' => 'int',
        'alliance_id' => 'int',
        'faction_id' => 'int',
        'damage_taken' => 'int',
        'ship_type_id' => 'int',
        'items' => '\WordPress\Plugin\EveOnlineIntelTool\Libs\Swagger\Client\Model\GetKillmailsKillmailIdKillmailHashItem1[]',
        'position' => '\WordPress\Plugin\EveOnlineIntelTool\Libs\Swagger\Client\Model\GetKillmailsKillmailIdKillmailHashPosition'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'character_id' => 'int32',
        'corporation_id' => 'int32',
        'alliance_id' => 'int32',
        'faction_id' => 'int32',
        'damage_taken' => 'int32',
        'ship_type_id' => 'int32',
        'items' => null,
        'position' => null
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
        'character_id' => 'character_id',
        'corporation_id' => 'corporation_id',
        'alliance_id' => 'alliance_id',
        'faction_id' => 'faction_id',
        'damage_taken' => 'damage_taken',
        'ship_type_id' => 'ship_type_id',
        'items' => 'items',
        'position' => 'position'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'character_id' => 'setCharacterId',
        'corporation_id' => 'setCorporationId',
        'alliance_id' => 'setAllianceId',
        'faction_id' => 'setFactionId',
        'damage_taken' => 'setDamageTaken',
        'ship_type_id' => 'setShipTypeId',
        'items' => 'setItems',
        'position' => 'setPosition'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'character_id' => 'getCharacterId',
        'corporation_id' => 'getCorporationId',
        'alliance_id' => 'getAllianceId',
        'faction_id' => 'getFactionId',
        'damage_taken' => 'getDamageTaken',
        'ship_type_id' => 'getShipTypeId',
        'items' => 'getItems',
        'position' => 'getPosition'
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
        $this->container['character_id'] = isset($data['character_id']) ? $data['character_id'] : null;
        $this->container['corporation_id'] = isset($data['corporation_id']) ? $data['corporation_id'] : null;
        $this->container['alliance_id'] = isset($data['alliance_id']) ? $data['alliance_id'] : null;
        $this->container['faction_id'] = isset($data['faction_id']) ? $data['faction_id'] : null;
        $this->container['damage_taken'] = isset($data['damage_taken']) ? $data['damage_taken'] : null;
        $this->container['ship_type_id'] = isset($data['ship_type_id']) ? $data['ship_type_id'] : null;
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
        $this->container['position'] = isset($data['position']) ? $data['position'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['damage_taken'] === null) {
            $invalidProperties[] = "'damage_taken' can't be null";
        }
        if ($this->container['ship_type_id'] === null) {
            $invalidProperties[] = "'ship_type_id' can't be null";
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

        if ($this->container['damage_taken'] === null) {
            return false;
        }
        if ($this->container['ship_type_id'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets character_id
     *
     * @return int
     */
    public function getCharacterId()
    {
        return $this->container['character_id'];
    }

    /**
     * Sets character_id
     *
     * @param int $character_id character_id integer
     *
     * @return $this
     */
    public function setCharacterId($character_id)
    {
        $this->container['character_id'] = $character_id;

        return $this;
    }

    /**
     * Gets corporation_id
     *
     * @return int
     */
    public function getCorporationId()
    {
        return $this->container['corporation_id'];
    }

    /**
     * Sets corporation_id
     *
     * @param int $corporation_id corporation_id integer
     *
     * @return $this
     */
    public function setCorporationId($corporation_id)
    {
        $this->container['corporation_id'] = $corporation_id;

        return $this;
    }

    /**
     * Gets alliance_id
     *
     * @return int
     */
    public function getAllianceId()
    {
        return $this->container['alliance_id'];
    }

    /**
     * Sets alliance_id
     *
     * @param int $alliance_id alliance_id integer
     *
     * @return $this
     */
    public function setAllianceId($alliance_id)
    {
        $this->container['alliance_id'] = $alliance_id;

        return $this;
    }

    /**
     * Gets faction_id
     *
     * @return int
     */
    public function getFactionId()
    {
        return $this->container['faction_id'];
    }

    /**
     * Sets faction_id
     *
     * @param int $faction_id faction_id integer
     *
     * @return $this
     */
    public function setFactionId($faction_id)
    {
        $this->container['faction_id'] = $faction_id;

        return $this;
    }

    /**
     * Gets damage_taken
     *
     * @return int
     */
    public function getDamageTaken()
    {
        return $this->container['damage_taken'];
    }

    /**
     * Sets damage_taken
     *
     * @param int $damage_taken How much total damage was taken by the victim
     *
     * @return $this
     */
    public function setDamageTaken($damage_taken)
    {
        $this->container['damage_taken'] = $damage_taken;

        return $this;
    }

    /**
     * Gets ship_type_id
     *
     * @return int
     */
    public function getShipTypeId()
    {
        return $this->container['ship_type_id'];
    }

    /**
     * Sets ship_type_id
     *
     * @param int $ship_type_id The ship that the victim was piloting and was destroyed
     *
     * @return $this
     */
    public function setShipTypeId($ship_type_id)
    {
        $this->container['ship_type_id'] = $ship_type_id;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \WordPress\Plugin\EveOnlineIntelTool\Libs\Swagger\Client\Model\GetKillmailsKillmailIdKillmailHashItem1[]
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \WordPress\Plugin\EveOnlineIntelTool\Libs\Swagger\Client\Model\GetKillmailsKillmailIdKillmailHashItem1[] $items items array
     *
     * @return $this
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets position
     *
     * @return \WordPress\Plugin\EveOnlineIntelTool\Libs\Swagger\Client\Model\GetKillmailsKillmailIdKillmailHashPosition
     */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
     * Sets position
     *
     * @param \WordPress\Plugin\EveOnlineIntelTool\Libs\Swagger\Client\Model\GetKillmailsKillmailIdKillmailHashPosition $position position
     *
     * @return $this
     */
    public function setPosition($position)
    {
        $this->container['position'] = $position;

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


