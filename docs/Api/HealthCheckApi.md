# SkipPay\HealthCheckApi

All URIs are relative to https://api.partner.mallpay.cz.

Method | HTTP request | Description
------------- | ------------- | -------------
[**aPIhealthcheck()**](HealthCheckApi.md#aPIhealthcheck) | **GET** /v1/health | API health check


## `aPIhealthcheck()`

```php
aPIhealthcheck($contentType): \SkipPay\Model\HealthCheckResponse
```

API health check

If the API back-end services are up and runing, you receive HTTP status code 200 with optional version info.  In other cases, you may receive errors similar to the following ones: | Status code | Description                                             | | ---         | ---                                                     | | 503         | `Service Unavailable` - there is planned service outage |  > Note: resource DOES NOT require valid *access_token* in the HTTP header of the requestGet current state of the API

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: httpBearer
$config = SkipPay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SkipPay\Api\HealthCheckApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contentType = application/json; charset=utf-8; // string | Content Type

try {
    $result = $apiInstance->aPIhealthcheck($contentType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HealthCheckApi->aPIhealthcheck: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contentType** | **string**| Content Type |

### Return type

[**\SkipPay\Model\HealthCheckResponse**](../Model/HealthCheckResponse.md)

### Authorization

[httpBearer](../../README.md#httpBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
