# Swagger\Server\Api\CarrinhoApiInterface

All URIs are relative to *https://localhost/marketplace-api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cartsMeGet**](CarrinhoApiInterface.md#cartsMeGet) | **GET** /carts/me | Obtém um carrinho
[**cartsMeItemsPost**](CarrinhoApiInterface.md#cartsMeItemsPost) | **POST** /carts/me/items | Adicionar item no carrinho
[**cartsMeItemsSkuIdDelete**](CarrinhoApiInterface.md#cartsMeItemsSkuIdDelete) | **DELETE** /carts/me/items/{skuId} | Remove item do carrinho
[**cartsMeItemsSkuIdPut**](CarrinhoApiInterface.md#cartsMeItemsSkuIdPut) | **PUT** /carts/me/items/{skuId} | Alterar item no carrinho
[**cartsMeShippingPut**](CarrinhoApiInterface.md#cartsMeShippingPut) | **PUT** /carts/me/shipping | Adiciona dados de entrega no carrinho
[**cartsMeShippingRatesGet**](CarrinhoApiInterface.md#cartsMeShippingRatesGet) | **GET** /carts/me/shipping/rates | Calcula o frete do carrinho para um CEP


## Service Declaration
```yaml
# src/Acme/MyBundle/Resources/services.yml
services:
    # ...
    acme.my_bundle.api.carrinho:
        class: Acme\MyBundle\Api\CarrinhoApi
        tags:
            - { name: "swagger_server.api", api: "carrinho" }
    # ...
```

## **cartsMeGet**
> Swagger\Server\Model\Cart cartsMeGet($type)

Obtém um carrinho

Recurso utilizado para recuperar o ultimo carrinho criado do participante

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CarrinhoApiInterface.php

namespace Acme\MyBundle\Api;

use Swagger\Server\Api\CarrinhoApiInterface;

class CarrinhoApi implements CarrinhoApiInterface
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
     * Implementation of CarrinhoApiInterface#cartsMeGet
     */
    public function cartsMeGet($type)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| Tipo do carrinho |

### Return type

[**Swagger\Server\Model\Cart**](../Model/Cart.md)

### Authorization

[access_token](../../README.md#access_token), [client_id](../../README.md#client_id)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **cartsMeItemsPost**
> cartsMeItemsPost($type, $item, $email)

Adicionar item no carrinho

Recurso utilizado para adicinar um determinado item no carrinho

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CarrinhoApiInterface.php

namespace Acme\MyBundle\Api;

use Swagger\Server\Api\CarrinhoApiInterface;

class CarrinhoApi implements CarrinhoApiInterface
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
     * Implementation of CarrinhoApiInterface#cartsMeItemsPost
     */
    public function cartsMeItemsPost($type, RequestAddCartItem $item, $email = null)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| Tipo do carrinho |
 **item** | [**Swagger\Server\Model\RequestAddCartItem**](../Model/RequestAddCartItem.md)|  |
 **email** | **string**| E-mail que será enviado o voucher | [optional]

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token), [client_id](../../README.md#client_id)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **cartsMeItemsSkuIdDelete**
> cartsMeItemsSkuIdDelete($sku_id, $type)

Remove item do carrinho

Recurso utilizado para remover um determinado item do carrinho

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CarrinhoApiInterface.php

namespace Acme\MyBundle\Api;

use Swagger\Server\Api\CarrinhoApiInterface;

class CarrinhoApi implements CarrinhoApiInterface
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
     * Implementation of CarrinhoApiInterface#cartsMeItemsSkuIdDelete
     */
    public function cartsMeItemsSkuIdDelete($sku_id, $type)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku_id** | **string**| Identificador do SKU. |
 **type** | **string**| Tipo do carrinho |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token), [client_id](../../README.md#client_id)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **cartsMeItemsSkuIdPut**
> cartsMeItemsSkuIdPut($sku_id, $type, $vendor_id, $item)

Alterar item no carrinho

Recurso utilizado para alterar um determinado item no carrinho

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CarrinhoApiInterface.php

namespace Acme\MyBundle\Api;

use Swagger\Server\Api\CarrinhoApiInterface;

class CarrinhoApi implements CarrinhoApiInterface
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
     * Implementation of CarrinhoApiInterface#cartsMeItemsSkuIdPut
     */
    public function cartsMeItemsSkuIdPut($sku_id, $type, $vendor_id, RequestUpdCartItem $item)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku_id** | **int**| Identificador do SKU |
 **type** | **string**| Tipo do carrinho |
 **vendor_id** | **string**| Identificador do parceiro |
 **item** | [**Swagger\Server\Model\RequestUpdCartItem**](../Model/RequestUpdCartItem.md)|  |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token), [client_id](../../README.md#client_id)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **cartsMeShippingPut**
> cartsMeShippingPut($type, $shipping)

Adiciona dados de entrega no carrinho

Recurso utilizado para adicinar os dados de entrega do carrinho

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CarrinhoApiInterface.php

namespace Acme\MyBundle\Api;

use Swagger\Server\Api\CarrinhoApiInterface;

class CarrinhoApi implements CarrinhoApiInterface
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
     * Implementation of CarrinhoApiInterface#cartsMeShippingPut
     */
    public function cartsMeShippingPut($type, CartShipping $shipping)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| Tipo do carrinho |
 **shipping** | [**Swagger\Server\Model\CartShipping**](../Model/CartShipping.md)|  |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token), [client_id](../../README.md#client_id)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **cartsMeShippingRatesGet**
> Swagger\Server\Model\ShippingRates cartsMeShippingRatesGet($zip_code, $type)

Calcula o frete do carrinho para um CEP

Recurso utilizado para calcular o frete do carrinho baseado em um CEP

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CarrinhoApiInterface.php

namespace Acme\MyBundle\Api;

use Swagger\Server\Api\CarrinhoApiInterface;

class CarrinhoApi implements CarrinhoApiInterface
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
     * Implementation of CarrinhoApiInterface#cartsMeShippingRatesGet
     */
    public function cartsMeShippingRatesGet($zip_code, $type)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **zip_code** | **string**| CEP a ser calculado |
 **type** | **string**| Tipo do carrinho |

### Return type

[**Swagger\Server\Model\ShippingRates**](../Model/ShippingRates.md)

### Authorization

[access_token](../../README.md#access_token), [client_id](../../README.md#client_id)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

