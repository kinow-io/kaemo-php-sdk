<?php
/**
 * ActorsApi
 * PHP version 5
 *
 * @category Class
 * @package  Kaemo\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Kinow API
 *
 * Public api for Kinow back office
 *
 * OpenAPI spec version: 1.0.73
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Kaemo\Client\Api;

use \Kaemo\Client\ApiClient;
use \Kaemo\Client\ApiException;
use \Kaemo\Client\Configuration;
use \Kaemo\Client\ObjectSerializer;

/**
 * ActorsApi Class Doc Comment
 *
 * @category Class
 * @package  Kaemo\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ActorsApi
{
    /**
     * API Client
     *
     * @var \Kaemo\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Kaemo\Client\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Kaemo\Client\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('https://api.kinow.com/api');
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Kaemo\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Kaemo\Client\ApiClient $apiClient set the API client
     *
     * @return ActorsApi
     */
    public function setApiClient(\Kaemo\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation createActor
     *
     * 
     *
     * @param \Kaemo\Client\Model\Actor $body  (required)
     * @throws \Kaemo\Client\ApiException on non-2xx response
     * @return \Kaemo\Client\Model\Actor
     */
    public function createActor($body)
    {
        list($response) = $this->createActorWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation createActorWithHttpInfo
     *
     * 
     *
     * @param \Kaemo\Client\Model\Actor $body  (required)
     * @throws \Kaemo\Client\ApiException on non-2xx response
     * @return array of \Kaemo\Client\Model\Actor, HTTP status code, HTTP response headers (array of strings)
     */
    public function createActorWithHttpInfo($body)
    {
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling createActor');
        }
        // parse inputs
        $resourcePath = "/actors";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $apiVersion = $this->apiClient->getConfig()->getApiVersion();
        $_header_accept = $this->apiClient->selectHeaderAccept(["application/vnd.kaemoapi.v$apiVersion+json"]);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Kaemo\Client\Model\Actor',
                '/actors'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Kaemo\Client\Model\Actor', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Kaemo\Client\Model\Actor', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation deleteActor
     *
     * 
     *
     * @param int $actor_id  (required)
     * @throws \Kaemo\Client\ApiException on non-2xx response
     * @return void
     */
    public function deleteActor($actor_id)
    {
        list($response) = $this->deleteActorWithHttpInfo($actor_id);
        return $response;
    }

    /**
     * Operation deleteActorWithHttpInfo
     *
     * 
     *
     * @param int $actor_id  (required)
     * @throws \Kaemo\Client\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteActorWithHttpInfo($actor_id)
    {
        // verify the required parameter 'actor_id' is set
        if ($actor_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $actor_id when calling deleteActor');
        }
        // parse inputs
        $resourcePath = "/actors/{actor_id}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $apiVersion = $this->apiClient->getConfig()->getApiVersion();
        $_header_accept = $this->apiClient->selectHeaderAccept(["application/vnd.kaemoapi.v$apiVersion+json"]);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // path params
        if ($actor_id !== null) {
            $resourcePath = str_replace(
                "{" . "actor_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($actor_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/actors/{actor_id}'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation getActor
     *
     * 
     *
     * @param int $actor_id ID of the actor to fetch (required)
     * @param string $image_type  (optional)
     * @throws \Kaemo\Client\ApiException on non-2xx response
     * @return \Kaemo\Client\Model\Actor
     */
    public function getActor($actor_id, $image_type = null)
    {
        list($response) = $this->getActorWithHttpInfo($actor_id, $image_type);
        return $response;
    }

    /**
     * Operation getActorWithHttpInfo
     *
     * 
     *
     * @param int $actor_id ID of the actor to fetch (required)
     * @param string $image_type  (optional)
     * @throws \Kaemo\Client\ApiException on non-2xx response
     * @return array of \Kaemo\Client\Model\Actor, HTTP status code, HTTP response headers (array of strings)
     */
    public function getActorWithHttpInfo($actor_id, $image_type = null)
    {
        // verify the required parameter 'actor_id' is set
        if ($actor_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $actor_id when calling getActor');
        }
        // parse inputs
        $resourcePath = "/actors/{actor_id}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $apiVersion = $this->apiClient->getConfig()->getApiVersion();
        $_header_accept = $this->apiClient->selectHeaderAccept(["application/vnd.kaemoapi.v$apiVersion+json"]);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if ($image_type !== null) {
            $queryParams['image_type'] = $this->apiClient->getSerializer()->toQueryValue($image_type);
        }
        // path params
        if ($actor_id !== null) {
            $resourcePath = str_replace(
                "{" . "actor_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($actor_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Kaemo\Client\Model\Actor',
                '/actors/{actor_id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Kaemo\Client\Model\Actor', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Kaemo\Client\Model\Actor', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getActors
     *
     * 
     *
     * @param int $page  (optional)
     * @param int $per_page  (optional)
     * @param string $image_type  (optional)
     * @throws \Kaemo\Client\ApiException on non-2xx response
     * @return \Kaemo\Client\Model\Actors
     */
    public function getActors($page = null, $per_page = null, $image_type = null)
    {
        list($response) = $this->getActorsWithHttpInfo($page, $per_page, $image_type);
        return $response;
    }

    /**
     * Operation getActorsWithHttpInfo
     *
     * 
     *
     * @param int $page  (optional)
     * @param int $per_page  (optional)
     * @param string $image_type  (optional)
     * @throws \Kaemo\Client\ApiException on non-2xx response
     * @return array of \Kaemo\Client\Model\Actors, HTTP status code, HTTP response headers (array of strings)
     */
    public function getActorsWithHttpInfo($page = null, $per_page = null, $image_type = null)
    {
        // parse inputs
        $resourcePath = "/actors";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $apiVersion = $this->apiClient->getConfig()->getApiVersion();
        $_header_accept = $this->apiClient->selectHeaderAccept(["application/vnd.kaemoapi.v$apiVersion+json"]);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if ($page !== null) {
            $queryParams['page'] = $this->apiClient->getSerializer()->toQueryValue($page);
        }
        // query params
        if ($per_page !== null) {
            $queryParams['per_page'] = $this->apiClient->getSerializer()->toQueryValue($per_page);
        }
        // query params
        if ($image_type !== null) {
            $queryParams['image_type'] = $this->apiClient->getSerializer()->toQueryValue($image_type);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Kaemo\Client\Model\Actors',
                '/actors'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Kaemo\Client\Model\Actors', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Kaemo\Client\Model\Actors', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getProductActors
     *
     * 
     *
     * @param int $product_id ID of the product to fetch (required)
     * @param int $page  (optional)
     * @param int $per_page  (optional)
     * @param string $image_type  (optional)
     * @throws \Kaemo\Client\ApiException on non-2xx response
     * @return \Kaemo\Client\Model\Actors
     */
    public function getProductActors($product_id, $page = null, $per_page = null, $image_type = null)
    {
        list($response) = $this->getProductActorsWithHttpInfo($product_id, $page, $per_page, $image_type);
        return $response;
    }

    /**
     * Operation getProductActorsWithHttpInfo
     *
     * 
     *
     * @param int $product_id ID of the product to fetch (required)
     * @param int $page  (optional)
     * @param int $per_page  (optional)
     * @param string $image_type  (optional)
     * @throws \Kaemo\Client\ApiException on non-2xx response
     * @return array of \Kaemo\Client\Model\Actors, HTTP status code, HTTP response headers (array of strings)
     */
    public function getProductActorsWithHttpInfo($product_id, $page = null, $per_page = null, $image_type = null)
    {
        // verify the required parameter 'product_id' is set
        if ($product_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $product_id when calling getProductActors');
        }
        // parse inputs
        $resourcePath = "/products/{product_id}/actors";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $apiVersion = $this->apiClient->getConfig()->getApiVersion();
        $_header_accept = $this->apiClient->selectHeaderAccept(["application/vnd.kaemoapi.v$apiVersion+json"]);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if ($page !== null) {
            $queryParams['page'] = $this->apiClient->getSerializer()->toQueryValue($page);
        }
        // query params
        if ($per_page !== null) {
            $queryParams['per_page'] = $this->apiClient->getSerializer()->toQueryValue($per_page);
        }
        // query params
        if ($image_type !== null) {
            $queryParams['image_type'] = $this->apiClient->getSerializer()->toQueryValue($image_type);
        }
        // path params
        if ($product_id !== null) {
            $resourcePath = str_replace(
                "{" . "product_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($product_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Kaemo\Client\Model\Actors',
                '/products/{product_id}/actors'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Kaemo\Client\Model\Actors', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Kaemo\Client\Model\Actors', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation updateActor
     *
     * 
     *
     * @param int $actor_id  (required)
     * @param \Kaemo\Client\Model\Actor $body  (required)
     * @throws \Kaemo\Client\ApiException on non-2xx response
     * @return void
     */
    public function updateActor($actor_id, $body)
    {
        list($response) = $this->updateActorWithHttpInfo($actor_id, $body);
        return $response;
    }

    /**
     * Operation updateActorWithHttpInfo
     *
     * 
     *
     * @param int $actor_id  (required)
     * @param \Kaemo\Client\Model\Actor $body  (required)
     * @throws \Kaemo\Client\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateActorWithHttpInfo($actor_id, $body)
    {
        // verify the required parameter 'actor_id' is set
        if ($actor_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $actor_id when calling updateActor');
        }
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling updateActor');
        }
        // parse inputs
        $resourcePath = "/actors/{actor_id}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $apiVersion = $this->apiClient->getConfig()->getApiVersion();
        $_header_accept = $this->apiClient->selectHeaderAccept(["application/vnd.kaemoapi.v$apiVersion+json"]);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // path params
        if ($actor_id !== null) {
            $resourcePath = str_replace(
                "{" . "actor_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($actor_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/actors/{actor_id}'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }
}
