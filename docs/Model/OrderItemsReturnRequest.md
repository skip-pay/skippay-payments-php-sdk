# OrderItemsReturnRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**items** | [**\SkipPay\Model\ChangeOrderItemRequestSerializer[]**](ChangeOrderItemRequestSerializer.md) | List of changed items. All items are considered when empty. | [optional]
**totalPrice** | [**\SkipPay\Model\OrderItemsChangeRequestTotalPrice**](OrderItemsChangeRequestTotalPrice.md) |  | [optional]
**totalVat** | [**\SkipPay\Model\VatAmount[]**](VatAmount.md) | Total VAT amounts of items (from orderItems array) split by their VAT rates. | [optional]
**document** | [**\SkipPay\Model\DocumentRequest**](DocumentRequest.md) |  | [optional]
**variableSymbol** | **string** | Variable symbol of the new document (credit note, ...). This symbols is used by Skip Pay to pair payment from e-shop. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
