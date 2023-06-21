# OrderItemResponse

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
**state** | [**\SkipPay\Model\OrderDeliveryState**](OrderDeliveryState.md) |  |
**sentDate** | **\DateTime** | Date when item was sent. Only when the whole order was NOT sent at once. |
**deliveryDate** | **\DateTime** | Date when item was delivered. Only when the whole order was NOT sent at once. |
**deliveryTrackingNumber** | **string** | Tracking number for the item. Only when the whole order was NOT sent at once. |
**image** | [**\SkipPay\Model\FileResponse**](FileResponse.md) |  | [optional]
**unitPrice** | [**\SkipPay\Model\Amount**](Amount.md) |  |
**unitVat** | [**\SkipPay\Model\VatAmount**](VatAmount.md) |  |
**quantity** | **float** | (positive float/decimal up to 3 decimal places) Item quantity. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
