<?php

/**
 * ApplicationBaseResponse
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
 * ApplicationBaseResponse Class Doc Comment
 *
 * @category Class
 * @description Financing application base information
 * @package  SkipPay
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<?string, ?mixed>
 */
class ApplicationBaseResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;
    public const STATE_PROCESSING = 'PROCESSING';
    public const STATE_READY = 'READY';
    public const STATE_REJECTED = 'REJECTED';
    public const STATE_CANCELLED = 'CANCELLED';
    public const STATE_REASON_PROCESSING_REDIRECT_NEEDED = 'PROCESSING_REDIRECT_NEEDED';
    public const STATE_REASON_PROCESSING_PREAPPROVED = 'PROCESSING_PREAPPROVED';
    public const STATE_REASON_PROCESSING_VALIDATION_IN_PROGRESS = 'PROCESSING_VALIDATION_IN_PROGRESS';
    public const STATE_REASON_REJECTED = 'REJECTED';
    public const STATE_REASON_CANCELLED_NOT_PAID = 'CANCELLED_NOT_PAID';
    public const STATE_REASON_READY_TO_SHIP = 'READY_TO_SHIP';
    public const STATE_REASON_READY_SHIPPED = 'READY_SHIPPED';
    public const STATE_REASON_READY_DELIVERED = 'READY_DELIVERED';
    public const STATE_REASON_READY_PAID = 'READY_PAID';
    public const STATE_REASON_CANCELLED_RETURNED = 'CANCELLED_RETURNED';

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ApplicationBaseResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|class-string>
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'state' => 'string',
        'stateReason' => 'string',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'state' => null,
        'stateReason' => null,
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
        'id' => 'id',
        'state' => 'state',
        'stateReason' => 'stateReason',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'state' => 'setState',
        'stateReason' => 'setStateReason',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'state' => 'getState',
        'stateReason' => 'getStateReason',
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['state'] = $data['state'] ?? null;
        $this->container['stateReason'] = $data['stateReason'] ?? null;
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

        if ($this->container['id'] === null) {
            $invalidProperties['id'] = "'id' can't be null";
        }
        if ($this->container['state'] === null) {
            $invalidProperties['state'] = "'state' can't be null";
        }
        $allowedValues = $this->getStateAllowableValues();
        $value = $this->container['state'];
        if (!is_null($value) && !in_array($value, $allowedValues, true)) {
            $invalidProperties['state'] = sprintf(
                "invalid value '%s' for 'state', must be one of '%s'",
                $value,
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['stateReason'] === null) {
            $invalidProperties['stateReason'] = "'stateReason' can't be null";
        }
        $allowedValues = $this->getStateReasonAllowableValues();
        $value = $this->container['stateReason'];
        if (!is_null($value) && !in_array($value, $allowedValues, true)) {
            $invalidProperties['stateReason'] = sprintf(
                "invalid value '%s' for 'stateReason', must be one of '%s'",
                $value,
                implode("', '", $allowedValues)
            );
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
     * Gets allowable values of the enum.
     *
     * @return scalar[]
     */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_PROCESSING,
            self::STATE_READY,
            self::STATE_REJECTED,
            self::STATE_CANCELLED,
        ];
    }
    /**
     * Gets allowable values of the enum.
     *
     * @return scalar[]
     */
    public function getStateReasonAllowableValues()
    {
        return [
            self::STATE_REASON_PROCESSING_REDIRECT_NEEDED,
            self::STATE_REASON_PROCESSING_PREAPPROVED,
            self::STATE_REASON_PROCESSING_VALIDATION_IN_PROGRESS,
            self::STATE_REASON_REJECTED,
            self::STATE_REASON_CANCELLED_NOT_PAID,
            self::STATE_REASON_READY_TO_SHIP,
            self::STATE_REASON_READY_SHIPPED,
            self::STATE_REASON_READY_DELIVERED,
            self::STATE_REASON_READY_PAID,
            self::STATE_REASON_CANCELLED_RETURNED,
        ];
    }

    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id Unique identifier in Skip Pay
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string $state Application state.
     *
     * @return self
     */
    public function setState($state)
    {
        $allowedValues = $this->getStateAllowableValues();
        if (!in_array($state, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'state', must be one of '%s'",
                    $state,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets stateReason
     *
     * @return string
     */
    public function getStateReason()
    {
        return $this->container['stateReason'];
    }

    /**
     * Sets stateReason
     *
     * @param string $stateReason Describes internal state of application, e.g. when state is PROCESSING - reason why application remains in processing state
     *
     * @return self
     */
    public function setStateReason($stateReason)
    {
        $allowedValues = $this->getStateReasonAllowableValues();
        if (!in_array($stateReason, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'stateReason', must be one of '%s'",
                    $stateReason,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['stateReason'] = $stateReason;

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
