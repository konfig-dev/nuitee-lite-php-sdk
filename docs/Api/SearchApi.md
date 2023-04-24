# Nuitee\SearchApi

All URIs are relative to https://api.liteapi.travel/v1.0, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getHotelRates()**](SearchApi.md#getHotelRates) | **GET** /hotels/rates | hotel full rates availability |
| [**getHotels()**](SearchApi.md#getHotels) | **GET** /hotels | hotel minimum rates availability |


## `getHotelRates()`

```php
getHotelRates($hotel_ids, $checkin, $checkout, $guest_nationality, $currency, $adults, $children, $guest_id): \Nuitee\Model\GetHotelRatesResponse
```

hotel full rates availability

The Full Rates  API is to search and return all available rooms along with its rates, cancellation policies for a list of hotel ID's based on the search dates.   For each hotel ID, all available room information is returned.   The API also has a built in loyalty rewards system. The system rewards return users who have made prior bookings.   If the search is coming from a known guest ID, the guest level is also returned along with the pricing that's appropriate for the guest level.  If it is a new user, the guest ID will be generated at the time of the first confirmed booking.

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

$apiInstance = new Nuitee\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    // new GuzzleHttp\Client(),
    $config
);

$hotel_ids = "49117,49123"; // List of hotelIds
$checkin = "2023-03-15"; // Check in data in YYYY-MM-DD format
$checkout = "2023-03-16"; // Check out data in YYYY-MM-DD format
$guest_nationality = "US"; // Guest nationality ISO-2 code - example (SG)
$currency = "USD"; // Currency code - example (USD)
$adults = 1; // Number of adult guests staying
$children = "12,9"; // Number of children staying if any
$guest_id = "traveler1"; // Unique traveler ID if available

try {
    $result = $apiInstance->getHotelRates(
        hotel_ids: $hotel_ids, 
        checkin: $checkin, 
        checkout: $checkout, 
        guest_nationality: $guest_nationality, 
        currency: $currency, 
        adults: $adults, 
        children: $children, 
        guest_id: $guest_id
    );
    print_r($result->$getData());
    print_r($result->$getGuestLevel());
    print_r($result->$getSandbox());
} catch (\Exception $e) {
    echo 'Exception when calling SearchApi->getHotelRates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hotel_ids** | **string**| List of hotelIds | |
| **checkin** | **string**| Check in data in YYYY-MM-DD format | |
| **checkout** | **string**| Check out data in YYYY-MM-DD format | |
| **guest_nationality** | **string**| Guest nationality ISO-2 code - example (SG) | |
| **currency** | **string**| Currency code - example (USD) | |
| **adults** | **int**| Number of adult guests staying | |
| **children** | **string**| Number of children staying if any | [optional] |
| **guest_id** | **string**| Unique traveler ID if available | [optional] |

### Return type

[**\Nuitee\Model\GetHotelRatesResponse**](../Model/GetHotelRatesResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getHotels()`

```php
getHotels($hotel_ids, $checkin, $checkout, $currency, $guest_nationality, $adults, $children, $guest_id): \Nuitee\Model\GetHotelsResponse
```

hotel minimum rates availability

**Hotel Minimum Rates API** is to search and return the minimum room rates that are available for a list of hotel ID's on the specified search dates.  For each hotel ID, the minimum room rate that is available is returned.  The API also has a built in loyalty rewards system. The system rewards return users who have made prior bookings.  If the search is coming from a known guest ID, the guest level is also returned along with pricing has more discounts.  If it is a new user, the guest ID will be generated at the time of the first confirmed booking.

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

$apiInstance = new Nuitee\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    // new GuzzleHttp\Client(),
    $config
);

$hotel_ids = "49117,49123"; // List of hotelIds
$checkin = "2023-03-15"; // Check in data in YYYY-MM-DD format
$checkout = "2023-03-16"; // Check out data in YYYY-MM-DD format
$currency = "USD"; // Currency code - example (USD)
$guest_nationality = "US"; // Guest nationality ISO-2 code - example (SG)
$adults = 1; // Number of adult guests staying
$children = "12,9"; // Number of children staying if any
$guest_id = "testtraveler1"; // Unique traveler ID if available

try {
    $result = $apiInstance->getHotels(
        hotel_ids: $hotel_ids, 
        checkin: $checkin, 
        checkout: $checkout, 
        currency: $currency, 
        guest_nationality: $guest_nationality, 
        adults: $adults, 
        children: $children, 
        guest_id: $guest_id
    );
    print_r($result->$getData());
    print_r($result->$getGuestLevel());
    print_r($result->$getSandbox());
} catch (\Exception $e) {
    echo 'Exception when calling SearchApi->getHotels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hotel_ids** | **string**| List of hotelIds | |
| **checkin** | **string**| Check in data in YYYY-MM-DD format | |
| **checkout** | **string**| Check out data in YYYY-MM-DD format | |
| **currency** | **string**| Currency code - example (USD) | |
| **guest_nationality** | **string**| Guest nationality ISO-2 code - example (SG) | |
| **adults** | **int**| Number of adult guests staying | |
| **children** | **string**| Number of children staying if any | [optional] |
| **guest_id** | **string**| Unique traveler ID if available | [optional] |

### Return type

[**\Nuitee\Model\GetHotelsResponse**](../Model/GetHotelsResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
