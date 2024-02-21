<img src="./docs/logo.webp" width="200" />

## skippay-php-sdk ![composer](https://img.shields.io/github/v/release/skippay/skippay-php-sdk) ![php](https://img.shields.io/badge/php->=%207.4-blue)

 - PHP client for 
API documentation for Skip Pay partners.

- API version: 1.0

For more information, please visit [our developer portal](https://www.developers.skippay.cz) 

## Installation

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
      "url": "https://github.com/skip-pay/skippay-payments-php-sdk"
    }
  ],
  "require": {
    "skippay/skippay-payments-php-sdk": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/skippay-payments-php-sdk/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = SkipPay\Configuration::getDefaultConfiguration();

$authApi = new SkipPay\Api\SecurityApi(
  new GuzzleHttp\Client(),
  $config,
);

$username = 'USER_NAME';
$password = 'PASSWORD';

// Obtain access token
$authResponse = $authApi->loginpartner([
  'username' => $username, 
  'password' => $password
]);

// Configure access token
$config->setAccessToken($authResponse['accessToken']);

$sdk = new SkipPay\Api\Sdk(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 11b00a1ef1; // string | applicationId
$applicationCancelRequest = new \SkipPay\Model\ApplicationCancelRequest(); // \SkipPay\Model\ApplicationCancelRequest

try {
    $result = $sdk->ApplicationOperationsApi->cancelapplication($applicationId, $applicationCancelRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationOperationsApi->cancelapplication: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.partner.skippay.cz*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ApplicationOperationsApi* | [**cancelapplication**](docs/Api/ApplicationOperationsApi.md#cancelapplication) | **PUT** /financing/v1/applications/{applicationId}/cancel | Cancel application
*ApplicationOperationsApi* | [**changeapplicationorder**](docs/Api/ApplicationOperationsApi.md#changeapplicationorder) | **PUT** /financing/v1/applications/{applicationId}/order | Change application order
*ApplicationOperationsApi* | [**createapplication**](docs/Api/ApplicationOperationsApi.md#createapplication) | **POST** /financing/v1/applications | Create application
*ApplicationOperationsApi* | [**createapplicationfromrecurrence**](docs/Api/ApplicationOperationsApi.md#createapplicationfromrecurrence) | **POST** /financing/v1/recurrences/{recurrenceId}/applications | Create application from recurrence
*ApplicationOperationsApi* | [**getapplicationdetail**](docs/Api/ApplicationOperationsApi.md#getapplicationdetail) | **GET** /financing/v1/applications/{applicationId} | Get application detail
*ApplicationOperationsApi* | [**getorder**](docs/Api/ApplicationOperationsApi.md#getorder) | **GET** /financing/v1/orders | Get order
*ApplicationOperationsApi* | [**getpaymentsonspecificapplication**](docs/Api/ApplicationOperationsApi.md#getpaymentsonspecificapplication) | **GET** /financing/v1/applications/{applicationId}/payments | Get payments on specific application
*ApplicationOperationsApi* | [**getrecurrence**](docs/Api/ApplicationOperationsApi.md#getrecurrence) | **GET** /financing/v1/recurrences/{recurrenceId} | Get recurrence
*ApplicationOperationsApi* | [**markorderitemsascancelled**](docs/Api/ApplicationOperationsApi.md#markorderitemsascancelled) | **PUT** /financing/v1/applications/{applicationId}/order/cancel | Mark order items as cancelled
*ApplicationOperationsApi* | [**markorderitemsasdelivered**](docs/Api/ApplicationOperationsApi.md#markorderitemsasdelivered) | **PUT** /financing/v1/applications/{applicationId}/order/deliver | Mark order items as delivered
*ApplicationOperationsApi* | [**markorderitemsasreturned**](docs/Api/ApplicationOperationsApi.md#markorderitemsasreturned) | **PUT** /financing/v1/applications/{applicationId}/order/return | Mark order items as returned
*ApplicationOperationsApi* | [**markorderitemsassent**](docs/Api/ApplicationOperationsApi.md#markorderitemsassent) | **PUT** /financing/v1/applications/{applicationId}/order/send | Mark order items as sent
*ApplicationOperationsApi* | [**updaterecurrence**](docs/Api/ApplicationOperationsApi.md#updaterecurrence) | **PATCH** /financing/v1/recurrences/{recurrenceId} | Update recurrence
*HealthCheckApi* | [**aPIhealthcheck**](docs/Api/HealthCheckApi.md#apihealthcheck) | **GET** /v1/health | API health check
*PrecheckOperationsApi* | [**precheck**](docs/Api/PrecheckOperationsApi.md#precheck) | **POST** /financing/v1/precheck | Precheck
*SecurityApi* | [**loginpartner**](docs/Api/SecurityApi.md#loginpartner) | **POST** /authentication/v1/partner | Login partner

## Models

- [AccountNumber](docs/Model/AccountNumber.md)
- [Address](docs/Model/Address.md)
- [AddressType](docs/Model/AddressType.md)
- [Amount](docs/Model/Amount.md)
- [ApplicationBaseResponse](docs/Model/ApplicationBaseResponse.md)
- [ApplicationCancelRequest](docs/Model/ApplicationCancelRequest.md)
- [ApplicationOrderChangeRequest](docs/Model/ApplicationOrderChangeRequest.md)
- [ApplicationRequest](docs/Model/ApplicationRequest.md)
- [ApplicationRequestAllOf](docs/Model/ApplicationRequestAllOf.md)
- [ApplicationResponse](docs/Model/ApplicationResponse.md)
- [ApplicationResponseAllOf](docs/Model/ApplicationResponseAllOf.md)
- [ApplicationWithoutCustomerRequest](docs/Model/ApplicationWithoutCustomerRequest.md)
- [ChangeOrderItemRequestSerializer](docs/Model/ChangeOrderItemRequestSerializer.md)
- [CustomerBase](docs/Model/CustomerBase.md)
- [CustomerExtraData](docs/Model/CustomerExtraData.md)
- [CustomerRequest](docs/Model/CustomerRequest.md)
- [CustomerRequestAllOf](docs/Model/CustomerRequestAllOf.md)
- [CustomerResponse](docs/Model/CustomerResponse.md)
- [CustomerResponseAllOf](docs/Model/CustomerResponseAllOf.md)
- [DeliveryCarrier](docs/Model/DeliveryCarrier.md)
- [DeliveryCarrierDefault](docs/Model/DeliveryCarrierDefault.md)
- [DeliveryType](docs/Model/DeliveryType.md)
- [DocumentExtraData](docs/Model/DocumentExtraData.md)
- [DocumentRequest](docs/Model/DocumentRequest.md)
- [DocumentResponse](docs/Model/DocumentResponse.md)
- [DocumentSerializer](docs/Model/DocumentSerializer.md)
- [ErrorsResponse](docs/Model/ErrorsResponse.md)
- [ErrorsResponseErrorsInner](docs/Model/ErrorsResponseErrorsInner.md)
- [FileRequest](docs/Model/FileRequest.md)
- [FileResponse](docs/Model/FileResponse.md)
- [FinancingType](docs/Model/FinancingType.md)
- [Getpaymentsonspecificapplicationresponse](docs/Model/Getpaymentsonspecificapplicationresponse.md)
- [HealthCheckResponse](docs/Model/HealthCheckResponse.md)
- [InvoiceInfo](docs/Model/InvoiceInfo.md)
- [ItemType](docs/Model/ItemType.md)
- [Limits](docs/Model/Limits.md)
- [MerchantUrls](docs/Model/MerchantUrls.md)
- [OrderBase](docs/Model/OrderBase.md)
- [OrderChangeRequest](docs/Model/OrderChangeRequest.md)
- [OrderCustomerSerializer](docs/Model/OrderCustomerSerializer.md)
- [OrderDeliveryState](docs/Model/OrderDeliveryState.md)
- [OrderExtendedResponse](docs/Model/OrderExtendedResponse.md)
- [OrderExtendedResponseAllOf](docs/Model/OrderExtendedResponseAllOf.md)
- [OrderItemBase](docs/Model/OrderItemBase.md)
- [OrderItemRequest](docs/Model/OrderItemRequest.md)
- [OrderItemRequestAllOf](docs/Model/OrderItemRequestAllOf.md)
- [OrderItemResponse](docs/Model/OrderItemResponse.md)
- [OrderItemResponseAllOf](docs/Model/OrderItemResponseAllOf.md)
- [OrderItemsChangeRequest](docs/Model/OrderItemsChangeRequest.md)
- [OrderItemsChangeRequestTotalPrice](docs/Model/OrderItemsChangeRequestTotalPrice.md)
- [OrderItemsDeliverRequest](docs/Model/OrderItemsDeliverRequest.md)
- [OrderItemsDeliverRequestAllOf](docs/Model/OrderItemsDeliverRequestAllOf.md)
- [OrderItemsReturnRequest](docs/Model/OrderItemsReturnRequest.md)
- [OrderItemsReturnRequestAllOf](docs/Model/OrderItemsReturnRequestAllOf.md)
- [OrderItemsSendRequest](docs/Model/OrderItemsSendRequest.md)
- [OrderItemsSendRequestAllOf](docs/Model/OrderItemsSendRequestAllOf.md)
- [OrderRequest](docs/Model/OrderRequest.md)
- [OrderRequestAllOf](docs/Model/OrderRequestAllOf.md)
- [OrderResponse](docs/Model/OrderResponse.md)
- [OrderResponseAllOf](docs/Model/OrderResponseAllOf.md)
- [PagingInfo](docs/Model/PagingInfo.md)
- [PartnerLogin](docs/Model/PartnerLogin.md)
- [PartnerLoginResult](docs/Model/PartnerLoginResult.md)
- [Payment](docs/Model/Payment.md)
- [PrecheckAddress](docs/Model/PrecheckAddress.md)
- [PrecheckCustomerRequest](docs/Model/PrecheckCustomerRequest.md)
- [PrecheckCustomerRequestAllOf](docs/Model/PrecheckCustomerRequestAllOf.md)
- [PrecheckOrderItemRequest](docs/Model/PrecheckOrderItemRequest.md)
- [PrecheckOrderRequest](docs/Model/PrecheckOrderRequest.md)
- [PrecheckRequest](docs/Model/PrecheckRequest.md)
- [PrecheckResultResponse](docs/Model/PrecheckResultResponse.md)
- [PrecheckResultResponseSerializer](docs/Model/PrecheckResultResponseSerializer.md)
- [PrecheckResultsResponse](docs/Model/PrecheckResultsResponse.md)
- [PrivateFileResponse](docs/Model/PrivateFileResponse.md)
- [RecurrenceObject](docs/Model/RecurrenceObject.md)
- [RecurrenceUpdateRequest](docs/Model/RecurrenceUpdateRequest.md)
- [VatAmount](docs/Model/VatAmount.md)
- [VatAmountAllOf](docs/Model/VatAmountAllOf.md)

## Authorization

### httpBearer

- **Type**: Bearer authentication


## Author

info@skippay.cz

