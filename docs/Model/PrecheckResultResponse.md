# PrecheckResultResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Precheck result type for Funding type. |
**recommendation** | **bool** | A recommendation of whether the order should be passed to the Skip Pay.  true &#x3D; Application is going to be likely approved. false &#x3D; Application is going to be likely rejected. |
**probabilityOfApproval** | **float** | Probability of approval.  0 &#x3D; 0% to be approved 1 &#x3D; 100% to be approved  Partner can create custom logic not to follow the recommendation (be more strict or benevolent). |
**completeness** | **float** | Completness of the result. &lt;0, 1&gt; The lower is the value, the lower accuracy of the result. | [optional]
**code** | **string** | Result code. |
**precheckResultResponseSerializer** | [**\SkipPay\Model\PrecheckResultResponseSerializer**](PrecheckResultResponseSerializer.md) |  |
**message** | **string** | Custom message for customer.  Examples: “V Skip Pay peněžence nemáte dostatečný limit.” “Uveďte do objednávky jméno a příjmení, které používáte ve službě Skip Pay.” etc. | [optional]
**additionalData** | **string[]** | List of additional data that customer has to send.  Possible values in array: &#x60;PERSONAL_ID&#x60;, &#x60;ID_CARD_NO&#x60;, &#x60;ID_CARD_EXPIRY_DATE&#x60;, &#x60;ID_CARD_SCAN&#x60;, &#x60;THIRD_PARTY_TELCO_CONSENT&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
