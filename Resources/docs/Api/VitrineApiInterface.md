# Swagger\Server\Api\VitrineApiInterface

All URIs are relative to *https://localhost/marketplace-api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**showcasesShowcaseIdGet**](VitrineApiInterface.md#showcasesShowcaseIdGet) | **GET** /showcases/{showcase_id} | Recurso utilizado para retornar informações de uma determinada vitrine


## Service Declaration
```yaml
# src/Acme/MyBundle/Resources/services.yml
services:
    # ...
    acme.my_bundle.api.vitrine:
        class: Acme\MyBundle\Api\VitrineApi
        tags:
            - { name: "swagger_server.api", api: "vitrine" }
    # ...
```

## **showcasesShowcaseIdGet**
> Swagger\Server\Model\Showcase showcasesShowcaseIdGet($showcase_id, $_offset)

Recurso utilizado para retornar informações de uma determinada vitrine

Obtém uma vitrine

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/VitrineApiInterface.php

namespace Acme\MyBundle\Api;

use Swagger\Server\Api\VitrineApiInterface;

class VitrineApi implements VitrineApiInterface
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
     * Implementation of VitrineApiInterface#showcasesShowcaseIdGet
     */
    public function showcasesShowcaseIdGet($showcase_id, $_offset = '0')
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **showcase_id** | **string**| Identificador da vitrine |
 **_offset** | **int**|  | [optional] [default to 0]

### Return type

[**Swagger\Server\Model\Showcase**](../Model/Showcase.md)

### Authorization

[access_token](../../README.md#access_token), [client_id](../../README.md#client_id)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

