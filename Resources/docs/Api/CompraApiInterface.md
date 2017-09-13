# Swagger\Server\Api\CompraApiInterface

All URIs are relative to *https://localhost/marketplace-api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**purchasesAuthorizePost**](CompraApiInterface.md#purchasesAuthorizePost) | **POST** /purchases/authorize | Cria e autoriza uma compra
[**purchasesIdConfirmPost**](CompraApiInterface.md#purchasesIdConfirmPost) | **POST** /purchases/{id}/confirm | Confirma uma compra
[**purchasesIdGet**](CompraApiInterface.md#purchasesIdGet) | **GET** /purchases/{id} | Obtém um compra
[**purchasesMeGet**](CompraApiInterface.md#purchasesMeGet) | **GET** /purchases/me | Obtém compras
[**purchasesPost**](CompraApiInterface.md#purchasesPost) | **POST** /purchases | Cria uma compra


## Service Declaration
```yaml
# src/Acme/MyBundle/Resources/services.yml
services:
    # ...
    acme.my_bundle.api.compra:
        class: Acme\MyBundle\Api\CompraApi
        tags:
            - { name: "swagger_server.api", api: "compra" }
    # ...
```

## **purchasesAuthorizePost**
> Swagger\Server\Model\PurchaseAdd purchasesAuthorizePost($purchase)

Cria e autoriza uma compra

Recurso utilizado para criação e autorização de uma compras

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CompraApiInterface.php

namespace Acme\MyBundle\Api;

use Swagger\Server\Api\CompraApiInterface;

class CompraApi implements CompraApiInterface
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
     * Implementation of CompraApiInterface#purchasesAuthorizePost
     */
    public function purchasesAuthorizePost(PurchaseAuthorize $purchase)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **purchase** | [**Swagger\Server\Model\PurchaseAuthorize**](../Model/PurchaseAuthorize.md)|  |

### Return type

[**Swagger\Server\Model\PurchaseAdd**](../Model/PurchaseAdd.md)

### Authorization

[access_token](../../README.md#access_token), [client_id](../../README.md#client_id)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **purchasesIdConfirmPost**
> purchasesIdConfirmPost($id)

Confirma uma compra

Recurso utilizado para confirmação de compra

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CompraApiInterface.php

namespace Acme\MyBundle\Api;

use Swagger\Server\Api\CompraApiInterface;

class CompraApi implements CompraApiInterface
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
     * Implementation of CompraApiInterface#purchasesIdConfirmPost
     */
    public function purchasesIdConfirmPost($id)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identificador da compra |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token), [client_id](../../README.md#client_id)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **purchasesIdGet**
> Swagger\Server\Model\Purchase purchasesIdGet($id)

Obtém um compra

Recurso utilizado obter uma compra

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CompraApiInterface.php

namespace Acme\MyBundle\Api;

use Swagger\Server\Api\CompraApiInterface;

class CompraApi implements CompraApiInterface
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
     * Implementation of CompraApiInterface#purchasesIdGet
     */
    public function purchasesIdGet($id)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identificador da compra |

### Return type

[**Swagger\Server\Model\Purchase**](../Model/Purchase.md)

### Authorization

[access_token](../../README.md#access_token), [client_id](../../README.md#client_id)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **purchasesMeGet**
> Swagger\Server\Model\Purchase[] purchasesMeGet()

Obtém compras

Recurso utilizado obter as compras de um participante

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CompraApiInterface.php

namespace Acme\MyBundle\Api;

use Swagger\Server\Api\CompraApiInterface;

class CompraApi implements CompraApiInterface
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
     * Implementation of CompraApiInterface#purchasesMeGet
     */
    public function purchasesMeGet()
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**Swagger\Server\Model\Purchase[]**](../Model/Purchase.md)

### Authorization

[access_token](../../README.md#access_token), [client_id](../../README.md#client_id)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **purchasesPost**
> Swagger\Server\Model\PurchaseAdd purchasesPost($purchase)

Cria uma compra

Recurso utilizado para criação de uma compra

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CompraApiInterface.php

namespace Acme\MyBundle\Api;

use Swagger\Server\Api\CompraApiInterface;

class CompraApi implements CompraApiInterface
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
     * Implementation of CompraApiInterface#purchasesPost
     */
    public function purchasesPost(PurchasePost $purchase)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **purchase** | [**Swagger\Server\Model\PurchasePost**](../Model/PurchasePost.md)|  |

### Return type

[**Swagger\Server\Model\PurchaseAdd**](../Model/PurchaseAdd.md)

### Authorization

[access_token](../../README.md#access_token), [client_id](../../README.md#client_id)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

