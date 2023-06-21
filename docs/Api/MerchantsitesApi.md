# SkipPay\MerchantsitesApi

All URIs are relative to https://api.partner.mallpay.cz.

Method | HTTP request | Description
------------- | ------------- | -------------
[**applicationnotification()**](MerchantsitesApi.md#applicationnotification) | **POST** /financing/v1/{application.merchantUrls.notificationEndpoint} | Application notification
[**paymentnotification()**](MerchantsitesApi.md#paymentnotification) | **POST** /financing/v1/{application.merchantUrls.paymentEndpoint} | Payment notification


## `applicationnotification()`

```php
applicationnotification($applicationMerchantUrlsNotificationEndpoint, $applicationBaseResponse): \SkipPay\Model\Applicationnotificationresponse
```

Application notification

We use this resource when there is need to let you know about important changes within particular *application*. Namely in following situations:  | Financing type     | Supported | | ---                | ---       | | `DEFERRED_PAYMENT` | YES       | | `PAY_IN_THREE`     | YES       |  > IMPORTANT NOTE: This service should be developed and exposed by partner e-shops to allow Skip Pay to asynchronously inform these partners about important changes regarding particular applications.  | Trigger                                                             | Corresponding Application.stateReason | Expected reaction                                                                        | | ---                                                                 | ---                                   | ---                                                                                      | | Application was rejected                                            | `REJECTED`                            | You should probably cancel respective order and release reserved goods                   | | Application was cancelled                                           | `CANCELLED_NOT_PAID`                  | You should probably cancel respective order and release reserved goods                   | | Order to dispatch (we commit to finance customer's order)           | `READY_TO_SHIP`                       | Dispatch the order to the customer                                                       | | Order dispatched                                                    | `READY_SHIPPED`                       | None - serves as an acknowledgment (partner should know about this change)               | | Order delivered                                                     | `READY_DELIVERED`                     | None - serves as an acknowledgment (partner should know about this change)               | | Application was paid to the partner                                 | `READY_PAID`                          | Financial compensation for the application has been processed - check your bank account  |  > NOTE: READY_PAID state is set when at least part of the application price was paid to the partner, not necessarily full application price. This also applies to the `Application was paid to the partner` application notification trigger.  We fill the request with following information:  - Application unique ID  - Application state  - Application substate  > IMPORTANT: You should always double check the state of Application on `/financing/v1/applications/{applicationId}` resource due to security reasons.  If notification is not processed due to error or unavailability it is automatically sent again (retried) after 1, 5, 5, 5 a 5 minutes by default (5 tries in total).Notify partner about changes in application.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: httpBearer
$config = SkipPay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SkipPay\Api\MerchantsitesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationMerchantUrlsNotificationEndpoint = 'applicationMerchantUrlsNotificationEndpoint_example'; // string | application.merchantUrls.notificationEndpoint
$applicationBaseResponse = new \SkipPay\Model\ApplicationBaseResponse(); // \SkipPay\Model\ApplicationBaseResponse

try {
    $result = $apiInstance->applicationnotification($applicationMerchantUrlsNotificationEndpoint, $applicationBaseResponse);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantsitesApi->applicationnotification: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationMerchantUrlsNotificationEndpoint** | **string**| application.merchantUrls.notificationEndpoint |
 **applicationBaseResponse** | [**\SkipPay\Model\ApplicationBaseResponse**](../Model/ApplicationBaseResponse.md)|  | [optional]

### Return type

[**\SkipPay\Model\Applicationnotificationresponse**](../Model/Applicationnotificationresponse.md)

### Authorization

[httpBearer](../../README.md#httpBearer)

### HTTP request headers

- **Content-Type**: `application/json; charset=utf-8`
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `paymentnotification()`

```php
paymentnotification($applicationMerchantUrlsPaymentEndpoint, $payment): \SkipPay\Model\Paymentnotificationresponse
```

Payment notification

| Financing type     | Supported | | ---                | ---       | | `DEFERRED_PAYMENT` | YES       | | `PAY_IN_THREE`     | YES       |Notification about new payment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: httpBearer
$config = SkipPay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SkipPay\Api\MerchantsitesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationMerchantUrlsPaymentEndpoint = 'applicationMerchantUrlsPaymentEndpoint_example'; // string | application.merchantUrls.paymentEndpoint
$payment = new \SkipPay\Model\Payment(); // \SkipPay\Model\Payment | 

try {
    $result = $apiInstance->paymentnotification($applicationMerchantUrlsPaymentEndpoint, $payment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantsitesApi->paymentnotification: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationMerchantUrlsPaymentEndpoint** | **string**| application.merchantUrls.paymentEndpoint |
 **payment** | [**\SkipPay\Model\Payment**](../Model/Payment.md)|  | [optional]

### Return type

[**\SkipPay\Model\Paymentnotificationresponse**](../Model/Paymentnotificationresponse.md)

### Authorization

[httpBearer](../../README.md#httpBearer)

### HTTP request headers

- **Content-Type**: `application/json; charset=utf-8`
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
