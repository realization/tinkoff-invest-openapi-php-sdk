# Swagger\Client\OrdersApi

All URIs are relative to *https://api-invest.tinkoff.ru/openapi/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**ordersCancelPost**](OrdersApi.md#orderscancelpost) | **POST** /orders/cancel | Отмена заявки
[**ordersGet**](OrdersApi.md#ordersget) | **GET** /orders | Получение списка активных заявок
[**ordersLimitOrderPost**](OrdersApi.md#orderslimitorderpost) | **POST** /orders/limit-order | Создание лимитной заявки
[**ordersMarketOrderPost**](OrdersApi.md#ordersmarketorderpost) | **POST** /orders/market-order | Создание рыночной заявки

# **ordersCancelPost**
> \Swagger\Client\Model\ModelEmpty ordersCancelPost($order_id, $broker_account_id)

Отмена заявки

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: sso_auth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = "order_id_example"; // string | ID заявки
$broker_account_id = "broker_account_id_example"; // string | Номер счета (по умолчанию - Тинькофф)

try {
    $result = $apiInstance->ordersCancelPost($order_id, $broker_account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->ordersCancelPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| ID заявки |
 **broker_account_id** | **string**| Номер счета (по умолчанию - Тинькофф) | [optional]

### Return type

[**\Swagger\Client\Model\ModelEmpty**](../Model/ModelEmpty.md)

### Authorization

[sso_auth](../../README.md#sso_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ordersGet**
> \Swagger\Client\Model\OrdersResponse ordersGet($broker_account_id)

Получение списка активных заявок

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: sso_auth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$broker_account_id = "broker_account_id_example"; // string | Номер счета (по умолчанию - Тинькофф)

try {
    $result = $apiInstance->ordersGet($broker_account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->ordersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **broker_account_id** | **string**| Номер счета (по умолчанию - Тинькофф) | [optional]

### Return type

[**\Swagger\Client\Model\OrdersResponse**](../Model/OrdersResponse.md)

### Authorization

[sso_auth](../../README.md#sso_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ordersLimitOrderPost**
> \Swagger\Client\Model\LimitOrderResponse ordersLimitOrderPost($body, $figi, $broker_account_id)

Создание лимитной заявки

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: sso_auth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\LimitOrderRequest(); // \Swagger\Client\Model\LimitOrderRequest | 
$figi = "figi_example"; // string | FIGI инструмента
$broker_account_id = "broker_account_id_example"; // string | Номер счета (по умолчанию - Тинькофф)

try {
    $result = $apiInstance->ordersLimitOrderPost($body, $figi, $broker_account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->ordersLimitOrderPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\LimitOrderRequest**](../Model/LimitOrderRequest.md)|  |
 **figi** | **string**| FIGI инструмента |
 **broker_account_id** | **string**| Номер счета (по умолчанию - Тинькофф) | [optional]

### Return type

[**\Swagger\Client\Model\LimitOrderResponse**](../Model/LimitOrderResponse.md)

### Authorization

[sso_auth](../../README.md#sso_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ordersMarketOrderPost**
> \Swagger\Client\Model\MarketOrderResponse ordersMarketOrderPost($body, $figi, $broker_account_id)

Создание рыночной заявки

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: sso_auth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\MarketOrderRequest(); // \Swagger\Client\Model\MarketOrderRequest | 
$figi = "figi_example"; // string | FIGI инструмента
$broker_account_id = "broker_account_id_example"; // string | Уникальный идентификатор счета (по умолчанию - Тинькофф)

try {
    $result = $apiInstance->ordersMarketOrderPost($body, $figi, $broker_account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->ordersMarketOrderPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\MarketOrderRequest**](../Model/MarketOrderRequest.md)|  |
 **figi** | **string**| FIGI инструмента |
 **broker_account_id** | **string**| Уникальный идентификатор счета (по умолчанию - Тинькофф) | [optional]

### Return type

[**\Swagger\Client\Model\MarketOrderResponse**](../Model/MarketOrderResponse.md)

### Authorization

[sso_auth](../../README.md#sso_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

