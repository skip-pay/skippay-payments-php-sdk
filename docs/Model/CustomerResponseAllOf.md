# CustomerResponseAllOf

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**firstName** | **string** | Customer first (given) name. Must be paired with &#x60;lastName&#x60;. Required if &#x60;fullName&#x60; is empty. |
**lastName** | **string** | Customer last (family) name. Must be paired with &#x60;firstName&#x60;. Required if &#x60;fullName&#x60; is empty. |
**fullName** | **string** | Customer full name, including academical degrees and salutation. Required only if &#x60;firstName&#x60; or &#x60;lastName&#x60; are empty. |
**phone** | **string** | Phone number with country code (including leading &#x60;+&#x60;). |
**precheckResultResponseSerializer** | [**\SkipPay\Model\PrecheckResultResponseSerializer**](PrecheckResultResponseSerializer.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
