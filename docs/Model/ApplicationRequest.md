# ApplicationRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**order** | [**\SkipPay\Model\OrderRequest**](OrderRequest.md) |  |
**type** | [**\SkipPay\Model\FinancingType**](FinancingType.md) |  |
**agreementTermsAndConditions** | **bool** | Terms and conditions agreement | [optional]
**precheckIds** | **string[]** | Array of all precheck ids related to this application. See [Precheck operation](htttps://developers.skippay.cz/docs/api/precheck) and it&#39;s response (PrecheckResultsResponse). | [optional]
**merchantUrls** | [**\SkipPay\Model\MerchantUrls**](MerchantUrls.md) |  |
**customer** | [**\SkipPay\Model\CustomerRequest**](CustomerRequest.md) |  |
**isRecurring** | **bool** | Ensures recurrence ID in reponse. Default is &#x60;false&#x60; | [optional] [default to false]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
