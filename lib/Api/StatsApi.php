<?php
/**
 * StatsApi
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
 * OpenAPI spec version: 1.4.19
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
 * StatsApi Class Doc Comment
 *
 * @category Class
 * @package  Kinow\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class StatsApi
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
     * @return StatsApi
     */
    public function setApiClient(\Kinow\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation getCustomerGroupTotalWatched
     *
     * 
     *
     * @param int $group_id Customer group ID to fecth (required)
     * @param string $date_from Search entries from this date (optional)
     * @param string $date_to Search entries to this date (optional)
     * @param int $page  (optional)
     * @param int $per_page  (optional)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return \Kinow\Client\Model\CustomerGroupVideoStats1
     */
    public function getCustomerGroupTotalWatched($group_id, $date_from = null, $date_to = null, $page = null, $per_page = null)
    {
        list($response) = $this->getCustomerGroupTotalWatchedWithHttpInfo($group_id, $date_from, $date_to, $page, $per_page);
        return $response;
    }

    /**
     * Operation getCustomerGroupTotalWatchedWithHttpInfo
     *
     * 
     *
     * @param int $group_id Customer group ID to fecth (required)
     * @param string $date_from Search entries from this date (optional)
     * @param string $date_to Search entries to this date (optional)
     * @param int $page  (optional)
     * @param int $per_page  (optional)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return array of \Kinow\Client\Model\CustomerGroupVideoStats1, HTTP status code, HTTP response headers (array of strings)
     */
    public function getCustomerGroupTotalWatchedWithHttpInfo($group_id, $date_from = null, $date_to = null, $page = null, $per_page = null)
    {
        // verify the required parameter 'group_id' is set
        if ($group_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $group_id when calling getCustomerGroupTotalWatched');
        }
        // parse inputs
        $resourcePath = "/video-stats/customer-group";
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
        if ($group_id !== null) {
            $queryParams['group_id'] = $this->apiClient->getSerializer()->toQueryValue($group_id);
        }
        // query params
        if ($date_from !== null) {
            $queryParams['date_from'] = $this->apiClient->getSerializer()->toQueryValue($date_from);
        }
        // query params
        if ($date_to !== null) {
            $queryParams['date_to'] = $this->apiClient->getSerializer()->toQueryValue($date_to);
        }
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
                '\Kinow\Client\Model\CustomerGroupVideoStats1',
                '/video-stats/customer-group'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Kinow\Client\Model\CustomerGroupVideoStats1', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Kinow\Client\Model\CustomerGroupVideoStats1', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getCustomerSessions
     *
     * 
     *
     * @param int $customer_id Customer ID to fetch (optional)
     * @param int $group_id Group ID to fetch (optional)
     * @param int $video_id Video ID to fetch (optional)
     * @param string $date_from Search entries from this date (optional)
     * @param string $date_to Search entries to this date (optional)
     * @param int $page  (optional)
     * @param int $per_page  (optional)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return \Kinow\Client\Model\SessionVideoStats
     */
    public function getCustomerSessions($customer_id = null, $group_id = null, $video_id = null, $date_from = null, $date_to = null, $page = null, $per_page = null)
    {
        list($response) = $this->getCustomerSessionsWithHttpInfo($customer_id, $group_id, $video_id, $date_from, $date_to, $page, $per_page);
        return $response;
    }

    /**
     * Operation getCustomerSessionsWithHttpInfo
     *
     * 
     *
     * @param int $customer_id Customer ID to fetch (optional)
     * @param int $group_id Group ID to fetch (optional)
     * @param int $video_id Video ID to fetch (optional)
     * @param string $date_from Search entries from this date (optional)
     * @param string $date_to Search entries to this date (optional)
     * @param int $page  (optional)
     * @param int $per_page  (optional)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return array of \Kinow\Client\Model\SessionVideoStats, HTTP status code, HTTP response headers (array of strings)
     */
    public function getCustomerSessionsWithHttpInfo($customer_id = null, $group_id = null, $video_id = null, $date_from = null, $date_to = null, $page = null, $per_page = null)
    {
        // parse inputs
        $resourcePath = "/video-stats/sessions";
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
        if ($customer_id !== null) {
            $queryParams['customer_id'] = $this->apiClient->getSerializer()->toQueryValue($customer_id);
        }
        // query params
        if ($group_id !== null) {
            $queryParams['group_id'] = $this->apiClient->getSerializer()->toQueryValue($group_id);
        }
        // query params
        if ($video_id !== null) {
            $queryParams['video_id'] = $this->apiClient->getSerializer()->toQueryValue($video_id);
        }
        // query params
        if ($date_from !== null) {
            $queryParams['date_from'] = $this->apiClient->getSerializer()->toQueryValue($date_from);
        }
        // query params
        if ($date_to !== null) {
            $queryParams['date_to'] = $this->apiClient->getSerializer()->toQueryValue($date_to);
        }
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
                '\Kinow\Client\Model\SessionVideoStats',
                '/video-stats/sessions'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Kinow\Client\Model\SessionVideoStats', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Kinow\Client\Model\SessionVideoStats', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getCustomerSessionsMultiple
     *
     * 
     *
     * @param int $customer_id Customer ID to fetch (required)
     * @param \Kinow\Client\Model\VideoIDList1 $body List of Video IDs separated by comma, eg. &#39;42,21,84&#39; (required)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return \Kinow\Client\Model\SessionVideoStat[]
     */
    public function getCustomerSessionsMultiple($customer_id, $body)
    {
        list($response) = $this->getCustomerSessionsMultipleWithHttpInfo($customer_id, $body);
        return $response;
    }

    /**
     * Operation getCustomerSessionsMultipleWithHttpInfo
     *
     * 
     *
     * @param int $customer_id Customer ID to fetch (required)
     * @param \Kinow\Client\Model\VideoIDList1 $body List of Video IDs separated by comma, eg. &#39;42,21,84&#39; (required)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return array of \Kinow\Client\Model\SessionVideoStat[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getCustomerSessionsMultipleWithHttpInfo($customer_id, $body)
    {
        // verify the required parameter 'customer_id' is set
        if ($customer_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $customer_id when calling getCustomerSessionsMultiple');
        }
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling getCustomerSessionsMultiple');
        }
        // parse inputs
        $resourcePath = "/video-stats/{customer_id}/sessions";
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
                '\Kinow\Client\Model\SessionVideoStat[]',
                '/video-stats/{customer_id}/sessions'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Kinow\Client\Model\SessionVideoStat[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Kinow\Client\Model\SessionVideoStat[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getCustomerVideoStats
     *
     * 
     *
     * @param int $customer_id Customer ID to fetch (required)
     * @param string $date_from Search entries from this date (optional)
     * @param string $date_to Search entries to this date (optional)
     * @param int $page  (optional)
     * @param int $per_page  (optional)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return \Kinow\Client\Model\CustomerVideoStats1
     */
    public function getCustomerVideoStats($customer_id, $date_from = null, $date_to = null, $page = null, $per_page = null)
    {
        list($response) = $this->getCustomerVideoStatsWithHttpInfo($customer_id, $date_from, $date_to, $page, $per_page);
        return $response;
    }

    /**
     * Operation getCustomerVideoStatsWithHttpInfo
     *
     * 
     *
     * @param int $customer_id Customer ID to fetch (required)
     * @param string $date_from Search entries from this date (optional)
     * @param string $date_to Search entries to this date (optional)
     * @param int $page  (optional)
     * @param int $per_page  (optional)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return array of \Kinow\Client\Model\CustomerVideoStats1, HTTP status code, HTTP response headers (array of strings)
     */
    public function getCustomerVideoStatsWithHttpInfo($customer_id, $date_from = null, $date_to = null, $page = null, $per_page = null)
    {
        // verify the required parameter 'customer_id' is set
        if ($customer_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $customer_id when calling getCustomerVideoStats');
        }
        // parse inputs
        $resourcePath = "/video-stats/customers";
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
        if ($customer_id !== null) {
            $queryParams['customer_id'] = $this->apiClient->getSerializer()->toQueryValue($customer_id);
        }
        // query params
        if ($date_from !== null) {
            $queryParams['date_from'] = $this->apiClient->getSerializer()->toQueryValue($date_from);
        }
        // query params
        if ($date_to !== null) {
            $queryParams['date_to'] = $this->apiClient->getSerializer()->toQueryValue($date_to);
        }
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
                '\Kinow\Client\Model\CustomerVideoStats1',
                '/video-stats/customers'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Kinow\Client\Model\CustomerVideoStats1', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Kinow\Client\Model\CustomerVideoStats1', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getVideoStats
     *
     * 
     *
     * @param int $video_id Video ID to fetch (optional)
     * @param string $date_from Search entries from this date (optional)
     * @param string $date_to Search entries to this date (optional)
     * @param int $page  (optional)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return \Kinow\Client\Model\VideoStats
     */
    public function getVideoStats($video_id = null, $date_from = null, $date_to = null, $page = null)
    {
        list($response) = $this->getVideoStatsWithHttpInfo($video_id, $date_from, $date_to, $page);
        return $response;
    }

    /**
     * Operation getVideoStatsWithHttpInfo
     *
     * 
     *
     * @param int $video_id Video ID to fetch (optional)
     * @param string $date_from Search entries from this date (optional)
     * @param string $date_to Search entries to this date (optional)
     * @param int $page  (optional)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return array of \Kinow\Client\Model\VideoStats, HTTP status code, HTTP response headers (array of strings)
     */
    public function getVideoStatsWithHttpInfo($video_id = null, $date_from = null, $date_to = null, $page = null)
    {
        // parse inputs
        $resourcePath = "/video-stats/videos";
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
        if ($video_id !== null) {
            $queryParams['video_id'] = $this->apiClient->getSerializer()->toQueryValue($video_id);
        }
        // query params
        if ($date_from !== null) {
            $queryParams['date_from'] = $this->apiClient->getSerializer()->toQueryValue($date_from);
        }
        // query params
        if ($date_to !== null) {
            $queryParams['date_to'] = $this->apiClient->getSerializer()->toQueryValue($date_to);
        }
        // query params
        if ($page !== null) {
            $queryParams['page'] = $this->apiClient->getSerializer()->toQueryValue($page);
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
                '\Kinow\Client\Model\VideoStats',
                '/video-stats/videos'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Kinow\Client\Model\VideoStats', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Kinow\Client\Model\VideoStats', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
