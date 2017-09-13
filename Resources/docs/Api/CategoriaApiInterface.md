# Swagger\Server\Api\CategoriaApiInterface

All URIs are relative to *https://localhost/marketplace-api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**categoriesGet**](CategoriaApiInterface.md#categoriesGet) | **GET** /categories | Obtém as categorias


## Service Declaration
```yaml
# src/Acme/MyBundle/Resources/services.yml
services:
    # ...
    acme.my_bundle.api.categoria:
        class: Acme\MyBundle\Api\CategoriaApi
        tags:
            - { name: "swagger_server.api", api: "categoria" }
    # ...
```

## **categoriesGet**
> Swagger\Server\Model\Categories categoriesGet()

Obtém as categorias

Recurso utilizado para recuperar as categorias dos produtos do catálogo

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CategoriaApiInterface.php

namespace Acme\MyBundle\Api;

use Swagger\Server\Api\CategoriaApiInterface;

class CategoriaApi implements CategoriaApiInterface
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
     * Implementation of CategoriaApiInterface#categoriesGet
     */
    public function categoriesGet()
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**Swagger\Server\Model\Categories**](../Model/Categories.md)

### Authorization

[access_token](../../README.md#access_token), [client_id](../../README.md#client_id)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

