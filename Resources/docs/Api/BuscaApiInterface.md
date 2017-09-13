# Swagger\Server\Api\BuscaApiInterface

All URIs are relative to *https://localhost/marketplace-api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**searchGet**](BuscaApiInterface.md#searchGet) | **GET** /search | Obtém produtos


## Service Declaration
```yaml
# src/Acme/MyBundle/Resources/services.yml
services:
    # ...
    acme.my_bundle.api.busca:
        class: Acme\MyBundle\Api\BuscaApi
        tags:
            - { name: "swagger_server.api", api: "busca" }
    # ...
```

## **searchGet**
> Swagger\Server\Model\Search searchGet($sort, $_offset, $_limit, $term, $vendor_id, $category_id, $subcategory_id, $brand_id, $min_price, $max_price)

Obtém produtos

Recurso utilizado para busca de produtos

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/BuscaApiInterface.php

namespace Acme\MyBundle\Api;

use Swagger\Server\Api\BuscaApiInterface;

class BuscaApi implements BuscaApiInterface
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
     * Implementation of BuscaApiInterface#searchGet
     */
    public function searchGet($sort, $_offset, $_limit, $term = null, $vendor_id = null, $category_id = null, $subcategory_id = null, $brand_id = null, $min_price = null, $max_price = null)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | **string**| Tipo da ordenação |
 **_offset** | **float**| Número da página |
 **_limit** | **float**| Número de registros |
 **term** | **string**| Termo para busca | [optional]
 **vendor_id** | **string**| Identificador do parceiro | [optional]
 **category_id** | **string**| Identificador da categoria | [optional]
 **subcategory_id** | **string**| Identificador da subcategoria | [optional]
 **brand_id** | **string**| Identificador da marca | [optional]
 **min_price** | **float**| Range de preço de, em pontos | [optional]
 **max_price** | **float**| Range de preço até, em pontos | [optional]

### Return type

[**Swagger\Server\Model\Search**](../Model/Search.md)

### Authorization

[access_token](../../README.md#access_token), [client_id](../../README.md#client_id)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

