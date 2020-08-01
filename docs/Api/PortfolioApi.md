# Swagger\Client\PortfolioApi

All URIs are relative to *https://api-invest.tinkoff.ru/openapi/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**portfolioCurrenciesGet**](PortfolioApi.md#portfoliocurrenciesget) | **GET** /portfolio/currencies | Получение валютных активов клиента
[**portfolioGet**](PortfolioApi.md#portfolioget) | **GET** /portfolio | Получение портфеля клиента

# **portfolioCurrenciesGet**
> \Swagger\Client\Model\PortfolioCurrenciesResponse portfolioCurrenciesGet($broker_account_id)

Получение валютных активов клиента

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: sso_auth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\PortfolioApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$broker_account_id = "broker_account_id_example"; // string | Номер счета (по умолчанию - Тинькофф)

try {
    $result = $apiInstance->portfolioCurrenciesGet($broker_account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortfolioApi->portfolioCurrenciesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **broker_account_id** | **string**| Номер счета (по умолчанию - Тинькофф) | [optional]

### Return type

[**\Swagger\Client\Model\PortfolioCurrenciesResponse**](../Model/PortfolioCurrenciesResponse.md)

### Authorization

[sso_auth](../../README.md#sso_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portfolioGet**
> \Swagger\Client\Model\PortfolioResponse portfolioGet($broker_account_id)

Получение портфеля клиента

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: sso_auth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\PortfolioApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$broker_account_id = "broker_account_id_example"; // string | Номер счета (по умолчанию - Тинькофф)

try {
    $result = $apiInstance->portfolioGet($broker_account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortfolioApi->portfolioGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **broker_account_id** | **string**| Номер счета (по умолчанию - Тинькофф) | [optional]

### Return type

[**\Swagger\Client\Model\PortfolioResponse**](../Model/PortfolioResponse.md)

### Authorization

[sso_auth](../../README.md#sso_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

