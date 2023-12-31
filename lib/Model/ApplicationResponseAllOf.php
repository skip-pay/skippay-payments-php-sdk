<?php

/**
 * ApplicationResponseAllOf
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
 * ApplicationResponseAllOf Class Doc Comment
 *
 * @category Class
 * @package  SkipPay
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<?string, ?mixed>
 */
class ApplicationResponseAllOf implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ApplicationResponse_allOf';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|class-string>
      */
    protected static $openAPITypes = [
        'customer' => '\SkipPay\Model\CustomerResponse',
        'order' => '\SkipPay\Model\OrderResponse',
        'type' => '\SkipPay\Model\FinancingType',
        'agreementTermsAndConditions' => 'bool',
        'gatewayRedirectUrl' => 'string',
        'recurrence' => '\SkipPay\Model\RecurrenceObject',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'customer' => null,
        'order' => null,
        'type' => null,
        'agreementTermsAndConditions' => null,
        'gatewayRedirectUrl' => null,
        'recurrence' => null,
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
        'customer' => 'customer',
        'order' => 'order',
        'type' => 'type',
        'agreementTermsAndConditions' => 'agreementTermsAndConditions',
        'gatewayRedirectUrl' => 'gatewayRedirectUrl',
        'recurrence' => 'recurrence',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'customer' => 'setCustomer',
        'order' => 'setOrder',
        'type' => 'setType',
        'agreementTermsAndConditions' => 'setAgreementTermsAndConditions',
        'gatewayRedirectUrl' => 'setGatewayRedirectUrl',
        'recurrence' => 'setRecurrence',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'customer' => 'getCustomer',
        'order' => 'getOrder',
        'type' => 'getType',
        'agreementTermsAndConditions' => 'getAgreementTermsAndConditions',
        'gatewayRedirectUrl' => 'getGatewayRedirectUrl',
        'recurrence' => 'getRecurrence',
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
        $this->container['customer'] = $data['customer'] ?? null;
        $this->container['order'] = $data['order'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['agreementTermsAndConditions'] = $data['agreementTermsAndConditions'] ?? null;
        $this->container['gatewayRedirectUrl'] = $data['gatewayRedirectUrl'] ?? null;
        $this->container['recurrence'] = $data['recurrence'] ?? null;
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

        if ($this->container['customer'] === null) {
            $invalidProperties['customer'] = "'customer' can't be null";
        }
        if ($this->container['order'] === null) {
            $invalidProperties['order'] = "'order' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties['type'] = "'type' can't be null";
        }
        if ($this->container['agreementTermsAndConditions'] === null) {
            $invalidProperties['agreementTermsAndConditions'] = "'agreementTermsAndConditions' can't be null";
        }
        if ($this->container['gatewayRedirectUrl'] === null) {
            $invalidProperties['gatewayRedirectUrl'] = "'gatewayRedirectUrl' can't be null";
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
     * Gets customer
     *
     * @return \SkipPay\Model\CustomerResponse
     */
    public function getCustomer()
    {
        return $this->container['customer'];
    }

    /**
     * Sets customer
     *
     * @param \SkipPay\Model\CustomerResponse $customer customer
     *
     * @return self
     */
    public function setCustomer($customer)
    {
        $this->container['customer'] = $customer;

        return $this;
    }

    /**
     * Gets order
     *
     * @return \SkipPay\Model\OrderResponse
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     *
     * @param \SkipPay\Model\OrderResponse $order order
     *
     * @return self
     */
    public function setOrder($order)
    {
        $this->container['order'] = $order;

        return $this;
    }

    /**
     * Gets type
     *
     * @return \SkipPay\Model\FinancingType
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \SkipPay\Model\FinancingType $type type
     *
     * @return self
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets agreementTermsAndConditions
     *
     * @return bool
     */
    public function getAgreementTermsAndConditions()
    {
        return $this->container['agreementTermsAndConditions'];
    }

    /**
     * Sets agreementTermsAndConditions
     *
     * @param bool $agreementTermsAndConditions Terms and conditions agreement
     *
     * @return self
     */
    public function setAgreementTermsAndConditions($agreementTermsAndConditions)
    {
        $this->container['agreementTermsAndConditions'] = $agreementTermsAndConditions;

        return $this;
    }

    /**
     * Gets gatewayRedirectUrl
     *
     * @return string
     */
    public function getGatewayRedirectUrl()
    {
        return $this->container['gatewayRedirectUrl'];
    }

    /**
     * Sets gatewayRedirectUrl
     *
     * @param string $gatewayRedirectUrl Gateway redirect URL. Redirect user to this URL if state is `PROCESSING` and stateReason is `PROCESSING_REDIRECT_NEEDED`.
     *
     * @return self
     */
    public function setGatewayRedirectUrl($gatewayRedirectUrl)
    {
        $this->container['gatewayRedirectUrl'] = $gatewayRedirectUrl;

        return $this;
    }

    /**
     * Gets recurrence
     *
     * @return \SkipPay\Model\RecurrenceObject|null
     */
    public function getRecurrence()
    {
        return $this->container['recurrence'];
    }

    /**
     * Sets recurrence
     *
     * @param \SkipPay\Model\RecurrenceObject|null $recurrence recurrence
     *
     * @return self
     */
    public function setRecurrence($recurrence)
    {
        $this->container['recurrence'] = $recurrence;

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
