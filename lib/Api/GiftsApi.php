<?php
/**
 * GiftsApi
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
 * Client API for Kinow back-office
 *
 * OpenAPI spec version: 1.3.36
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
 * GiftsApi Class Doc Comment
 *
 * @category Class
 * @package  Kaemo\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GiftsApi
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
     * @return GiftsApi
     */
    public function setApiClient(\Kaemo\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation consumeGift
     *
     * 
     *
     * @param int $gift_id Gift ID to fetch (required)
     * @param int $customer_id Customer ID to fetch (required)
     * @param string $token Gift token to check (optional) (optional)
     * @throws \Kaemo\Client\ApiException on non-2xx response
     * @return void
     */
    public function consumeGift($gift_id, $customer_id, $token = null)
    {
        list($response) = $this->consumeGiftWithHttpInfo($gift_id, $customer_id, $token);
        return $response;
    }

    /**
     * Operation consumeGiftWithHttpInfo
     *
     * 
     *
     * @param int $gift_id Gift ID to fetch (required)
     * @param int $customer_id Customer ID to fetch (required)
     * @param string $token Gift token to check (optional) (optional)
     * @throws \Kaemo\Client\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function consumeGiftWithHttpInfo($gift_id, $customer_id, $token = null)
    {
        // verify the required parameter 'gift_id' is set
        if ($gift_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $gift_id when calling consumeGift');
        }
        // verify the required parameter 'customer_id' is set
        if ($customer_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $customer_id when calling consumeGift');
        }
        // parse inputs
        $resourcePath = "/gifts/{gift_id}/consume";
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
        if ($customer_id !== null) {
            $queryParams['customer_id'] = $this->apiClient->getSerializer()->toQueryValue($customer_id);
        }
        // query params
        if ($token !== null) {
            $queryParams['token'] = $this->apiClient->getSerializer()->toQueryValue($token);
        }
        // path params
        if ($gift_id !== null) {
            $resourcePath = str_replace(
                "{" . "gift_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($gift_id),
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
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/gifts/{gift_id}/consume'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation createGift
     *
     * 
     *
     * @param \Kaemo\Client\Model\Gift $body  (required)
     * @throws \Kaemo\Client\ApiException on non-2xx response
     * @return \Kaemo\Client\Model\Gift
     */
    public function createGift($body)
    {
        list($response) = $this->createGiftWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation createGiftWithHttpInfo
     *
     * 
     *
     * @param \Kaemo\Client\Model\Gift $body  (required)
     * @throws \Kaemo\Client\ApiException on non-2xx response
     * @return array of \Kaemo\Client\Model\Gift, HTTP status code, HTTP response headers (array of strings)
     */
    public function createGiftWithHttpInfo($body)
    {
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling createGift');
        }
        // parse inputs
        $resourcePath = "/gifts";
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
                '\Kaemo\Client\Model\Gift',
                '/gifts'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Kaemo\Client\Model\Gift', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Kaemo\Client\Model\Gift', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation deleteGift
     *
     * 
     *
     * @param int $gift_id Gift ID to fetch (required)
     * @throws \Kaemo\Client\ApiException on non-2xx response
     * @return void
     */
    public function deleteGift($gift_id)
    {
        list($response) = $this->deleteGiftWithHttpInfo($gift_id);
        return $response;
    }

    /**
     * Operation deleteGiftWithHttpInfo
     *
     * 
     *
     * @param int $gift_id Gift ID to fetch (required)
     * @throws \Kaemo\Client\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteGiftWithHttpInfo($gift_id)
    {
        // verify the required parameter 'gift_id' is set
        if ($gift_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $gift_id when calling deleteGift');
        }
        // parse inputs
        $resourcePath = "/gifts/{gift_id}";
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
        if ($gift_id !== null) {
            $resourcePath = str_replace(
                "{" . "gift_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($gift_id),
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
                '/gifts/{gift_id}'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation deleteGiftsInCart
     *
     * 
     *
     * @param int $cart_id Cart ID to fetch (required)
     * @throws \Kaemo\Client\ApiException on non-2xx response
     * @return void
     */
    public function deleteGiftsInCart($cart_id)
    {
        list($response) = $this->deleteGiftsInCartWithHttpInfo($cart_id);
        return $response;
    }

    /**
     * Operation deleteGiftsInCartWithHttpInfo
     *
     * 
     *
     * @param int $cart_id Cart ID to fetch (required)
     * @throws \Kaemo\Client\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteGiftsInCartWithHttpInfo($cart_id)
    {
        // verify the required parameter 'cart_id' is set
        if ($cart_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $cart_id when calling deleteGiftsInCart');
        }
        // parse inputs
        $resourcePath = "/carts/{cart_id}/gift/";
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
        if ($cart_id !== null) {
            $resourcePath = str_replace(
                "{" . "cart_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($cart_id),
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
                '/carts/{cart_id}/gift/'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation getGift
     *
     * 
     *
     * @param int $gift_id Gift ID to fetch (required)
     * @throws \Kaemo\Client\ApiException on non-2xx response
     * @return \Kaemo\Client\Model\Gift
     */
    public function getGift($gift_id)
    {
        list($response) = $this->getGiftWithHttpInfo($gift_id);
        return $response;
    }

    /**
     * Operation getGiftWithHttpInfo
     *
     * 
     *
     * @param int $gift_id Gift ID to fetch (required)
     * @throws \Kaemo\Client\ApiException on non-2xx response
     * @return array of \Kaemo\Client\Model\Gift, HTTP status code, HTTP response headers (array of strings)
     */
    public function getGiftWithHttpInfo($gift_id)
    {
        // verify the required parameter 'gift_id' is set
        if ($gift_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $gift_id when calling getGift');
        }
        // parse inputs
        $resourcePath = "/gifts/{gift_id}";
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
        if ($gift_id !== null) {
            $resourcePath = str_replace(
                "{" . "gift_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($gift_id),
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
                '\Kaemo\Client\Model\Gift',
                '/gifts/{gift_id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Kaemo\Client\Model\Gift', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Kaemo\Client\Model\Gift', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getGiftInCart
     *
     * 
     *
     * @param int $cart_id Cart ID to fetch (required)
     * @throws \Kaemo\Client\ApiException on non-2xx response
     * @return \Kaemo\Client\Model\Gift
     */
    public function getGiftInCart($cart_id)
    {
        list($response) = $this->getGiftInCartWithHttpInfo($cart_id);
        return $response;
    }

    /**
     * Operation getGiftInCartWithHttpInfo
     *
     * 
     *
     * @param int $cart_id Cart ID to fetch (required)
     * @throws \Kaemo\Client\ApiException on non-2xx response
     * @return array of \Kaemo\Client\Model\Gift, HTTP status code, HTTP response headers (array of strings)
     */
    public function getGiftInCartWithHttpInfo($cart_id)
    {
        // verify the required parameter 'cart_id' is set
        if ($cart_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $cart_id when calling getGiftInCart');
        }
        // parse inputs
        $resourcePath = "/carts/{cart_id}/gift";
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
        if ($cart_id !== null) {
            $resourcePath = str_replace(
                "{" . "cart_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($cart_id),
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
                '\Kaemo\Client\Model\Gift',
                '/carts/{cart_id}/gift'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Kaemo\Client\Model\Gift', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Kaemo\Client\Model\Gift', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getGiftToken
     *
     * 
     *
     * @param int $gift_id Gift ID to fetch (required)
     * @throws \Kaemo\Client\ApiException on non-2xx response
     * @return void
     */
    public function getGiftToken($gift_id)
    {
        list($response) = $this->getGiftTokenWithHttpInfo($gift_id);
        return $response;
    }

    /**
     * Operation getGiftTokenWithHttpInfo
     *
     * 
     *
     * @param int $gift_id Gift ID to fetch (required)
     * @throws \Kaemo\Client\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function getGiftTokenWithHttpInfo($gift_id)
    {
        // verify the required parameter 'gift_id' is set
        if ($gift_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $gift_id when calling getGiftToken');
        }
        // parse inputs
        $resourcePath = "/gifts/{gift_id}/token";
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
        if ($gift_id !== null) {
            $resourcePath = str_replace(
                "{" . "gift_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($gift_id),
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
                null,
                '/gifts/{gift_id}/token'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation getGifts
     *
     * 
     *
     * @param int $unused_only Only unused gifts (optional)
     * @throws \Kaemo\Client\ApiException on non-2xx response
     * @return \Kaemo\Client\Model\Gifts
     */
    public function getGifts($unused_only = null)
    {
        list($response) = $this->getGiftsWithHttpInfo($unused_only);
        return $response;
    }

    /**
     * Operation getGiftsWithHttpInfo
     *
     * 
     *
     * @param int $unused_only Only unused gifts (optional)
     * @throws \Kaemo\Client\ApiException on non-2xx response
     * @return array of \Kaemo\Client\Model\Gifts, HTTP status code, HTTP response headers (array of strings)
     */
    public function getGiftsWithHttpInfo($unused_only = null)
    {
        // parse inputs
        $resourcePath = "/gifts";
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
        if ($unused_only !== null) {
            $queryParams['unused_only'] = $this->apiClient->getSerializer()->toQueryValue($unused_only);
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
                '\Kaemo\Client\Model\Gifts',
                '/gifts'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Kaemo\Client\Model\Gifts', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Kaemo\Client\Model\Gifts', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation sendGift
     *
     * 
     *
     * @param int $gift_id Gift ID to fetch (required)
     * @throws \Kaemo\Client\ApiException on non-2xx response
     * @return void
     */
    public function sendGift($gift_id)
    {
        list($response) = $this->sendGiftWithHttpInfo($gift_id);
        return $response;
    }

    /**
     * Operation sendGiftWithHttpInfo
     *
     * 
     *
     * @param int $gift_id Gift ID to fetch (required)
     * @throws \Kaemo\Client\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function sendGiftWithHttpInfo($gift_id)
    {
        // verify the required parameter 'gift_id' is set
        if ($gift_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $gift_id when calling sendGift');
        }
        // parse inputs
        $resourcePath = "/gifts/{gift_id}/send";
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
        if ($gift_id !== null) {
            $resourcePath = str_replace(
                "{" . "gift_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($gift_id),
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
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/gifts/{gift_id}/send'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation updateGift
     *
     * 
     *
     * @param int $gift_id Gift ID to fetch (required)
     * @param \Kaemo\Client\Model\Gift $body  (required)
     * @throws \Kaemo\Client\ApiException on non-2xx response
     * @return \Kaemo\Client\Model\Gift
     */
    public function updateGift($gift_id, $body)
    {
        list($response) = $this->updateGiftWithHttpInfo($gift_id, $body);
        return $response;
    }

    /**
     * Operation updateGiftWithHttpInfo
     *
     * 
     *
     * @param int $gift_id Gift ID to fetch (required)
     * @param \Kaemo\Client\Model\Gift $body  (required)
     * @throws \Kaemo\Client\ApiException on non-2xx response
     * @return array of \Kaemo\Client\Model\Gift, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateGiftWithHttpInfo($gift_id, $body)
    {
        // verify the required parameter 'gift_id' is set
        if ($gift_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $gift_id when calling updateGift');
        }
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling updateGift');
        }
        // parse inputs
        $resourcePath = "/gifts/{gift_id}";
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
        if ($gift_id !== null) {
            $resourcePath = str_replace(
                "{" . "gift_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($gift_id),
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
                '\Kaemo\Client\Model\Gift',
                '/gifts/{gift_id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Kaemo\Client\Model\Gift', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Kaemo\Client\Model\Gift', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
