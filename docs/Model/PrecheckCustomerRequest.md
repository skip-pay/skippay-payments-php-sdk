# PrecheckCustomerRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**titleBefore** | **string** | Academical degree, in front of the name. | [optional]
**titleAfter** | **string** | Academical degree, behind name. | [optional]
**email** | **string** | E-mail address of customer |
**addresses** | [**\SkipPay\Model\PrecheckAddress[]**](PrecheckAddress.md) | Addresses. All types are allowed. | [optional]
**tin** | **string** | Tax identification number (ICO) | [optional]
**vatin** | **string** | VAT identification number | [optional]
**extraData** | [**\SkipPay\Model\CustomerExtraData**](CustomerExtraData.md) |  | [optional]
**firstName** | **string** | Customer first (given) name. Must be paired with &#x60;lastName&#x60;. Required if &#x60;fullName&#x60; is empty. | [optional]
**lastName** | **string** | Customer last (family) name. Must be paired with &#x60;firstName&#x60;. Required if &#x60;fullName&#x60; is empty. | [optional]
**fullName** | **string** | Customer full name, including academical degrees and salutation. Required only if &#x60;firstName&#x60; or &#x60;lastName&#x60; are empty. | [optional]
**phone** | **string** | Phone number with country code (including leading &#x60;+&#x60;). |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
