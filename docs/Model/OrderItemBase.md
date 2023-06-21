# OrderItemBase

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

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
