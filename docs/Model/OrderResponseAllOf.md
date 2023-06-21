# OrderResponseAllOf

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**state** | [**\SkipPay\Model\OrderDeliveryState**](OrderDeliveryState.md) |  |
**deliveryDate** | **\DateTime** | Date and time of delivery |
**deliveryTrackingNumber** | **string** | Delivery tracking number |
**sentDate** | **\DateTime** | Date and time of order shipping |
**documents** | [**\SkipPay\Model\DocumentResponse[]**](DocumentResponse.md) | Attached documents (invoices etc.) | [optional]
**items** | [**\SkipPay\Model\OrderItemResponse[]**](OrderItemResponse.md) | Order items |
**merchantId** | **string** | Merchant identification |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
