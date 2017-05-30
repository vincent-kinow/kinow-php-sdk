<?php
/**
 * CategoriesApi
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
 * OpenAPI spec version: 1.0.11
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
 * CategoriesApi Class Doc Comment
 *
 * @category Class
 * @package  Kaemo\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CategoriesApi
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
            $apiClient->getConfig()->setHost('https://api.kaemo.com/api');
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
     * @return CategoriesApi
     */
    public function setApiClient(\Kaemo\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation getAvailableCategories
     *
     * 
     *
     * @param int $customer_id ID of the customer to fetch (optional)
     * @param int $page  (optional)
     * @param int $per_page  (optional)
     * @throws \Kaemo\Client\ApiException on non-2xx response
     * @return \Kaemo\Client\Model\Categories
     */
    public function getAvailableCategories($customer_id = null, $page = null, $per_page = null)
    {
        list($response) = $this->getAvailableCategoriesWithHttpInfo($customer_id, $page, $per_page);
        return $response;
    }

    /**
     * Operation getAvailableCategoriesWithHttpInfo
     *
     * 
     *
     * @param int $customer_id ID of the customer to fetch (optional)
     * @param int $page  (optional)
     * @param int $per_page  (optional)
     * @throws \Kaemo\Client\ApiException on non-2xx response
     * @return array of \Kaemo\Client\Model\Categories, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAvailableCategoriesWithHttpInfo($customer_id = null, $page = null, $per_page = null)
    {
        // parse inputs
        $resourcePath = "/categories-accesses";
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
                '\Kaemo\Client\Model\Categories',
                '/categories-accesses'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Kaemo\Client\Model\Categories', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Kaemo\Client\Model\Categories', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getAvailableCategory
     *
     * 
     *
     * @param int $category_id ID of the category to fetch (required)
     * @param int $customer_id  (optional)
     * @throws \Kaemo\Client\ApiException on non-2xx response
     * @return \Kaemo\Client\Model\Category
     */
    public function getAvailableCategory($category_id, $customer_id = null)
    {
        list($response) = $this->getAvailableCategoryWithHttpInfo($category_id, $customer_id);
        return $response;
    }

    /**
     * Operation getAvailableCategoryWithHttpInfo
     *
     * 
     *
     * @param int $category_id ID of the category to fetch (required)
     * @param int $customer_id  (optional)
     * @throws \Kaemo\Client\ApiException on non-2xx response
     * @return array of \Kaemo\Client\Model\Category, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAvailableCategoryWithHttpInfo($category_id, $customer_id = null)
    {
        // verify the required parameter 'category_id' is set
        if ($category_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $category_id when calling getAvailableCategory');
        }
        // parse inputs
        $resourcePath = "/categories-accesses/{category_id}";
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
        // path params
        if ($category_id !== null) {
            $resourcePath = str_replace(
                "{" . "category_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($category_id),
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
                '\Kaemo\Client\Model\Category',
                '/categories-accesses/{category_id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Kaemo\Client\Model\Category', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Kaemo\Client\Model\Category', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getCategories
     *
     * 
     *
     * @param int $page  (optional)
     * @param int $per_page  (optional)
     * @param string $features &#x60;&#x60;&#x60; features[*][value]&#x3D;string&amp;features[*][operator]&#x3D;strict&amp;features[1][value]&#x3D;string&amp;features[1][operator]&#x3D;strict _______________  {     \&quot;*\&quot;: {         \&quot;value\&quot;: \&quot;string\&quot;,         \&quot;operator\&quot;: \&quot;strict\&quot;     },     \&quot;1\&quot;: {         \&quot;value\&quot;: \&quot;string\&quot;,         \&quot;operator\&quot;: \&quot;contains\&quot;     } } &#x60;&#x60;&#x60; Operator can be strict, contains, gt or lt. To search on all features, you can pass * as featureId. (optional)
     * @param string $filters &#x60;&#x60;&#x60; filters[name][value]&#x3D;string&amp;filters[name][operator]&#x3D;strict&amp;filters[description][value]&#x3D;string&amp;filters[description][operator]&#x3D;contains _______________  {     \&quot;name\&quot;: {         \&quot;value\&quot;: \&quot;string\&quot;,         \&quot;operator\&quot;: \&quot;strict\&quot;     },     \&quot;description\&quot;: {         \&quot;value\&quot;: \&quot;string\&quot;,         \&quot;operator\&quot;: \&quot;contains\&quot;     } } &#x60;&#x60;&#x60; Operator can be strict, contains, gt or lt. (optional)
     * @throws \Kaemo\Client\ApiException on non-2xx response
     * @return \Kaemo\Client\Model\Categories
     */
    public function getCategories($page = null, $per_page = null, $features = null, $filters = null)
    {
        list($response) = $this->getCategoriesWithHttpInfo($page, $per_page, $features, $filters);
        return $response;
    }

    /**
     * Operation getCategoriesWithHttpInfo
     *
     * 
     *
     * @param int $page  (optional)
     * @param int $per_page  (optional)
     * @param string $features &#x60;&#x60;&#x60; features[*][value]&#x3D;string&amp;features[*][operator]&#x3D;strict&amp;features[1][value]&#x3D;string&amp;features[1][operator]&#x3D;strict _______________  {     \&quot;*\&quot;: {         \&quot;value\&quot;: \&quot;string\&quot;,         \&quot;operator\&quot;: \&quot;strict\&quot;     },     \&quot;1\&quot;: {         \&quot;value\&quot;: \&quot;string\&quot;,         \&quot;operator\&quot;: \&quot;contains\&quot;     } } &#x60;&#x60;&#x60; Operator can be strict, contains, gt or lt. To search on all features, you can pass * as featureId. (optional)
     * @param string $filters &#x60;&#x60;&#x60; filters[name][value]&#x3D;string&amp;filters[name][operator]&#x3D;strict&amp;filters[description][value]&#x3D;string&amp;filters[description][operator]&#x3D;contains _______________  {     \&quot;name\&quot;: {         \&quot;value\&quot;: \&quot;string\&quot;,         \&quot;operator\&quot;: \&quot;strict\&quot;     },     \&quot;description\&quot;: {         \&quot;value\&quot;: \&quot;string\&quot;,         \&quot;operator\&quot;: \&quot;contains\&quot;     } } &#x60;&#x60;&#x60; Operator can be strict, contains, gt or lt. (optional)
     * @throws \Kaemo\Client\ApiException on non-2xx response
     * @return array of \Kaemo\Client\Model\Categories, HTTP status code, HTTP response headers (array of strings)
     */
    public function getCategoriesWithHttpInfo($page = null, $per_page = null, $features = null, $filters = null)
    {
        // parse inputs
        $resourcePath = "/categories";
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
        if ($features !== null) {
            $queryParams['features'] = $this->apiClient->getSerializer()->toQueryValue($features);
        }
        // query params
        if ($filters !== null) {
            $queryParams['filters'] = $this->apiClient->getSerializer()->toQueryValue($filters);
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
                '\Kaemo\Client\Model\Categories',
                '/categories'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Kaemo\Client\Model\Categories', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Kaemo\Client\Model\Categories', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getCategoriesFromCategory
     *
     * 
     *
     * @param int $category_id  (required)
     * @param int $page  (optional)
     * @param int $per_page  (optional)
     * @throws \Kaemo\Client\ApiException on non-2xx response
     * @return \Kaemo\Client\Model\Categories
     */
    public function getCategoriesFromCategory($category_id, $page = null, $per_page = null)
    {
        list($response) = $this->getCategoriesFromCategoryWithHttpInfo($category_id, $page, $per_page);
        return $response;
    }

    /**
     * Operation getCategoriesFromCategoryWithHttpInfo
     *
     * 
     *
     * @param int $category_id  (required)
     * @param int $page  (optional)
     * @param int $per_page  (optional)
     * @throws \Kaemo\Client\ApiException on non-2xx response
     * @return array of \Kaemo\Client\Model\Categories, HTTP status code, HTTP response headers (array of strings)
     */
    public function getCategoriesFromCategoryWithHttpInfo($category_id, $page = null, $per_page = null)
    {
        // verify the required parameter 'category_id' is set
        if ($category_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $category_id when calling getCategoriesFromCategory');
        }
        // parse inputs
        $resourcePath = "/categories/{category_id}/categories";
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
        // path params
        if ($category_id !== null) {
            $resourcePath = str_replace(
                "{" . "category_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($category_id),
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
                '\Kaemo\Client\Model\Categories',
                '/categories/{category_id}/categories'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Kaemo\Client\Model\Categories', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Kaemo\Client\Model\Categories', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getCategory
     *
     * 
     *
     * @param int $category_id ID of the category to fetch (required)
     * @throws \Kaemo\Client\ApiException on non-2xx response
     * @return \Kaemo\Client\Model\Category
     */
    public function getCategory($category_id)
    {
        list($response) = $this->getCategoryWithHttpInfo($category_id);
        return $response;
    }

    /**
     * Operation getCategoryWithHttpInfo
     *
     * 
     *
     * @param int $category_id ID of the category to fetch (required)
     * @throws \Kaemo\Client\ApiException on non-2xx response
     * @return array of \Kaemo\Client\Model\Category, HTTP status code, HTTP response headers (array of strings)
     */
    public function getCategoryWithHttpInfo($category_id)
    {
        // verify the required parameter 'category_id' is set
        if ($category_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $category_id when calling getCategory');
        }
        // parse inputs
        $resourcePath = "/categories/{category_id}";
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
        if ($category_id !== null) {
            $resourcePath = str_replace(
                "{" . "category_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($category_id),
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
                '\Kaemo\Client\Model\Category',
                '/categories/{category_id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Kaemo\Client\Model\Category', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Kaemo\Client\Model\Category', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getCategoryBanner
     *
     * 
     *
     * @param int $category_id ID of the category to fetch (required)
     * @throws \Kaemo\Client\ApiException on non-2xx response
     * @return \Kaemo\Client\Model\Image
     */
    public function getCategoryBanner($category_id)
    {
        list($response) = $this->getCategoryBannerWithHttpInfo($category_id);
        return $response;
    }

    /**
     * Operation getCategoryBannerWithHttpInfo
     *
     * 
     *
     * @param int $category_id ID of the category to fetch (required)
     * @throws \Kaemo\Client\ApiException on non-2xx response
     * @return array of \Kaemo\Client\Model\Image, HTTP status code, HTTP response headers (array of strings)
     */
    public function getCategoryBannerWithHttpInfo($category_id)
    {
        // verify the required parameter 'category_id' is set
        if ($category_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $category_id when calling getCategoryBanner');
        }
        // parse inputs
        $resourcePath = "/categories/{category_id}/banner";
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
        if ($category_id !== null) {
            $resourcePath = str_replace(
                "{" . "category_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($category_id),
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
                '\Kaemo\Client\Model\Image',
                '/categories/{category_id}/banner'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Kaemo\Client\Model\Image', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Kaemo\Client\Model\Image', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getCategoryFeatures
     *
     * 
     *
     * @param int $category_id ID of the category to fetch (required)
     * @param int $page  (optional)
     * @param int $per_page  (optional)
     * @throws \Kaemo\Client\ApiException on non-2xx response
     * @return \Kaemo\Client\Model\Features
     */
    public function getCategoryFeatures($category_id, $page = null, $per_page = null)
    {
        list($response) = $this->getCategoryFeaturesWithHttpInfo($category_id, $page, $per_page);
        return $response;
    }

    /**
     * Operation getCategoryFeaturesWithHttpInfo
     *
     * 
     *
     * @param int $category_id ID of the category to fetch (required)
     * @param int $page  (optional)
     * @param int $per_page  (optional)
     * @throws \Kaemo\Client\ApiException on non-2xx response
     * @return array of \Kaemo\Client\Model\Features, HTTP status code, HTTP response headers (array of strings)
     */
    public function getCategoryFeaturesWithHttpInfo($category_id, $page = null, $per_page = null)
    {
        // verify the required parameter 'category_id' is set
        if ($category_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $category_id when calling getCategoryFeatures');
        }
        // parse inputs
        $resourcePath = "/categories/{category_id}/features";
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
        // path params
        if ($category_id !== null) {
            $resourcePath = str_replace(
                "{" . "category_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($category_id),
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
                '\Kaemo\Client\Model\Features',
                '/categories/{category_id}/features'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Kaemo\Client\Model\Features', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Kaemo\Client\Model\Features', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getCategoryProducts
     *
     * 
     *
     * @param int $category_id ID of the category to fetch (required)
     * @param int $page  (optional)
     * @param int $per_page  (optional)
     * @throws \Kaemo\Client\ApiException on non-2xx response
     * @return \Kaemo\Client\Model\Products
     */
    public function getCategoryProducts($category_id, $page = null, $per_page = null)
    {
        list($response) = $this->getCategoryProductsWithHttpInfo($category_id, $page, $per_page);
        return $response;
    }

    /**
     * Operation getCategoryProductsWithHttpInfo
     *
     * 
     *
     * @param int $category_id ID of the category to fetch (required)
     * @param int $page  (optional)
     * @param int $per_page  (optional)
     * @throws \Kaemo\Client\ApiException on non-2xx response
     * @return array of \Kaemo\Client\Model\Products, HTTP status code, HTTP response headers (array of strings)
     */
    public function getCategoryProductsWithHttpInfo($category_id, $page = null, $per_page = null)
    {
        // verify the required parameter 'category_id' is set
        if ($category_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $category_id when calling getCategoryProducts');
        }
        // parse inputs
        $resourcePath = "/categories/{category_id}/products";
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
        // path params
        if ($category_id !== null) {
            $resourcePath = str_replace(
                "{" . "category_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($category_id),
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
                '\Kaemo\Client\Model\Products',
                '/categories/{category_id}/products'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Kaemo\Client\Model\Products', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Kaemo\Client\Model\Products', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
