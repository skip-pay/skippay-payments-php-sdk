<?php

/**
 * PrecheckResultResponse
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
 * PrecheckResultResponse Class Doc Comment
 *
 * @category Class
 * @description Precheck result.
 * @package  SkipPay
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<?string, ?mixed>
 */
class PrecheckResultResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;
    public const TYPE_DEFERRED_PAYMENT = 'DEFERRED_PAYMENT';
    public const TYPE_PAY_IN_THREE = 'PAY_IN_THREE';
    public const CODE_OK = 'OK';
    public const CODE_UNKNOWN = 'UNKNOWN';
    public const CODE_NOT_AVAILABLE = 'NOT_AVAILABLE';
    public const CODE_ADDITIONAL_DATA_SECURITY = 'ADDITIONAL_DATA_SECURITY';
    public const CODE_ADDITIONAL_DATA_LIMIT = 'ADDITIONAL_DATA_LIMIT';
    public const CODE_INSUFFICIENT_LIMIT = 'INSUFFICIENT_LIMIT';
    public const CODE_INSUFFICIENT_LIMIT_OPPORTUNITY = 'INSUFFICIENT_LIMIT_OPPORTUNITY';
    public const CODE_DETAILS_NOT_MATCHING = 'DETAILS_NOT_MATCHING';
    public const CODE_MANUAL_VERIFICATION = 'MANUAL_VERIFICATION';

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PrecheckResultResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|class-string>
      */
    protected static $openAPITypes = [
        'type' => 'string',
        'recommendation' => 'bool',
        'probabilityOfApproval' => 'float',
        'completeness' => 'float',
        'code' => 'string',
        'precheckResultResponseSerializer' => '\SkipPay\Model\PrecheckResultResponseSerializer',
        'message' => 'string',
        'additionalData' => 'string[]',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'type' => null,
        'recommendation' => null,
        'probabilityOfApproval' => null,
        'completeness' => null,
        'code' => null,
        'precheckResultResponseSerializer' => null,
        'message' => null,
        'additionalData' => null,
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
        'type' => 'type',
        'recommendation' => 'recommendation',
        'probabilityOfApproval' => 'probabilityOfApproval',
        'completeness' => 'completeness',
        'code' => 'code',
        'precheckResultResponseSerializer' => 'PrecheckResultResponseSerializer',
        'message' => 'message',
        'additionalData' => 'additionalData',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'recommendation' => 'setRecommendation',
        'probabilityOfApproval' => 'setProbabilityOfApproval',
        'completeness' => 'setCompleteness',
        'code' => 'setCode',
        'precheckResultResponseSerializer' => 'setPrecheckResultResponseSerializer',
        'message' => 'setMessage',
        'additionalData' => 'setAdditionalData',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'recommendation' => 'getRecommendation',
        'probabilityOfApproval' => 'getProbabilityOfApproval',
        'completeness' => 'getCompleteness',
        'code' => 'getCode',
        'precheckResultResponseSerializer' => 'getPrecheckResultResponseSerializer',
        'message' => 'getMessage',
        'additionalData' => 'getAdditionalData',
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
        $this->container['type'] = $data['type'] ?? null;
        $this->container['recommendation'] = $data['recommendation'] ?? null;
        $this->container['probabilityOfApproval'] = $data['probabilityOfApproval'] ?? null;
        $this->container['completeness'] = $data['completeness'] ?? null;
        $this->container['code'] = $data['code'] ?? null;
        $this->container['precheckResultResponseSerializer'] = $data['precheckResultResponseSerializer'] ?? null;
        $this->container['message'] = $data['message'] ?? null;
        $this->container['additionalData'] = $data['additionalData'] ?? null;
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

        if ($this->container['type'] === null) {
            $invalidProperties['type'] = "'type' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        $value = $this->container['type'];
        if (!is_null($value) && !in_array($value, $allowedValues, true)) {
            $invalidProperties['type'] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $value,
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['recommendation'] === null) {
            $invalidProperties['recommendation'] = "'recommendation' can't be null";
        }
        if ($this->container['probabilityOfApproval'] === null) {
            $invalidProperties['probabilityOfApproval'] = "'probabilityOfApproval' can't be null";
        }
        if ($this->container['code'] === null) {
            $invalidProperties['code'] = "'code' can't be null";
        }
        $allowedValues = $this->getCodeAllowableValues();
        $value = $this->container['code'];
        if (!is_null($value) && !in_array($value, $allowedValues, true)) {
            $invalidProperties['code'] = sprintf(
                "invalid value '%s' for 'code', must be one of '%s'",
                $value,
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['precheckResultResponseSerializer'] === null) {
            $invalidProperties['precheckResultResponseSerializer'] = "'precheckResultResponseSerializer' can't be null";
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
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_DEFERRED_PAYMENT,
            self::TYPE_PAY_IN_THREE,
        ];
    }
    /**
     * Gets allowable values of the enum.
     *
     * @return scalar[]
     */
    public function getCodeAllowableValues()
    {
        return [
            self::CODE_OK,
            self::CODE_UNKNOWN,
            self::CODE_NOT_AVAILABLE,
            self::CODE_ADDITIONAL_DATA_SECURITY,
            self::CODE_ADDITIONAL_DATA_LIMIT,
            self::CODE_INSUFFICIENT_LIMIT,
            self::CODE_INSUFFICIENT_LIMIT_OPPORTUNITY,
            self::CODE_DETAILS_NOT_MATCHING,
            self::CODE_MANUAL_VERIFICATION,
        ];
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type Precheck result type for Funding type.
     *
     * @return self
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'type', must be one of '%s'",
                    $type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets recommendation
     *
     * @return bool
     */
    public function getRecommendation()
    {
        return $this->container['recommendation'];
    }

    /**
     * Sets recommendation
     *
     * @param bool $recommendation A recommendation of whether the order should be passed to the Skip Pay.  true = Application is going to be likely approved. false = Application is going to be likely rejected.
     *
     * @return self
     */
    public function setRecommendation($recommendation)
    {
        $this->container['recommendation'] = $recommendation;

        return $this;
    }

    /**
     * Gets probabilityOfApproval
     *
     * @return float
     */
    public function getProbabilityOfApproval()
    {
        return $this->container['probabilityOfApproval'];
    }

    /**
     * Sets probabilityOfApproval
     *
     * @param float $probabilityOfApproval Probability of approval.  0 = 0% to be approved 1 = 100% to be approved  Partner can create custom logic not to follow the recommendation (be more strict or benevolent).
     *
     * @return self
     */
    public function setProbabilityOfApproval($probabilityOfApproval)
    {
        $this->container['probabilityOfApproval'] = $probabilityOfApproval;

        return $this;
    }

    /**
     * Gets completeness
     *
     * @return float|null
     */
    public function getCompleteness()
    {
        return $this->container['completeness'];
    }

    /**
     * Sets completeness
     *
     * @param float|null $completeness Completness of the result. <0, 1> The lower is the value, the lower accuracy of the result.
     *
     * @return self
     */
    public function setCompleteness($completeness)
    {
        $this->container['completeness'] = $completeness;

        return $this;
    }

    /**
     * Gets code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string $code Result code.
     *
     * @return self
     */
    public function setCode($code)
    {
        $allowedValues = $this->getCodeAllowableValues();
        if (!in_array($code, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'code', must be one of '%s'",
                    $code,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets precheckResultResponseSerializer
     *
     * @return \SkipPay\Model\PrecheckResultResponseSerializer
     */
    public function getPrecheckResultResponseSerializer()
    {
        return $this->container['precheckResultResponseSerializer'];
    }

    /**
     * Sets precheckResultResponseSerializer
     *
     * @param \SkipPay\Model\PrecheckResultResponseSerializer $precheckResultResponseSerializer precheckResultResponseSerializer
     *
     * @return self
     */
    public function setPrecheckResultResponseSerializer($precheckResultResponseSerializer)
    {
        $this->container['precheckResultResponseSerializer'] = $precheckResultResponseSerializer;

        return $this;
    }

    /**
     * Gets message
     *
     * @return string|null
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string|null $message Custom message for customer.  Examples: “V Skip Pay peněžence nemáte dostatečný limit.” “Uveďte do objednávky jméno a příjmení, které používáte ve službě Skip Pay.” etc.
     *
     * @return self
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets additionalData
     *
     * @return string[]|null
     */
    public function getAdditionalData()
    {
        return $this->container['additionalData'];
    }

    /**
     * Sets additionalData
     *
     * @param string[]|null $additionalData List of additional data that customer has to send.  Possible values in array: `PERSONAL_ID`, `ID_CARD_NO`, `ID_CARD_EXPIRY_DATE`, `ID_CARD_SCAN`, `THIRD_PARTY_TELCO_CONSENT`.
     *
     * @return self
     */
    public function setAdditionalData($additionalData)
    {
        $this->container['additionalData'] = $additionalData;

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
