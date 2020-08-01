# Swagger\Client\SandboxApi

All URIs are relative to *https://api-invest.tinkoff.ru/openapi/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**sandboxClearPost**](SandboxApi.md#sandboxclearpost) | **POST** /sandbox/clear | Удаление всех позиций
[**sandboxCurrenciesBalancePost**](SandboxApi.md#sandboxcurrenciesbalancepost) | **POST** /sandbox/currencies/balance | Выставление баланса по валютным позициям
[**sandboxPositionsBalancePost**](SandboxApi.md#sandboxpositionsbalancepost) | **POST** /sandbox/positions/balance | Выставление баланса по инструментным позициям
[**sandboxRegisterPost**](SandboxApi.md#sandboxregisterpost) | **POST** /sandbox/register | Регистрация клиента в sandbox
[**sandboxRemovePost**](SandboxApi.md#sandboxremovepost) | **POST** /sandbox/remove | Удаление счета

# **sandboxClearPost**
> \Swagger\Client\Model\ModelEmpty sandboxClearPost($broker_account_id)

Удаление всех позиций

Удаление всех позиций клиента

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: sso_auth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\SandboxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$broker_account_id = "broker_account_id_example"; // string | Номер счета (по умолчанию - Тинькофф)

try {
    $result = $apiInstance->sandboxClearPost($broker_account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SandboxApi->sandboxClearPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **broker_account_id** | **string**| Номер счета (по умолчанию - Тинькофф) | [optional]

### Return type

[**\Swagger\Client\Model\ModelEmpty**](../Model/ModelEmpty.md)

### Authorization

[sso_auth](../../README.md#sso_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sandboxCurrenciesBalancePost**
> \Swagger\Client\Model\ModelEmpty sandboxCurrenciesBalancePost($body, $broker_account_id)

Выставление баланса по валютным позициям

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: sso_auth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\SandboxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\SandboxSetCurrencyBalanceRequest(); // \Swagger\Client\Model\SandboxSetCurrencyBalanceRequest | Запрос на выставление баланса по валютным позициям
$broker_account_id = "broker_account_id_example"; // string | Номер счета (по умолчанию - Тинькофф)

try {
    $result = $apiInstance->sandboxCurrenciesBalancePost($body, $broker_account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SandboxApi->sandboxCurrenciesBalancePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SandboxSetCurrencyBalanceRequest**](../Model/SandboxSetCurrencyBalanceRequest.md)| Запрос на выставление баланса по валютным позициям |
 **broker_account_id** | **string**| Номер счета (по умолчанию - Тинькофф) | [optional]

### Return type

[**\Swagger\Client\Model\ModelEmpty**](../Model/ModelEmpty.md)

### Authorization

[sso_auth](../../README.md#sso_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sandboxPositionsBalancePost**
> \Swagger\Client\Model\ModelEmpty sandboxPositionsBalancePost($body, $broker_account_id)

Выставление баланса по инструментным позициям

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: sso_auth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\SandboxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\SandboxSetPositionBalanceRequest(); // \Swagger\Client\Model\SandboxSetPositionBalanceRequest | Запрос на выставление баланса по инструментным позициям
$broker_account_id = "broker_account_id_example"; // string | Номер счета (по умолчанию - Тинькофф)

try {
    $result = $apiInstance->sandboxPositionsBalancePost($body, $broker_account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SandboxApi->sandboxPositionsBalancePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SandboxSetPositionBalanceRequest**](../Model/SandboxSetPositionBalanceRequest.md)| Запрос на выставление баланса по инструментным позициям |
 **broker_account_id** | **string**| Номер счета (по умолчанию - Тинькофф) | [optional]

### Return type

[**\Swagger\Client\Model\ModelEmpty**](../Model/ModelEmpty.md)

### Authorization

[sso_auth](../../README.md#sso_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sandboxRegisterPost**
> \Swagger\Client\Model\SandboxRegisterResponse sandboxRegisterPost($body)

Регистрация клиента в sandbox

Создание счета и валютных позиций для клиента

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: sso_auth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\SandboxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\SandboxRegisterRequest(); // \Swagger\Client\Model\SandboxRegisterRequest | Запрос на создание счета и выставление баланса по валютным позициям

try {
    $result = $apiInstance->sandboxRegisterPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SandboxApi->sandboxRegisterPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SandboxRegisterRequest**](../Model/SandboxRegisterRequest.md)| Запрос на создание счета и выставление баланса по валютным позициям | [optional]

### Return type

[**\Swagger\Client\Model\SandboxRegisterResponse**](../Model/SandboxRegisterResponse.md)

### Authorization

[sso_auth](../../README.md#sso_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sandboxRemovePost**
> \Swagger\Client\Model\ModelEmpty sandboxRemovePost($broker_account_id)

Удаление счета

Удаление счета клиента

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: sso_auth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\SandboxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$broker_account_id = "broker_account_id_example"; // string | Номер счета (по умолчанию - Тинькофф)

try {
    $result = $apiInstance->sandboxRemovePost($broker_account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SandboxApi->sandboxRemovePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **broker_account_id** | **string**| Номер счета (по умолчанию - Тинькофф) | [optional]

### Return type

[**\Swagger\Client\Model\ModelEmpty**](../Model/ModelEmpty.md)

### Authorization

[sso_auth](../../README.md#sso_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

