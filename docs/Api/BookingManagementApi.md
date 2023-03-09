# Nuitee\BookingManagementApi

All URIs are relative to https://api.nlite.ml/v1.0, except if the operation defines another base path.

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

This endpoint allows you to cancel a booking based on a booking ID. The refund amount is based on the cancellation policies. <!-- theme: danger -->

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = Nuitee\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nuitee\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Nuitee\Api\BookingManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    // new GuzzleHttp\Client(),
    $config
);

$booking_id = "SEMkJ9lNM";

try {
    $result = $apiInstance->cancel(
        booking_id: $booking_id
    );
    print_r($result);
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

[ApiKeyAuth](../../README.md#ApiKeyAuth)

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

List bookings by guestId

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = Nuitee\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nuitee\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Nuitee\Api\BookingManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    // new GuzzleHttp\Client(),
    $config
);

$guest_id = "guestId_example";

try {
    $result = $apiInstance->listBookings(
        guest_id: $guest_id
    );
    print_r($result);
} catch (\Exception $e) {
    echo 'Exception when calling BookingManagementApi->listBookings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **guest_id** | **string**| guest id of bookings | |

### Return type

[**\Nuitee\Model\ListBookingsResponse**](../Model/ListBookingsResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

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

This endpoint allows you to retrieve all the information for specific booking ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = Nuitee\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nuitee\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Nuitee\Api\BookingManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    // new GuzzleHttp\Client(),
    $config
);

$booking_id = "SEMkJ9lNM";

try {
    $result = $apiInstance->retrieve(
        booking_id: $booking_id
    );
    print_r($result);
} catch (\Exception $e) {
    echo 'Exception when calling BookingManagementApi->retrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **booking_id** | **string**| (Required) The unique identifier of the booking you would like to update. | |

### Return type

[**\Nuitee\Model\RetrieveResponse**](../Model/RetrieveResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
