# Swagger\Server\Api\LojasApiInterface

All URIs are relative to *https://localhost/marketplace-api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**storesGet**](LojasApiInterface.md#storesGet) | **GET** /stores | Recurso utilizado para retornar as lojas do catálogo


## Service Declaration
```yaml
# src/Acme/MyBundle/Resources/services.yml
services:
    # ...
    acme.my_bundle.api.lojas:
        class: Acme\MyBundle\Api\LojasApi
        tags:
            - { name: "swagger_server.api", api: "lojas" }
    # ...
```

## **storesGet**
> Swagger\Server\Model\Stores storesGet()

Recurso utilizado para retornar as lojas do catálogo

Obtém uma lista de lojas

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/LojasApiInterface.php

namespace Acme\MyBundle\Api;

use Swagger\Server\Api\LojasApiInterface;

class LojasApi implements LojasApiInterface
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
     * Implementation of LojasApiInterface#storesGet
     */
    public function storesGet()
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**Swagger\Server\Model\Stores**](../Model/Stores.md)

### Authorization

[access_token](../../README.md#access_token), [client_id](../../README.md#client_id)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

