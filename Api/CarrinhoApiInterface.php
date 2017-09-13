<?php
/**
 * CarrinhoApiInterface
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Server
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

namespace Swagger\Server\Api;

use Swagger\Server\Model\BusinessErrorMessage;
use Swagger\Server\Model\RequestUpdCartItem;
use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Swagger\Server\Model\CartShipping;
use Swagger\Server\Model\Cart;
use Symfony\Component\HttpKernel\Exception\UnprocessableEntityHttpException;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Swagger\Server\Model\RequestAddCartItem;
use Swagger\Server\Model\ShippingRates;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

/**
 * CarrinhoApiInterface Interface Doc Comment
 *
 * @category Interface
 * @package  Swagger\Server\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
interface CarrinhoApiInterface
{

    /**
     * Sets authentication method access_token
     *
     * @param string $value Value of the access_token authentication method.
     *
     * @return void
     */
    public function setaccess_token($value);

    /**
     * Sets authentication method client_id
     *
     * @param string $value Value of the client_id authentication method.
     *
     * @return void
     */
    public function setclient_id($value);

    /**
     * Operation cartsMeGet
     *
     * Obtém um carrinho
     *
     * @param  string $type  Tipo do carrinho (required)
     *
     * @return Cart  Operação realizada com sucesso.
     *
     * @throws BadRequestHttpException  Requisição mal formada.
     * @throws UnauthorizedHttpException  Requisição requer autenticação.
     * @throws AccessDeniedHttpException  O acesso ao recurso foi negado.
     * @throws NotFoundHttpException  Recurso não encontrado.
     * @throws UnprocessableEntityHttpException  Requisição não processável.
     * @return void  Erro Interno.
     *
     */
    public function cartsMeGet($type);

    /**
     * Operation cartsMeItemsPost
     *
     * Adicionar item no carrinho
     *
     * @param  string $type  Tipo do carrinho (required)
     * @param  RequestAddCartItem $item   (required)
     * @param  string $email  E-mail que será enviado o voucher (optional)
     *
     * @return void  Operação realizada com sucesso.
     *
     * @throws BadRequestHttpException  Requisição mal formada.
     * @throws UnauthorizedHttpException  Requisição requer autenticação.
     * @throws AccessDeniedHttpException  O acesso ao recurso foi negado.
     * @throws NotFoundHttpException  Recurso não encontrado.
     * @throws UnprocessableEntityHttpException  Requisição não processável.
     * @return void  Erro Interno.
     *
     */
    public function cartsMeItemsPost($type, RequestAddCartItem $item, $email = null);

    /**
     * Operation cartsMeItemsSkuIdDelete
     *
     * Remove item do carrinho
     *
     * @param  string $sku_id  Identificador do SKU. (required)
     * @param  string $type  Tipo do carrinho (required)
     *
     * @return void  Operação realizada com sucesso.
     *
     * @throws BadRequestHttpException  Requisição mal formada.
     * @throws UnauthorizedHttpException  Requisição requer autenticação.
     * @throws AccessDeniedHttpException  O acesso ao recurso foi negado.
     * @throws NotFoundHttpException  Recurso não encontrado.
     * @throws UnprocessableEntityHttpException  Requisição não processável.
     * @return void  Erro Interno.
     *
     */
    public function cartsMeItemsSkuIdDelete($sku_id, $type);

    /**
     * Operation cartsMeItemsSkuIdPut
     *
     * Alterar item no carrinho
     *
     * @param  int $sku_id  Identificador do SKU (required)
     * @param  string $type  Tipo do carrinho (required)
     * @param  string $vendor_id  Identificador do parceiro (required)
     * @param  RequestUpdCartItem $item   (required)
     *
     * @return void  Operação realizada com sucesso.
     *
     * @throws BadRequestHttpException  Requisição mal formada.
     * @throws UnauthorizedHttpException  Requisição requer autenticação.
     * @throws AccessDeniedHttpException  O acesso ao recurso foi negado.
     * @throws NotFoundHttpException  Recurso não encontrado.
     * @throws UnprocessableEntityHttpException  Requisição não processável.
     * @return void  Erro Interno.
     *
     */
    public function cartsMeItemsSkuIdPut($sku_id, $type, $vendor_id, RequestUpdCartItem $item);

    /**
     * Operation cartsMeShippingPut
     *
     * Adiciona dados de entrega no carrinho
     *
     * @param  string $type  Tipo do carrinho (required)
     * @param  CartShipping $shipping   (required)
     *
     * @return void  Operação realizada com sucesso.
     *
     * @throws BadRequestHttpException  Requisição mal formada.
     * @throws UnauthorizedHttpException  Requisição requer autenticação.
     * @throws AccessDeniedHttpException  O acesso ao recurso foi negado.
     * @throws NotFoundHttpException  Recurso não encontrado.
     * @throws UnprocessableEntityHttpException  Requisição não processável.
     * @return void  Erro Interno.
     *
     */
    public function cartsMeShippingPut($type, CartShipping $shipping);

    /**
     * Operation cartsMeShippingRatesGet
     *
     * Calcula o frete do carrinho para um CEP
     *
     * @param  string $zip_code  CEP a ser calculado (required)
     * @param  string $type  Tipo do carrinho (required)
     *
     * @return ShippingRates  Frete calculado com sucesso
     *
     * @throws UnprocessableEntityHttpException  Carrinho inválido para calculo de frete
     */
    public function cartsMeShippingRatesGet($zip_code, $type);
}
