# nuitee-lite-php-sdk [Packagist](https://packagist.org/packages/konfig/nuitee-lite-php-sdk)

The **Lite API** can be used to to do the following

Get room rates & availability for a set of hotels
Select a specific hotel with room availability and make a booking
Manage the bookings - retrieve and cancel existing bookings
Get static content for hotels, search hotels by destination


## Installation & Usage

### Requirements

PHP ^7.4 or ^8.0

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/konfig-dev/nuitee-lite-php-sdk.git"
    }
  ],
  "require": {
    "konfig/nuitee-lite-php-sdk": "1.6.0"
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

## API Endpoints

All URIs are relative to *https://api.liteapi.travel/v1.0*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*BookApi* | [**book**](docs/Api/BookApi.md#book) | **POST** /rates/book | hotel rate book
*BookApi* | [**prebook**](docs/Api/BookApi.md#prebook) | **POST** /rates/prebook | hotel rate prebook
*BookingManagementApi* | [**cancel**](docs/Api/BookingManagementApi.md#cancel) | **PUT** /bookings/{bookingId} | Booking cancel
*BookingManagementApi* | [**listBookings**](docs/Api/BookingManagementApi.md#listbookings) | **GET** /bookings | Booking list
*BookingManagementApi* | [**retrieve**](docs/Api/BookingManagementApi.md#retrieve) | **GET** /bookings/{bookingId} | Booking retrieve
*GuestAndLoyaltyApi* | [**getGuestId**](docs/Api/GuestAndLoyaltyApi.md#getguestid) | **GET** /guests | guests
*SearchApi* | [**getHotelRates**](docs/Api/SearchApi.md#gethotelrates) | **GET** /hotels/rates | hotel full rates availability
*SearchApi* | [**getHotels**](docs/Api/SearchApi.md#gethotels) | **GET** /hotels | hotel minimum rates availability
*StaticDataApi* | [**getHotel**](docs/Api/StaticDataApi.md#gethotel) | **GET** /data/hotel | Hotel details
*StaticDataApi* | [**listCities**](docs/Api/StaticDataApi.md#listcities) | **GET** /data/cities | City list
*StaticDataApi* | [**listCountries**](docs/Api/StaticDataApi.md#listcountries) | **GET** /data/countries | Country list
*StaticDataApi* | [**listCurrencies**](docs/Api/StaticDataApi.md#listcurrencies) | **GET** /data/currencies | Currency list
*StaticDataApi* | [**listHotels**](docs/Api/StaticDataApi.md#listhotels) | **GET** /data/hotels | Hotel list
*StaticDataApi* | [**listIataCodes**](docs/Api/StaticDataApi.md#listiatacodes) | **GET** /data/iataCodes | IATA code list

## Models

- [Book400Response](docs/Model/Book400Response.md)
- [Book400ResponseData](docs/Model/Book400ResponseData.md)
- [Book400ResponseDataBookedRoomsInner](docs/Model/Book400ResponseDataBookedRoomsInner.md)
- [Book400ResponseDataBookedRoomsInnerRate](docs/Model/Book400ResponseDataBookedRoomsInnerRate.md)
- [Book400ResponseDataBookedRoomsInnerRateRetailRate](docs/Model/Book400ResponseDataBookedRoomsInnerRateRetailRate.md)
- [Book400ResponseDataBookedRoomsInnerRateRetailRateTotal](docs/Model/Book400ResponseDataBookedRoomsInnerRateRetailRateTotal.md)
- [Book400ResponseDataBookedRoomsInnerRoomType](docs/Model/Book400ResponseDataBookedRoomsInnerRoomType.md)
- [Book400ResponseDataCancellation](docs/Model/Book400ResponseDataCancellation.md)
- [Book400ResponseDataCancellationFee](docs/Model/Book400ResponseDataCancellationFee.md)
- [Book400ResponseDataCancellationFeePrice](docs/Model/Book400ResponseDataCancellationFeePrice.md)
- [Book400ResponseDataCancellationPolicies](docs/Model/Book400ResponseDataCancellationPolicies.md)
- [Book400ResponseDataCancellationPoliciesCancelPolicyInfosInner](docs/Model/Book400ResponseDataCancellationPoliciesCancelPolicyInfosInner.md)
- [Book400ResponseDataGuestInfo](docs/Model/Book400ResponseDataGuestInfo.md)
- [Book400ResponseDataHotel](docs/Model/Book400ResponseDataHotel.md)
- [Book400ResponseDataHotelAddress](docs/Model/Book400ResponseDataHotelAddress.md)
- [Book400ResponseDataHotelLocation](docs/Model/Book400ResponseDataHotelLocation.md)
- [Book401Response](docs/Model/Book401Response.md)
- [Book401ResponseData](docs/Model/Book401ResponseData.md)
- [Book401ResponseDataBookedRoomsInner](docs/Model/Book401ResponseDataBookedRoomsInner.md)
- [Book401ResponseDataBookedRoomsInnerRate](docs/Model/Book401ResponseDataBookedRoomsInnerRate.md)
- [Book401ResponseDataBookedRoomsInnerRateRetailRate](docs/Model/Book401ResponseDataBookedRoomsInnerRateRetailRate.md)
- [Book401ResponseDataBookedRoomsInnerRateRetailRateTotal](docs/Model/Book401ResponseDataBookedRoomsInnerRateRetailRateTotal.md)
- [Book401ResponseDataBookedRoomsInnerRoomType](docs/Model/Book401ResponseDataBookedRoomsInnerRoomType.md)
- [Book401ResponseDataCancellation](docs/Model/Book401ResponseDataCancellation.md)
- [Book401ResponseDataCancellationFee](docs/Model/Book401ResponseDataCancellationFee.md)
- [Book401ResponseDataCancellationFeePrice](docs/Model/Book401ResponseDataCancellationFeePrice.md)
- [Book401ResponseDataCancellationPolicies](docs/Model/Book401ResponseDataCancellationPolicies.md)
- [Book401ResponseDataCancellationPoliciesCancelPolicyInfosInner](docs/Model/Book401ResponseDataCancellationPoliciesCancelPolicyInfosInner.md)
- [Book401ResponseDataGuestInfo](docs/Model/Book401ResponseDataGuestInfo.md)
- [Book401ResponseDataHotel](docs/Model/Book401ResponseDataHotel.md)
- [Book401ResponseDataHotelAddress](docs/Model/Book401ResponseDataHotelAddress.md)
- [Book401ResponseDataHotelLocation](docs/Model/Book401ResponseDataHotelLocation.md)
- [BookRequest](docs/Model/BookRequest.md)
- [BookRequestGuestInfo](docs/Model/BookRequestGuestInfo.md)
- [BookRequestPayment](docs/Model/BookRequestPayment.md)
- [BookResponse](docs/Model/BookResponse.md)
- [BookResponseData](docs/Model/BookResponseData.md)
- [BookResponseDataBookedRoomsInner](docs/Model/BookResponseDataBookedRoomsInner.md)
- [BookResponseDataBookedRoomsInnerRate](docs/Model/BookResponseDataBookedRoomsInnerRate.md)
- [BookResponseDataBookedRoomsInnerRateRetailRate](docs/Model/BookResponseDataBookedRoomsInnerRateRetailRate.md)
- [BookResponseDataBookedRoomsInnerRateRetailRateTotal](docs/Model/BookResponseDataBookedRoomsInnerRateRetailRateTotal.md)
- [BookResponseDataBookedRoomsInnerRoomType](docs/Model/BookResponseDataBookedRoomsInnerRoomType.md)
- [BookResponseDataCancellation](docs/Model/BookResponseDataCancellation.md)
- [BookResponseDataCancellationFee](docs/Model/BookResponseDataCancellationFee.md)
- [BookResponseDataCancellationFeePrice](docs/Model/BookResponseDataCancellationFeePrice.md)
- [BookResponseDataCancellationPolicies](docs/Model/BookResponseDataCancellationPolicies.md)
- [BookResponseDataCancellationPoliciesCancelPolicyInfosInner](docs/Model/BookResponseDataCancellationPoliciesCancelPolicyInfosInner.md)
- [BookResponseDataGuestInfo](docs/Model/BookResponseDataGuestInfo.md)
- [BookResponseDataHotel](docs/Model/BookResponseDataHotel.md)
- [BookResponseDataHotelAddress](docs/Model/BookResponseDataHotelAddress.md)
- [BookResponseDataHotelLocation](docs/Model/BookResponseDataHotelLocation.md)
- [Cancel204Response](docs/Model/Cancel204Response.md)
- [Cancel204ResponseData](docs/Model/Cancel204ResponseData.md)
- [Cancel304Response](docs/Model/Cancel304Response.md)
- [Cancel304ResponseData](docs/Model/Cancel304ResponseData.md)
- [Cancel401Response](docs/Model/Cancel401Response.md)
- [Cancel401ResponseData](docs/Model/Cancel401ResponseData.md)
- [CancelResponse](docs/Model/CancelResponse.md)
- [CancelResponseData](docs/Model/CancelResponseData.md)
- [GetGuestId400Response](docs/Model/GetGuestId400Response.md)
- [GetGuestId400ResponseDataInner](docs/Model/GetGuestId400ResponseDataInner.md)
- [GetGuestId401Response](docs/Model/GetGuestId401Response.md)
- [GetGuestId401ResponseDataInner](docs/Model/GetGuestId401ResponseDataInner.md)
- [GetGuestIdResponse](docs/Model/GetGuestIdResponse.md)
- [GetGuestIdResponseDataInner](docs/Model/GetGuestIdResponseDataInner.md)
- [GetHotel400Response](docs/Model/GetHotel400Response.md)
- [GetHotel400ResponseDataInner](docs/Model/GetHotel400ResponseDataInner.md)
- [GetHotel400ResponseDataInnerAdditionalPolicies](docs/Model/GetHotel400ResponseDataInnerAdditionalPolicies.md)
- [GetHotel400ResponseDataInnerAdditionalPoliciesCotsAndExtraBedsInner](docs/Model/GetHotel400ResponseDataInnerAdditionalPoliciesCotsAndExtraBedsInner.md)
- [GetHotel400ResponseDataInnerCheckinCheckoutTimes](docs/Model/GetHotel400ResponseDataInnerCheckinCheckoutTimes.md)
- [GetHotel400ResponseDataInnerHotelFacilitiesInner](docs/Model/GetHotel400ResponseDataInnerHotelFacilitiesInner.md)
- [GetHotel400ResponseDataInnerHotelPhotosInner](docs/Model/GetHotel400ResponseDataInnerHotelPhotosInner.md)
- [GetHotel400ResponseDataInnerLocation](docs/Model/GetHotel400ResponseDataInnerLocation.md)
- [GetHotel401Response](docs/Model/GetHotel401Response.md)
- [GetHotel401ResponseDataInner](docs/Model/GetHotel401ResponseDataInner.md)
- [GetHotel401ResponseDataInnerAdditionalPolicies](docs/Model/GetHotel401ResponseDataInnerAdditionalPolicies.md)
- [GetHotel401ResponseDataInnerAdditionalPoliciesCotsAndExtraBedsInner](docs/Model/GetHotel401ResponseDataInnerAdditionalPoliciesCotsAndExtraBedsInner.md)
- [GetHotel401ResponseDataInnerCheckinCheckoutTimes](docs/Model/GetHotel401ResponseDataInnerCheckinCheckoutTimes.md)
- [GetHotel401ResponseDataInnerHotelFacilitiesInner](docs/Model/GetHotel401ResponseDataInnerHotelFacilitiesInner.md)
- [GetHotel401ResponseDataInnerHotelPhotosInner](docs/Model/GetHotel401ResponseDataInnerHotelPhotosInner.md)
- [GetHotel401ResponseDataInnerLocation](docs/Model/GetHotel401ResponseDataInnerLocation.md)
- [GetHotelRates204Response](docs/Model/GetHotelRates204Response.md)
- [GetHotelRates204ResponseError](docs/Model/GetHotelRates204ResponseError.md)
- [GetHotelRates400Response](docs/Model/GetHotelRates400Response.md)
- [GetHotelRates400ResponseError](docs/Model/GetHotelRates400ResponseError.md)
- [GetHotelRatesResponse](docs/Model/GetHotelRatesResponse.md)
- [GetHotelRatesResponseDataInner](docs/Model/GetHotelRatesResponseDataInner.md)
- [GetHotelRatesResponseDataInnerRoomTypesInner](docs/Model/GetHotelRatesResponseDataInnerRoomTypesInner.md)
- [GetHotelRatesResponseDataInnerRoomTypesInnerRatesInner](docs/Model/GetHotelRatesResponseDataInnerRoomTypesInnerRatesInner.md)
- [GetHotelRatesResponseDataInnerRoomTypesInnerRatesInnerCancellationPolicies](docs/Model/GetHotelRatesResponseDataInnerRoomTypesInnerRatesInnerCancellationPolicies.md)
- [GetHotelRatesResponseDataInnerRoomTypesInnerRatesInnerCancellationPoliciesCancelPolicyInfosInner](docs/Model/GetHotelRatesResponseDataInnerRoomTypesInnerRatesInnerCancellationPoliciesCancelPolicyInfosInner.md)
- [GetHotelRatesResponseDataInnerRoomTypesInnerRatesInnerRetailRate](docs/Model/GetHotelRatesResponseDataInnerRoomTypesInnerRatesInnerRetailRate.md)
- [GetHotelRatesResponseDataInnerRoomTypesInnerRatesInnerRetailRateTaxesAndFees](docs/Model/GetHotelRatesResponseDataInnerRoomTypesInnerRatesInnerRetailRateTaxesAndFees.md)
- [GetHotelRatesResponseDataInnerRoomTypesInnerRatesInnerRetailRateTaxesAndFeesOneOfInner](docs/Model/GetHotelRatesResponseDataInnerRoomTypesInnerRatesInnerRetailRateTaxesAndFeesOneOfInner.md)
- [GetHotelRatesResponseDataInnerRoomTypesInnerRatesInnerRetailRateTotalInner](docs/Model/GetHotelRatesResponseDataInnerRoomTypesInnerRatesInnerRetailRateTotalInner.md)
- [GetHotelResponse](docs/Model/GetHotelResponse.md)
- [GetHotelResponseDataInner](docs/Model/GetHotelResponseDataInner.md)
- [GetHotelResponseDataInnerAdditionalPolicies](docs/Model/GetHotelResponseDataInnerAdditionalPolicies.md)
- [GetHotelResponseDataInnerAdditionalPoliciesCotsAndExtraBedsInner](docs/Model/GetHotelResponseDataInnerAdditionalPoliciesCotsAndExtraBedsInner.md)
- [GetHotelResponseDataInnerCheckinCheckoutTimes](docs/Model/GetHotelResponseDataInnerCheckinCheckoutTimes.md)
- [GetHotelResponseDataInnerHotelFacilitiesInner](docs/Model/GetHotelResponseDataInnerHotelFacilitiesInner.md)
- [GetHotelResponseDataInnerHotelPhotosInner](docs/Model/GetHotelResponseDataInnerHotelPhotosInner.md)
- [GetHotelResponseDataInnerLocation](docs/Model/GetHotelResponseDataInnerLocation.md)
- [GetHotels204Response](docs/Model/GetHotels204Response.md)
- [GetHotels204ResponseDataInner](docs/Model/GetHotels204ResponseDataInner.md)
- [GetHotels400Response](docs/Model/GetHotels400Response.md)
- [GetHotels400ResponseDataInner](docs/Model/GetHotels400ResponseDataInner.md)
- [GetHotels401Response](docs/Model/GetHotels401Response.md)
- [GetHotels401ResponseDataInner](docs/Model/GetHotels401ResponseDataInner.md)
- [GetHotelsResponse](docs/Model/GetHotelsResponse.md)
- [GetHotelsResponseDataInner](docs/Model/GetHotelsResponseDataInner.md)
- [ListBookings204Response](docs/Model/ListBookings204Response.md)
- [ListBookings204ResponseDataInner](docs/Model/ListBookings204ResponseDataInner.md)
- [ListBookings401Response](docs/Model/ListBookings401Response.md)
- [ListBookings401ResponseDataInner](docs/Model/ListBookings401ResponseDataInner.md)
- [ListBookingsResponse](docs/Model/ListBookingsResponse.md)
- [ListBookingsResponseDataInner](docs/Model/ListBookingsResponseDataInner.md)
- [ListCities400Response](docs/Model/ListCities400Response.md)
- [ListCities400ResponseDataInner](docs/Model/ListCities400ResponseDataInner.md)
- [ListCities401Response](docs/Model/ListCities401Response.md)
- [ListCities401ResponseDataInner](docs/Model/ListCities401ResponseDataInner.md)
- [ListCitiesResponse](docs/Model/ListCitiesResponse.md)
- [ListCitiesResponseDataInner](docs/Model/ListCitiesResponseDataInner.md)
- [ListCountries401Response](docs/Model/ListCountries401Response.md)
- [ListCountries401ResponseDataInner](docs/Model/ListCountries401ResponseDataInner.md)
- [ListCountriesResponse](docs/Model/ListCountriesResponse.md)
- [ListCountriesResponseDataInner](docs/Model/ListCountriesResponseDataInner.md)
- [ListCurrencies401Response](docs/Model/ListCurrencies401Response.md)
- [ListCurrencies401ResponseDataInner](docs/Model/ListCurrencies401ResponseDataInner.md)
- [ListCurrenciesResponse](docs/Model/ListCurrenciesResponse.md)
- [ListCurrenciesResponseDataInner](docs/Model/ListCurrenciesResponseDataInner.md)
- [ListHotels400Response](docs/Model/ListHotels400Response.md)
- [ListHotels400ResponseDataInner](docs/Model/ListHotels400ResponseDataInner.md)
- [ListHotels401Response](docs/Model/ListHotels401Response.md)
- [ListHotels401ResponseDataInner](docs/Model/ListHotels401ResponseDataInner.md)
- [ListHotelsResponse](docs/Model/ListHotelsResponse.md)
- [ListHotelsResponseDataInner](docs/Model/ListHotelsResponseDataInner.md)
- [ListIataCodes401Response](docs/Model/ListIataCodes401Response.md)
- [ListIataCodes401ResponseDataInner](docs/Model/ListIataCodes401ResponseDataInner.md)
- [ListIataCodesResponse](docs/Model/ListIataCodesResponse.md)
- [ListIataCodesResponseDataInner](docs/Model/ListIataCodesResponseDataInner.md)
- [Prebook400Response](docs/Model/Prebook400Response.md)
- [Prebook400ResponseData](docs/Model/Prebook400ResponseData.md)
- [Prebook400ResponseDataRoomTypesInner](docs/Model/Prebook400ResponseDataRoomTypesInner.md)
- [Prebook400ResponseDataRoomTypesInnerRatesInner](docs/Model/Prebook400ResponseDataRoomTypesInnerRatesInner.md)
- [Prebook400ResponseDataRoomTypesInnerRatesInnerCancellationPolicies](docs/Model/Prebook400ResponseDataRoomTypesInnerRatesInnerCancellationPolicies.md)
- [Prebook400ResponseDataRoomTypesInnerRatesInnerCancellationPoliciesCancelPolicyInfosInner](docs/Model/Prebook400ResponseDataRoomTypesInnerRatesInnerCancellationPoliciesCancelPolicyInfosInner.md)
- [Prebook400ResponseDataRoomTypesInnerRatesInnerRetailRate](docs/Model/Prebook400ResponseDataRoomTypesInnerRatesInnerRetailRate.md)
- [Prebook400ResponseDataRoomTypesInnerRatesInnerRetailRateTotalInner](docs/Model/Prebook400ResponseDataRoomTypesInnerRatesInnerRetailRateTotalInner.md)
- [Prebook401Response](docs/Model/Prebook401Response.md)
- [Prebook401ResponseData](docs/Model/Prebook401ResponseData.md)
- [Prebook401ResponseDataRoomTypesInner](docs/Model/Prebook401ResponseDataRoomTypesInner.md)
- [Prebook401ResponseDataRoomTypesInnerRatesInner](docs/Model/Prebook401ResponseDataRoomTypesInnerRatesInner.md)
- [Prebook401ResponseDataRoomTypesInnerRatesInnerCancellationPolicies](docs/Model/Prebook401ResponseDataRoomTypesInnerRatesInnerCancellationPolicies.md)
- [Prebook401ResponseDataRoomTypesInnerRatesInnerCancellationPoliciesCancelPolicyInfosInner](docs/Model/Prebook401ResponseDataRoomTypesInnerRatesInnerCancellationPoliciesCancelPolicyInfosInner.md)
- [Prebook401ResponseDataRoomTypesInnerRatesInnerRetailRate](docs/Model/Prebook401ResponseDataRoomTypesInnerRatesInnerRetailRate.md)
- [Prebook401ResponseDataRoomTypesInnerRatesInnerRetailRateTotalInner](docs/Model/Prebook401ResponseDataRoomTypesInnerRatesInnerRetailRateTotalInner.md)
- [PrebookRequest](docs/Model/PrebookRequest.md)
- [PrebookResponse](docs/Model/PrebookResponse.md)
- [PrebookResponseData](docs/Model/PrebookResponseData.md)
- [PrebookResponseDataRoomTypesInner](docs/Model/PrebookResponseDataRoomTypesInner.md)
- [PrebookResponseDataRoomTypesInnerRatesInner](docs/Model/PrebookResponseDataRoomTypesInnerRatesInner.md)
- [PrebookResponseDataRoomTypesInnerRatesInnerCancellationPolicies](docs/Model/PrebookResponseDataRoomTypesInnerRatesInnerCancellationPolicies.md)
- [PrebookResponseDataRoomTypesInnerRatesInnerCancellationPoliciesCancelPolicyInfosInner](docs/Model/PrebookResponseDataRoomTypesInnerRatesInnerCancellationPoliciesCancelPolicyInfosInner.md)
- [PrebookResponseDataRoomTypesInnerRatesInnerRetailRate](docs/Model/PrebookResponseDataRoomTypesInnerRatesInnerRetailRate.md)
- [PrebookResponseDataRoomTypesInnerRatesInnerRetailRateTotalInner](docs/Model/PrebookResponseDataRoomTypesInnerRatesInnerRetailRateTotalInner.md)
- [Retrieve204Response](docs/Model/Retrieve204Response.md)
- [Retrieve204ResponseError](docs/Model/Retrieve204ResponseError.md)
- [Retrieve401Response](docs/Model/Retrieve401Response.md)
- [Retrieve401ResponseError](docs/Model/Retrieve401ResponseError.md)
- [RetrieveResponse](docs/Model/RetrieveResponse.md)
- [RetrieveResponseData](docs/Model/RetrieveResponseData.md)
- [RetrieveResponseDataBookedRoomsInner](docs/Model/RetrieveResponseDataBookedRoomsInner.md)
- [RetrieveResponseDataBookedRoomsInnerRate](docs/Model/RetrieveResponseDataBookedRoomsInnerRate.md)
- [RetrieveResponseDataBookedRoomsInnerRateRetailRate](docs/Model/RetrieveResponseDataBookedRoomsInnerRateRetailRate.md)
- [RetrieveResponseDataBookedRoomsInnerRateRetailRateTotal](docs/Model/RetrieveResponseDataBookedRoomsInnerRateRetailRateTotal.md)
- [RetrieveResponseDataBookedRoomsInnerRoomType](docs/Model/RetrieveResponseDataBookedRoomsInnerRoomType.md)
- [RetrieveResponseDataCancellationPolicies](docs/Model/RetrieveResponseDataCancellationPolicies.md)
- [RetrieveResponseDataCancellationPoliciesCancelPolicyInfos](docs/Model/RetrieveResponseDataCancellationPoliciesCancelPolicyInfos.md)
- [RetrieveResponseDataCancellationPoliciesCancelPolicyInfosOneOfInner](docs/Model/RetrieveResponseDataCancellationPoliciesCancelPolicyInfosOneOfInner.md)
- [RetrieveResponseDataContact](docs/Model/RetrieveResponseDataContact.md)
- [RetrieveResponseDataGuestInfo](docs/Model/RetrieveResponseDataGuestInfo.md)

## Authorization

### apikeyAuth

- **Type**: API key
- **API key parameter name**: X-API-Key
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## About this package

This PHP package is automatically generated by [Konfig](https://konfigthis.com):

- API version: `1.0.0`
    - Package version: `1.6.0`
