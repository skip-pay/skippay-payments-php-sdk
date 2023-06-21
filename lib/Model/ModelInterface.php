<?php

/**
 * ModelInterface
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
 * @package  SkipPay\Model
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 *
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SkipPay\Model;

/**
 * Interface abstracting model access.
 *
 * @package SkipPay\Model
 * @author  OpenAPI Generator team
 */
interface ModelInterface
{
    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName();

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array<string, string|class-string>
     */
    public static function openAPITypes();

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array<string, string|null>
     */
    public static function openAPIFormats();

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     *
     * @return array<array-key, string>
     */
    public static function attributeMap();

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array<array-key, string>
     */
    public static function setters();

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array<array-key, string>
     */
    public static function getters();

    /**
     * Show all the invalid properties with reasons.
     *
     * @return string[]
     */
    public function listInvalidProperties();

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool
     */
    public function valid();

    /**
     * Set list of additional properties for the model.
     *
     * @param mixed[] $fields
     *   List of additional properties
     */
    public function setAdditionalProperties(array $fields);

    /**
     * Set an additional property for the model.
     *
     * @param string $property
     *   Property name.
     * @param mixed $value
     *   Value of the property.
     */
    public function setAdditionalProperty($property, $value);

    /**
     * Get list of additional properties for the model.
     *
     * @return mixed[]
     *   List of additional properties
     */
    public function getAdditionalProperties();
}