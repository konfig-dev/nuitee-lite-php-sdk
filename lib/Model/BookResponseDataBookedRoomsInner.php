<?php
/**
 * BookResponseDataBookedRoomsInner
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Nuitee
 * @author   Konfig
 * @link     https://konfigthis.com
 */

/**
 * Lite API
 *
 * The **Lite API** can be used to to do the following  Get room rates & availability for a set of hotels Select a specific hotel with room availability and make a booking Manage the bookings - retrieve and cancel existing bookings Get static content for hotels, search hotels by destination
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://konfigthis.com
 */


namespace Nuitee\Model;

use \ArrayAccess;
use \Nuitee\ObjectSerializer;

/**
 * BookResponseDataBookedRoomsInner Class Doc Comment
 *
 * @category Class
 * @package  Nuitee
 * @implements \ArrayAccess<string, mixed>
 */
class BookResponseDataBookedRoomsInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BookResponse_data_bookedRooms_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'adults' => 'float',
        'children' => 'float',
        'rate' => '\Nuitee\Model\BookResponseDataBookedRoomsInnerRate',
        'room_type' => '\Nuitee\Model\BookResponseDataBookedRoomsInnerRoomType'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'adults' => null,
        'children' => null,
        'rate' => null,
        'room_type' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'adults' => false,
		'children' => false,
		'rate' => false,
		'room_type' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'adults' => 'adults',
        'children' => 'children',
        'rate' => 'rate',
        'room_type' => 'roomType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'adults' => 'setAdults',
        'children' => 'setChildren',
        'rate' => 'setRate',
        'room_type' => 'setRoomType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'adults' => 'getAdults',
        'children' => 'getChildren',
        'rate' => 'getRate',
        'room_type' => 'getRoomType'
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
        return self::$openAPIModelName;
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
        $this->setIfExists('adults', $data ?? [], null);
        $this->setIfExists('children', $data ?? [], null);
        $this->setIfExists('rate', $data ?? [], null);
        $this->setIfExists('room_type', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
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
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets adults
     *
     * @return float|null
     */
    public function getAdults()
    {
        return $this->container['adults'];
    }

    /**
     * Sets adults
     *
     * @param float|null $adults adults
     *
     * @return self
     */
    public function setAdults($adults)
    {

        if (is_null($adults)) {
            throw new \InvalidArgumentException('non-nullable adults cannot be null');
        }

        $this->container['adults'] = $adults;

        return $this;
    }

    /**
     * Gets children
     *
     * @return float|null
     */
    public function getChildren()
    {
        return $this->container['children'];
    }

    /**
     * Sets children
     *
     * @param float|null $children children
     *
     * @return self
     */
    public function setChildren($children)
    {

        if (is_null($children)) {
            throw new \InvalidArgumentException('non-nullable children cannot be null');
        }

        $this->container['children'] = $children;

        return $this;
    }

    /**
     * Gets rate
     *
     * @return \Nuitee\Model\BookResponseDataBookedRoomsInnerRate|null
     */
    public function getRate()
    {
        return $this->container['rate'];
    }

    /**
     * Sets rate
     *
     * @param \Nuitee\Model\BookResponseDataBookedRoomsInnerRate|null $rate rate
     *
     * @return self
     */
    public function setRate($rate)
    {

        if (is_null($rate)) {
            throw new \InvalidArgumentException('non-nullable rate cannot be null');
        }

        $this->container['rate'] = $rate;

        return $this;
    }

    /**
     * Gets room_type
     *
     * @return \Nuitee\Model\BookResponseDataBookedRoomsInnerRoomType|null
     */
    public function getRoomType()
    {
        return $this->container['room_type'];
    }

    /**
     * Sets room_type
     *
     * @param \Nuitee\Model\BookResponseDataBookedRoomsInnerRoomType|null $room_type room_type
     *
     * @return self
     */
    public function setRoomType($room_type)
    {

        if (is_null($room_type)) {
            throw new \InvalidArgumentException('non-nullable room_type cannot be null');
        }

        $this->container['room_type'] = $room_type;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


