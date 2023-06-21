# PrecheckOrderItemRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | Internal code for item (internal to e-shop). Used to better identify the item for future changes | [optional]
**ean** | **string** | EAN code | [optional]
**name** | **string** | Item name | [optional]
**type** | [**\SkipPay\Model\ItemType**](ItemType.md) |  | [optional]
**variant** | **string** | Item variant | [optional]
**description** | **string** |  | [optional]
**producer** | **string** | Producer name | [optional]
**categories** | **string[]** | List of item categories | [optional]
**totalPrice** | [**\SkipPay\Model\Amount**](Amount.md) |  | [optional]
**totalVat** | [**\SkipPay\Model\VatAmount**](VatAmount.md) |  | [optional]
**productUrl** | **string** | URL of the item in e-shop | [optional]
**unitPrice** | [**\SkipPay\Model\Amount**](Amount.md) |  | [optional]
**unitVat** | [**\SkipPay\Model\VatAmount**](VatAmount.md) |  | [optional]
**quantity** | **float** | (positive float/decimal up to 3 decimal places) Item quantity. If empty, considered as 1. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
