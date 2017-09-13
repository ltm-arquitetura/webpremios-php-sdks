# Swagger\Server\Api\AutorizaoApiInterface

All URIs are relative to *https://localhost/marketplace-api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accessTokenPost**](AutorizaoApiInterface.md#accessTokenPost) | **POST** /access-token | Gera um token


## Service Declaration
```yaml
# src/Acme/MyBundle/Resources/services.yml
services:
    # ...
    acme.my_bundle.api.autorizao:
        class: Acme\MyBundle\Api\AutorizaoApi
        tags:
            - { name: "swagger_server.api", api: "autorizao" }
    # ...
```

## **accessTokenPost**
> Swagger\Server\Model\Token accessTokenPost($grant_type, $campaign_id, $user, $password)

Gera um token

Recurso utilizado para obter tokens de acesso

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/AutorizaoApiInterface.php

namespace Acme\MyBundle\Api;

use Swagger\Server\Api\AutorizaoApiInterface;

class AutorizaoApi implements AutorizaoApiInterface
{

    /**
     * Configure API key authorization: Authorization
     */
    public function setAuthorization($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of AutorizaoApiInterface#accessTokenPost
     */
    public function accessTokenPost($grant_type, $campaign_id, $user = null, $password = null)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **grant_type** | **string**|  |
 **campaign_id** | **string**|  |
 **user** | **string**|  | [optional]
 **password** | **string**|  | [optional]

### Return type

[**Swagger\Server\Model\Token**](../Model/Token.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

