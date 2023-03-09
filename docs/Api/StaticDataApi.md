# Nuitee\StaticDataApi

All URIs are relative to https://api.nlite.ml/v1.0, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**listCities()**](StaticDataApi.md#listCities) | **GET** /data/cities | City list |
| [**listCountries()**](StaticDataApi.md#listCountries) | **GET** /data/countries | Country list |
| [**listCurrencies()**](StaticDataApi.md#listCurrencies) | **GET** /data/currencies | Currency list |
| [**listHotels()**](StaticDataApi.md#listHotels) | **GET** /data/hotels | Hotel list |
| [**listIataCodes()**](StaticDataApi.md#listIataCodes) | **GET** /data/iataCodes | IATA code list |


## `listCities()`

```php
listCities($country_code): \Nuitee\Model\ListCitiesResponse
```

City list



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = Nuitee\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nuitee\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Nuitee\Api\StaticDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    // new GuzzleHttp\Client(),
    $config
);

$country_code = "string_example";

try {
    $result = $apiInstance->listCities(
        country_code: $country_code
    );
    print_r($result);
} catch (\Exception $e) {
    echo 'Exception when calling StaticDataApi->listCities: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **country_code** | **string**| country code, example \&quot;IT\&quot; | [optional] |

### Return type

[**\Nuitee\Model\ListCitiesResponse**](../Model/ListCitiesResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCountries()`

```php
listCountries(): \Nuitee\Model\ListCountriesResponse
```

Country list

countries list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = Nuitee\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nuitee\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Nuitee\Api\StaticDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    // new GuzzleHttp\Client(),
    $config
);


try {
    $result = $apiInstance->listCountries();
    print_r($result);
} catch (\Exception $e) {
    echo 'Exception when calling StaticDataApi->listCountries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Nuitee\Model\ListCountriesResponse**](../Model/ListCountriesResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCurrencies()`

```php
listCurrencies(): \Nuitee\Model\ListCurrenciesResponse
```

Currency list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = Nuitee\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nuitee\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Nuitee\Api\StaticDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    // new GuzzleHttp\Client(),
    $config
);


try {
    $result = $apiInstance->listCurrencies();
    print_r($result);
} catch (\Exception $e) {
    echo 'Exception when calling StaticDataApi->listCurrencies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Nuitee\Model\ListCurrenciesResponse**](../Model/ListCurrenciesResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listHotels()`

```php
listHotels($country_code, $hotel_name, $city_name, $limit, $offset, $latitude, $longitude, $distance, $iata_code): \Nuitee\Model\ListHotelsResponse
```

Hotel list



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = Nuitee\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nuitee\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Nuitee\Api\StaticDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    // new GuzzleHttp\Client(),
    $config
);

$country_code = "countryCode_example";
$hotel_name = "string_example";
$city_name = "string_example";
$limit = 1;
$offset = 1;
$latitude = 3.14;
$longitude = 3.14;
$distance = 1;
$iata_code = "string_example";

try {
    $result = $apiInstance->listHotels(
        country_code: $country_code, 
        hotel_name: $hotel_name, 
        city_name: $city_name, 
        limit: $limit, 
        offset: $offset, 
        latitude: $latitude, 
        longitude: $longitude, 
        distance: $distance, 
        iata_code: $iata_code
    );
    print_r($result);
} catch (\Exception $e) {
    echo 'Exception when calling StaticDataApi->listHotels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **country_code** | **string**| country code Alpha-2 code (example US, RU, CN) | |
| **hotel_name** | **string**| hotel name | [optional] |
| **city_name** | **string**| city name | [optional] |
| **limit** | **int**| limit results (max value 1000) | [optional] |
| **offset** | **int**| results offset | [optional] |
| **latitude** | **float**| latitude geo coordinates | [optional] |
| **longitude** | **float**| longtude geo coordinates | [optional] |
| **distance** | **int**| the distance starting from the selected geopgraphic point | [optional] |
| **iata_code** | **string**| airport iata code | [optional] |

### Return type

[**\Nuitee\Model\ListHotelsResponse**](../Model/ListHotelsResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listIataCodes()`

```php
listIataCodes(): \Nuitee\Model\ListIataCodesResponse
```

IATA code list

IATA codes list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = Nuitee\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nuitee\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Nuitee\Api\StaticDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    // new GuzzleHttp\Client(),
    $config
);


try {
    $result = $apiInstance->listIataCodes();
    print_r($result);
} catch (\Exception $e) {
    echo 'Exception when calling StaticDataApi->listIataCodes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Nuitee\Model\ListIataCodesResponse**](../Model/ListIataCodesResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
