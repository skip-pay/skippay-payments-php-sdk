# MerchantUrls

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**approvedRedirect** | **string** | URL of the partner used for redirection of the customer back to partner website (from Skip Pay gateway) after application approval. Do not implement any business logic on accessing this URL by customer. Implement business logic to READY notification via &#x60;notificationEndpoint&#x60;. |
**rejectedRedirect** | **string** | URL of the partner used for redirection of the customer back to partner website (from Skip Pay gateway) after application rejection.  Do not implement any business logic on accessing this URL by customer. Implement business logic to REJECTED notification via &#x60;notificationEndpoint&#x60;. |
**notificationEndpoint** | **string** | URL of the partner used as a notification endpoint for obtaining important updates about application (approval, rejection, storno, etc.). |
**paymentsEndpoint** | **string** | URL of the partner used as a notification endpoint for obtaining information about payments connected with application. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
