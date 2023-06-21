# OrderItemRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | Internal code for item (internal to e-shop). Used to better identify the item for future changes |
**ean** | **string** | EAN code. | [optional]
**name** | **string** | Item name |
**type** | [**\SkipPay\Model\ItemType**](ItemType.md) |  | [optional]
**variant** | **string** | Item variant | [optional]
**description** | **string** |  | [optional]
**producer** | **string** | Producer name | [optional]
**categories** | **string[]** | List of item categories | [optional]
**totalPrice** | [**\SkipPay\Model\Amount**](Amount.md) |  |
**totalVat** | [**\SkipPay\Model\VatAmount**](VatAmount.md) |  |
**productUrl** | **string** | URL of the item in e-shop | [optional]
**image** | [**\SkipPay\Model\FileRequest**](FileRequest.md) |  | [optional]
**unitPrice** | [**\SkipPay\Model\Amount**](Amount.md) |  | [optional]
**unitVat** | [**\SkipPay\Model\VatAmount**](VatAmount.md) |  | [optional]
**quantity** | **float** | (positive float/decimal up to 3 decimal places) Item quantity. If empty, considered as 1. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
