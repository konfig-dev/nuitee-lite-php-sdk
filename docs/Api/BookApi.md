# Nuitee\BookApi

All URIs are relative to https://api.liteapi.travel/v1.0, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**book()**](BookApi.md#book) | **POST** /rates/book | hotel rate book |
| [**prebook()**](BookApi.md#prebook) | **POST** /rates/prebook | hotel rate prebook |


## `book()`

```php
book($book_request): \Nuitee\Model\BookResponse
```

hotel rate book

This API confirms a booking when the prebook Id and the rate Id from the pre book stage along with the guest and payment information are passed.  The guest information is an object that should include the guest first name, last name and email.  The payment information is an object that should include the name, credit card number, expiry and CVC number.  The response will confirm the booking along with a booking Id and a hotel confirmation code. It will also include the booking details including the dates, price and the cancellation policies.

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

$apiInstance = new Nuitee\Api\BookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    // new GuzzleHttp\Client(),
    $config
);

$book_request = new \Nuitee\Model\BookRequest([
        "prebook_id" => "prebook_id_example",
    ]);

try {
    $result = $apiInstance->book(
        book_request: $book_request
    );
    print_r($result->$getData());
    print_r($result->$getGuestLevel());
    print_r($result->$getSandbox());
} catch (\Exception $e) {
    echo 'Exception when calling BookApi->book: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **book_request** | [**\Nuitee\Model\BookRequest**](../Model/BookRequest.md)|  | [optional] |

### Return type

[**\Nuitee\Model\BookResponse**](../Model/BookResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `prebook()`

```php
prebook($prebook_request): \Nuitee\Model\PrebookResponse
```

hotel rate prebook

This API is used to confirm if the room and rates for the search criterion. The input to the endpoint is a specific rate Id coming from the **GET** hotel full rates availability API.   In response, the API generates a prebook Id, a new rate Id and contains information if  price, cancellation policy or boarding information has changed.

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

$apiInstance = new Nuitee\Api\BookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    // new GuzzleHttp\Client(),
    $config
);

$prebook_request = new \Nuitee\Model\PrebookRequest([
        "rate_id" => "rate_id_example",
    ]);

try {
    $result = $apiInstance->prebook(
        prebook_request: $prebook_request
    );
    print_r($result->$getData());
    print_r($result->$getGuestLevel());
    print_r($result->$getSandbox());
} catch (\Exception $e) {
    echo 'Exception when calling BookApi->prebook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **prebook_request** | [**\Nuitee\Model\PrebookRequest**](../Model/PrebookRequest.md)|  | [optional] |

### Return type

[**\Nuitee\Model\PrebookResponse**](../Model/PrebookResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
