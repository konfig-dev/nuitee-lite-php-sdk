<?php
/**
 * GetHotelResponseDataInner
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
 * GetHotelResponseDataInner Class Doc Comment
 *
 * @category Class
 * @package  Nuitee
 * @implements \ArrayAccess<string, mixed>
 */
class GetHotelResponseDataInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetHotelResponse_data_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'float',
        'name' => 'string',
        'hotel_description' => 'string',
        'hotel_important_information' => 'string',
        'spoken_languages' => 'string[]',
        'default_language' => 'string',
        'checkin_checkout_times' => '\Nuitee\Model\GetHotelResponseDataInnerCheckinCheckoutTimes',
        'number_of_rooms' => 'float',
        'hotel_photos' => '\Nuitee\Model\GetHotelResponseDataInnerHotelPhotosInner[]',
        'currency' => 'string',
        'country' => 'string',
        'city' => 'string',
        'class' => 'float',
        'location' => '\Nuitee\Model\GetHotelResponseDataInnerLocation',
        'address' => 'string',
        'zip' => 'string',
        'creditcard_required' => 'bool',
        'additional_policies' => '\Nuitee\Model\GetHotelResponseDataInnerAdditionalPolicies',
        'hotel_facilities' => '\Nuitee\Model\GetHotelResponseDataInnerHotelFacilitiesInner[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'hotel_description' => null,
        'hotel_important_information' => null,
        'spoken_languages' => null,
        'default_language' => null,
        'checkin_checkout_times' => null,
        'number_of_rooms' => null,
        'hotel_photos' => null,
        'currency' => null,
        'country' => null,
        'city' => null,
        'class' => null,
        'location' => null,
        'address' => null,
        'zip' => null,
        'creditcard_required' => null,
        'additional_policies' => null,
        'hotel_facilities' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'name' => false,
		'hotel_description' => false,
		'hotel_important_information' => false,
		'spoken_languages' => false,
		'default_language' => false,
		'checkin_checkout_times' => false,
		'number_of_rooms' => false,
		'hotel_photos' => false,
		'currency' => false,
		'country' => false,
		'city' => false,
		'class' => false,
		'location' => false,
		'address' => false,
		'zip' => false,
		'creditcard_required' => false,
		'additional_policies' => false,
		'hotel_facilities' => false
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
        'id' => 'id',
        'name' => 'name',
        'hotel_description' => 'hotel_description',
        'hotel_important_information' => 'hotel_important_information',
        'spoken_languages' => 'spoken_languages',
        'default_language' => 'default_language',
        'checkin_checkout_times' => 'checkin_checkout_times',
        'number_of_rooms' => 'number_of_rooms',
        'hotel_photos' => 'hotel_photos',
        'currency' => 'currency',
        'country' => 'country',
        'city' => 'city',
        'class' => 'class',
        'location' => 'location',
        'address' => 'address',
        'zip' => 'zip',
        'creditcard_required' => 'creditcard_required',
        'additional_policies' => 'additional_policies',
        'hotel_facilities' => 'hotel_facilities'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'hotel_description' => 'setHotelDescription',
        'hotel_important_information' => 'setHotelImportantInformation',
        'spoken_languages' => 'setSpokenLanguages',
        'default_language' => 'setDefaultLanguage',
        'checkin_checkout_times' => 'setCheckinCheckoutTimes',
        'number_of_rooms' => 'setNumberOfRooms',
        'hotel_photos' => 'setHotelPhotos',
        'currency' => 'setCurrency',
        'country' => 'setCountry',
        'city' => 'setCity',
        'class' => 'setClass',
        'location' => 'setLocation',
        'address' => 'setAddress',
        'zip' => 'setZip',
        'creditcard_required' => 'setCreditcardRequired',
        'additional_policies' => 'setAdditionalPolicies',
        'hotel_facilities' => 'setHotelFacilities'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'hotel_description' => 'getHotelDescription',
        'hotel_important_information' => 'getHotelImportantInformation',
        'spoken_languages' => 'getSpokenLanguages',
        'default_language' => 'getDefaultLanguage',
        'checkin_checkout_times' => 'getCheckinCheckoutTimes',
        'number_of_rooms' => 'getNumberOfRooms',
        'hotel_photos' => 'getHotelPhotos',
        'currency' => 'getCurrency',
        'country' => 'getCountry',
        'city' => 'getCity',
        'class' => 'getClass',
        'location' => 'getLocation',
        'address' => 'getAddress',
        'zip' => 'getZip',
        'creditcard_required' => 'getCreditcardRequired',
        'additional_policies' => 'getAdditionalPolicies',
        'hotel_facilities' => 'getHotelFacilities'
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('hotel_description', $data ?? [], null);
        $this->setIfExists('hotel_important_information', $data ?? [], null);
        $this->setIfExists('spoken_languages', $data ?? [], null);
        $this->setIfExists('default_language', $data ?? [], null);
        $this->setIfExists('checkin_checkout_times', $data ?? [], null);
        $this->setIfExists('number_of_rooms', $data ?? [], null);
        $this->setIfExists('hotel_photos', $data ?? [], null);
        $this->setIfExists('currency', $data ?? [], null);
        $this->setIfExists('country', $data ?? [], null);
        $this->setIfExists('city', $data ?? [], null);
        $this->setIfExists('class', $data ?? [], null);
        $this->setIfExists('location', $data ?? [], null);
        $this->setIfExists('address', $data ?? [], null);
        $this->setIfExists('zip', $data ?? [], null);
        $this->setIfExists('creditcard_required', $data ?? [], null);
        $this->setIfExists('additional_policies', $data ?? [], null);
        $this->setIfExists('hotel_facilities', $data ?? [], null);
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
     * Gets id
     *
     * @return float|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param float|null $id id
     *
     * @return self
     */
    public function setId($id)
    {

        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return self
     */
    public function setName($name)
    {

        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets hotel_description
     *
     * @return string|null
     */
    public function getHotelDescription()
    {
        return $this->container['hotel_description'];
    }

    /**
     * Sets hotel_description
     *
     * @param string|null $hotel_description hotel_description
     *
     * @return self
     */
    public function setHotelDescription($hotel_description)
    {

        if (is_null($hotel_description)) {
            throw new \InvalidArgumentException('non-nullable hotel_description cannot be null');
        }

        $this->container['hotel_description'] = $hotel_description;

        return $this;
    }

    /**
     * Gets hotel_important_information
     *
     * @return string|null
     */
    public function getHotelImportantInformation()
    {
        return $this->container['hotel_important_information'];
    }

    /**
     * Sets hotel_important_information
     *
     * @param string|null $hotel_important_information hotel_important_information
     *
     * @return self
     */
    public function setHotelImportantInformation($hotel_important_information)
    {

        if (is_null($hotel_important_information)) {
            throw new \InvalidArgumentException('non-nullable hotel_important_information cannot be null');
        }

        $this->container['hotel_important_information'] = $hotel_important_information;

        return $this;
    }

    /**
     * Gets spoken_languages
     *
     * @return string[]|null
     */
    public function getSpokenLanguages()
    {
        return $this->container['spoken_languages'];
    }

    /**
     * Sets spoken_languages
     *
     * @param string[]|null $spoken_languages spoken_languages
     *
     * @return self
     */
    public function setSpokenLanguages($spoken_languages)
    {

        if (is_null($spoken_languages)) {
            throw new \InvalidArgumentException('non-nullable spoken_languages cannot be null');
        }

        $this->container['spoken_languages'] = $spoken_languages;

        return $this;
    }

    /**
     * Gets default_language
     *
     * @return string|null
     */
    public function getDefaultLanguage()
    {
        return $this->container['default_language'];
    }

    /**
     * Sets default_language
     *
     * @param string|null $default_language default_language
     *
     * @return self
     */
    public function setDefaultLanguage($default_language)
    {

        if (is_null($default_language)) {
            throw new \InvalidArgumentException('non-nullable default_language cannot be null');
        }

        $this->container['default_language'] = $default_language;

        return $this;
    }

    /**
     * Gets checkin_checkout_times
     *
     * @return \Nuitee\Model\GetHotelResponseDataInnerCheckinCheckoutTimes|null
     */
    public function getCheckinCheckoutTimes()
    {
        return $this->container['checkin_checkout_times'];
    }

    /**
     * Sets checkin_checkout_times
     *
     * @param \Nuitee\Model\GetHotelResponseDataInnerCheckinCheckoutTimes|null $checkin_checkout_times checkin_checkout_times
     *
     * @return self
     */
    public function setCheckinCheckoutTimes($checkin_checkout_times)
    {

        if (is_null($checkin_checkout_times)) {
            throw new \InvalidArgumentException('non-nullable checkin_checkout_times cannot be null');
        }

        $this->container['checkin_checkout_times'] = $checkin_checkout_times;

        return $this;
    }

    /**
     * Gets number_of_rooms
     *
     * @return float|null
     */
    public function getNumberOfRooms()
    {
        return $this->container['number_of_rooms'];
    }

    /**
     * Sets number_of_rooms
     *
     * @param float|null $number_of_rooms number_of_rooms
     *
     * @return self
     */
    public function setNumberOfRooms($number_of_rooms)
    {

        if (is_null($number_of_rooms)) {
            throw new \InvalidArgumentException('non-nullable number_of_rooms cannot be null');
        }

        $this->container['number_of_rooms'] = $number_of_rooms;

        return $this;
    }

    /**
     * Gets hotel_photos
     *
     * @return \Nuitee\Model\GetHotelResponseDataInnerHotelPhotosInner[]|null
     */
    public function getHotelPhotos()
    {
        return $this->container['hotel_photos'];
    }

    /**
     * Sets hotel_photos
     *
     * @param \Nuitee\Model\GetHotelResponseDataInnerHotelPhotosInner[]|null $hotel_photos hotel_photos
     *
     * @return self
     */
    public function setHotelPhotos($hotel_photos)
    {

        if (is_null($hotel_photos)) {
            throw new \InvalidArgumentException('non-nullable hotel_photos cannot be null');
        }

        $this->container['hotel_photos'] = $hotel_photos;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string|null $currency currency
     *
     * @return self
     */
    public function setCurrency($currency)
    {

        if (is_null($currency)) {
            throw new \InvalidArgumentException('non-nullable currency cannot be null');
        }

        $this->container['currency'] = $currency;

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
     * Gets class
     *
     * @return float|null
     */
    public function getClass()
    {
        return $this->container['class'];
    }

    /**
     * Sets class
     *
     * @param float|null $class class
     *
     * @return self
     */
    public function setClass($class)
    {

        if (is_null($class)) {
            throw new \InvalidArgumentException('non-nullable class cannot be null');
        }

        $this->container['class'] = $class;

        return $this;
    }

    /**
     * Gets location
     *
     * @return \Nuitee\Model\GetHotelResponseDataInnerLocation|null
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param \Nuitee\Model\GetHotelResponseDataInnerLocation|null $location location
     *
     * @return self
     */
    public function setLocation($location)
    {

        if (is_null($location)) {
            throw new \InvalidArgumentException('non-nullable location cannot be null');
        }

        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets address
     *
     * @return string|null
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param string|null $address address
     *
     * @return self
     */
    public function setAddress($address)
    {

        if (is_null($address)) {
            throw new \InvalidArgumentException('non-nullable address cannot be null');
        }

        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets zip
     *
     * @return string|null
     */
    public function getZip()
    {
        return $this->container['zip'];
    }

    /**
     * Sets zip
     *
     * @param string|null $zip zip
     *
     * @return self
     */
    public function setZip($zip)
    {

        if (is_null($zip)) {
            throw new \InvalidArgumentException('non-nullable zip cannot be null');
        }

        $this->container['zip'] = $zip;

        return $this;
    }

    /**
     * Gets creditcard_required
     *
     * @return bool|null
     */
    public function getCreditcardRequired()
    {
        return $this->container['creditcard_required'];
    }

    /**
     * Sets creditcard_required
     *
     * @param bool|null $creditcard_required creditcard_required
     *
     * @return self
     */
    public function setCreditcardRequired($creditcard_required)
    {

        if (is_null($creditcard_required)) {
            throw new \InvalidArgumentException('non-nullable creditcard_required cannot be null');
        }

        $this->container['creditcard_required'] = $creditcard_required;

        return $this;
    }

    /**
     * Gets additional_policies
     *
     * @return \Nuitee\Model\GetHotelResponseDataInnerAdditionalPolicies|null
     */
    public function getAdditionalPolicies()
    {
        return $this->container['additional_policies'];
    }

    /**
     * Sets additional_policies
     *
     * @param \Nuitee\Model\GetHotelResponseDataInnerAdditionalPolicies|null $additional_policies additional_policies
     *
     * @return self
     */
    public function setAdditionalPolicies($additional_policies)
    {

        if (is_null($additional_policies)) {
            throw new \InvalidArgumentException('non-nullable additional_policies cannot be null');
        }

        $this->container['additional_policies'] = $additional_policies;

        return $this;
    }

    /**
     * Gets hotel_facilities
     *
     * @return \Nuitee\Model\GetHotelResponseDataInnerHotelFacilitiesInner[]|null
     */
    public function getHotelFacilities()
    {
        return $this->container['hotel_facilities'];
    }

    /**
     * Sets hotel_facilities
     *
     * @param \Nuitee\Model\GetHotelResponseDataInnerHotelFacilitiesInner[]|null $hotel_facilities hotel_facilities
     *
     * @return self
     */
    public function setHotelFacilities($hotel_facilities)
    {

        if (is_null($hotel_facilities)) {
            throw new \InvalidArgumentException('non-nullable hotel_facilities cannot be null');
        }

        $this->container['hotel_facilities'] = $hotel_facilities;

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

