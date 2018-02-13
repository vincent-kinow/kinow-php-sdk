<?php
/**
 * CMSCategoriesApi
 * PHP version 5
 *
 * @category Class
 * @package  Kaemo\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Kaemo API
 *
 * Public api for Kaemo back office
 *
 * OpenAPI spec version: 1.0.362
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
 * CMSCategoriesApi Class Doc Comment
 *
 * @category Class
 * @package  Kaemo\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CMSCategoriesApi
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
            $apiClient->getConfig()->setHost('http://version.api.dev/api');
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
     * @return CMSCategoriesApi
     */
    public function setApiClient(\Kaemo\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation createCMSCategory
     *
     * 
     *
     * @param \Kaemo\Client\Model\CMSCategory $body  (required)
     * @throws \Kaemo\Client\ApiException on non-2xx response
     * @return \Kaemo\Client\Model\CMSCategory
     */
    public function createCMSCategory($body)
    {
        list($response) = $this->createCMSCategoryWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation createCMSCategoryWithHttpInfo
     *
     * 
     *
     * @param \Kaemo\Client\Model\CMSCategory $body  (required)
     * @throws \Kaemo\Client\ApiException on non-2xx response
     * @return array of \Kaemo\Client\Model\CMSCategory, HTTP status code, HTTP response headers (array of strings)
     */
    public function createCMSCategoryWithHttpInfo($body)
    {
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling createCMSCategory');
        }
        // parse inputs
        $resourcePath = "/cms-categories";
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
                '\Kaemo\Client\Model\CMSCategory',
                '/cms-categories'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Kaemo\Client\Model\CMSCategory', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Kaemo\Client\Model\CMSCategory', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getCMSCategories
     *
     * 
     *
     * @param int $page  (optional)
     * @param int $per_page  (optional)
     * @param string $filters &#x60;&#x60;&#x60; filters[name][value]&#x3D;string&amp;filters[name][operator]&#x3D;contains&amp;filters[date_add][value]&#x3D;string&amp;filters[date_add][operator]&#x3D;lt _______________  {     \&quot;name\&quot;: {         \&quot;value\&quot;: \&quot;string\&quot;,         \&quot;operator\&quot;: \&quot;contains\&quot;     },     \&quot;date_add\&quot;: {         \&quot;value\&quot;: \&quot;string\&quot;,         \&quot;operator\&quot;: \&quot;lt\&quot;     } } &#x60;&#x60;&#x60; Operator can be strict, contains, gt or lt. (optional)
     * @param string $sort_by Sort by this attribute (id by default) (optional)
     * @param string $sort_direction Sorting direction (asc by default) (optional)
     * @throws \Kaemo\Client\ApiException on non-2xx response
     * @return \Kaemo\Client\Model\CMSCategoriesLists
     */
    public function getCMSCategories($page = null, $per_page = null, $filters = null, $sort_by = null, $sort_direction = null)
    {
        list($response) = $this->getCMSCategoriesWithHttpInfo($page, $per_page, $filters, $sort_by, $sort_direction);
        return $response;
    }

    /**
     * Operation getCMSCategoriesWithHttpInfo
     *
     * 
     *
     * @param int $page  (optional)
     * @param int $per_page  (optional)
     * @param string $filters &#x60;&#x60;&#x60; filters[name][value]&#x3D;string&amp;filters[name][operator]&#x3D;contains&amp;filters[date_add][value]&#x3D;string&amp;filters[date_add][operator]&#x3D;lt _______________  {     \&quot;name\&quot;: {         \&quot;value\&quot;: \&quot;string\&quot;,         \&quot;operator\&quot;: \&quot;contains\&quot;     },     \&quot;date_add\&quot;: {         \&quot;value\&quot;: \&quot;string\&quot;,         \&quot;operator\&quot;: \&quot;lt\&quot;     } } &#x60;&#x60;&#x60; Operator can be strict, contains, gt or lt. (optional)
     * @param string $sort_by Sort by this attribute (id by default) (optional)
     * @param string $sort_direction Sorting direction (asc by default) (optional)
     * @throws \Kaemo\Client\ApiException on non-2xx response
     * @return array of \Kaemo\Client\Model\CMSCategoriesLists, HTTP status code, HTTP response headers (array of strings)
     */
    public function getCMSCategoriesWithHttpInfo($page = null, $per_page = null, $filters = null, $sort_by = null, $sort_direction = null)
    {
        // parse inputs
        $resourcePath = "/cms-categories";
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
        if ($filters !== null) {
            $queryParams['filters'] = $this->apiClient->getSerializer()->toQueryValue($filters);
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
                '\Kaemo\Client\Model\CMSCategoriesLists',
                '/cms-categories'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Kaemo\Client\Model\CMSCategoriesLists', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Kaemo\Client\Model\CMSCategoriesLists', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation updateCMSCategory
     *
     * 
     *
     * @param int $cms_category_id ID of the CMS category to update (required)
     * @param \Kaemo\Client\Model\CMSCategory $body  (required)
     * @throws \Kaemo\Client\ApiException on non-2xx response
     * @return \Kaemo\Client\Model\CMSCategory
     */
    public function updateCMSCategory($cms_category_id, $body)
    {
        list($response) = $this->updateCMSCategoryWithHttpInfo($cms_category_id, $body);
        return $response;
    }

    /**
     * Operation updateCMSCategoryWithHttpInfo
     *
     * 
     *
     * @param int $cms_category_id ID of the CMS category to update (required)
     * @param \Kaemo\Client\Model\CMSCategory $body  (required)
     * @throws \Kaemo\Client\ApiException on non-2xx response
     * @return array of \Kaemo\Client\Model\CMSCategory, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateCMSCategoryWithHttpInfo($cms_category_id, $body)
    {
        // verify the required parameter 'cms_category_id' is set
        if ($cms_category_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $cms_category_id when calling updateCMSCategory');
        }
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling updateCMSCategory');
        }
        // parse inputs
        $resourcePath = "/cms-categories/{cms_category_id}";
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
        if ($cms_category_id !== null) {
            $resourcePath = str_replace(
                "{" . "cms_category_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($cms_category_id),
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
                '\Kaemo\Client\Model\CMSCategory',
                '/cms-categories/{cms_category_id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Kaemo\Client\Model\CMSCategory', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Kaemo\Client\Model\CMSCategory', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
