<?php

/**
 * GetCorporationsCorporationIdOk
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
 * GetCorporationsCorporationIdOk Class Doc Comment
 *
 * @category Class
 * @description 200 ok object
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetCorporationsCorporationIdOk implements ModelInterface, ArrayAccess {

	const DISCRIMINATOR = null;

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	protected static $swaggerModelName = 'get_corporations_corporation_id_ok';

	/**
	 * Array of property to type mappings. Used for (de)serialization
	 *
	 * @var string[]
	 */
	protected static $swaggerTypes = [
		'name' => 'string',
		'ticker' => 'string',
		'member_count' => 'int',
		'ceo_id' => 'int',
		'alliance_id' => 'int',
		'description' => 'string',
		'tax_rate' => 'float',
		'date_founded' => '\DateTime',
		'creator_id' => 'int',
		'url' => 'string',
		'faction_id' => 'int',
		'home_station_id' => 'int',
		'shares' => 'int'
	];

	/**
	 * Array of property to format mappings. Used for (de)serialization
	 *
	 * @var string[]
	 */
	protected static $swaggerFormats = [
		'name' => null,
		'ticker' => null,
		'member_count' => 'int32',
		'ceo_id' => 'int32',
		'alliance_id' => 'int32',
		'description' => null,
		'tax_rate' => 'float',
		'date_founded' => 'date-time',
		'creator_id' => 'int32',
		'url' => null,
		'faction_id' => 'int32',
		'home_station_id' => 'int32',
		'shares' => 'int64'
	];

	/**
	 * Array of property to type mappings. Used for (de)serialization
	 *
	 * @return array
	 */
	public static function swaggerTypes() {
		return self::$swaggerTypes;
	}

	/**
	 * Array of property to format mappings. Used for (de)serialization
	 *
	 * @return array
	 */
	public static function swaggerFormats() {
		return self::$swaggerFormats;
	}

	/**
	 * Array of attributes where the key is the local name,
	 * and the value is the original name
	 *
	 * @var string[]
	 */
	protected static $attributeMap = [
		'name' => 'name',
		'ticker' => 'ticker',
		'member_count' => 'member_count',
		'ceo_id' => 'ceo_id',
		'alliance_id' => 'alliance_id',
		'description' => 'description',
		'tax_rate' => 'tax_rate',
		'date_founded' => 'date_founded',
		'creator_id' => 'creator_id',
		'url' => 'url',
		'faction_id' => 'faction_id',
		'home_station_id' => 'home_station_id',
		'shares' => 'shares'
	];

	/**
	 * Array of attributes to setter functions (for deserialization of responses)
	 *
	 * @var string[]
	 */
	protected static $setters = [
		'name' => 'setName',
		'ticker' => 'setTicker',
		'member_count' => 'setMemberCount',
		'ceo_id' => 'setCeoId',
		'alliance_id' => 'setAllianceId',
		'description' => 'setDescription',
		'tax_rate' => 'setTaxRate',
		'date_founded' => 'setDateFounded',
		'creator_id' => 'setCreatorId',
		'url' => 'setUrl',
		'faction_id' => 'setFactionId',
		'home_station_id' => 'setHomeStationId',
		'shares' => 'setShares'
	];

	/**
	 * Array of attributes to getter functions (for serialization of requests)
	 *
	 * @var string[]
	 */
	protected static $getters = [
		'name' => 'getName',
		'ticker' => 'getTicker',
		'member_count' => 'getMemberCount',
		'ceo_id' => 'getCeoId',
		'alliance_id' => 'getAllianceId',
		'description' => 'getDescription',
		'tax_rate' => 'getTaxRate',
		'date_founded' => 'getDateFounded',
		'creator_id' => 'getCreatorId',
		'url' => 'getUrl',
		'faction_id' => 'getFactionId',
		'home_station_id' => 'getHomeStationId',
		'shares' => 'getShares'
	];

	/**
	 * Array of attributes where the key is the local name,
	 * and the value is the original name
	 *
	 * @return array
	 */
	public static function attributeMap() {
		return self::$attributeMap;
	}

	/**
	 * Array of attributes to setter functions (for deserialization of responses)
	 *
	 * @return array
	 */
	public static function setters() {
		return self::$setters;
	}

	/**
	 * Array of attributes to getter functions (for serialization of requests)
	 *
	 * @return array
	 */
	public static function getters() {
		return self::$getters;
	}

	/**
	 * The original name of the model.
	 *
	 * @return string
	 */
	public function getModelName() {
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
	public function __construct(array $data = null) {
		$this->container['name'] = isset($data['name']) ? $data['name'] : null;
		$this->container['ticker'] = isset($data['ticker']) ? $data['ticker'] : null;
		$this->container['member_count'] = isset($data['member_count']) ? $data['member_count'] : null;
		$this->container['ceo_id'] = isset($data['ceo_id']) ? $data['ceo_id'] : null;
		$this->container['alliance_id'] = isset($data['alliance_id']) ? $data['alliance_id'] : null;
		$this->container['description'] = isset($data['description']) ? $data['description'] : null;
		$this->container['tax_rate'] = isset($data['tax_rate']) ? $data['tax_rate'] : null;
		$this->container['date_founded'] = isset($data['date_founded']) ? $data['date_founded'] : null;
		$this->container['creator_id'] = isset($data['creator_id']) ? $data['creator_id'] : null;
		$this->container['url'] = isset($data['url']) ? $data['url'] : null;
		$this->container['faction_id'] = isset($data['faction_id']) ? $data['faction_id'] : null;
		$this->container['home_station_id'] = isset($data['home_station_id']) ? $data['home_station_id'] : null;
		$this->container['shares'] = isset($data['shares']) ? $data['shares'] : null;
	}

	/**
	 * Show all the invalid properties with reasons.
	 *
	 * @return array invalid properties with reasons
	 */
	public function listInvalidProperties() {
		$invalidProperties = [];

		if($this->container['name'] === null) {
			$invalidProperties[] = "'name' can't be null";
		}
		if($this->container['ticker'] === null) {
			$invalidProperties[] = "'ticker' can't be null";
		}
		if($this->container['member_count'] === null) {
			$invalidProperties[] = "'member_count' can't be null";
		}
		if($this->container['ceo_id'] === null) {
			$invalidProperties[] = "'ceo_id' can't be null";
		}
		if($this->container['tax_rate'] === null) {
			$invalidProperties[] = "'tax_rate' can't be null";
		}
		if(($this->container['tax_rate'] > 1)) {
			$invalidProperties[] = "invalid value for 'tax_rate', must be smaller than or equal to 1.";
		}

		if(($this->container['tax_rate'] < 0)) {
			$invalidProperties[] = "invalid value for 'tax_rate', must be bigger than or equal to 0.";
		}

		if($this->container['creator_id'] === null) {
			$invalidProperties[] = "'creator_id' can't be null";
		}
		return $invalidProperties;
	}

	/**
	 * Validate all the properties in the model
	 * return true if all passed
	 *
	 * @return bool True if all properties are valid
	 */
	public function valid() {

		if($this->container['name'] === null) {
			return false;
		}
		if($this->container['ticker'] === null) {
			return false;
		}
		if($this->container['member_count'] === null) {
			return false;
		}
		if($this->container['ceo_id'] === null) {
			return false;
		}
		if($this->container['tax_rate'] === null) {
			return false;
		}
		if($this->container['tax_rate'] > 1) {
			return false;
		}
		if($this->container['tax_rate'] < 0) {
			return false;
		}
		if($this->container['creator_id'] === null) {
			return false;
		}
		return true;
	}

	/**
	 * Gets name
	 *
	 * @return string
	 */
	public function getName() {
		return $this->container['name'];
	}

	/**
	 * Sets name
	 *
	 * @param string $name the full name of the corporation
	 *
	 * @return $this
	 */
	public function setName($name) {
		$this->container['name'] = $name;

		return $this;
	}

	/**
	 * Gets ticker
	 *
	 * @return string
	 */
	public function getTicker() {
		return $this->container['ticker'];
	}

	/**
	 * Sets ticker
	 *
	 * @param string $ticker the short name of the corporation
	 *
	 * @return $this
	 */
	public function setTicker($ticker) {
		$this->container['ticker'] = $ticker;

		return $this;
	}

	/**
	 * Gets member_count
	 *
	 * @return int
	 */
	public function getMemberCount() {
		return $this->container['member_count'];
	}

	/**
	 * Sets member_count
	 *
	 * @param int $member_count member_count integer
	 *
	 * @return $this
	 */
	public function setMemberCount($member_count) {
		$this->container['member_count'] = $member_count;

		return $this;
	}

	/**
	 * Gets ceo_id
	 *
	 * @return int
	 */
	public function getCeoId() {
		return $this->container['ceo_id'];
	}

	/**
	 * Sets ceo_id
	 *
	 * @param int $ceo_id ceo_id integer
	 *
	 * @return $this
	 */
	public function setCeoId($ceo_id) {
		$this->container['ceo_id'] = $ceo_id;

		return $this;
	}

	/**
	 * Gets alliance_id
	 *
	 * @return int
	 */
	public function getAllianceId() {
		return $this->container['alliance_id'];
	}

	/**
	 * Sets alliance_id
	 *
	 * @param int $alliance_id ID of the alliance that corporation is a member of, if any
	 *
	 * @return $this
	 */
	public function setAllianceId($alliance_id) {
		$this->container['alliance_id'] = $alliance_id;

		return $this;
	}

	/**
	 * Gets description
	 *
	 * @return string
	 */
	public function getDescription() {
		return $this->container['description'];
	}

	/**
	 * Sets description
	 *
	 * @param string $description description string
	 *
	 * @return $this
	 */
	public function setDescription($description) {
		$this->container['description'] = $description;

		return $this;
	}

	/**
	 * Gets tax_rate
	 *
	 * @return float
	 */
	public function getTaxRate() {
		return $this->container['tax_rate'];
	}

	/**
	 * Sets tax_rate
	 *
	 * @param float $tax_rate tax_rate number
	 *
	 * @return $this
	 */
	public function setTaxRate($tax_rate) {

		if(($tax_rate > 1)) {
			throw new \InvalidArgumentException('invalid value for $tax_rate when calling GetCorporationsCorporationIdOk., must be smaller than or equal to 1.');
		}
		if(($tax_rate < 0)) {
			throw new \InvalidArgumentException('invalid value for $tax_rate when calling GetCorporationsCorporationIdOk., must be bigger than or equal to 0.');
		}

		$this->container['tax_rate'] = $tax_rate;

		return $this;
	}

	/**
	 * Gets date_founded
	 *
	 * @return \DateTime
	 */
	public function getDateFounded() {
		return $this->container['date_founded'];
	}

	/**
	 * Sets date_founded
	 *
	 * @param \DateTime $date_founded date_founded string
	 *
	 * @return $this
	 */
	public function setDateFounded($date_founded) {
		$this->container['date_founded'] = $date_founded;

		return $this;
	}

	/**
	 * Gets creator_id
	 *
	 * @return int
	 */
	public function getCreatorId() {
		return $this->container['creator_id'];
	}

	/**
	 * Sets creator_id
	 *
	 * @param int $creator_id creator_id integer
	 *
	 * @return $this
	 */
	public function setCreatorId($creator_id) {
		$this->container['creator_id'] = $creator_id;

		return $this;
	}

	/**
	 * Gets url
	 *
	 * @return string
	 */
	public function getUrl() {
		return $this->container['url'];
	}

	/**
	 * Sets url
	 *
	 * @param string $url url string
	 *
	 * @return $this
	 */
	public function setUrl($url) {
		$this->container['url'] = $url;

		return $this;
	}

	/**
	 * Gets faction_id
	 *
	 * @return int
	 */
	public function getFactionId() {
		return $this->container['faction_id'];
	}

	/**
	 * Sets faction_id
	 *
	 * @param int $faction_id faction_id integer
	 *
	 * @return $this
	 */
	public function setFactionId($faction_id) {
		$this->container['faction_id'] = $faction_id;

		return $this;
	}

	/**
	 * Gets home_station_id
	 *
	 * @return int
	 */
	public function getHomeStationId() {
		return $this->container['home_station_id'];
	}

	/**
	 * Sets home_station_id
	 *
	 * @param int $home_station_id home_station_id integer
	 *
	 * @return $this
	 */
	public function setHomeStationId($home_station_id) {
		$this->container['home_station_id'] = $home_station_id;

		return $this;
	}

	/**
	 * Gets shares
	 *
	 * @return int
	 */
	public function getShares() {
		return $this->container['shares'];
	}

	/**
	 * Sets shares
	 *
	 * @param int $shares shares integer
	 *
	 * @return $this
	 */
	public function setShares($shares) {
		$this->container['shares'] = $shares;

		return $this;
	}

	/**
	 * Returns true if offset exists. False otherwise.
	 *
	 * @param integer $offset Offset
	 *
	 * @return boolean
	 */
	public function offsetExists($offset) {
		return isset($this->container[$offset]);
	}

	/**
	 * Gets offset.
	 *
	 * @param integer $offset Offset
	 *
	 * @return mixed
	 */
	public function offsetGet($offset) {
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
	public function offsetSet($offset, $value) {
		if(is_null($offset)) {
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
	public function offsetUnset($offset) {
		unset($this->container[$offset]);
	}

	/**
	 * Gets the string presentation of the object
	 *
	 * @return string
	 */
	public function __toString() {
		if(defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
			return json_encode(
				ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT
			);
		}

		return json_encode(ObjectSerializer::sanitizeForSerialization($this));
	}

}
