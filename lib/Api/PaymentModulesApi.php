<?php
/**
 * PaymentModulesApi
 * PHP version 5
 *
 * @category Class
 * @package  Kinow\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Kinow API
 *
 * Client API for Kinow back-office
 *
 * OpenAPI spec version: 1.4.6
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Kinow\Client\Api;

use \Kinow\Client\ApiClient;
use \Kinow\Client\ApiException;
use \Kinow\Client\Configuration;
use \Kinow\Client\ObjectSerializer;

/**
 * PaymentModulesApi Class Doc Comment
 *
 * @category Class
 * @package  Kinow\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PaymentModulesApi
{
    /**
     * API Client
     *
     * @var \Kinow\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Kinow\Client\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Kinow\Client\ApiClient $apiClient = null)
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
     * @return \Kinow\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Kinow\Client\ApiClient $apiClient set the API client
     *
     * @return PaymentModulesApi
     */
    public function setApiClient(\Kinow\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation getPaymentMethods
     *
     * 
     *
     * @param int $customer_id  (required)
     * @param string $payment_name  (required)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return \Kinow\Client\Model\PaymentMethods[]
     */
    public function getPaymentMethods($customer_id, $payment_name)
    {
        list($response) = $this->getPaymentMethodsWithHttpInfo($customer_id, $payment_name);
        return $response;
    }

    /**
     * Operation getPaymentMethodsWithHttpInfo
     *
     * 
     *
     * @param int $customer_id  (required)
     * @param string $payment_name  (required)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return array of \Kinow\Client\Model\PaymentMethods[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getPaymentMethodsWithHttpInfo($customer_id, $payment_name)
    {
        // verify the required parameter 'customer_id' is set
        if ($customer_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $customer_id when calling getPaymentMethods');
        }
        // verify the required parameter 'payment_name' is set
        if ($payment_name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $payment_name when calling getPaymentMethods');
        }
        // parse inputs
        $resourcePath = "/customers/{customer_id}/payments/{payment_name}/payment-methods";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $apiVersion = $this->apiClient->getConfig()->getApiVersion();
        $_header_accept = $this->apiClient->selectHeaderAccept(["application/vnd.kinowapi.v$apiVersion+json"]);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // path params
        if ($customer_id !== null) {
            $resourcePath = str_replace(
                "{" . "customer_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($customer_id),
                $resourcePath
            );
        }
        // path params
        if ($payment_name !== null) {
            $resourcePath = str_replace(
                "{" . "payment_name" . "}",
                $this->apiClient->getSerializer()->toPathValue($payment_name),
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
                '\Kinow\Client\Model\PaymentMethods[]',
                '/customers/{customer_id}/payments/{payment_name}/payment-methods'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Kinow\Client\Model\PaymentMethods[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Kinow\Client\Model\PaymentMethods[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getPaymentModules
     *
     * 
     *
     * @param int $page  (optional)
     * @param int $per_page  (optional)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return \Kinow\Client\Model\PaymentModules
     */
    public function getPaymentModules($page = null, $per_page = null)
    {
        list($response) = $this->getPaymentModulesWithHttpInfo($page, $per_page);
        return $response;
    }

    /**
     * Operation getPaymentModulesWithHttpInfo
     *
     * 
     *
     * @param int $page  (optional)
     * @param int $per_page  (optional)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return array of \Kinow\Client\Model\PaymentModules, HTTP status code, HTTP response headers (array of strings)
     */
    public function getPaymentModulesWithHttpInfo($page = null, $per_page = null)
    {
        // parse inputs
        $resourcePath = "/payment-modules";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $apiVersion = $this->apiClient->getConfig()->getApiVersion();
        $_header_accept = $this->apiClient->selectHeaderAccept(["application/vnd.kinowapi.v$apiVersion+json"]);
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
                '\Kinow\Client\Model\PaymentModules',
                '/payment-modules'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Kinow\Client\Model\PaymentModules', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Kinow\Client\Model\PaymentModules', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getPaymentUrl
     *
     * 
     *
     * @param int $cart_id Cart ID to fetch (required)
     * @param string $payment_name Payment gateway name (required)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return \Kinow\Client\Model\PaymentUrl
     */
    public function getPaymentUrl($cart_id, $payment_name)
    {
        list($response) = $this->getPaymentUrlWithHttpInfo($cart_id, $payment_name);
        return $response;
    }

    /**
     * Operation getPaymentUrlWithHttpInfo
     *
     * 
     *
     * @param int $cart_id Cart ID to fetch (required)
     * @param string $payment_name Payment gateway name (required)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return array of \Kinow\Client\Model\PaymentUrl, HTTP status code, HTTP response headers (array of strings)
     */
    public function getPaymentUrlWithHttpInfo($cart_id, $payment_name)
    {
        // verify the required parameter 'cart_id' is set
        if ($cart_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $cart_id when calling getPaymentUrl');
        }
        // verify the required parameter 'payment_name' is set
        if ($payment_name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $payment_name when calling getPaymentUrl');
        }
        // parse inputs
        $resourcePath = "/carts/{cart_id}/payments/{payment_name}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $apiVersion = $this->apiClient->getConfig()->getApiVersion();
        $_header_accept = $this->apiClient->selectHeaderAccept(["application/vnd.kinowapi.v$apiVersion+json"]);
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
        // path params
        if ($payment_name !== null) {
            $resourcePath = str_replace(
                "{" . "payment_name" . "}",
                $this->apiClient->getSerializer()->toPathValue($payment_name),
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
                '\Kinow\Client\Model\PaymentUrl',
                '/carts/{cart_id}/payments/{payment_name}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Kinow\Client\Model\PaymentUrl', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Kinow\Client\Model\PaymentUrl', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getPendingPayments
     *
     * 
     *
     * @param string $payment_name  (required)
     * @param int $customer_id  (required)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return \Kinow\Client\Model\PaymentDetails[]
     */
    public function getPendingPayments($payment_name, $customer_id)
    {
        list($response) = $this->getPendingPaymentsWithHttpInfo($payment_name, $customer_id);
        return $response;
    }

    /**
     * Operation getPendingPaymentsWithHttpInfo
     *
     * 
     *
     * @param string $payment_name  (required)
     * @param int $customer_id  (required)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return array of \Kinow\Client\Model\PaymentDetails[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getPendingPaymentsWithHttpInfo($payment_name, $customer_id)
    {
        // verify the required parameter 'payment_name' is set
        if ($payment_name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $payment_name when calling getPendingPayments');
        }
        // verify the required parameter 'customer_id' is set
        if ($customer_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $customer_id when calling getPendingPayments');
        }
        // parse inputs
        $resourcePath = "/customers/{customer_id}/payments/{payment_name}/pending";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $apiVersion = $this->apiClient->getConfig()->getApiVersion();
        $_header_accept = $this->apiClient->selectHeaderAccept(["application/vnd.kinowapi.v$apiVersion+json"]);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // path params
        if ($payment_name !== null) {
            $resourcePath = str_replace(
                "{" . "payment_name" . "}",
                $this->apiClient->getSerializer()->toPathValue($payment_name),
                $resourcePath
            );
        }
        // path params
        if ($customer_id !== null) {
            $resourcePath = str_replace(
                "{" . "customer_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($customer_id),
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
                '\Kinow\Client\Model\PaymentDetails[]',
                '/customers/{customer_id}/payments/{payment_name}/pending'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Kinow\Client\Model\PaymentDetails[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Kinow\Client\Model\PaymentDetails[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation preparePayment
     *
     * 
     *
     * @param int $cart_id Cart ID to fetch (required)
     * @param string $payment_name Payment gateway name (required)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return \Kinow\Client\Model\PaymentDetails1
     */
    public function preparePayment($cart_id, $payment_name)
    {
        list($response) = $this->preparePaymentWithHttpInfo($cart_id, $payment_name);
        return $response;
    }

    /**
     * Operation preparePaymentWithHttpInfo
     *
     * 
     *
     * @param int $cart_id Cart ID to fetch (required)
     * @param string $payment_name Payment gateway name (required)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return array of \Kinow\Client\Model\PaymentDetails1, HTTP status code, HTTP response headers (array of strings)
     */
    public function preparePaymentWithHttpInfo($cart_id, $payment_name)
    {
        // verify the required parameter 'cart_id' is set
        if ($cart_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $cart_id when calling preparePayment');
        }
        // verify the required parameter 'payment_name' is set
        if ($payment_name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $payment_name when calling preparePayment');
        }
        // parse inputs
        $resourcePath = "/carts/{cart_id}/payments/{payment_name}/prepare";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $apiVersion = $this->apiClient->getConfig()->getApiVersion();
        $_header_accept = $this->apiClient->selectHeaderAccept(["application/vnd.kinowapi.v$apiVersion+json"]);
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
        // path params
        if ($payment_name !== null) {
            $resourcePath = str_replace(
                "{" . "payment_name" . "}",
                $this->apiClient->getSerializer()->toPathValue($payment_name),
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
                '\Kinow\Client\Model\PaymentDetails1',
                '/carts/{cart_id}/payments/{payment_name}/prepare'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Kinow\Client\Model\PaymentDetails1', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Kinow\Client\Model\PaymentDetails1', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation updatePaymentMethod
     *
     * 
     *
     * @param int $customer_id  (required)
     * @param string $payment_name  (required)
     * @param \Kinow\Client\Model\PaymentArguments $payment_arguments Payment arguments (required)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return void
     */
    public function updatePaymentMethod($customer_id, $payment_name, $payment_arguments)
    {
        list($response) = $this->updatePaymentMethodWithHttpInfo($customer_id, $payment_name, $payment_arguments);
        return $response;
    }

    /**
     * Operation updatePaymentMethodWithHttpInfo
     *
     * 
     *
     * @param int $customer_id  (required)
     * @param string $payment_name  (required)
     * @param \Kinow\Client\Model\PaymentArguments $payment_arguments Payment arguments (required)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function updatePaymentMethodWithHttpInfo($customer_id, $payment_name, $payment_arguments)
    {
        // verify the required parameter 'customer_id' is set
        if ($customer_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $customer_id when calling updatePaymentMethod');
        }
        // verify the required parameter 'payment_name' is set
        if ($payment_name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $payment_name when calling updatePaymentMethod');
        }
        // verify the required parameter 'payment_arguments' is set
        if ($payment_arguments === null) {
            throw new \InvalidArgumentException('Missing the required parameter $payment_arguments when calling updatePaymentMethod');
        }
        // parse inputs
        $resourcePath = "/customers/{customer_id}/payments/{payment_name}/payment-method";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $apiVersion = $this->apiClient->getConfig()->getApiVersion();
        $_header_accept = $this->apiClient->selectHeaderAccept(["application/vnd.kinowapi.v$apiVersion+json"]);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // path params
        if ($customer_id !== null) {
            $resourcePath = str_replace(
                "{" . "customer_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($customer_id),
                $resourcePath
            );
        }
        // path params
        if ($payment_name !== null) {
            $resourcePath = str_replace(
                "{" . "payment_name" . "}",
                $this->apiClient->getSerializer()->toPathValue($payment_name),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($payment_arguments)) {
            $_tempBody = $payment_arguments;
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
                '/customers/{customer_id}/payments/{payment_name}/payment-method'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation validateFreeOrder
     *
     * 
     *
     * @param int $cart_id Cart ID to validate (required)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return void
     */
    public function validateFreeOrder($cart_id)
    {
        list($response) = $this->validateFreeOrderWithHttpInfo($cart_id);
        return $response;
    }

    /**
     * Operation validateFreeOrderWithHttpInfo
     *
     * 
     *
     * @param int $cart_id Cart ID to validate (required)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function validateFreeOrderWithHttpInfo($cart_id)
    {
        // verify the required parameter 'cart_id' is set
        if ($cart_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $cart_id when calling validateFreeOrder');
        }
        // parse inputs
        $resourcePath = "/carts/{cart_id}/validate-free-order";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $apiVersion = $this->apiClient->getConfig()->getApiVersion();
        $_header_accept = $this->apiClient->selectHeaderAccept(["application/vnd.kinowapi.v$apiVersion+json"]);
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
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/carts/{cart_id}/validate-free-order'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation validatePayment
     *
     * 
     *
     * @param int $cart_id Cart ID to fetch (required)
     * @param string $payment_name Payment gateway name (required)
     * @param \Kinow\Client\Model\PaymentArguments $payment_argument Payment argument (required)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return void
     */
    public function validatePayment($cart_id, $payment_name, $payment_argument)
    {
        list($response) = $this->validatePaymentWithHttpInfo($cart_id, $payment_name, $payment_argument);
        return $response;
    }

    /**
     * Operation validatePaymentWithHttpInfo
     *
     * 
     *
     * @param int $cart_id Cart ID to fetch (required)
     * @param string $payment_name Payment gateway name (required)
     * @param \Kinow\Client\Model\PaymentArguments $payment_argument Payment argument (required)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function validatePaymentWithHttpInfo($cart_id, $payment_name, $payment_argument)
    {
        // verify the required parameter 'cart_id' is set
        if ($cart_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $cart_id when calling validatePayment');
        }
        // verify the required parameter 'payment_name' is set
        if ($payment_name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $payment_name when calling validatePayment');
        }
        // verify the required parameter 'payment_argument' is set
        if ($payment_argument === null) {
            throw new \InvalidArgumentException('Missing the required parameter $payment_argument when calling validatePayment');
        }
        // parse inputs
        $resourcePath = "/carts/{cart_id}/payments/{payment_name}/validate";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $apiVersion = $this->apiClient->getConfig()->getApiVersion();
        $_header_accept = $this->apiClient->selectHeaderAccept(["application/vnd.kinowapi.v$apiVersion+json"]);
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
        // path params
        if ($payment_name !== null) {
            $resourcePath = str_replace(
                "{" . "payment_name" . "}",
                $this->apiClient->getSerializer()->toPathValue($payment_name),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($payment_argument)) {
            $_tempBody = $payment_argument;
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
                null,
                '/carts/{cart_id}/payments/{payment_name}/validate'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }
}
