# Swagger\Server\Api\ProdutoApiInterface

All URIs are relative to *https://localhost/marketplace-api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**productsProductSKUIdGet**](ProdutoApiInterface.md#productsProductSKUIdGet) | **GET** /products/{productSKUId} | Recurso utilizado para retornar informações de um determinado produto


## Service Declaration
```yaml
# src/Acme/MyBundle/Resources/services.yml
services:
    # ...
    acme.my_bundle.api.produto:
        class: Acme\MyBundle\Api\ProdutoApi
        tags:
            - { name: "swagger_server.api", api: "produto" }
    # ...
```

## **productsProductSKUIdGet**
> Swagger\Server\Model\ProductDetail productsProductSKUIdGet($product_sku_id, $_fields)

Recurso utilizado para retornar informações de um determinado produto

Obtém um produto pelo SKU

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ProdutoApiInterface.php

namespace Acme\MyBundle\Api;

use Swagger\Server\Api\ProdutoApiInterface;

class ProdutoApi implements ProdutoApiInterface
{

    /**
     * Configure API key authorization: access_token
     */
    public function setaccess_token($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    /**
     * Configure API key authorization: client_id
     */
    public function setclient_id($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of ProdutoApiInterface#productsProductSKUIdGet
     */
    public function productsProductSKUIdGet($product_sku_id, $_fields = null)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_sku_id** | **string**| Identificador do SKU |
 **_fields** | **string**| Filtro para reduzir o número de atributos a ser retornado para esse recurso. Ex. _fields&#x3D;field1,field2,...fieldN | [optional]

### Return type

[**Swagger\Server\Model\ProductDetail**](../Model/ProductDetail.md)

### Authorization

[access_token](../../README.md#access_token), [client_id](../../README.md#client_id)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

