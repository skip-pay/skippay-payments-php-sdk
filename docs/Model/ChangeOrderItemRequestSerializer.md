# ChangeOrderItemRequestSerializer

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | Internal code for item (internal to e-shop). Used to better identify the item for future changes | [optional]
**ean** | **string** | EAN code. | [optional]
**name** | **string** | Item name | [optional]
**type** | [**\SkipPay\Model\ItemType**](ItemType.md) |  | [optional]
**quantity** | **float** | (positive float/decimal up to 3 decimal places) Item quantity. If empty, considered as whole item quantity is selected | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
