# Swagger\Server\Api\SKUApiInterface

All URIs are relative to *https://localhost/marketplace-api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**skusIdAvailabilityGet**](SKUApiInterface.md#skusIdAvailabilityGet) | **GET** /skus/{id}/availability | Recurso utilizado para retornar informações de preço e disponibilidade de um determinado SKU


## Service Declaration
```yaml
# src/Acme/MyBundle/Resources/services.yml
services:
    # ...
    acme.my_bundle.api.sKU:
        class: Acme\MyBundle\Api\SKUApi
        tags:
            - { name: "swagger_server.api", api: "sKU" }
    # ...
```

## **skusIdAvailabilityGet**
> Swagger\Server\Model\Availability skusIdAvailabilityGet($id, $vendor_id, $original_id)

Recurso utilizado para retornar informações de preço e disponibilidade de um determinado SKU

Obtém a disponibilidade e preço pelo Id

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/SKUApiInterface.php

namespace Acme\MyBundle\Api;

use Swagger\Server\Api\SKUApiInterface;

class SKUApi implements SKUApiInterface
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
     * Implementation of SKUApiInterface#skusIdAvailabilityGet
     */
    public function skusIdAvailabilityGet($id, $vendor_id, $original_id)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identificador do SKU |
 **vendor_id** | **string**| Identificador do vendor |
 **original_id** | **string**| Identificador do SKU no vendor |

### Return type

[**Swagger\Server\Model\Availability**](../Model/Availability.md)

### Authorization

[access_token](../../README.md#access_token), [client_id](../../README.md#client_id)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

