<?php
/**
 * Book401ResponseDataHotelAddress
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
 * Book401ResponseDataHotelAddress Class Doc Comment
 *
 * @category Class
 * @package  Nuitee
 * @implements \ArrayAccess<string, mixed>
 */
class Book401ResponseDataHotelAddress implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Book401Response_data_hotel_address';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'city' => 'string',
        'country' => 'string',
        'country_name' => 'string',
        'line1' => 'string',
        'line2' => 'string',
        'postal_code' => 'string',
        'region' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'city' => null,
        'country' => null,
        'country_name' => null,
        'line1' => null,
        'line2' => null,
        'postal_code' => null,
        'region' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'city' => false,
		'country' => false,
		'country_name' => false,
		'line1' => false,
		'line2' => false,
		'postal_code' => false,
		'region' => false
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
        'city' => 'city',
        'country' => 'country',
        'country_name' => 'countryName',
        'line1' => 'line1',
        'line2' => 'line2',
        'postal_code' => 'postalCode',
        'region' => 'region'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'city' => 'setCity',
        'country' => 'setCountry',
        'country_name' => 'setCountryName',
        'line1' => 'setLine1',
        'line2' => 'setLine2',
        'postal_code' => 'setPostalCode',
        'region' => 'setRegion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'city' => 'getCity',
        'country' => 'getCountry',
        'country_name' => 'getCountryName',
        'line1' => 'getLine1',
        'line2' => 'getLine2',
        'postal_code' => 'getPostalCode',
        'region' => 'getRegion'
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
        $this->setIfExists('city', $data ?? [], null);
        $this->setIfExists('country', $data ?? [], null);
        $this->setIfExists('country_name', $data ?? [], null);
        $this->setIfExists('line1', $data ?? [], null);
        $this->setIfExists('line2', $data ?? [], null);
        $this->setIfExists('postal_code', $data ?? [], null);
        $this->setIfExists('region', $data ?? [], null);
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
     * Gets city
     *
     * @return string|null
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string|null $city city
     *
     * @return self
     */
    public function setCity($city)
    {

        if (is_null($city)) {
            throw new \InvalidArgumentException('non-nullable city cannot be null');
        }

        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string|null
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string|null $country country
     *
     * @return self
     */
    public function setCountry($country)
    {

        if (is_null($country)) {
            throw new \InvalidArgumentException('non-nullable country cannot be null');
        }

        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets country_name
     *
     * @return string|null
     */
    public function getCountryName()
    {
        return $this->container['country_name'];
    }

    /**
     * Sets country_name
     *
     * @param string|null $country_name country_name
     *
     * @return self
     */
    public function setCountryName($country_name)
    {

        if (is_null($country_name)) {
            throw new \InvalidArgumentException('non-nullable country_name cannot be null');
        }

        $this->container['country_name'] = $country_name;

        return $this;
    }

    /**
     * Gets line1
     *
     * @return string|null
     */
    public function getLine1()
    {
        return $this->container['line1'];
    }

    /**
     * Sets line1
     *
     * @param string|null $line1 line1
     *
     * @return self
     */
    public function setLine1($line1)
    {

        if (is_null($line1)) {
            throw new \InvalidArgumentException('non-nullable line1 cannot be null');
        }

        $this->container['line1'] = $line1;

        return $this;
    }

    /**
     * Gets line2
     *
     * @return string|null
     */
    public function getLine2()
    {
        return $this->container['line2'];
    }

    /**
     * Sets line2
     *
     * @param string|null $line2 line2
     *
     * @return self
     */
    public function setLine2($line2)
    {

        if (is_null($line2)) {
            throw new \InvalidArgumentException('non-nullable line2 cannot be null');
        }

        $this->container['line2'] = $line2;

        return $this;
    }

    /**
     * Gets postal_code
     *
     * @return string|null
     */
    public function getPostalCode()
    {
        return $this->container['postal_code'];
    }

    /**
     * Sets postal_code
     *
     * @param string|null $postal_code postal_code
     *
     * @return self
     */
    public function setPostalCode($postal_code)
    {

        if (is_null($postal_code)) {
            throw new \InvalidArgumentException('non-nullable postal_code cannot be null');
        }

        $this->container['postal_code'] = $postal_code;

        return $this;
    }

    /**
     * Gets region
     *
     * @return string|null
     */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
     * Sets region
     *
     * @param string|null $region region
     *
     * @return self
     */
    public function setRegion($region)
    {

        if (is_null($region)) {
            throw new \InvalidArgumentException('non-nullable region cannot be null');
        }

        $this->container['region'] = $region;

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


