# Purchase

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Identificador da compra | [optional] 
**date** | **string** | Data da compra | [optional] 
**value_points** | **float** | Valor total da compra, em pontos | [optional] 
**shipping_value_points** | **float** | Valor total do frete da compra, em pontos | [optional] 
**channel_type** | **string** | Canal que o pedido foi realizado | [optional] 
**orders** | [**Orders[]**](Orders.md) |  | [optional] 
**payments** | [**PurchasePayment[]**](PurchasePayment.md) |  | [optional] 
**customer** | [**PurchaseCustomer**](PurchaseCustomer.md) |  | [optional] 
**campaign** | [**Campaign**](Campaign.md) |  | [optional] 
**catalog** | [**Catalog**](Catalog.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


