<?php
/**
 * Currency
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * OpenAPI
 *
 * tinkoff.ru/invest OpenAPI.
 *
 * OpenAPI spec version: 1.0.0
 * Contact: n.v.melnikov@tinkoff.ru
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.21
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;
use \Swagger\Client\ObjectSerializer;

/**
 * Currency Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Currency
{
    /**
     * Possible values of this enum
     */
    const RUB = 'RUB';
const USD = 'USD';
const EUR = 'EUR';
const GBP = 'GBP';
const HKD = 'HKD';
const CHF = 'CHF';
const JPY = 'JPY';
const CNY = 'CNY';
const _TRY = 'TRY';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::RUB,
self::USD,
self::EUR,
self::GBP,
self::HKD,
self::CHF,
self::JPY,
self::CNY,
self::_TRY,        ];
    }
}