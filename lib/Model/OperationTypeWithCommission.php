<?php
/**
 * OperationTypeWithCommission
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
 * OperationTypeWithCommission Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OperationTypeWithCommission
{
    /**
     * Possible values of this enum
     */
    const BUY = 'Buy';
const BUY_CARD = 'BuyCard';
const SELL = 'Sell';
const BROKER_COMMISSION = 'BrokerCommission';
const EXCHANGE_COMMISSION = 'ExchangeCommission';
const SERVICE_COMMISSION = 'ServiceCommission';
const MARGIN_COMMISSION = 'MarginCommission';
const OTHER_COMMISSION = 'OtherCommission';
const PAY_IN = 'PayIn';
const PAY_OUT = 'PayOut';
const TAX = 'Tax';
const TAX_LUCRE = 'TaxLucre';
const TAX_DIVIDEND = 'TaxDividend';
const TAX_COUPON = 'TaxCoupon';
const TAX_BACK = 'TaxBack';
const REPAYMENT = 'Repayment';
const PART_REPAYMENT = 'PartRepayment';
const COUPON = 'Coupon';
const DIVIDEND = 'Dividend';
const SECURITY_IN = 'SecurityIn';
const SECURITY_OUT = 'SecurityOut';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::BUY,
self::BUY_CARD,
self::SELL,
self::BROKER_COMMISSION,
self::EXCHANGE_COMMISSION,
self::SERVICE_COMMISSION,
self::MARGIN_COMMISSION,
self::OTHER_COMMISSION,
self::PAY_IN,
self::PAY_OUT,
self::TAX,
self::TAX_LUCRE,
self::TAX_DIVIDEND,
self::TAX_COUPON,
self::TAX_BACK,
self::REPAYMENT,
self::PART_REPAYMENT,
self::COUPON,
self::DIVIDEND,
self::SECURITY_IN,
self::SECURITY_OUT,        ];
    }
}
