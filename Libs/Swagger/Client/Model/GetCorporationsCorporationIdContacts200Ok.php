<?php
/**
 * GetCorporationsCorporationIdContacts200Ok
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
 * GetCorporationsCorporationIdContacts200Ok Class Doc Comment
 *
 * @category Class
 * @description 200 ok object
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetCorporationsCorporationIdContacts200Ok implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'get_corporations_corporation_id_contacts_200_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'standing' => 'float',
        'contact_type' => 'string',
        'contact_id' => 'int',
        'is_watched' => 'bool',
        'label_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'standing' => 'float',
        'contact_type' => null,
        'contact_id' => 'int32',
        'is_watched' => null,
        'label_id' => 'int64'
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
        'standing' => 'standing',
        'contact_type' => 'contact_type',
        'contact_id' => 'contact_id',
        'is_watched' => 'is_watched',
        'label_id' => 'label_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'standing' => 'setStanding',
        'contact_type' => 'setContactType',
        'contact_id' => 'setContactId',
        'is_watched' => 'setIsWatched',
        'label_id' => 'setLabelId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'standing' => 'getStanding',
        'contact_type' => 'getContactType',
        'contact_id' => 'getContactId',
        'is_watched' => 'getIsWatched',
        'label_id' => 'getLabelId'
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

    const CONTACT_TYPE_CHARACTER = 'character';
    const CONTACT_TYPE_CORPORATION = 'corporation';
    const CONTACT_TYPE_ALLIANCE = 'alliance';
    const CONTACT_TYPE_FACTION = 'faction';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getContactTypeAllowableValues()
    {
        return [
            self::CONTACT_TYPE_CHARACTER,
            self::CONTACT_TYPE_CORPORATION,
            self::CONTACT_TYPE_ALLIANCE,
            self::CONTACT_TYPE_FACTION,
        ];
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
        $this->container['standing'] = isset($data['standing']) ? $data['standing'] : null;
        $this->container['contact_type'] = isset($data['contact_type']) ? $data['contact_type'] : null;
        $this->container['contact_id'] = isset($data['contact_id']) ? $data['contact_id'] : null;
        $this->container['is_watched'] = isset($data['is_watched']) ? $data['is_watched'] : null;
        $this->container['label_id'] = isset($data['label_id']) ? $data['label_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['standing'] === null) {
            $invalidProperties[] = "'standing' can't be null";
        }
        if ($this->container['contact_type'] === null) {
            $invalidProperties[] = "'contact_type' can't be null";
        }
        $allowedValues = $this->getContactTypeAllowableValues();
        if (!in_array($this->container['contact_type'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'contact_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['contact_id'] === null) {
            $invalidProperties[] = "'contact_id' can't be null";
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

        if ($this->container['standing'] === null) {
            return false;
        }
        if ($this->container['contact_type'] === null) {
            return false;
        }
        $allowedValues = $this->getContactTypeAllowableValues();
        if (!in_array($this->container['contact_type'], $allowedValues)) {
            return false;
        }
        if ($this->container['contact_id'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets standing
     *
     * @return float
     */
    public function getStanding()
    {
        return $this->container['standing'];
    }

    /**
     * Sets standing
     *
     * @param float $standing Standing of the contact
     *
     * @return $this
     */
    public function setStanding($standing)
    {
        $this->container['standing'] = $standing;

        return $this;
    }

    /**
     * Gets contact_type
     *
     * @return string
     */
    public function getContactType()
    {
        return $this->container['contact_type'];
    }

    /**
     * Sets contact_type
     *
     * @param string $contact_type contact_type string
     *
     * @return $this
     */
    public function setContactType($contact_type)
    {
        $allowedValues = $this->getContactTypeAllowableValues();
        if (!in_array($contact_type, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'contact_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['contact_type'] = $contact_type;

        return $this;
    }

    /**
     * Gets contact_id
     *
     * @return int
     */
    public function getContactId()
    {
        return $this->container['contact_id'];
    }

    /**
     * Sets contact_id
     *
     * @param int $contact_id contact_id integer
     *
     * @return $this
     */
    public function setContactId($contact_id)
    {
        $this->container['contact_id'] = $contact_id;

        return $this;
    }

    /**
     * Gets is_watched
     *
     * @return bool
     */
    public function getIsWatched()
    {
        return $this->container['is_watched'];
    }

    /**
     * Sets is_watched
     *
     * @param bool $is_watched Whether this contact is being watched
     *
     * @return $this
     */
    public function setIsWatched($is_watched)
    {
        $this->container['is_watched'] = $is_watched;

        return $this;
    }

    /**
     * Gets label_id
     *
     * @return int
     */
    public function getLabelId()
    {
        return $this->container['label_id'];
    }

    /**
     * Sets label_id
     *
     * @param int $label_id Custom label of the contact
     *
     * @return $this
     */
    public function setLabelId($label_id)
    {
        $this->container['label_id'] = $label_id;

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


