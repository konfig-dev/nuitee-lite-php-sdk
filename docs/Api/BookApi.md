# Nuitee\BookApi

All URIs are relative to https://api.nlite.ml/v1.0, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**book()**](BookApi.md#book) | **POST** /rates/book | Hotel rate book |
| [**prebook()**](BookApi.md#prebook) | **POST** /rates/prebook | Hotel rate prebook |


## `book()`

```php
book($book_request): \Nuitee\Model\BookResponse
```

Hotel rate book

This endpoint allows you to send a specific prebook ID along with the email to confirm the booking for a specific room in a specific hotel.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = Nuitee\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nuitee\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Nuitee\Api\BookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    // new GuzzleHttp\Client(),
    $config
);

$book_request = [
        "prebook_id" => "v43KK76NH",
        "session_id" => "GIYDEMZNGAZS2MJVPQZDAMRTFUYDGLJRGZ6DC7BRGIWDS7CNIF6HYMLEMRWV6Z3EKNXGC",
        "rate_id" => "2_3P6L4TRYIFKLFM3DRKUQ4SBFCSO3QJBU27UQ76RU6HTAVUULOUZN3HLFLDS6HRUUQXXZNPELVXHLEXZF3J26PGYXGZEMZOPATZGAUBZLMB7BR6OL7QW4FIAIWTOCOLVHBIRGQFE7UJLTQP5RB6AXVPADIRT34YR56BBBSLSAWK2BMTRYBFRZCYG6HQKMULTSO6JIWWTEGVSBOHNFO7KTFXFMGCULXME2B4PZDCFWK62PT3EL4XUVOEB37V2EA7CWJKOZZU4OYDFB36YWUCID6LWVCCRMVU4PYZH2WBTJ6SLVVEGVZHTVGCVXA5GXEOCUE4ARMWXCIGRPASA5WBFI2T557GWUUZ6YMBZZMPUPCWI7DVO2OG6KY36WWASVBLEJRYFHJRRGQKDV5HY6INAD3YARYKVNFMITJ6BX5LVBVXNF33OZF34ZQDE5S74ND73FMHCYSSTZFOBCOBKYDHQ5BWGRYS7GALROITVAFG2OIFSXLUSKRT3MEURPJL7S3MHWEJMAYJFGGPMRZBEQZXAXDJI",
    ];

try {
    $result = $apiInstance->book(
        book_request: $book_request
    );
    print_r($result);
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

[ApiKeyAuth](../../README.md#ApiKeyAuth)

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

Hotel rate prebook

This endpoint allows you to send a specific rate ID along with the session ID to confirm the room availability, rates and cancellation policies in the response. A prebook-id is also part of the response which can be used to book a specific room in a hotel.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = Nuitee\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Nuitee\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Nuitee\Api\BookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    // new GuzzleHttp\Client(),
    $config
);

$prebook_request = [
        "session_id" => "GIYDEMZNGAZS2MJVPQZDAMRTFUYDGLJRGZ6DC7BRGIWDS7CNIF6HYMLEMRWV6Z3EKNXGC",
        "rate_id" => "2_3P6L4TRYIFKLFM3DRKUQ4SBFCSO3QJBU27UQ76RU6HTAVUULOUZN3HLFLDS6HRUUQXXZNPELVXHLEXZF3J26PGYXGZEMZOPATZGAUBZLMB7BR6OL7QW4FIAIWTOCOLVHBIRGQFE7UJLTQP5RB6AXVPADIRT34YR56BBBSLSAWK2BMTRYBFRZCYG6HQKMULTSO6JIWWTEGVSBOHNFO7KTFXFMGCULXME2B4PZDCFWK62PT3EL4XUVOEB37V2EA7CWJKOZZU4OYDFB36YWUCID6LWVCCRMVU4PYZH2WBTJ6SLVVEGVZHTVGCVXA5GXEOCUE4ARMWXCIGRPASA5WBFI2T557GWUUZ6YMBZZMPUPCWI7DVO2OG6KY36WWASVBLEJRYFHJRRGQKDV5HY6INAD3YARYKVNFMITJ6BX5LVBVXNF33OZF34ZQDE5S74ND73FMHCYSSTZFOBCOBKYDHQ5BWGRYS7GALROITVAFG2OIFSXLUSKRT3MEURPJL7S3MHWEJMAYJFGGPMRZBEQZXAXDJI",
    ];

try {
    $result = $apiInstance->prebook(
        prebook_request: $prebook_request
    );
    print_r($result);
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

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
