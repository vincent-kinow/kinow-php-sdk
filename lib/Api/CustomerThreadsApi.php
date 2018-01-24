<?php
/**
 * CustomerThreadsApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Kaemo API
 *
 * Public api for Kaemo back office
 *
 * OpenAPI spec version: 1.0.35
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Api;

use \Swagger\Client\Configuration;
use \Swagger\Client\ApiClient;
use \Swagger\Client\ApiException;
use \Swagger\Client\ObjectSerializer;

/**
 * CustomerThreadsApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CustomerThreadsApi
{

    /**
     * API Client
     *
     * @var \Swagger\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Swagger\Client\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Swagger\Client\ApiClient $apiClient = null)
    {
        if ($apiClient == null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('https://api.kaemo.com/api');
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Swagger\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Swagger\Client\ApiClient $apiClient set the API client
     *
     * @return CustomerThreadsApi
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation getCustomerThread
     *
     * 
     *
     * @param int $customer_thread_id ID of the customer thread to fetch (required)
     * @return \Swagger\Client\Model\CustomerThread
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getCustomerThread($customer_thread_id)
    {
        list($response) = $this->getCustomerThreadWithHttpInfo($customer_thread_id);
        return $response;
    }

    /**
     * Operation getCustomerThreadWithHttpInfo
     *
     * 
     *
     * @param int $customer_thread_id ID of the customer thread to fetch (required)
     * @return Array of \Swagger\Client\Model\CustomerThread, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getCustomerThreadWithHttpInfo($customer_thread_id)
    {
        // verify the required parameter 'customer_thread_id' is set
        if ($customer_thread_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $customer_thread_id when calling getCustomerThread');
        }
        // parse inputs
        $resourcePath = "/customer-threads/{customer_thread_id}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array());
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

        // path params
        if ($customer_thread_id !== null) {
            $resourcePath = str_replace(
                "{" . "customer_thread_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($customer_thread_id),
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
                '\Swagger\Client\Model\CustomerThread',
                '/customer-threads/{customer_thread_id}'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\CustomerThread', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\CustomerThread', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getCustomerThreads
     *
     * 
     *
     * @param int $page  (optional)
     * @param int $per_page  (optional)
     * @param string $date_add  (optional)
     * @param string $date_add_operator  (optional)
     * @return \Swagger\Client\Model\CustomerThread1
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getCustomerThreads($page = null, $per_page = null, $date_add = null, $date_add_operator = null)
    {
        list($response) = $this->getCustomerThreadsWithHttpInfo($page, $per_page, $date_add, $date_add_operator);
        return $response;
    }

    /**
     * Operation getCustomerThreadsWithHttpInfo
     *
     * 
     *
     * @param int $page  (optional)
     * @param int $per_page  (optional)
     * @param string $date_add  (optional)
     * @param string $date_add_operator  (optional)
     * @return Array of \Swagger\Client\Model\CustomerThread1, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getCustomerThreadsWithHttpInfo($page = null, $per_page = null, $date_add = null, $date_add_operator = null)
    {
        // parse inputs
        $resourcePath = "/customer-threads";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array());
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

        // query params
        if ($page !== null) {
            $queryParams['page'] = $this->apiClient->getSerializer()->toQueryValue($page);
        }
        // query params
        if ($per_page !== null) {
            $queryParams['per_page'] = $this->apiClient->getSerializer()->toQueryValue($per_page);
        }
        // query params
        if ($date_add !== null) {
            $queryParams['date_add'] = $this->apiClient->getSerializer()->toQueryValue($date_add);
        }
        // query params
        if ($date_add_operator !== null) {
            $queryParams['date_add_operator'] = $this->apiClient->getSerializer()->toQueryValue($date_add_operator);
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
                '\Swagger\Client\Model\CustomerThread1',
                '/customer-threads'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\CustomerThread1', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\CustomerThread1', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

}
