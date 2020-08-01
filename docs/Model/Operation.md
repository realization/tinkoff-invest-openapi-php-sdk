# Operation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | 
**status** | [**\Swagger\Client\Model\OperationStatus**](OperationStatus.md) |  | 
**trades** | [**\Swagger\Client\Model\OperationTrade[]**](OperationTrade.md) |  | [optional] 
**commission** | [**\Swagger\Client\Model\MoneyAmount**](MoneyAmount.md) |  | [optional] 
**currency** | [**\Swagger\Client\Model\Currency**](Currency.md) |  | 
**payment** | **double** |  | 
**price** | **double** |  | [optional] 
**quantity** | **int** | Число инструментов в выставленной заявке | [optional] 
**quantity_executed** | **int** | Число инструментов, исполненных в заявке | [optional] 
**figi** | **string** |  | [optional] 
**instrument_type** | [**\Swagger\Client\Model\InstrumentType**](InstrumentType.md) |  | [optional] 
**is_margin_call** | **bool** |  | 
**date** | [**\DateTime**](\DateTime.md) | ISO8601 | 
**operation_type** | [**\Swagger\Client\Model\OperationTypeWithCommission**](OperationTypeWithCommission.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

