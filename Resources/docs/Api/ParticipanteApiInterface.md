# Swagger\Server\Api\ParticipanteApiInterface

All URIs are relative to *https://localhost/marketplace-api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**participantsMeBalanceGet**](ParticipanteApiInterface.md#participantsMeBalanceGet) | **GET** /participants/me/balance | Obtém o saldo do participante
[**participantsMeExtractGet**](ParticipanteApiInterface.md#participantsMeExtractGet) | **GET** /participants/me/extract | Obtém o extrato do participante
[**participantsMeGet**](ParticipanteApiInterface.md#participantsMeGet) | **GET** /participants/me | Obtém um participante
[**participantsMePasswordPut**](ParticipanteApiInterface.md#participantsMePasswordPut) | **PUT** /participants/me/password | Altera a senha do participante
[**participantsMePut**](ParticipanteApiInterface.md#participantsMePut) | **PUT** /participants/me | Altera um participante
[**participantsPost**](ParticipanteApiInterface.md#participantsPost) | **POST** /participants | Cria um novo participante
[**participantsUsernamePasswordResetPost**](ParticipanteApiInterface.md#participantsUsernamePasswordResetPost) | **POST** /participants/{username}/password-reset | Reseta a senha do participante


## Service Declaration
```yaml
# src/Acme/MyBundle/Resources/services.yml
services:
    # ...
    acme.my_bundle.api.participante:
        class: Acme\MyBundle\Api\ParticipanteApi
        tags:
            - { name: "swagger_server.api", api: "participante" }
    # ...
```

## **participantsMeBalanceGet**
> Swagger\Server\Model\Balance participantsMeBalanceGet()

Obtém o saldo do participante

Recurso utilizado para recuperar o saldo do participante

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ParticipanteApiInterface.php

namespace Acme\MyBundle\Api;

use Swagger\Server\Api\ParticipanteApiInterface;

class ParticipanteApi implements ParticipanteApiInterface
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
     * Implementation of ParticipanteApiInterface#participantsMeBalanceGet
     */
    public function participantsMeBalanceGet()
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**Swagger\Server\Model\Balance**](../Model/Balance.md)

### Authorization

[access_token](../../README.md#access_token), [client_id](../../README.md#client_id)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **participantsMeExtractGet**
> Swagger\Server\Model\Extract[] participantsMeExtractGet($start_date, $end_date, $_offset, $_limit)

Obtém o extrato do participante

Recurso utilizado para recuperar o extrato do participante

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ParticipanteApiInterface.php

namespace Acme\MyBundle\Api;

use Swagger\Server\Api\ParticipanteApiInterface;

class ParticipanteApi implements ParticipanteApiInterface
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
     * Implementation of ParticipanteApiInterface#participantsMeExtractGet
     */
    public function participantsMeExtractGet($start_date, $end_date, $_offset, $_limit)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **string**| Data De |
 **end_date** | **string**| Data Até |
 **_offset** | **float**| Número da página |
 **_limit** | **float**| Número de registros |

### Return type

[**Swagger\Server\Model\Extract[]**](../Model/Extract.md)

### Authorization

[access_token](../../README.md#access_token), [client_id](../../README.md#client_id)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **participantsMeGet**
> Swagger\Server\Model\Participant participantsMeGet()

Obtém um participante

Recurso utilizado para retornar informações de um determinado participante

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ParticipanteApiInterface.php

namespace Acme\MyBundle\Api;

use Swagger\Server\Api\ParticipanteApiInterface;

class ParticipanteApi implements ParticipanteApiInterface
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
     * Implementation of ParticipanteApiInterface#participantsMeGet
     */
    public function participantsMeGet()
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**Swagger\Server\Model\Participant**](../Model/Participant.md)

### Authorization

[access_token](../../README.md#access_token), [client_id](../../README.md#client_id)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **participantsMePasswordPut**
> participantsMePasswordPut($password)

Altera a senha do participante

Recurso utilizado para alterar a senha do participante

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ParticipanteApiInterface.php

namespace Acme\MyBundle\Api;

use Swagger\Server\Api\ParticipanteApiInterface;

class ParticipanteApi implements ParticipanteApiInterface
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
     * Implementation of ParticipanteApiInterface#participantsMePasswordPut
     */
    public function participantsMePasswordPut(Password $password)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **password** | [**Swagger\Server\Model\Password**](../Model/Password.md)|  |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token), [client_id](../../README.md#client_id)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **participantsMePut**
> participantsMePut($participant)

Altera um participante

Recurso utilizado para alterar um participante

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ParticipanteApiInterface.php

namespace Acme\MyBundle\Api;

use Swagger\Server\Api\ParticipanteApiInterface;

class ParticipanteApi implements ParticipanteApiInterface
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
     * Implementation of ParticipanteApiInterface#participantsMePut
     */
    public function participantsMePut(ParticipantUpt $participant = null)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **participant** | [**Swagger\Server\Model\ParticipantUpt**](../Model/ParticipantUpt.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token), [client_id](../../README.md#client_id)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **participantsPost**
> Swagger\Server\Model\ParticipantResult participantsPost($participant)

Cria um novo participante

Recurso utilizado para criar um novo participante

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ParticipanteApiInterface.php

namespace Acme\MyBundle\Api;

use Swagger\Server\Api\ParticipanteApiInterface;

class ParticipanteApi implements ParticipanteApiInterface
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
     * Implementation of ParticipanteApiInterface#participantsPost
     */
    public function participantsPost(ParticipantAdd $participant)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **participant** | [**Swagger\Server\Model\ParticipantAdd**](../Model/ParticipantAdd.md)|  |

### Return type

[**Swagger\Server\Model\ParticipantResult**](../Model/ParticipantResult.md)

### Authorization

[access_token](../../README.md#access_token), [client_id](../../README.md#client_id)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **participantsUsernamePasswordResetPost**
> participantsUsernamePasswordResetPost($username, $campaign_url)

Reseta a senha do participante

Recurso utilizado para resetar a senha do participante

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ParticipanteApiInterface.php

namespace Acme\MyBundle\Api;

use Swagger\Server\Api\ParticipanteApiInterface;

class ParticipanteApi implements ParticipanteApiInterface
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
     * Implementation of ParticipanteApiInterface#participantsUsernamePasswordResetPost
     */
    public function participantsUsernamePasswordResetPost($username, $campaign_url)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **username** | **string**| Username do participante |
 **campaign_url** | **string**| URL da campanha |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token), [client_id](../../README.md#client_id)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

