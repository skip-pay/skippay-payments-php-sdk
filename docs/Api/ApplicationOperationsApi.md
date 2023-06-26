# SkipPay\ApplicationOperationsApi

All URIs are relative to https://api.partner.skippay.cz.

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelapplication()**](ApplicationOperationsApi.md#cancelapplication) | **PUT** /financing/v1/applications/{applicationId}/cancel | Cancel application
[**changeapplicationorder()**](ApplicationOperationsApi.md#changeapplicationorder) | **PUT** /financing/v1/applications/{applicationId}/order | Change application order
[**createapplication()**](ApplicationOperationsApi.md#createapplication) | **POST** /financing/v1/applications | Create application
[**createapplicationfromrecurrence()**](ApplicationOperationsApi.md#createapplicationfromrecurrence) | **POST** /financing/v1/recurrences/{recurrenceId}/applications | Create application from recurrence
[**getapplicationdetail()**](ApplicationOperationsApi.md#getapplicationdetail) | **GET** /financing/v1/applications/{applicationId} | Get application detail
[**getorder()**](ApplicationOperationsApi.md#getorder) | **GET** /financing/v1/orders | Get order
[**getpaymentsonspecificapplication()**](ApplicationOperationsApi.md#getpaymentsonspecificapplication) | **GET** /financing/v1/applications/{applicationId}/payments | Get payments on specific application
[**getrecurrence()**](ApplicationOperationsApi.md#getrecurrence) | **GET** /financing/v1/recurrences/{recurrenceId} | Get recurrence
[**markorderitemsascancelled()**](ApplicationOperationsApi.md#markorderitemsascancelled) | **PUT** /financing/v1/applications/{applicationId}/order/cancel | Mark order items as cancelled
[**markorderitemsasdelivered()**](ApplicationOperationsApi.md#markorderitemsasdelivered) | **PUT** /financing/v1/applications/{applicationId}/order/deliver | Mark order items as delivered
[**markorderitemsasreturned()**](ApplicationOperationsApi.md#markorderitemsasreturned) | **PUT** /financing/v1/applications/{applicationId}/order/return | Mark order items as returned
[**markorderitemsassent()**](ApplicationOperationsApi.md#markorderitemsassent) | **PUT** /financing/v1/applications/{applicationId}/order/send | Mark order items as sent
[**updaterecurrence()**](ApplicationOperationsApi.md#updaterecurrence) | **PATCH** /financing/v1/recurrences/{recurrenceId} | Update recurrence


## `cancelapplication()`

```php
cancelapplication($applicationId, $applicationCancelRequest): \SkipPay\Model\ApplicationResponse
```

Cancel application

If there is need to completely cancel customer's *order*, it is necessary to cancel respective *application*. For this purpose use `/financing/v1/applications/{applicationId}/cancel` resource where `{applicationId}` is the application ID you received in the response of `/financing/v1/applications` after its creation.  | Financing type     | Supported | | ---                | ---       | | `DEFERRED_PAYMENT` | YES       | | `PAY_IN_THREE`     | YES       |  | Application state | Availability                                                                                                                                                  | | ---               | ---                                                                                                                                                           | | `REJECTED`        | NO                                                                                                                                                            | | `CANCELLED`       | NO                                                                                                                                                            | | `PROCESSING`      | YES                                                                                                                                                           | | `READY`           | YES *(available only when the Application's order is not marked as sent (via *Mark order items as sent*) or delivered (via *Mark order items as delivered*))  |  If the request was successfully processed, you receive HTTP status code 200 and object of information about cancelled *order* plus basic information about respective *application* (ID, state, substate).  In other cases, you may receive errors similar to the following ones:  | Status code | Code                                  | Explanation                                                                                           | | ---         | ---                                   | ---                                                                                                   | | 400         | `INVALID_REQUEST`                     | Request was not well formatted (malformed request syntax, size too large, etc.)                       | | 404         | `OBJECT_NOT_FOUND`                    | The requested resource could not be found                                                             | | 422         | `UNPROCESSABLE`                       | The request was well-formed but was unable to be followed due to semantic errors                      | | 422         | `APPLICATION_REJECTED`                | When you try to cancel `Application` already `REJECTED`, which is not allowed                         | | 422         | `APPLICATION_ALREADY_CANCELLED`       | When you try to cancel `Application` that has been cancelled already                                  | | 422         | `APPLICATION_VALIDATION_IN_PROGRESS`  | When you try to cancel `Application` which undergoes validation                                       | | 422         | `APPLICATION_PAID`                    | When you try to cancel `Application` already paid, which is not allowed                               | | 422         | `NOT_SUPPORTED`                       | The request was well-formed but server was not able to change application state due internal rules    |Cancel *application*.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: httpBearer
$config = SkipPay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SkipPay\Api\ApplicationOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 11b00a1ef1; // string | applicationId
$applicationCancelRequest = new \SkipPay\Model\ApplicationCancelRequest(); // \SkipPay\Model\ApplicationCancelRequest

try {
    $result = $apiInstance->cancelapplication($applicationId, $applicationCancelRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationOperationsApi->cancelapplication: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **string**| applicationId |
 **applicationCancelRequest** | [**\SkipPay\Model\ApplicationCancelRequest**](../Model/ApplicationCancelRequest.md)|  | [optional]

### Return type

[**\SkipPay\Model\ApplicationResponse**](../Model/ApplicationResponse.md)

### Authorization

[httpBearer](../../README.md#httpBearer)

### HTTP request headers

- **Content-Type**: `application/json; charset=utf-8`
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `changeapplicationorder()`

```php
changeapplicationorder($applicationId, $applicationOrderChangeRequest): \SkipPay\Model\OrderExtendedResponse
```

Change application order

When there's some changes within *order* before delivery (e.g. change in order items that impacts the total price of the *order*, or other billing information), use `/financing/v1/applications/{applicationId}/order` resource in order we can adjust everything properly. `{applicationId}` is the application ID you received in the response of `/financing/v1/applications` after its creation.  | Financing type     | Supported | | ---                | ---       | | `DEFERRED_PAYMENT` | YES       | | `PAY_IN_THREE`     | YES       |  | Application state | Availability | | ---               | ---          | | `REJECTED`        | NO           | | `CANCELLED`       | NO           | | `PROCESSING`      | YES          | | `READY`           | YES *        |  > \\* Order items can't be changed when some of them are marked as sent (via Mark order items as sent) or delivered (via Mark order items as delivered)  Use `/financing/v1/applications/{applicationId}/order` resource with properly filled request that contains (only) changed data (resource allows partial put).  If the request was successfully processed, you receive HTTP status code 200 and object of information about changed *order* plus basic information about respective *application* (ID, state, substate).  In other cases, you may receive errors similar to the following ones:  | Status code | Code                    | Explanation                                                                     | | ---         | ---                     | ---                                                                             | | 400         | `INVALID_REQUEST`       | Request was not well formatted (malformed request syntax, size too large, etc.) | | 404         | `OBJECT_NOT_FOUND`      | The requested resource could not be found                                       | | 422         | `NOT_SUPPORTED`         | Resource is not supported for given financing type                              |Change *order*. Used to change order items, total amount, billing details etc.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: httpBearer
$config = SkipPay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SkipPay\Api\ApplicationOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 11b00a1ef1; // string | applicationId
$applicationOrderChangeRequest = new \SkipPay\Model\ApplicationOrderChangeRequest(); // \SkipPay\Model\ApplicationOrderChangeRequest

try {
    $result = $apiInstance->changeapplicationorder($applicationId, $applicationOrderChangeRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationOperationsApi->changeapplicationorder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **string**| applicationId |
 **applicationOrderChangeRequest** | [**\SkipPay\Model\ApplicationOrderChangeRequest**](../Model/ApplicationOrderChangeRequest.md)|  | [optional]

### Return type

[**\SkipPay\Model\OrderExtendedResponse**](../Model/OrderExtendedResponse.md)

### Authorization

[httpBearer](../../README.md#httpBearer)

### HTTP request headers

- **Content-Type**: `application/json; charset=utf-8`
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createapplication()`

```php
createapplication($applicationRequest): \SkipPay\Model\ApplicationResponse
```

Create application

Elementary flow starts when customer wants to use one of Skip Pay's payment method for financing his purchase made in partner e-shop.  | Financing type     | Supported | | ---                | ---       | | `DEFERRED_PAYMENT` | YES       | | `PAY_IN_THREE`     | YES       |  Use `/financing/v1/applications` resource with properly filled request that contains at least following data  - Customer information   - Name (first name and last name - if possible, otherwise full name)   - E-mail   - Phone number  - Order details   - Number   - Total Price (including VAT)   - Total VAT (array of total amounts split by VAT rates)   - Order items (array, at least one item is required)     - Code     - Order item name     - Total price (all pieces, including VAT)     - Total VAT  - Additional information necessary for the continuation and completion of the process   - Your URL where the customer should be redirected after application approval   - Your URL where the customer should be redirected after application rejection   - URL of your notification endpoint you want us to send you notifications about particular application updates  For best customer experience request should contain following data:  - Customer information   - Extra data     - Historical count of customer's transactions made in partner's e-shop  - Order details   - Delivery carrier information   - Address (type BILLING)     - Country     - City     - Street     - Street number     - ZIP     - Address type   - Order items     - Image  - Personal data processing and terms and conditions agreement  If the request was successfully processed, you receive HTTP status code 201 and *application* object with following important information in the response:  - Application unique ID  - Application state  - Application substate  - Gateway redirect URL where you should redirect a customer after processing of the response  - Recurrence ID if you sent `isRecurring=true` in request (for recurring orders)  If the request was recognized as duplication, you receive HTTP status code 200 and the *application* object created during the first related successful request.  __Note__: If the optional *agreementTermsAndConditions* field was not sent with the request (or it was sent with a value of `false`), the *application* will be created with *agreementTermsAndConditions* value set to `false`, *state* `PROCESSING` and *stateReason* `PROCESSING_REDIRECT_NEEDED`.  In other cases, you may receive errors similar to the following ones:  | Status code | Code                    | Explanation                                                                      | | ---         | ---                     | ---                                                                              | | 400         | `INVALID_REQUEST`       | Request was not well formatted (malformed request syntax, size too large, etc.)  | | 422         | `UNPROCESSABLE`         | Request was well-formed but was unable to be followed due to semantic errors     |Create new *application* of particular financing type

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: httpBearer
$config = SkipPay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SkipPay\Api\ApplicationOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationRequest = new \SkipPay\Model\ApplicationRequest(); // \SkipPay\Model\ApplicationRequest

try {
    $result = $apiInstance->createapplication($applicationRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationOperationsApi->createapplication: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationRequest** | [**\SkipPay\Model\ApplicationRequest**](../Model/ApplicationRequest.md)|  | [optional]

### Return type

[**\SkipPay\Model\ApplicationResponse**](../Model/ApplicationResponse.md)

### Authorization

[httpBearer](../../README.md#httpBearer)

### HTTP request headers

- **Content-Type**: `application/json; charset=utf-8`
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createapplicationfromrecurrence()`

```php
createapplicationfromrecurrence($recurrenceId, $applicationWithoutCustomerRequest): \SkipPay\Model\ApplicationResponse
```

Create application from recurrence

It allows to create application without customer authorization at Skip Pay gate. It needs the recurrence ID to be received previously. This endpoint doesn't need any data about customer.  | Financing type     | Supported | | ---                | ---       | | `DEFERRED_PAYMENT` | YES       | | `PAY_IN_THREE`     | NO        |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: httpBearer
$config = SkipPay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SkipPay\Api\ApplicationOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$recurrenceId = 'recurrenceId_example'; // string | Recurrence ID from first application
$applicationWithoutCustomerRequest = new \SkipPay\Model\ApplicationWithoutCustomerRequest(); // \SkipPay\Model\ApplicationWithoutCustomerRequest

try {
    $result = $apiInstance->createapplicationfromrecurrence($recurrenceId, $applicationWithoutCustomerRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationOperationsApi->createapplicationfromrecurrence: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **recurrenceId** | **string**| Recurrence ID from first application |
 **applicationWithoutCustomerRequest** | [**\SkipPay\Model\ApplicationWithoutCustomerRequest**](../Model/ApplicationWithoutCustomerRequest.md)|  | [optional]

### Return type

[**\SkipPay\Model\ApplicationResponse**](../Model/ApplicationResponse.md)

### Authorization

[httpBearer](../../README.md#httpBearer)

### HTTP request headers

- **Content-Type**: `application/json; charset=utf-8`
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getapplicationdetail()`

```php
getapplicationdetail($applicationId): \SkipPay\Model\ApplicationResponse
```

Get application detail

If you need to find out current information about particular *application* - primarily its state and other details - use `/financing/v1/applications/{applicationId}` resource where `{applicationId}` is the application ID you received in the response of `/financing/v1/applications` after its creation.  | Financing type     | Supported | | ---                | ---       | | `DEFERRED_PAYMENT` | YES       | | `PAY_IN_THREE`     | YES       |  If the request was successfully processed, you receive HTTP status code 200 and *application* object.  In other cases, you may receive errors similar to the following ones:  | Status code | Code                    | Message                                                                          | | ---         | ---                     | ---                                                                              | | 400         | `INVALID_REQUEST`       | Request was not well formatted (malformed request syntax, size too large, etc.)  | | 404         | `APPLICATION_NOT_FOUND` | The requested resource could not be found                                        | | 422         | `UNPROCESSABLE`         | The request was well-formed but was unable to be followed due to semantic errors |Get specific *application* detail by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: httpBearer
$config = SkipPay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SkipPay\Api\ApplicationOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 11200a0ee1; // string | applicationId

try {
    $result = $apiInstance->getapplicationdetail($applicationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationOperationsApi->getapplicationdetail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **string**| applicationId |

### Return type

[**\SkipPay\Model\ApplicationResponse**](../Model/ApplicationResponse.md)

### Authorization

[httpBearer](../../README.md#httpBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getorder()`

```php
getorder($orderNumber, $orderVariableSymbol, $applicationId): \SkipPay\Model\OrderExtendedResponse
```

Get order

If you need to find out current information about particular *order* - primarily its state (or its order items' states) and other details - use `/financing/v1/orders{?orderNumber,orderVariableSymbol,applicationId}` resource where `{applicationId}` is the application ID you received in the response of `/financing/v1/applications` after its creation, `{orderNumber}` is your order's number and `{orderVariableSymbol}` is your order's variable symbol.  | Financing type     | Supported | | ---                | ---       | | `DEFERRED_PAYMENT` | YES       | | `PAY_IN_THREE`     | YES       |  | Application state | Availability | | ---               | ---          | | `PROCESSING`      | YES          | | `REJECTED`        | YES          | | `CANCELLED`       | YES          | | `READY`           | YES          |  If the request was successfully processed, you receive HTTP status code 200 and object of information about specified *order* plus basic information about respective *application* (ID, state, substate).  In other cases, you may receive errors similar to the following ones:  | Status code | Code                    | Explanation                                                                      | | ---         | ---                     | ---                                                                              | | 404         | `OBJECT_NOT_FOUND`      | The requested resource could not be found                                        | | 422         | `UNPROCESSABLE`         | The request was well-formed but was unable to be followed due to semantic errors |Search for *order* using specified parameters.  use `/financing/v1/orders` with at least one of following parameter:  - variable symbol,  - order number,  - application number.  <a name=\"orders-parameters-restriction\"></a>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: httpBearer
$config = SkipPay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SkipPay\Api\ApplicationOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$orderNumber = 1234567890; // string | Order Number
$orderVariableSymbol = 1234567890; // string | Order Variable Symbol
$applicationId = 11b00a1ef1; // string | applicationId

try {
    $result = $apiInstance->getorder($orderNumber, $orderVariableSymbol, $applicationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationOperationsApi->getorder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderNumber** | **string**| Order Number | [optional]
 **orderVariableSymbol** | **string**| Order Variable Symbol | [optional]
 **applicationId** | **string**| applicationId | [optional]

### Return type

[**\SkipPay\Model\OrderExtendedResponse**](../Model/OrderExtendedResponse.md)

### Authorization

[httpBearer](../../README.md#httpBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getpaymentsonspecificapplication()`

```php
getpaymentsonspecificapplication($applicationId): \SkipPay\Model\Getpaymentsonspecificapplicationresponse
```

Get payments on specific application

Get payments on specific *application*  List of realized payments from Skip Pay to partner. In case of multiple invoices, list may contain more items.  feature | supported by resource --- | --- pagingheader-paging | yes sortingheader-sorting | no filteringheader-filtering | no  This resource supports paging. As a value to `before` and `after` parameters, use `paymentId` attribute.  Collection is sorted by paymentId attribute.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: httpBearer
$config = SkipPay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SkipPay\Api\ApplicationOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 11b00a1ef1; // string | applicationId

try {
    $result = $apiInstance->getpaymentsonspecificapplication($applicationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationOperationsApi->getpaymentsonspecificapplication: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **string**| applicationId |

### Return type

[**\SkipPay\Model\Getpaymentsonspecificapplicationresponse**](../Model/Getpaymentsonspecificapplicationresponse.md)

### Authorization

[httpBearer](../../README.md#httpBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getrecurrence()`

```php
getrecurrence($recurrenceId): \SkipPay\Model\RecurrenceObject
```

Get recurrence

It allows to get recurrence detail. You can check if customer authorized your request and if recurrence is ready to be used.  | Financing type     | Supported | | ---                | ---       | | `DEFERRED_PAYMENT` | YES       | | `PAY_IN_THREE`     | NO        |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: httpBearer
$config = SkipPay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SkipPay\Api\ApplicationOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$recurrenceId = 'recurrenceId_example'; // string | recurrenceId

try {
    $result = $apiInstance->getrecurrence($recurrenceId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationOperationsApi->getrecurrence: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **recurrenceId** | **string**| recurrenceId |

### Return type

[**\SkipPay\Model\RecurrenceObject**](../Model/RecurrenceObject.md)

### Authorization

[httpBearer](../../README.md#httpBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `markorderitemsascancelled()`

```php
markorderitemsascancelled($applicationId, $orderItemsChangeRequest): \SkipPay\Model\OrderExtendedResponse
```

Mark order items as cancelled

When some or all order items were cancelled (won't be ever delivered), use `/financing/v1/applications/{applicationId}/order/cancel` resource where `{applicationId}` is the application ID you received in the response of `/financing/v1/applications` after its creation.  | Financing type     | Supported | | ---                | ---       | | `DEFERRED_PAYMENT` | YES       | | `PAY_IN_THREE`     | YES       |  If you want to cancel some items after marking those items as sent or delivered, use [Mark order items as returned](https://developers.skippay.cz/docs/api/markorderitemsasreturned) operation.  | Application state | Availability | | ---               | ---          | | `PROCESSING`      | NO           | | `REJECTED`        | NO           | | `CANCELLED`       | NO           | | `READY`           | YES          |  Use `/financing/v1/applications/{applicationId}/order/cancel` resource with an empty request to cancel all order items (the whole *order*) at once.  If you want to cancel specific order item/s, use `/financing/v1/applications/{applicationId}/order/cancel` resource with properly filled request that contains cancelled order items info. In this case request should contain array of cancelled order items with one or more particular order item identificators (`code`/`EAN`/`name`/`type`) - `code`, `ean`, `name` and `type` is used for identifying order item sent in `Create application`.  > TIP: Use an empty request if marking last (those not yet not marked) item(s) on order as cancelled.  > **ATTENTION:** If multiple properties (`code`, `ean`, `name` or `type`) are used for identifying some order item, it all must exact match the item data.  If the request was successfully processed, you receive HTTP status code 200 and object of information about changed *order* plus basic information about respective *application* (ID, state, substate).  In other cases, you may receive errors similar to the following ones:  | Status code | Code                    | Explanation                                                                      | | ---         | ---                     | ---                                                                              | | 400         | `INVALID_REQUEST`       | Request was not well formatted (malformed request syntax, size too large, etc.)  | | 404         | `OBJECT_NOT_FOUND`      | The requested resource could not be found                                        | | 422         | `NOT_SUPPORTED`         | Resource is not supported for given financing type                               |Mark order items as cancelled  System notification. Some or all of the order items were cancelled. Based on *application* financing type and partner setting, credit note may be issued.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: httpBearer
$config = SkipPay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SkipPay\Api\ApplicationOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 11b00a1ef1; // string | applicationId
$orderItemsChangeRequest = new \SkipPay\Model\OrderItemsChangeRequest(); // \SkipPay\Model\OrderItemsChangeRequest

try {
    $result = $apiInstance->markorderitemsascancelled($applicationId, $orderItemsChangeRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationOperationsApi->markorderitemsascancelled: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **string**| applicationId |
 **orderItemsChangeRequest** | [**\SkipPay\Model\OrderItemsChangeRequest**](../Model/OrderItemsChangeRequest.md)|  | [optional]

### Return type

[**\SkipPay\Model\OrderExtendedResponse**](../Model/OrderExtendedResponse.md)

### Authorization

[httpBearer](../../README.md#httpBearer)

### HTTP request headers

- **Content-Type**: `application/json; charset=utf-8`
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `markorderitemsasdelivered()`

```php
markorderitemsasdelivered($applicationId, $orderItemsDeliverRequest): \SkipPay\Model\OrderExtendedResponse
```

Mark order items as delivered

When some or all order items were delivered to the customer, use `/financing/v1/applications/{applicationId}/order/deliver` resource where `{applicationId}` is the application ID you received in the response of `/financing/v1/applications` after its creation.  | Financing type     | Supported | | ---                | ---       | | `DEFERRED_PAYMENT` | YES       | | `PAY_IN_THREE`     | YES       |  | Application state | Availability | | ---               | ---          | | `PROCESSING`      | NO           | | `REJECTED`        | NO           | | `CANCELLED`       | NO           | | `READY`           | YES          |  Use `/financing/v1/applications/{applicationId}/order/deliver` resource with an empty request to mark all order items (the whole *order*) as delivered at once.  If you want to mark specific order item/s as delivered, use `/financing/v1/applications/{applicationId}/order/deliver` resource with properly filled request that contains delivered order items info. In this case request should contain array of delivered order items with one or more particular order item identificators (`code`/`EAN`/`name`/`type`) - `code`, `ean`, `name` and `type` is used for identifying order item sent in `Create application`.  > TIP: Use an empty request if marking last (those not yet not marked) item(s) on order as delivered.  > **ATTENTION:** If multiple properties (`code`, `ean`, `name` or `type`) are used for identifying some order item, it all must exact match the item data.  If the request was successfully processed, you receive HTTP status code 200 and object of information about changed *order* plus basic information about respective *application* (ID, state, substate).  In other cases, you may receive errors similar to the following ones:  | Status code | Code                              | Explanation                                                                       | | ---         | ---                               | ---                                                                               | | 400         | `INVALID_REQUEST`                 | Request was not well formatted (malformed request syntax, size too large, etc.)   | | 404         | `OBJECT_NOT_FOUND`                | The requested resource could not be found                                         | | 422         | `TOTAL_PRICE_LIMIT_EXCEEDED`      | The total price of all subcontracts exceeded the order total price                | | 422         | `NOT_SUPPORTED`                   | Resource is not supported for given financing type                                |Mark order items as delivered.  System notification. Some or all order items were delivered to customer. Based on *application* financing type and partner setting, application payment may be processed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: httpBearer
$config = SkipPay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SkipPay\Api\ApplicationOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 11b00a1ef1; // string | applicationId
$orderItemsDeliverRequest = new \SkipPay\Model\OrderItemsDeliverRequest(); // \SkipPay\Model\OrderItemsDeliverRequest

try {
    $result = $apiInstance->markorderitemsasdelivered($applicationId, $orderItemsDeliverRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationOperationsApi->markorderitemsasdelivered: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **string**| applicationId |
 **orderItemsDeliverRequest** | [**\SkipPay\Model\OrderItemsDeliverRequest**](../Model/OrderItemsDeliverRequest.md)|  | [optional]

### Return type

[**\SkipPay\Model\OrderExtendedResponse**](../Model/OrderExtendedResponse.md)

### Authorization

[httpBearer](../../README.md#httpBearer)

### HTTP request headers

- **Content-Type**: `application/json; charset=utf-8`
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `markorderitemsasreturned()`

```php
markorderitemsasreturned($applicationId, $orderItemsReturnRequest): \SkipPay\Model\OrderExtendedResponse
```

Mark order items as returned

When some or all order items were returned by the customer to you (after delivery), use `/financing/v1/applications/{applicationId}/order/return` resource where `{applicationId}` is the application ID you received in the response of `/financing/v1/applications` after its creation.  | Financing type     | Supported | | ---                | ---       | | `DEFERRED_PAYMENT` | YES       | | `PAY_IN_THREE`     | YES       |  If you want to cancel some items before marking those items as sent or delivered, use [Mark order items as cancelled](#reference/application-operations/mark-order-items-as-cancelled) operation.  | Application state | Availability | | ---               | ---          | | `PROCESSING`      | NO           | | `REJECTED`        | NO           | | `CANCELLED`       | NO           | | `READY`           | YES          |  Use `/financing/v1/applications/{applicationId}/order/return` resource with an empty request to mark all order items (the whole *order*) as returned at once.  If you want to mark specific order item/s as returned, use `/financing/v1/applications/{applicationId}/order/return` resource with properly filled request that contains returned order items info. In this case request should contain array of returned order items with one or more particular order item identificators (`code`/`EAN`/`name`/`type`) - `code`, `ean`, `name` and `type` is used for identifying order item sent in `Create application`.  > TIP: Use an empty request if marking last (those not yet not marked) item(s) on order as returned.  > **ATTENTION:** If multiple properties (`code`, `ean`, `name` or `type`) are used for identifying some order item, it all must exact match the item data.  If the request was successfully processed, you receive HTTP status code 200 and object of information about changed *order* plus basic information about respective *application* (ID, state, substate).  In other cases, you may receive errors similar to the following ones:  | Status code | Code                    | Explanation                                                                      | | ---         | ---                     | ---                                                                              | | 400         | `INVALID_REQUEST`       | Request was not well formatted (malformed request syntax, size too large, etc.)  | | 404         | `OBJECT_NOT_FOUND`      | The requested resource could not be found                                        | | 422         | `NOT_SUPPORTED`         | Resource is not supported for given financing type                               |Mark order items as returned.  System notification. Some or all order items were returned by customer back to e-shop. Based on *application* financing type and partner setting, credit note may be issued.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: httpBearer
$config = SkipPay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SkipPay\Api\ApplicationOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 11b00a1ef1; // string | applicationId
$orderItemsReturnRequest = new \SkipPay\Model\OrderItemsReturnRequest(); // \SkipPay\Model\OrderItemsReturnRequest

try {
    $result = $apiInstance->markorderitemsasreturned($applicationId, $orderItemsReturnRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationOperationsApi->markorderitemsasreturned: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **string**| applicationId |
 **orderItemsReturnRequest** | [**\SkipPay\Model\OrderItemsReturnRequest**](../Model/OrderItemsReturnRequest.md)|  | [optional]

### Return type

[**\SkipPay\Model\OrderExtendedResponse**](../Model/OrderExtendedResponse.md)

### Authorization

[httpBearer](../../README.md#httpBearer)

### HTTP request headers

- **Content-Type**: `application/json; charset=utf-8`
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `markorderitemsassent()`

```php
markorderitemsassent($applicationId, $orderItemsSendRequest): \SkipPay\Model\OrderExtendedResponse
```

Mark order items as sent

When some or all order items were shipped to the customer, use `/financing/v1/applications/{applicationId}/order/send` resource where `{applicationId}` is the application ID you received in the response of `/financing/v1/applications` after its creation.  | Financing type     | Supported | | ---                | ---       | | `DEFERRED_PAYMENT` | YES       | | `PAY_IN_THREE`     | YES       |  | Application state | Availability| | ---               | ---         | | `PROCESSING`      | NO          | | `REJECTED`        | NO          | | `CANCELLED`       | NO          | | `READY`           | YES         |  Use `/financing/v1/applications/{applicationId}/order/send` resource with an empty request to mark all order items (the whole *order*) as sent at once.  If you want to mark specific order item/s as sent, use `/financing/v1/applications/{applicationId}/order/send` resource with properly filled request that contains sent order items info. In this case request should contain array of sent order items with one or more particular order item identificators (`code`/`EAN`/`name`/`type`) - `code`, `ean`, `name` and `type` is used for identifying order item sent in `Create application`.  > TIP: Use an empty request if marking last (those not yet not marked) item(s) on order as sent.  > **ATTENTION:** If multiple properties (`code`, `ean`, `name` or `type`) are used for identifying some order item, it all must exact match the item data.  If the request was successfully processed, you receive HTTP status code 200 and object of information about changed *order* plus basic information about respective *application* (ID, state, substate).  In other cases, you may receive errors similar to the following ones:  | Status code | Code                            | Explanation                                                                       | | ---         | ---                             | ---                                                                               | | 400         | `INVALID_REQUEST`               | Request was not well formatted (malformed request syntax, size too large, etc.)   | | 404         | `OBJECT_NOT_FOUND`              | The requested resource could not be found                                         | | 422         | `TOTAL_PRICE_LIMIT_EXCEEDED`    | The total price of all subcontracts exceeded the order total price                | | 422         | `NOT_SUPPORTED`                 | Resource is not supported for given financing type                                |Mark order items as sent  System notification. Some or all order items were shipped to customer. Based on *application* financing type and partner setting, application payment may be processed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: httpBearer
$config = SkipPay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SkipPay\Api\ApplicationOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 11b00a1ef1; // string | applicationId
$orderItemsSendRequest = new \SkipPay\Model\OrderItemsSendRequest(); // \SkipPay\Model\OrderItemsSendRequest

try {
    $result = $apiInstance->markorderitemsassent($applicationId, $orderItemsSendRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationOperationsApi->markorderitemsassent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **string**| applicationId |
 **orderItemsSendRequest** | [**\SkipPay\Model\OrderItemsSendRequest**](../Model/OrderItemsSendRequest.md)|  | [optional]

### Return type

[**\SkipPay\Model\OrderExtendedResponse**](../Model/OrderExtendedResponse.md)

### Authorization

[httpBearer](../../README.md#httpBearer)

### HTTP request headers

- **Content-Type**: `application/json; charset=utf-8`
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updaterecurrence()`

```php
updaterecurrence($recurrenceId, $recurrenceUpdateRequest): \SkipPay\Model\RecurrenceObject
```

Update recurrence

It allows to get recurrence detail. You can check if customer authorized your request and if recurrence is ready to be used.  | Financing type     | Supported | | ---                | ---       | | `DEFERRED_PAYMENT` | YES       | | `PAY_IN_THREE`     | NO        |At this moment it allows to change the recurrence state only. It's not neccessary but if you want to be sure that nobody can use the recurrence in the future you can cancel it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: httpBearer
$config = SkipPay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SkipPay\Api\ApplicationOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$recurrenceId = 'recurrenceId_example'; // string | recurenceId
$recurrenceUpdateRequest = new \SkipPay\Model\RecurrenceUpdateRequest(); // \SkipPay\Model\RecurrenceUpdateRequest

try {
    $result = $apiInstance->updaterecurrence($recurrenceId, $recurrenceUpdateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationOperationsApi->updaterecurrence: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **recurrenceId** | **string**| recurenceId |
 **recurrenceUpdateRequest** | [**\SkipPay\Model\RecurrenceUpdateRequest**](../Model/RecurrenceUpdateRequest.md)|  | [optional]

### Return type

[**\SkipPay\Model\RecurrenceObject**](../Model/RecurrenceObject.md)

### Authorization

[httpBearer](../../README.md#httpBearer)

### HTTP request headers

- **Content-Type**: `application/json; charset=utf-8`
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
