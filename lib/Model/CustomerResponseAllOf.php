<?php

/**
 * CustomerResponseAllOf
 *
 * Skip Pay API for partners
 *
 * API documentation for Skip Pay partners.
 *
 * The version of the OpenAPI document: 1.0
 * Contact: info@skippay.cz
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.6.0

 *
 * @category Class
 * @package  SkipPay
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 *
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SkipPay\Model;

use ArrayAccess;
use SkipPay\ObjectSerializer;

/**
 * CustomerResponseAllOf Class Doc Comment
 *
 * @category Class
 * @package  SkipPay
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<?string, ?mixed>
 */
class CustomerResponseAllOf implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CustomerResponse_allOf';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|class-string>
      */
    protected static $openAPITypes = [
        'firstName' => 'string',
        'lastName' => 'string',
        'fullName' => 'string',
        'phone' => 'string',
        'precheckResultResponseSerializer' => '\SkipPay\Model\PrecheckResultResponseSerializer',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'firstName' => null,
        'lastName' => null,
        'fullName' => null,
        'phone' => null,
        'precheckResultResponseSerializer' => null,
    ];

    /**
      * Array of additional properties.
      *
      * @var array<array-key, array-key>
      */
    protected $additionalProperties = [];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'firstName' => 'firstName',
        'lastName' => 'lastName',
        'fullName' => 'fullName',
        'phone' => 'phone',
        'precheckResultResponseSerializer' => 'PrecheckResultResponseSerializer',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'firstName' => 'setFirstName',
        'lastName' => 'setLastName',
        'fullName' => 'setFullName',
        'phone' => 'setPhone',
        'precheckResultResponseSerializer' => 'setPrecheckResultResponseSerializer',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'firstName' => 'getFirstName',
        'lastName' => 'getLastName',
        'fullName' => 'getFullName',
        'phone' => 'getPhone',
        'precheckResultResponseSerializer' => 'getPrecheckResultResponseSerializer',
    ];

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
        $this->container['firstName'] = $data['firstName'] ?? null;
        $this->container['lastName'] = $data['lastName'] ?? null;
        $this->container['fullName'] = $data['fullName'] ?? null;
        $this->container['phone'] = $data['phone'] ?? null;
        $this->container['precheckResultResponseSerializer'] = $data['precheckResultResponseSerializer'] ?? null;
    }

    /**
     * {@inheritDoc}
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * {@inheritDoc}
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * {@inheritdoc}
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * {@inheritdoc}
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * {@inheritdoc}
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * {@inheritdoc}
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    /**
     * {@inheritdoc}
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['firstName'] === null) {
            $invalidProperties['firstName'] = "'firstName' can't be null";
        }
        if ((mb_strlen($this->container['firstName']) > 60)) {
            $invalidProperties[] = "invalid value for 'firstName', the character length must be smaller than or equal to 60.";
        }

        if ($this->container['lastName'] === null) {
            $invalidProperties['lastName'] = "'lastName' can't be null";
        }
        if ((mb_strlen($this->container['lastName']) > 60)) {
            $invalidProperties[] = "invalid value for 'lastName', the character length must be smaller than or equal to 60.";
        }

        if ($this->container['fullName'] === null) {
            $invalidProperties['fullName'] = "'fullName' can't be null";
        }
        if ((mb_strlen($this->container['fullName']) > 240)) {
            $invalidProperties[] = "invalid value for 'fullName', the character length must be smaller than or equal to 240.";
        }

        if ($this->container['phone'] === null) {
            $invalidProperties['phone'] = "'phone' can't be null";
        }
        if ((mb_strlen($this->container['phone']) > 13)) {
            $invalidProperties[] = "invalid value for 'phone', the character length must be smaller than or equal to 13.";
        }

        return $invalidProperties;
    }

    /**
     * {@inheritdoc}
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }

    /**
     * Gets firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['firstName'];
    }

    /**
     * Sets firstName
     *
     * @param string $firstName Customer first (given) name. Must be paired with `lastName`. Required if `fullName` is empty.
     *
     * @return self
     */
    public function setFirstName($firstName)
    {
        if ((mb_strlen($firstName) > 60)) {
            throw new \InvalidArgumentException('invalid length for $firstName when calling CustomerResponseAllOf., must be smaller than or equal to 60.');
        }

        $this->container['firstName'] = $firstName;

        return $this;
    }

    /**
     * Gets lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->container['lastName'];
    }

    /**
     * Sets lastName
     *
     * @param string $lastName Customer last (family) name. Must be paired with `firstName`. Required if `fullName` is empty.
     *
     * @return self
     */
    public function setLastName($lastName)
    {
        if ((mb_strlen($lastName) > 60)) {
            throw new \InvalidArgumentException('invalid length for $lastName when calling CustomerResponseAllOf., must be smaller than or equal to 60.');
        }

        $this->container['lastName'] = $lastName;

        return $this;
    }

    /**
     * Gets fullName
     *
     * @return string
     */
    public function getFullName()
    {
        return $this->container['fullName'];
    }

    /**
     * Sets fullName
     *
     * @param string $fullName Customer full name, including academical degrees and salutation. Required only if `firstName` or `lastName` are empty.
     *
     * @return self
     */
    public function setFullName($fullName)
    {
        if ((mb_strlen($fullName) > 240)) {
            throw new \InvalidArgumentException('invalid length for $fullName when calling CustomerResponseAllOf., must be smaller than or equal to 240.');
        }

        $this->container['fullName'] = $fullName;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string $phone Phone number with country code (including leading `+`).
     *
     * @return self
     */
    public function setPhone($phone)
    {
        if ((mb_strlen($phone) > 13)) {
            throw new \InvalidArgumentException('invalid length for $phone when calling CustomerResponseAllOf., must be smaller than or equal to 13.');
        }

        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets precheckResultResponseSerializer
     *
     * @return \SkipPay\Model\PrecheckResultResponseSerializer|null
     */
    public function getPrecheckResultResponseSerializer()
    {
        return $this->container['precheckResultResponseSerializer'];
    }

    /**
     * Sets precheckResultResponseSerializer
     *
     * @param \SkipPay\Model\PrecheckResultResponseSerializer|null $precheckResultResponseSerializer precheckResultResponseSerializer
     *
     * @return self
     */
    public function setPrecheckResultResponseSerializer($precheckResultResponseSerializer)
    {
        $this->container['precheckResultResponseSerializer'] = $precheckResultResponseSerializer;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setAdditionalProperties(array $fields)
    {
        $fields = array_diff_key($fields, static::$attributeMap);
        foreach ($this->additionalProperties as $additional_properties) {
            unset($this->container[$additional_properties]);
        }
        $this->container += $fields;
        $keys = array_keys($fields);
        $this->additionalProperties = array_combine($keys, $keys);
    }

    /**
     * {@inheritdoc}
     */
    public function setAdditionalProperty($property, $value)
    {
        if (isset(static::$attributeMap[$property])) {
            throw new \InvalidArgumentException();
        }
        $this->additionalProperties[$property] = $property;
        $this->container[$property] = $value;
    }

    /**
     * {@inheritdoc}
     */
    public function getAdditionalProperties()
    {
        $container = $this->container;
        return array_map(function ($key) use ($container) {
            return $container[$key];
        }, $this->additionalProperties);
    }

    /**
     * {@inheritdoc}
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * {@inheritdoc}
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * {@inheritdoc}
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            throw new \RuntimeException('Appending to a model does not make sense. Provide an explicit property instead.');
        } else {
            if (!isset($this->attributeMap[$offset])) {
                $this->additionalProperties[$offset] = $offset;
            }
            $this->container[$offset] = $value;
        }
    }

    /**
     * {@inheritdoc}
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        /** @psalm-suppress PossiblyNullArrayOffset */
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
     * @throws \JsonException
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT | JSON_THROW_ON_ERROR
        );
    }
}
