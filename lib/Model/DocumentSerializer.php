<?php

/**
 * DocumentSerializer
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
use SkipPay\ObjectSerializer;

/**
 * DocumentSerializer Class Doc Comment
 *
 * @category Class
 * @description Type of the document
 * @package  SkipPay
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DocumentSerializer
{
    /**
     * Possible values of this enum
     */
    
    const INVOICE = 'INVOICE';
    
    const PROFORMA_INVOICE = 'PROFORMA_INVOICE';
    
    const CREDIT_NOTE = 'CREDIT_NOTE';
    
    const OTHER = 'OTHER';
    

    /**
     * Gets allowable values of the enum.
     *
     * @return scalar[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::INVOICE,
            self::PROFORMA_INVOICE,
            self::CREDIT_NOTE,
            self::OTHER,
        ];
    }
}

