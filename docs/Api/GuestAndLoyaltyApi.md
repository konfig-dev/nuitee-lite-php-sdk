# Nuitee\GuestAndLoyaltyApi

All URIs are relative to https://api.liteapi.travel/v1.0, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getGuestId()**](GuestAndLoyaltyApi.md#getGuestId) | **GET** /guests | guests |


## `getGuestId()`

```php
getGuestId($email): \Nuitee\Model\GetGuestIdResponse
```

guests

The guests API returns the unique guest ID of a user based on the users email ID

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

$apiInstance = new Nuitee\Api\GuestAndLoyaltyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    // new GuzzleHttp\Client(),
    $config
);

$email = "johndoe@nlite.ml"; // Email ID of the guest

try {
    $result = $apiInstance->getGuestId(
        email: $email
    );
    print_r($result->$getData());
} catch (\Exception $e) {
    echo 'Exception when calling GuestAndLoyaltyApi->getGuestId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **email** | **string**| Email ID of the guest | [optional] |

### Return type

[**\Nuitee\Model\GetGuestIdResponse**](../Model/GetGuestIdResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
