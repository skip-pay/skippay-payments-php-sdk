# OrderItemsDeliverRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**items** | [**\SkipPay\Model\ChangeOrderItemRequestSerializer[]**](ChangeOrderItemRequestSerializer.md) | List of changed items. All items are considered when empty. | [optional]
**totalPrice** | [**\SkipPay\Model\OrderItemsChangeRequestTotalPrice**](OrderItemsChangeRequestTotalPrice.md) |  | [optional]
**totalVat** | [**\SkipPay\Model\VatAmount[]**](VatAmount.md) | Total VAT amounts of items (from orderItems array) split by their VAT rates. | [optional]
**document** | [**\SkipPay\Model\DocumentRequest**](DocumentRequest.md) |  | [optional]
**variableSymbol** | **string** | Required if was not specified earlier in &#39;&#39;Create application&#39;&#39; or &#39;&#39;Change application order&#39;&#39; operations. Symbol used for making the payment to your account. This string must contain only numbers, maximum length is 10 characters (digits). | [optional]
**specificSymbol** | **string** | Symbol used for making the payment to your account. This string must contain only numbers, maximum length is 10 characters (digits). | [optional]
**sentDate** | **\DateTime** | Shipping date | [optional]
**deliveryCarrier** | [**\SkipPay\Model\DeliveryCarrier**](DeliveryCarrier.md) |  | [optional]
**deliveryTrackingNumber** | **string** | Delivery tracking number | [optional]
**deliveryDate** | **\DateTime** | Delivery date | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
