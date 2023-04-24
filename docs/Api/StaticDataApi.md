# Nuitee\StaticDataApi

All URIs are relative to https://api.liteapi.travel/v1.0, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getHotel()**](StaticDataApi.md#getHotel) | **GET** /data/hotel | Hotel details |
| [**listCities()**](StaticDataApi.md#listCities) | **GET** /data/cities | City list |
| [**listCountries()**](StaticDataApi.md#listCountries) | **GET** /data/countries | Country list |
| [**listCurrencies()**](StaticDataApi.md#listCurrencies) | **GET** /data/currencies | Currency list |
| [**listHotels()**](StaticDataApi.md#listHotels) | **GET** /data/hotels | Hotel list |
| [**listIataCodes()**](StaticDataApi.md#listIataCodes) | **GET** /data/iataCodes | IATA code list |


## `getHotel()`

```php
getHotel($hotel_id): \Nuitee\Model\GetHotelResponse
```

Hotel details

The hotel details API returns all the static contents details of a hotel or property if the hotel ID is provided. The static content include name, description, address, amenities, cancellation policies, images and more.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikeyAuth
$config = Nuitee\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nuitee\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Setting host path is optional and defaults to https://api.liteapi.travel/v1.0
// Nuitee\Configuration::getDefaultConfiguration()->setHost("https://api.liteapi.travel/v1.0");

$apiInstance = new Nuitee\Api\StaticDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    // new GuzzleHttp\Client(),
    $config
);

$hotel_id = 57871; // Unique ID of a hotel

try {
    $result = $apiInstance->getHotel(
        hotel_id: $hotel_id
    );
    print_r($result->$getData());
} catch (\Exception $e) {
    echo 'Exception when calling StaticDataApi->getHotel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hotel_id** | **int**| Unique ID of a hotel | |

### Return type

[**\Nuitee\Model\GetHotelResponse**](../Model/GetHotelResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCities()`

```php
listCities($country_code): \Nuitee\Model\ListCitiesResponse
```

City list

The API returns a list of city names from a specific country. The country codes needs be is in ISO-2 format. To get the country codes in ISO-2 for all countries please use the **GET** Country list endpoint

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikeyAuth
$config = Nuitee\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nuitee\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Setting host path is optional and defaults to https://api.liteapi.travel/v1.0
// Nuitee\Configuration::getDefaultConfiguration()->setHost("https://api.liteapi.travel/v1.0");

$apiInstance = new Nuitee\Api\StaticDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    // new GuzzleHttp\Client(),
    $config
);

$country_code = "SG"; // Country code in iso-2 format (example: SG)

try {
    $result = $apiInstance->listCities(
        country_code: $country_code
    );
    print_r($result->$getData());
} catch (\Exception $e) {
    echo 'Exception when calling StaticDataApi->listCities: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **country_code** | **string**| Country code in iso-2 format (example: SG) | |

### Return type

[**\Nuitee\Model\ListCitiesResponse**](../Model/ListCitiesResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

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

The API returns the list of countries available along with its ISO-2 code.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikeyAuth
$config = Nuitee\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nuitee\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Setting host path is optional and defaults to https://api.liteapi.travel/v1.0
// Nuitee\Configuration::getDefaultConfiguration()->setHost("https://api.liteapi.travel/v1.0");

$apiInstance = new Nuitee\Api\StaticDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    // new GuzzleHttp\Client(),
    $config
);


try {
    $result = $apiInstance->listCountries();
    print_r($result->$getData());
} catch (\Exception $e) {
    echo 'Exception when calling StaticDataApi->listCountries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Nuitee\Model\ListCountriesResponse**](../Model/ListCountriesResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

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

The API returns all available currency codes along with its name and the list of supported countries that the currency applies to.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikeyAuth
$config = Nuitee\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nuitee\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Setting host path is optional and defaults to https://api.liteapi.travel/v1.0
// Nuitee\Configuration::getDefaultConfiguration()->setHost("https://api.liteapi.travel/v1.0");

$apiInstance = new Nuitee\Api\StaticDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    // new GuzzleHttp\Client(),
    $config
);


try {
    $result = $apiInstance->listCurrencies();
    print_r($result->$getData());
} catch (\Exception $e) {
    echo 'Exception when calling StaticDataApi->listCurrencies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Nuitee\Model\ListCurrenciesResponse**](../Model/ListCurrenciesResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listHotels()`

```php
listHotels($country_code, $city_name, $offset, $limit, $longitude, $latitude, $distance): \Nuitee\Model\ListHotelsResponse
```

Hotel list

The API returns a list of hotels available based on different search criterion. The minimum required information is the county code in ISO-2 format.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikeyAuth
$config = Nuitee\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nuitee\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Setting host path is optional and defaults to https://api.liteapi.travel/v1.0
// Nuitee\Configuration::getDefaultConfiguration()->setHost("https://api.liteapi.travel/v1.0");

$apiInstance = new Nuitee\Api\StaticDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    // new GuzzleHttp\Client(),
    $config
);

$country_code = "SG"; // country code ISO-2 code - example (SG)
$city_name = "Singapore"; // name of the city
$offset = 0; // specifies the number of rows to skip before starting to return rows
$limit = 1000; // limit number of results (max 1000)
$longitude = -115.16988; // longitude geo coordinates
$latitude = 36.1251; // latitude geo coordinates
$distance = 1000; // distance in meters (min 1000m)

try {
    $result = $apiInstance->listHotels(
        country_code: $country_code, 
        city_name: $city_name, 
        offset: $offset, 
        limit: $limit, 
        longitude: $longitude, 
        latitude: $latitude, 
        distance: $distance
    );
    print_r($result->$getData());
    print_r($result->$getTotal());
} catch (\Exception $e) {
    echo 'Exception when calling StaticDataApi->listHotels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **country_code** | **string**| country code ISO-2 code - example (SG) | |
| **city_name** | **string**| name of the city | |
| **offset** | **int**| specifies the number of rows to skip before starting to return rows | [optional] |
| **limit** | **int**| limit number of results (max 1000) | [optional] |
| **longitude** | **float**| longitude geo coordinates | [optional] |
| **latitude** | **float**| latitude geo coordinates | [optional] |
| **distance** | **int**| distance in meters (min 1000m) | [optional] |

### Return type

[**\Nuitee\Model\ListHotelsResponse**](../Model/ListHotelsResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

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

The API returns the IATA  (International Air Transport Association) codes  for all available airports along with the name of the airport, geographical coordinates and country code in ISO-2 format.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apikeyAuth
$config = Nuitee\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nuitee\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Setting host path is optional and defaults to https://api.liteapi.travel/v1.0
// Nuitee\Configuration::getDefaultConfiguration()->setHost("https://api.liteapi.travel/v1.0");

$apiInstance = new Nuitee\Api\StaticDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    // new GuzzleHttp\Client(),
    $config
);


try {
    $result = $apiInstance->listIataCodes();
    print_r($result->$getData());
} catch (\Exception $e) {
    echo 'Exception when calling StaticDataApi->listIataCodes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Nuitee\Model\ListIataCodesResponse**](../Model/ListIataCodesResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
