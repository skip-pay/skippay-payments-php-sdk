<?php

/**
 * OrderResponseAllOf
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
 * OrderResponseAllOf Class Doc Comment
 *
 * @category Class
 * @package  SkipPay
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<?string, ?mixed>
 */
class OrderResponseAllOf implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OrderResponse_allOf';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|class-string>
      */
    protected static $openAPITypes = [
        'state' => '\SkipPay\Model\OrderDeliveryState',
        'deliveryDate' => '\DateTime',
        'deliveryTrackingNumber' => 'string',
        'sentDate' => '\DateTime',
        'documents' => '\SkipPay\Model\DocumentResponse[]',
        'items' => '\SkipPay\Model\OrderItemResponse[]',
        'merchantId' => 'string',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'state' => null,
        'deliveryDate' => 'date',
        'deliveryTrackingNumber' => null,
        'sentDate' => 'date',
        'documents' => null,
        'items' => null,
        'merchantId' => null,
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
        'state' => 'state',
        'deliveryDate' => 'deliveryDate',
        'deliveryTrackingNumber' => 'deliveryTrackingNumber',
        'sentDate' => 'sentDate',
        'documents' => 'documents',
        'items' => 'items',
        'merchantId' => 'merchantId',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'state' => 'setState',
        'deliveryDate' => 'setDeliveryDate',
        'deliveryTrackingNumber' => 'setDeliveryTrackingNumber',
        'sentDate' => 'setSentDate',
        'documents' => 'setDocuments',
        'items' => 'setItems',
        'merchantId' => 'setMerchantId',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'state' => 'getState',
        'deliveryDate' => 'getDeliveryDate',
        'deliveryTrackingNumber' => 'getDeliveryTrackingNumber',
        'sentDate' => 'getSentDate',
        'documents' => 'getDocuments',
        'items' => 'getItems',
        'merchantId' => 'getMerchantId',
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
        $this->container['state'] = $data['state'] ?? null;
        $this->container['deliveryDate'] = $data['deliveryDate'] ?? null;
        $this->container['deliveryTrackingNumber'] = $data['deliveryTrackingNumber'] ?? null;
        $this->container['sentDate'] = $data['sentDate'] ?? null;
        $this->container['documents'] = $data['documents'] ?? null;
        $this->container['items'] = $data['items'] ?? null;
        $this->container['merchantId'] = $data['merchantId'] ?? null;
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

        if ($this->container['state'] === null) {
            $invalidProperties['state'] = "'state' can't be null";
        }
        if ($this->container['deliveryDate'] === null) {
            $invalidProperties['deliveryDate'] = "'deliveryDate' can't be null";
        }
        if ($this->container['deliveryTrackingNumber'] === null) {
            $invalidProperties['deliveryTrackingNumber'] = "'deliveryTrackingNumber' can't be null";
        }
        if ((mb_strlen($this->container['deliveryTrackingNumber']) > 64)) {
            $invalidProperties[] = "invalid value for 'deliveryTrackingNumber', the character length must be smaller than or equal to 64.";
        }

        if ($this->container['sentDate'] === null) {
            $invalidProperties['sentDate'] = "'sentDate' can't be null";
        }
        if ($this->container['items'] === null) {
            $invalidProperties['items'] = "'items' can't be null";
        }
        if ($this->container['merchantId'] === null) {
            $invalidProperties['merchantId'] = "'merchantId' can't be null";
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
     * Gets state
     *
     * @return \SkipPay\Model\OrderDeliveryState
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param \SkipPay\Model\OrderDeliveryState $state state
     *
     * @return self
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets deliveryDate
     *
     * @return \DateTime
     */
    public function getDeliveryDate()
    {
        return $this->container['deliveryDate'];
    }

    /**
     * Sets deliveryDate
     *
     * @param \DateTime $deliveryDate Date and time of delivery
     *
     * @return self
     */
    public function setDeliveryDate($deliveryDate)
    {
        $this->container['deliveryDate'] = $deliveryDate;

        return $this;
    }

    /**
     * Gets deliveryTrackingNumber
     *
     * @return string
     */
    public function getDeliveryTrackingNumber()
    {
        return $this->container['deliveryTrackingNumber'];
    }

    /**
     * Sets deliveryTrackingNumber
     *
     * @param string $deliveryTrackingNumber Delivery tracking number
     *
     * @return self
     */
    public function setDeliveryTrackingNumber($deliveryTrackingNumber)
    {
        if ((mb_strlen($deliveryTrackingNumber) > 64)) {
            throw new \InvalidArgumentException('invalid length for $deliveryTrackingNumber when calling OrderResponseAllOf., must be smaller than or equal to 64.');
        }

        $this->container['deliveryTrackingNumber'] = $deliveryTrackingNumber;

        return $this;
    }

    /**
     * Gets sentDate
     *
     * @return \DateTime
     */
    public function getSentDate()
    {
        return $this->container['sentDate'];
    }

    /**
     * Sets sentDate
     *
     * @param \DateTime $sentDate Date and time of order shipping
     *
     * @return self
     */
    public function setSentDate($sentDate)
    {
        $this->container['sentDate'] = $sentDate;

        return $this;
    }

    /**
     * Gets documents
     *
     * @return \SkipPay\Model\DocumentResponse[]|null
     */
    public function getDocuments()
    {
        return $this->container['documents'];
    }

    /**
     * Sets documents
     *
     * @param \SkipPay\Model\DocumentResponse[]|null $documents Attached documents (invoices etc.)
     *
     * @return self
     */
    public function setDocuments($documents)
    {
        $this->container['documents'] = $documents;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \SkipPay\Model\OrderItemResponse[]
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \SkipPay\Model\OrderItemResponse[] $items Order items
     *
     * @return self
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets merchantId
     *
     * @return string
     */
    public function getMerchantId()
    {
        return $this->container['merchantId'];
    }

    /**
     * Sets merchantId
     *
     * @param string $merchantId Merchant identification
     *
     * @return self
     */
    public function setMerchantId($merchantId)
    {
        $this->container['merchantId'] = $merchantId;

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
