<?php
/**
 * PrebookResponseDataRoomTypesInnerRatesInnerCancellationPolicies
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
 * PrebookResponseDataRoomTypesInnerRatesInnerCancellationPolicies Class Doc Comment
 *
 * @category Class
 * @package  Nuitee
 * @implements \ArrayAccess<string, mixed>
 */
class PrebookResponseDataRoomTypesInnerRatesInnerCancellationPolicies implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PrebookResponse_data_roomTypes_inner_rates_inner_cancellationPolicies';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'cancel_policy_infos' => '\Nuitee\Model\PrebookResponseDataRoomTypesInnerRatesInnerCancellationPoliciesCancelPolicyInfosInner[]',
        'hotel_remarks' => 'string[]',
        'refundable_tag' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'cancel_policy_infos' => null,
        'hotel_remarks' => null,
        'refundable_tag' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'cancel_policy_infos' => false,
		'hotel_remarks' => false,
		'refundable_tag' => false
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
        'cancel_policy_infos' => 'cancelPolicyInfos',
        'hotel_remarks' => 'hotelRemarks',
        'refundable_tag' => 'refundableTag'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cancel_policy_infos' => 'setCancelPolicyInfos',
        'hotel_remarks' => 'setHotelRemarks',
        'refundable_tag' => 'setRefundableTag'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cancel_policy_infos' => 'getCancelPolicyInfos',
        'hotel_remarks' => 'getHotelRemarks',
        'refundable_tag' => 'getRefundableTag'
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
        $this->setIfExists('cancel_policy_infos', $data ?? [], null);
        $this->setIfExists('hotel_remarks', $data ?? [], null);
        $this->setIfExists('refundable_tag', $data ?? [], null);
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
     * Gets cancel_policy_infos
     *
     * @return \Nuitee\Model\PrebookResponseDataRoomTypesInnerRatesInnerCancellationPoliciesCancelPolicyInfosInner[]|null
     */
    public function getCancelPolicyInfos()
    {
        return $this->container['cancel_policy_infos'];
    }

    /**
     * Sets cancel_policy_infos
     *
     * @param \Nuitee\Model\PrebookResponseDataRoomTypesInnerRatesInnerCancellationPoliciesCancelPolicyInfosInner[]|null $cancel_policy_infos cancel_policy_infos
     *
     * @return self
     */
    public function setCancelPolicyInfos($cancel_policy_infos)
    {

        if (is_null($cancel_policy_infos)) {
            throw new \InvalidArgumentException('non-nullable cancel_policy_infos cannot be null');
        }

        $this->container['cancel_policy_infos'] = $cancel_policy_infos;

        return $this;
    }

    /**
     * Gets hotel_remarks
     *
     * @return string[]|null
     */
    public function getHotelRemarks()
    {
        return $this->container['hotel_remarks'];
    }

    /**
     * Sets hotel_remarks
     *
     * @param string[]|null $hotel_remarks hotel_remarks
     *
     * @return self
     */
    public function setHotelRemarks($hotel_remarks)
    {

        if (is_null($hotel_remarks)) {
            throw new \InvalidArgumentException('non-nullable hotel_remarks cannot be null');
        }

        $this->container['hotel_remarks'] = $hotel_remarks;

        return $this;
    }

    /**
     * Gets refundable_tag
     *
     * @return string|null
     */
    public function getRefundableTag()
    {
        return $this->container['refundable_tag'];
    }

    /**
     * Sets refundable_tag
     *
     * @param string|null $refundable_tag refundable_tag
     *
     * @return self
     */
    public function setRefundableTag($refundable_tag)
    {

        if (is_null($refundable_tag)) {
            throw new \InvalidArgumentException('non-nullable refundable_tag cannot be null');
        }

        $this->container['refundable_tag'] = $refundable_tag;

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


