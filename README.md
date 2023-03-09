# nuitee-lite-php-sdk

lite api hotel booking api


## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/konfig-dev/nuitee-lite-sdks/tree/main/php.git"
    }
  ],
  "require": {
    "konfig-dev/nuitee-lite-sdks/tree/main/php": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/nuitee-lite-php-sdk/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## API Endpoints

All URIs are relative to *https://api.nlite.ml/v1.0*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*BookApi* | [**book**](docs/Api/BookApi.md#book) | **POST** /rates/book | Hotel rate book
*BookApi* | [**prebook**](docs/Api/BookApi.md#prebook) | **POST** /rates/prebook | Hotel rate prebook
*BookingManagementApi* | [**cancel**](docs/Api/BookingManagementApi.md#cancel) | **PUT** /bookings/{bookingId} | Booking cancel
*BookingManagementApi* | [**listBookings**](docs/Api/BookingManagementApi.md#listbookings) | **GET** /bookings | Booking list
*BookingManagementApi* | [**retrieve**](docs/Api/BookingManagementApi.md#retrieve) | **GET** /bookings/{bookingId} | Booking retrieve
*SearchApi* | [**getHotelRates**](docs/Api/SearchApi.md#gethotelrates) | **GET** /hotels/rates | Hotel full rate availability
*SearchApi* | [**getHotels**](docs/Api/SearchApi.md#gethotels) | **GET** /hotels | Hotel minimum rate availability
*StaticDataApi* | [**listCities**](docs/Api/StaticDataApi.md#listcities) | **GET** /data/cities | City list
*StaticDataApi* | [**listCountries**](docs/Api/StaticDataApi.md#listcountries) | **GET** /data/countries | Country list
*StaticDataApi* | [**listCurrencies**](docs/Api/StaticDataApi.md#listcurrencies) | **GET** /data/currencies | Currency list
*StaticDataApi* | [**listHotels**](docs/Api/StaticDataApi.md#listhotels) | **GET** /data/hotels | Hotel list
*StaticDataApi* | [**listIataCodes**](docs/Api/StaticDataApi.md#listiatacodes) | **GET** /data/iataCodes | IATA code list

## Models

- [Book400Response](docs/Model/Book400Response.md)
- [Book400ResponseError](docs/Model/Book400ResponseError.md)
- [Book401Response](docs/Model/Book401Response.md)
- [Book500Response](docs/Model/Book500Response.md)
- [BookRequest](docs/Model/BookRequest.md)
- [BookRequestGuestInfo](docs/Model/BookRequestGuestInfo.md)
- [BookResponse](docs/Model/BookResponse.md)
- [BookResponseData](docs/Model/BookResponseData.md)
- [BookResponseDataBookedRoomsInner](docs/Model/BookResponseDataBookedRoomsInner.md)
- [BookResponseDataBookedRoomsInnerRate](docs/Model/BookResponseDataBookedRoomsInnerRate.md)
- [BookResponseDataBookedRoomsInnerRateRetailRate](docs/Model/BookResponseDataBookedRoomsInnerRateRetailRate.md)
- [BookResponseDataBookedRoomsInnerRoomType](docs/Model/BookResponseDataBookedRoomsInnerRoomType.md)
- [BookResponseDataCancellation](docs/Model/BookResponseDataCancellation.md)
- [BookResponseDataCancellationFee](docs/Model/BookResponseDataCancellationFee.md)
- [BookResponseDataCancellationFeePrice](docs/Model/BookResponseDataCancellationFeePrice.md)
- [BookResponseDataCancellationPolicies](docs/Model/BookResponseDataCancellationPolicies.md)
- [BookResponseDataGuestInfo](docs/Model/BookResponseDataGuestInfo.md)
- [BookResponseDataHotel](docs/Model/BookResponseDataHotel.md)
- [BookResponseDataHotelAddress](docs/Model/BookResponseDataHotelAddress.md)
- [BookResponseDataHotelLocation](docs/Model/BookResponseDataHotelLocation.md)
- [Cancel400Response](docs/Model/Cancel400Response.md)
- [Cancel400ResponseError](docs/Model/Cancel400ResponseError.md)
- [Cancel401Response](docs/Model/Cancel401Response.md)
- [Cancel500Response](docs/Model/Cancel500Response.md)
- [Cancel500ResponseError](docs/Model/Cancel500ResponseError.md)
- [CancelResponse](docs/Model/CancelResponse.md)
- [GetHotelRates400Response](docs/Model/GetHotelRates400Response.md)
- [GetHotelRates401Response](docs/Model/GetHotelRates401Response.md)
- [GetHotelRatesResponse](docs/Model/GetHotelRatesResponse.md)
- [GetHotelRatesResponseDataInner](docs/Model/GetHotelRatesResponseDataInner.md)
- [GetHotelRatesResponseDataInnerRoomTypesInner](docs/Model/GetHotelRatesResponseDataInnerRoomTypesInner.md)
- [GetHotelRatesResponseDataInnerRoomTypesInnerRatesInner](docs/Model/GetHotelRatesResponseDataInnerRoomTypesInnerRatesInner.md)
- [GetHotelRatesResponseDataInnerRoomTypesInnerRatesInnerCancellationPolicies](docs/Model/GetHotelRatesResponseDataInnerRoomTypesInnerRatesInnerCancellationPolicies.md)
- [GetHotelRatesResponseDataInnerRoomTypesInnerRatesInnerCancellationPoliciesCancelPolicyInfosInner](docs/Model/GetHotelRatesResponseDataInnerRoomTypesInnerRatesInnerCancellationPoliciesCancelPolicyInfosInner.md)
- [GetHotelRatesResponseDataInnerRoomTypesInnerRatesInnerRetailRate](docs/Model/GetHotelRatesResponseDataInnerRoomTypesInnerRatesInnerRetailRate.md)
- [GetHotelRatesResponseDataInnerRoomTypesInnerRatesInnerRetailRateTaxesAndFeesInner](docs/Model/GetHotelRatesResponseDataInnerRoomTypesInnerRatesInnerRetailRateTaxesAndFeesInner.md)
- [GetHotelRatesResponseDataInnerRoomTypesInnerRatesInnerRetailRateTotalInner](docs/Model/GetHotelRatesResponseDataInnerRoomTypesInnerRatesInnerRetailRateTotalInner.md)
- [GetHotels400Response](docs/Model/GetHotels400Response.md)
- [GetHotels400ResponseError](docs/Model/GetHotels400ResponseError.md)
- [GetHotels401Response](docs/Model/GetHotels401Response.md)
- [GetHotels401ResponseError](docs/Model/GetHotels401ResponseError.md)
- [GetHotelsResponse](docs/Model/GetHotelsResponse.md)
- [GetHotelsResponseDataInner](docs/Model/GetHotelsResponseDataInner.md)
- [ListBookingsResponse](docs/Model/ListBookingsResponse.md)
- [ListBookingsResponseDataInner](docs/Model/ListBookingsResponseDataInner.md)
- [ListCitiesResponse](docs/Model/ListCitiesResponse.md)
- [ListCitiesResponseDataInner](docs/Model/ListCitiesResponseDataInner.md)
- [ListCountriesResponse](docs/Model/ListCountriesResponse.md)
- [ListCountriesResponseDataInner](docs/Model/ListCountriesResponseDataInner.md)
- [ListCurrenciesResponse](docs/Model/ListCurrenciesResponse.md)
- [ListCurrenciesResponseDataInner](docs/Model/ListCurrenciesResponseDataInner.md)
- [ListHotels400Response](docs/Model/ListHotels400Response.md)
- [ListHotels400ResponseError](docs/Model/ListHotels400ResponseError.md)
- [ListHotels401Response](docs/Model/ListHotels401Response.md)
- [ListHotelsResponse](docs/Model/ListHotelsResponse.md)
- [ListHotelsResponseDataInner](docs/Model/ListHotelsResponseDataInner.md)
- [ListIataCodesResponse](docs/Model/ListIataCodesResponse.md)
- [ListIataCodesResponseDataInner](docs/Model/ListIataCodesResponseDataInner.md)
- [Prebook401Response](docs/Model/Prebook401Response.md)
- [PrebookRequest](docs/Model/PrebookRequest.md)
- [PrebookResponse](docs/Model/PrebookResponse.md)
- [PrebookResponseData](docs/Model/PrebookResponseData.md)
- [PrebookResponseDataRoomTypesInner](docs/Model/PrebookResponseDataRoomTypesInner.md)
- [PrebookResponseDataRoomTypesInnerRatesInner](docs/Model/PrebookResponseDataRoomTypesInnerRatesInner.md)
- [PrebookResponseDataRoomTypesInnerRatesInnerCancellationPolicies](docs/Model/PrebookResponseDataRoomTypesInnerRatesInnerCancellationPolicies.md)
- [PrebookResponseDataRoomTypesInnerRatesInnerCancellationPoliciesCancelPolicyInfosInner](docs/Model/PrebookResponseDataRoomTypesInnerRatesInnerCancellationPoliciesCancelPolicyInfosInner.md)
- [PrebookResponseDataRoomTypesInnerRatesInnerRetailRate](docs/Model/PrebookResponseDataRoomTypesInnerRatesInnerRetailRate.md)
- [Retrieve400Response](docs/Model/Retrieve400Response.md)
- [Retrieve400ResponseError](docs/Model/Retrieve400ResponseError.md)
- [RetrieveResponse](docs/Model/RetrieveResponse.md)
- [RetrieveResponseData](docs/Model/RetrieveResponseData.md)
- [RetrieveResponseDataBookedRoomsInner](docs/Model/RetrieveResponseDataBookedRoomsInner.md)
- [RetrieveResponseDataBookedRoomsInnerRate](docs/Model/RetrieveResponseDataBookedRoomsInnerRate.md)
- [RetrieveResponseDataBookedRoomsInnerRoomType](docs/Model/RetrieveResponseDataBookedRoomsInnerRoomType.md)
- [RetrieveResponseDataCancellationPolicies](docs/Model/RetrieveResponseDataCancellationPolicies.md)
- [RetrieveResponseDataGuestInfo](docs/Model/RetrieveResponseDataGuestInfo.md)

## Authorization

### ApiKeyAuth

- **Type**: API key
- **API key parameter name**: X-API-Key
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by [Konfig](https://konfigthis.com):

- API version: `1.0.0`
    - Package version: `1.1.0`
