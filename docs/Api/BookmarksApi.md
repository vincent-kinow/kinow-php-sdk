# BookmarksApi

All URIs are relative to *http://api.dev.km/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**attachBookmarkToCustomer**](#attachBookmarkToCustomer) | **POST** /customers/{customer_id}/bookmarks | 
[**detachBookmarkFromCustomer**](#detachBookmarkFromCustomer) | **DELETE** /customers/{customer_id}/bookmarks/{product_id} | 
[**getCustomerBookmarks**](#getCustomerBookmarks) | **GET** /customers/{customer_id}/bookmarks | 


## **attachBookmarkToCustomer**
> attachBookmarkToCustomer($customer_id, $product_id)



Attach bookmark to customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\BookmarksApi();
$customer_id = 789; // int | ID of the customer to fetch
$product_id = 789; // int | 

try {
    $api_instance->attachBookmarkToCustomer($customer_id, $product_id);
} catch (Exception $e) {
    echo 'Exception when calling BookmarksApi->attachBookmarkToCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **int**| ID of the customer to fetch |
 **product_id** | **int**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **detachBookmarkFromCustomer**
> detachBookmarkFromCustomer($customer_id, $product_id)



Detach bookmark from customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\BookmarksApi();
$customer_id = 789; // int | ID of the customer to fetch
$product_id = 789; // int | 

try {
    $api_instance->detachBookmarkFromCustomer($customer_id, $product_id);
} catch (Exception $e) {
    echo 'Exception when calling BookmarksApi->detachBookmarkFromCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **int**| ID of the customer to fetch |
 **product_id** | **int**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getCustomerBookmarks**
> \Kaemo\Client\Model\Products getCustomerBookmarks($page, $per_page, $features, $filters, $sort_by, $sort_direction, $ip)



Get customer bookmarks

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\BookmarksApi();
$page = 789; // int | 
$per_page = 789; // int | 
$features = "features_example"; // string | ```     features[*][value]=string&features[*][operator]=strict&features[1][value]=string&features[1][operator]=strict     _______________      {     \"*\": {     \"value\": \"string\",     \"operator\": \"strict\"     },     \"1\": {     \"value\": \"string\",     \"operator\": \"contains\"     }     } ```     Operator can be strict, contains, gt or lt.     To search on all features, you can pass * as featureId.
$filters = "filters_example"; // string | ```     filters[name][value]=string&filters[name][operator]=contains&filters[date_add][value]=string&filters[date_add][operator]=lt     _______________      {     \"name\": {     \"value\": \"string\",     \"operator\": \"contains\"     },     \"date_add\": {     \"value\": \"string\",     \"operator\": \"lt\"     }     } ```     Operator can be strict, contains, gt or lt.
$sort_by = "sort_by_example"; // string | Sort by this attribute (id by default)
$sort_direction = "sort_direction_example"; // string | Sorting direction (asc by default)
$ip = "ip_example"; // string | filter by customer ip

try {
    $result = $api_instance->getCustomerBookmarks($page, $per_page, $features, $filters, $sort_by, $sort_direction, $ip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookmarksApi->getCustomerBookmarks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]
 **features** | **string**| &#x60;&#x60;&#x60;     features[*][value]&#x3D;string&amp;features[*][operator]&#x3D;strict&amp;features[1][value]&#x3D;string&amp;features[1][operator]&#x3D;strict     _______________      {     \&quot;*\&quot;: {     \&quot;value\&quot;: \&quot;string\&quot;,     \&quot;operator\&quot;: \&quot;strict\&quot;     },     \&quot;1\&quot;: {     \&quot;value\&quot;: \&quot;string\&quot;,     \&quot;operator\&quot;: \&quot;contains\&quot;     }     } &#x60;&#x60;&#x60;     Operator can be strict, contains, gt or lt.     To search on all features, you can pass * as featureId. | [optional]
 **filters** | **string**| &#x60;&#x60;&#x60;     filters[name][value]&#x3D;string&amp;filters[name][operator]&#x3D;contains&amp;filters[date_add][value]&#x3D;string&amp;filters[date_add][operator]&#x3D;lt     _______________      {     \&quot;name\&quot;: {     \&quot;value\&quot;: \&quot;string\&quot;,     \&quot;operator\&quot;: \&quot;contains\&quot;     },     \&quot;date_add\&quot;: {     \&quot;value\&quot;: \&quot;string\&quot;,     \&quot;operator\&quot;: \&quot;lt\&quot;     }     } &#x60;&#x60;&#x60;     Operator can be strict, contains, gt or lt. | [optional]
 **sort_by** | **string**| Sort by this attribute (id by default) | [optional]
 **sort_direction** | **string**| Sorting direction (asc by default) | [optional]
 **ip** | **string**| filter by customer ip | [optional]

### Return type

[**\Kaemo\Client\Model\Products**](#Products)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

