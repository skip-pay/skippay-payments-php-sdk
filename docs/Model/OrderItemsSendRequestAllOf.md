# OrderItemsSendRequestAllOf

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**document** | [**\SkipPay\Model\DocumentRequest**](DocumentRequest.md) |  | [optional]
**variableSymbol** | **string** | Required if was not specified earlier in &#39;&#39;Create application&#39;&#39; or &#39;&#39;Change application order&#39;&#39; operations. Symbol used for making the payment to your account. This string must contain only numbers, maximum length is 10 characters (digits). | [optional]
**specificSymbol** | **string** | Symbol used for making the payment to your account. This string must contain only numbers, maximum length is 10 characters (digits). | [optional]
**sentDate** | **\DateTime** | Shipping date | [optional]
**deliveryCarrier** | [**\SkipPay\Model\DeliveryCarrier**](DeliveryCarrier.md) |  | [optional]
**deliveryTrackingNumber** | **string** | Delivery tracking number | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
