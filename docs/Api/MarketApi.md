# Swagger\Client\MarketApi

All URIs are relative to *https://api-invest.tinkoff.ru/openapi/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**marketBondsGet**](MarketApi.md#marketbondsget) | **GET** /market/bonds | Получение списка облигаций
[**marketCandlesGet**](MarketApi.md#marketcandlesget) | **GET** /market/candles | Получение исторических свечей по FIGI
[**marketCurrenciesGet**](MarketApi.md#marketcurrenciesget) | **GET** /market/currencies | Получение списка валютных пар
[**marketEtfsGet**](MarketApi.md#marketetfsget) | **GET** /market/etfs | Получение списка ETF
[**marketOrderbookGet**](MarketApi.md#marketorderbookget) | **GET** /market/orderbook | Получение стакана по FIGI
[**marketSearchByFigiGet**](MarketApi.md#marketsearchbyfigiget) | **GET** /market/search/by-figi | Получение инструмента по FIGI
[**marketSearchByTickerGet**](MarketApi.md#marketsearchbytickerget) | **GET** /market/search/by-ticker | Получение инструмента по тикеру
[**marketStocksGet**](MarketApi.md#marketstocksget) | **GET** /market/stocks | Получение списка акций

# **marketBondsGet**
> \Swagger\Client\Model\MarketInstrumentListResponse marketBondsGet()

Получение списка облигаций

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: sso_auth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\MarketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->marketBondsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketApi->marketBondsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\MarketInstrumentListResponse**](../Model/MarketInstrumentListResponse.md)

### Authorization

[sso_auth](../../README.md#sso_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **marketCandlesGet**
> \Swagger\Client\Model\CandlesResponse marketCandlesGet($figi, $from, $to, $interval)

Получение исторических свечей по FIGI

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: sso_auth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\MarketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$figi = "figi_example"; // string | FIGI
$from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Начало временного промежутка
$to = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Конец временного промежутка
$interval = new \Swagger\Client\Model\CandleResolution(); // \Swagger\Client\Model\CandleResolution | Интервал свечи

try {
    $result = $apiInstance->marketCandlesGet($figi, $from, $to, $interval);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketApi->marketCandlesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **figi** | **string**| FIGI |
 **from** | **\DateTime**| Начало временного промежутка |
 **to** | **\DateTime**| Конец временного промежутка |
 **interval** | [**\Swagger\Client\Model\CandleResolution**](../Model/.md)| Интервал свечи |

### Return type

[**\Swagger\Client\Model\CandlesResponse**](../Model/CandlesResponse.md)

### Authorization

[sso_auth](../../README.md#sso_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **marketCurrenciesGet**
> \Swagger\Client\Model\MarketInstrumentListResponse marketCurrenciesGet()

Получение списка валютных пар

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: sso_auth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\MarketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->marketCurrenciesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketApi->marketCurrenciesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\MarketInstrumentListResponse**](../Model/MarketInstrumentListResponse.md)

### Authorization

[sso_auth](../../README.md#sso_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **marketEtfsGet**
> \Swagger\Client\Model\MarketInstrumentListResponse marketEtfsGet()

Получение списка ETF

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: sso_auth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\MarketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->marketEtfsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketApi->marketEtfsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\MarketInstrumentListResponse**](../Model/MarketInstrumentListResponse.md)

### Authorization

[sso_auth](../../README.md#sso_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **marketOrderbookGet**
> \Swagger\Client\Model\OrderbookResponse marketOrderbookGet($figi, $depth)

Получение стакана по FIGI

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: sso_auth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\MarketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$figi = "figi_example"; // string | FIGI
$depth = 56; // int | Глубина стакана [1..20]

try {
    $result = $apiInstance->marketOrderbookGet($figi, $depth);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketApi->marketOrderbookGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **figi** | **string**| FIGI |
 **depth** | **int**| Глубина стакана [1..20] |

### Return type

[**\Swagger\Client\Model\OrderbookResponse**](../Model/OrderbookResponse.md)

### Authorization

[sso_auth](../../README.md#sso_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **marketSearchByFigiGet**
> \Swagger\Client\Model\SearchMarketInstrumentResponse marketSearchByFigiGet($figi)

Получение инструмента по FIGI

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: sso_auth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\MarketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$figi = "figi_example"; // string | FIGI

try {
    $result = $apiInstance->marketSearchByFigiGet($figi);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketApi->marketSearchByFigiGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **figi** | **string**| FIGI |

### Return type

[**\Swagger\Client\Model\SearchMarketInstrumentResponse**](../Model/SearchMarketInstrumentResponse.md)

### Authorization

[sso_auth](../../README.md#sso_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **marketSearchByTickerGet**
> \Swagger\Client\Model\MarketInstrumentListResponse marketSearchByTickerGet($ticker)

Получение инструмента по тикеру

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: sso_auth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\MarketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ticker = "ticker_example"; // string | Тикер инструмента

try {
    $result = $apiInstance->marketSearchByTickerGet($ticker);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketApi->marketSearchByTickerGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ticker** | **string**| Тикер инструмента |

### Return type

[**\Swagger\Client\Model\MarketInstrumentListResponse**](../Model/MarketInstrumentListResponse.md)

### Authorization

[sso_auth](../../README.md#sso_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **marketStocksGet**
> \Swagger\Client\Model\MarketInstrumentListResponse marketStocksGet()

Получение списка акций

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: sso_auth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\MarketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->marketStocksGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketApi->marketStocksGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\MarketInstrumentListResponse**](../Model/MarketInstrumentListResponse.md)

### Authorization

[sso_auth](../../README.md#sso_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

