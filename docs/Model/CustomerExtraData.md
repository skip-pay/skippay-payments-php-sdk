# CustomerExtraData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**transactionsNumber** | **float** | Historical count of customer&#39;s cash transactions made in partner&#39;s e-shop | [optional]
**cashlessTransactionsNumber** | **float** | Historical count of customer&#39;s cashless transactions made in partner&#39;s e-shop | [optional]
**transactionsSum** | [**\SkipPay\Model\Amount**](Amount.md) |  | [optional]
**cashlessTransactionsSum** | [**\SkipPay\Model\Amount**](Amount.md) |  | [optional]
**latestTransactionDate** | **\DateTime** | Newest transaction date on partner e-shop. | [optional]
**earliestTransactionDate** | **\DateTime** | Oldest transaction date on partner e-shop | [optional]
**pageTotalTime** | **float** | Total time spent on partners website (in seconds) | [optional]
**pageReviewsTime** | **float** | Total time spent on partners website in review and comments sections (in seconds) | [optional]
**cartItemsRemoved** | **float** | Total count of removed items form shopping basket during current shopping | [optional]
**itemsViewed** | **float** | Number of viewed pages with products | [optional]
**tags** | **string[]** | List of custom tags (ie. information, that customer is club member, vip customer, etc.) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
