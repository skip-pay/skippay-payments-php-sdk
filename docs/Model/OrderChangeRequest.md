# OrderChangeRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**number** | **string** | Order number (internal for e-shop) | [optional]
**variableSymbols** | **string[]** | Variable symbols for pairing. First symbol in array is used for making the payment to your account (if not specified later in &#x60;Mark order items as sent&#x60; or &#x60;Mark order items as delivered&#x60;) or we expect you make payment on our account with this symbol (if not specified later in &#x60;Mark order items as returned&#x60; operation). Strings must contain only numbers, maximum length is 10 characters (digits). | [optional]
**totalPrice** | [**\SkipPay\Model\Amount**](Amount.md) |  | [optional]
**totalVat** | [**\SkipPay\Model\VatAmount[]**](VatAmount.md) | Total VAT amounts split by their VAT rates | [optional]
**addresses** | [**\SkipPay\Model\Address[]**](Address.md) | Addresses. Only &#x60;BILLING&#x60; and &#x60;DELIVERY&#x60; types are allowed. | [optional]
**deliveryType** | [**\SkipPay\Model\DeliveryType**](DeliveryType.md) |  | [optional]
**deliveryCarrier** | [**\SkipPay\Model\DeliveryCarrier**](DeliveryCarrier.md) |  | [optional]
**reservationDate** | **string** | Date and time until order is reserved.  Until &#39;reservationDate&#39; Skip Pay will try to notify partner with Application notification about approval or rejection.  After this date and time, e-shop does not guarantee items availability (if application processing is longer, it may endanger order fullfillment). | [optional]
**items** | [**\SkipPay\Model\OrderItemRequest[]**](OrderItemRequest.md) | Order items | [optional]
**documents** | [**\SkipPay\Model\DocumentRequest[]**](DocumentRequest.md) | Attached documents (invoices etc.) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
