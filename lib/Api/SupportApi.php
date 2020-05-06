<?php
/**
 * SupportApi
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
 * OpenAPI spec version: 1.3.68
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
 * SupportApi Class Doc Comment
 *
 * @category Class
 * @package  Kaemo\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SupportApi
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
     * @return SupportApi
     */
    public function setApiClient(\Kaemo\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation createMessage
     *
     * 
     *
     * @param int $id_lang  (required)
     * @param string $email  (required)
     * @param int $id_contact  (required)
     * @param string $message  (required)
     * @param int $id_product  (required)
     * @param int $id_order  (optional)
     * @throws \Kaemo\Client\ApiException on non-2xx response
     * @return \Kaemo\Client\Model\Support
     */
    public function createMessage($id_lang, $email, $id_contact, $message, $id_product, $id_order = null)
    {
        list($response) = $this->createMessageWithHttpInfo($id_lang, $email, $id_contact, $message, $id_product, $id_order);
        return $response;
    }

    /**
     * Operation createMessageWithHttpInfo
     *
     * 
     *
     * @param int $id_lang  (required)
     * @param string $email  (required)
     * @param int $id_contact  (required)
     * @param string $message  (required)
     * @param int $id_product  (required)
     * @param int $id_order  (optional)
     * @throws \Kaemo\Client\ApiException on non-2xx response
     * @return array of \Kaemo\Client\Model\Support, HTTP status code, HTTP response headers (array of strings)
     */
    public function createMessageWithHttpInfo($id_lang, $email, $id_contact, $message, $id_product, $id_order = null)
    {
        // verify the required parameter 'id_lang' is set
        if ($id_lang === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_lang when calling createMessage');
        }
        // verify the required parameter 'email' is set
        if ($email === null) {
            throw new \InvalidArgumentException('Missing the required parameter $email when calling createMessage');
        }
        // verify the required parameter 'id_contact' is set
        if ($id_contact === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_contact when calling createMessage');
        }
        // verify the required parameter 'message' is set
        if ($message === null) {
            throw new \InvalidArgumentException('Missing the required parameter $message when calling createMessage');
        }
        // verify the required parameter 'id_product' is set
        if ($id_product === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_product when calling createMessage');
        }
        // parse inputs
        $resourcePath = "/support";
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

        // form params
        if ($id_lang !== null) {
            $formParams['id_lang'] = $this->apiClient->getSerializer()->toFormValue($id_lang);
        }
        // form params
        if ($email !== null) {
            $formParams['email'] = $this->apiClient->getSerializer()->toFormValue($email);
        }
        // form params
        if ($id_contact !== null) {
            $formParams['id_contact'] = $this->apiClient->getSerializer()->toFormValue($id_contact);
        }
        // form params
        if ($message !== null) {
            $formParams['message'] = $this->apiClient->getSerializer()->toFormValue($message);
        }
        // form params
        if ($id_product !== null) {
            $formParams['id_product'] = $this->apiClient->getSerializer()->toFormValue($id_product);
        }
        // form params
        if ($id_order !== null) {
            $formParams['id_order'] = $this->apiClient->getSerializer()->toFormValue($id_order);
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
                '\Kaemo\Client\Model\Support',
                '/support'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Kaemo\Client\Model\Support', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Kaemo\Client\Model\Support', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getContacts
     *
     * 
     *
     * @param int $page  (optional)
     * @param int $per_page  (optional)
     * @param string $sort_by Sort by this attribute (id by default) (optional)
     * @param string $sort_direction Sorting direction (asc by default) (optional)
     * @throws \Kaemo\Client\ApiException on non-2xx response
     * @return \Kaemo\Client\Model\Contacts
     */
    public function getContacts($page = null, $per_page = null, $sort_by = null, $sort_direction = null)
    {
        list($response) = $this->getContactsWithHttpInfo($page, $per_page, $sort_by, $sort_direction);
        return $response;
    }

    /**
     * Operation getContactsWithHttpInfo
     *
     * 
     *
     * @param int $page  (optional)
     * @param int $per_page  (optional)
     * @param string $sort_by Sort by this attribute (id by default) (optional)
     * @param string $sort_direction Sorting direction (asc by default) (optional)
     * @throws \Kaemo\Client\ApiException on non-2xx response
     * @return array of \Kaemo\Client\Model\Contacts, HTTP status code, HTTP response headers (array of strings)
     */
    public function getContactsWithHttpInfo($page = null, $per_page = null, $sort_by = null, $sort_direction = null)
    {
        // parse inputs
        $resourcePath = "/support/contacts";
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
        if ($sort_by !== null) {
            $queryParams['sort_by'] = $this->apiClient->getSerializer()->toQueryValue($sort_by);
        }
        // query params
        if ($sort_direction !== null) {
            $queryParams['sort_direction'] = $this->apiClient->getSerializer()->toQueryValue($sort_direction);
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
                '\Kaemo\Client\Model\Contacts',
                '/support/contacts'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Kaemo\Client\Model\Contacts', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Kaemo\Client\Model\Contacts', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
