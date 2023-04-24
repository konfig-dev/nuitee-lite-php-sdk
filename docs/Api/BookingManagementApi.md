# Nuitee\BookingManagementApi

All URIs are relative to https://api.liteapi.travel/v1.0, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**cancel()**](BookingManagementApi.md#cancel) | **PUT** /bookings/{bookingId} | Booking cancel |
| [**listBookings()**](BookingManagementApi.md#listBookings) | **GET** /bookings | Booking list |
| [**retrieve()**](BookingManagementApi.md#retrieve) | **GET** /bookings/{bookingId} | Booking retrieve |


## `cancel()`

```php
cancel($booking_id): \Nuitee\Model\CancelResponse
```

Booking cancel

<!-- theme: danger --> This API is used to request a cancellation of an existing confirmed booking. Cancellation policies and conditions will be used to determine the success of the cancellation. For example a booking with non-refundable (NRFN) tag or a booking with a cancellation policy that was requested past the cancellation date will not be able to cancel the confirmed booking.

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

$apiInstance = new Nuitee\Api\BookingManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    // new GuzzleHttp\Client(),
    $config
);

$booking_id = "hSq2gVDrf"; // (Required) The unique identifier of the booking you would like to update.

try {
    $result = $apiInstance->cancel(
        booking_id: $booking_id
    );
    print_r($result->$getData());
    print_r($result->$getSandbox());
} catch (\Exception $e) {
    echo 'Exception when calling BookingManagementApi->cancel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **booking_id** | **string**| (Required) The unique identifier of the booking you would like to update. | |

### Return type

[**\Nuitee\Model\CancelResponse**](../Model/CancelResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listBookings()`

```php
listBookings($guest_id): \Nuitee\Model\ListBookingsResponse
```

Booking list

The API returns the list of booking Id's for a given guest Id.

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

$apiInstance = new Nuitee\Api\BookingManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    // new GuzzleHttp\Client(),
    $config
);

$guest_id = "FrT56hfty"; // The Guest Id of the user

try {
    $result = $apiInstance->listBookings(
        guest_id: $guest_id
    );
    print_r($result->$getData());
} catch (\Exception $e) {
    echo 'Exception when calling BookingManagementApi->listBookings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **guest_id** | **string**| The Guest Id of the user | |

### Return type

[**\Nuitee\Model\ListBookingsResponse**](../Model/ListBookingsResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrieve()`

```php
retrieve($booking_id): \Nuitee\Model\RetrieveResponse
```

Booking retrieve

The API returns the status and the details for the a specific booking Id.

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

$apiInstance = new Nuitee\Api\BookingManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    // new GuzzleHttp\Client(),
    $config
);

$booking_id = " hSq2gVDrf"; // The Booking Id that needs to be retrieved

try {
    $result = $apiInstance->retrieve(
        booking_id: $booking_id
    );
    print_r($result->$getData());
} catch (\Exception $e) {
    echo 'Exception when calling BookingManagementApi->retrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **booking_id** | **string**| The Booking Id that needs to be retrieved | |

### Return type

[**\Nuitee\Model\RetrieveResponse**](../Model/RetrieveResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
