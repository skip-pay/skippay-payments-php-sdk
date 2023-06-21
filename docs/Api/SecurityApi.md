# SkipPay\SecurityApi

All URIs are relative to https://api.partner.mallpay.cz.

Method | HTTP request | Description
------------- | ------------- | -------------
[**loginpartner()**](SecurityApi.md#loginpartner) | **POST** /authentication/v1/partner | Login partner


## `loginpartner()`

```php
loginpartner($partnerLogin): \SkipPay\Model\PartnerLoginResult
```

Login partner

Partner authenticate himself and obtain access token

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: httpBearer
$config = SkipPay\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SkipPay\Api\SecurityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$partnerLogin = new \SkipPay\Model\PartnerLogin(); // \SkipPay\Model\PartnerLogin

try {
    $result = $apiInstance->loginpartner($partnerLogin);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurityApi->loginpartner: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partnerLogin** | [**\SkipPay\Model\PartnerLogin**](../Model/PartnerLogin.md)|  |

### Return type

[**\SkipPay\Model\PartnerLoginResult**](../Model/PartnerLoginResult.md)

### Authorization

[httpBearer](../../README.md#httpBearer)

### HTTP request headers

- **Content-Type**: `application/json; charset=utf-8`
- **Accept**: `application/json; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
