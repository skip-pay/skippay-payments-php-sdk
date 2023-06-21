# SkipPay\PrecheckApi

All URIs are relative to https://api.partner.mallpay.cz.

Method | HTTP request | Description
------------- | ------------- | -------------
[**precheck()**](PrecheckApi.md#precheck) | **POST** /financing/v1/precheck | Precheck


## `precheck()`

```php
precheck($precheckRequest): \SkipPay\Model\PrecheckResultsResponse
```

Precheck

Precheck *application*  Returns probability of *application's* approval and limits of particular customer, if known to Skip Pay  | Financing type     | Supported | | ---                | ---       | | `DEFERRED_PAYMENT` | YES       | | `PAY_IN_THREE`     | YES       |  It has to be called with valid access token (see the [Security section](#reference/security)) from your server. If you plan to integrate it in client flow, you should implement REST endpoint bound to your shopping basket session, that will be used as a proxy to call Skip Pay API - **NEVER put access token directly to client side**.  Possible error codes explanation: | Status code | Code                  | Explanation                                                                     | | ---         | ---                   | ---                                                                             | | 400         | `INVALID_REQUEST`     | Request was not well formatted (malformed request syntax, size too large, etc.) | | 422         | `PERSONAL_ID_INVALID` | PersonalId is not valid                                                         |Returns probability of *application's* approval and limits of particular customer, if known to Skip Pay

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: httpBearer
$config = SkipPay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SkipPay\Api\PrecheckApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$precheckRequest = new \SkipPay\Model\PrecheckRequest(); // \SkipPay\Model\PrecheckRequest

try {
    $result = $apiInstance->precheck($precheckRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrecheckApi->precheck: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **precheckRequest** | [**\SkipPay\Model\PrecheckRequest**](../Model/PrecheckRequest.md)|  | [optional]

### Return type

[**\SkipPay\Model\PrecheckResultsResponse**](../Model/PrecheckResultsResponse.md)

### Authorization

[httpBearer](../../README.md#httpBearer)

### HTTP request headers

- **Content-Type**: `application/json; charset=utf-8`
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
