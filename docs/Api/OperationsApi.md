# Swagger\Client\OperationsApi

All URIs are relative to *https://api-invest.tinkoff.ru/openapi/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**operationsGet**](OperationsApi.md#operationsget) | **GET** /operations | Получение списка операций

# **operationsGet**
> \Swagger\Client\Model\OperationsResponse operationsGet($from, $to, $figi, $broker_account_id)

Получение списка операций

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: sso_auth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Начало временного промежутка
$to = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Конец временного промежутка
$figi = "figi_example"; // string | Figi инструмента для фильтрации
$broker_account_id = "broker_account_id_example"; // string | Номер счета (по умолчанию - Тинькофф)

try {
    $result = $apiInstance->operationsGet($from, $to, $figi, $broker_account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **\DateTime**| Начало временного промежутка |
 **to** | **\DateTime**| Конец временного промежутка |
 **figi** | **string**| Figi инструмента для фильтрации | [optional]
 **broker_account_id** | **string**| Номер счета (по умолчанию - Тинькофф) | [optional]

### Return type

[**\Swagger\Client\Model\OperationsResponse**](../Model/OperationsResponse.md)

### Authorization

[sso_auth](../../README.md#sso_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

