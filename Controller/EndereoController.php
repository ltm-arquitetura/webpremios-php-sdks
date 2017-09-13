<?php

/**
 * EndereoController
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Server\Controller
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Marketplace
 *
 * API Cloud Loyalty LTM - Webpremios
 *
 * OpenAPI spec version: 1.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Server\Controller;

use \Exception;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Swagger\Server\Api\EndereoApiInterface;
use Swagger\Server\Model\BusinessErrorMessage;
use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpKernel\Exception\UnprocessableEntityHttpException;
use Swagger\Server\Model\ZipCodeAddress;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

/**
 * EndereoController Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Server\Controller
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EndereoController extends Controller
{

    /**
     * Operation addressesZipCodeGet
     *
     * Obtém endereço pelo CEP
     *
     * @param Request $request The Symfony request to handle.
     * @return Response The Symfony response.
     */
    public function addressesZipCodeGetAction(Request $request)
    {
        // Authentication 'access_token' required
        // Set key with prefix in header
        $securityaccess_token = $request->headers->get('access_token');
        // Authentication 'client_id' required
        // Set key with prefix in header
        $securityclient_id = $request->headers->get('client_id');
        // Handle path params
        $zip_code = $this->fromPath($request->attributes->get('zip_code'), 'string');

        // Parse incoming parameters
        // Verify the required parameter 'zip_code' is set
        if ($zip_code === null) {
            return $this->createBadRequestResponse('Missing the required parameter $zip_code when calling addressesZipCodeGet');
        }

        // Call the API interface
        try {
            $handler = $this->getApiHandler();

            // Set authentication method 'access_token'
            $handler->setaccess_token($securityaccess_token);
            // Set authentication method 'client_id'
            $handler->setclient_id($securityclient_id);
            // Expecting a return value (exception otherwise)
            $result = $handler->addressesZipCodeGet($zip_code);

            // Handle 200 response: Operação realizada com sucesso.
            $content = $this->serialize($result, 'json');
            return new Response($content, 200, [
                'Content-Type' => 'application/json',
                'X-Swagger-Message' => 'Operação realizada com sucesso.',
            ]);
            // Handle 500 response: Erro Interno.
            $content = $this->serialize($result, 'json');
            return new Response($content, 500, [
                'Content-Type' => 'application/json',
                'X-Swagger-Message' => 'Erro Interno.',
            ]);
        } catch (BadRequestHttpException $exception) {
            // Requisição mal formada.
            return $this->createErrorResponse($exception);
        } catch (UnauthorizedHttpException $exception) {
            // Requisição requer autenticação.
            return $this->createErrorResponse($exception);
        } catch (AccessDeniedHttpException $exception) {
            // O acesso ao recurso foi negado.
            return $this->createErrorResponse($exception);
        } catch (NotFoundHttpException $exception) {
            // Recurso não encontrado.
            return $this->createErrorResponse($exception);
        } catch (UnprocessableEntityHttpException $exception) {
            // Requisição não processável.
            return $this->createErrorResponse($exception);
        } catch (Exception $fallthrough) {
            return $this->createErrorResponse(new HttpException(500, 'An unsuspected error occurred.', $fallthrough));
        }
    }

    /**
     * Returns the handler for this API controller.
     * @return EndereoApiInterface
     */
    public function getApiHandler()
    {
        return $this->get('swagger_server.api.api_server')->getApiHandler('endereo');
    }
}
