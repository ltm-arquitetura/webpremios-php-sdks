<?php
/**
 * BuscaApiInterface
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
use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Swagger\Server\Model\Search;
use Symfony\Component\HttpKernel\Exception\UnprocessableEntityHttpException;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

/**
 * BuscaApiInterface Interface Doc Comment
 *
 * @category Interface
 * @package  Swagger\Server\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
interface BuscaApiInterface
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
     * Operation searchGet
     *
     * Obtém produtos
     *
     * @param  string $sort  Tipo da ordenação (required)
     * @param  float $_offset  Número da página (required)
     * @param  float $_limit  Número de registros (required)
     * @param  string $term  Termo para busca (optional)
     * @param  string $vendor_id  Identificador do parceiro (optional)
     * @param  string $category_id  Identificador da categoria (optional)
     * @param  string $subcategory_id  Identificador da subcategoria (optional)
     * @param  string $brand_id  Identificador da marca (optional)
     * @param  float $min_price  Range de preço de, em pontos (optional)
     * @param  float $max_price  Range de preço até, em pontos (optional)
     *
     * @return Search  Operação realizada com sucesso.
     *
     * @throws BadRequestHttpException  Requisição mal formada.
     * @throws UnauthorizedHttpException  Requisição requer autenticação.
     * @throws AccessDeniedHttpException  O acesso ao recurso foi negado.
     * @throws NotFoundHttpException  Recurso não encontrado.
     * @throws UnprocessableEntityHttpException  Requisição não processável.
     * @return void  Erro Interno.
     *
     */
    public function searchGet($sort, $_offset, $_limit, $term = null, $vendor_id = null, $category_id = null, $subcategory_id = null, $brand_id = null, $min_price = null, $max_price = null);
}
