# Nuitee\SearchApi

All URIs are relative to https://api.nlite.ml/v1.0, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getHotelRates()**](SearchApi.md#getHotelRates) | **GET** /hotels/rates | Hotel full rate availability |
| [**getHotels()**](SearchApi.md#getHotels) | **GET** /hotels | Hotel minimum rate availability |


## `getHotelRates()`

```php
getHotelRates($hotel_ids, $checkin, $checkout, $adults, $guest_nationality, $currency, $children, $session_id, $traveler_id): \Nuitee\Model\GetHotelRatesResponse
```

Hotel full rate availability

This endpoint allows you to send a hotel ID with a specific date range and in response receive all the rooms, rates that are available along with the cancelllation policies.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = Nuitee\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nuitee\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Nuitee\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    // new GuzzleHttp\Client(),
    $config
);

$hotel_ids = "2345,557,565,4239";
$checkin = "2023-01-15";
$checkout = "2023-01-16";
$adults = 1;
$guest_nationality = "US";
$currency = "USD";
$children = "5,9";
$session_id = "GIYDEMZNGAYS2MJVPQZDAMRTFUYDCLJRGZ6DC7D4JVAXY7DZM5MDMQKKJJAXKZY";
$traveler_id = "string_example";

try {
    $result = $apiInstance->getHotelRates(
        hotel_ids: $hotel_ids, 
        checkin: $checkin, 
        checkout: $checkout, 
        adults: $adults, 
        guest_nationality: $guest_nationality, 
        currency: $currency, 
        children: $children, 
        session_id: $session_id, 
        traveler_id: $traveler_id
    );
    print_r($result);
} catch (\Exception $e) {
    echo 'Exception when calling SearchApi->getHotelRates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hotel_ids** | **string**| hotel ids separated by comma, max number of hotel ids is 10, example (2345,557,56) | |
| **checkin** | **\DateTime**| start date yyyy-mm-dd format | |
| **checkout** | **\DateTime**| end date yyyy-mm-dd format | |
| **adults** | **int**| adults number | |
| **guest_nationality** | **string**| guest nationality country code iso-2 example (US) | |
| **currency** | **string**| currency code example (USD) | |
| **children** | **string**| children ages separated by a comma | [optional] |
| **session_id** | **string**| session id if retrieved from hotels search | [optional] |
| **traveler_id** | **string**| traveler unique id | [optional] |

### Return type

[**\Nuitee\Model\GetHotelRatesResponse**](../Model/GetHotelRatesResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getHotels()`

```php
getHotels($hotel_ids, $checkin, $checkout, $country, $adults, $currency, $guest_nationality, $latitude, $longitude, $distance, $children, $traveler_id): \Nuitee\Model\GetHotelsResponse
```

Hotel minimum rate availability

This endpoint allows you to send a list of hotel ID's for a specific date range and in response receive the best rate available for each of the hotel ID's. The limit is set to 200 hotels

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = Nuitee\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nuitee\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Nuitee\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    // new GuzzleHttp\Client(),
    $config
);

$hotel_ids = "2345,557,565,4239";
$checkin = "Sun Jan 14 16:00:00 PST 2024";
$checkout = "Fri Jan 19 16:00:00 PST 2024";
$country = "US";
$adults = 2;
$currency = "USD";
$guest_nationality = "CA";
$latitude = 32.31823;
$longitude = -86.902298;
$distance = 20;
$children = "7,14";
$traveler_id = "TMX54RS4";

try {
    $result = $apiInstance->getHotels(
        hotel_ids: $hotel_ids, 
        checkin: $checkin, 
        checkout: $checkout, 
        country: $country, 
        adults: $adults, 
        currency: $currency, 
        guest_nationality: $guest_nationality, 
        latitude: $latitude, 
        longitude: $longitude, 
        distance: $distance, 
        children: $children, 
        traveler_id: $traveler_id
    );
    print_r($result);
} catch (\Exception $e) {
    echo 'Exception when calling SearchApi->getHotels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hotel_ids** | **string**| hotel ids separated by comma, max number of hotel ids is 10, example (2345,557,56) | |
| **checkin** | **\DateTime**|  | |
| **checkout** | **\DateTime**|  | |
| **country** | **string**|  | |
| **adults** | **int**|  | |
| **currency** | **string**|  | |
| **guest_nationality** | **string**|  | |
| **latitude** | **float**|  | [optional] |
| **longitude** | **float**|  | [optional] |
| **distance** | **int**|  | [optional] |
| **children** | **string**|  | [optional] |
| **traveler_id** | **string**|  | [optional] |

### Return type

[**\Nuitee\Model\GetHotelsResponse**](../Model/GetHotelsResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
