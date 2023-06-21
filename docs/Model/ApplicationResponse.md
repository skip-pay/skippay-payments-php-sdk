# ApplicationResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique identifier in Skip Pay |
**state** | **string** | Application state. |
**stateReason** | **string** | Describes internal state of application, e.g. when state is PROCESSING - reason why application remains in processing state |
**customer** | [**\SkipPay\Model\CustomerResponse**](CustomerResponse.md) |  |
**order** | [**\SkipPay\Model\OrderResponse**](OrderResponse.md) |  |
**type** | [**\SkipPay\Model\FinancingType**](FinancingType.md) |  |
**agreementTermsAndConditions** | **bool** | Terms and conditions agreement |
**gatewayRedirectUrl** | **string** | Gateway redirect URL. Redirect user to this URL if state is &#x60;PROCESSING&#x60; and stateReason is &#x60;PROCESSING_REDIRECT_NEEDED&#x60;. |
**recurrence** | [**\SkipPay\Model\RecurrenceObject**](RecurrenceObject.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
