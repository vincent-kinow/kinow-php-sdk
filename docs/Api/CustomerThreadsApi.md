# CustomerThreadsApi

All URIs are relative to *http://api.kinow.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCustomerThread**](#getCustomerThread) | **GET** /customer-threads/{customer_thread_id} | 
[**getCustomerThreads**](#getCustomerThreads) | **GET** /customer-threads | 


## **getCustomerThread**
> \Kaemo\Client\Model\CustomerThread getCustomerThread($customer_thread_id)



Get customer thread

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\CustomerThreadsApi();
$customer_thread_id = 789; // int | ID of the customer thread to fetch

try {
    $result = $api_instance->getCustomerThread($customer_thread_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerThreadsApi->getCustomerThread: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_thread_id** | **int**| ID of the customer thread to fetch |

### Return type

[**\Kaemo\Client\Model\CustomerThread**](#CustomerThread)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getCustomerThreads**
> \Kaemo\Client\Model\CustomerThread1 getCustomerThreads($page, $per_page, $date_add, $date_add_operator)



Get customer threads list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\CustomerThreadsApi();
$page = 789; // int | 
$per_page = 789; // int | 
$date_add = "date_add_example"; // string | 
$date_add_operator = "date_add_operator_example"; // string | 

try {
    $result = $api_instance->getCustomerThreads($page, $per_page, $date_add, $date_add_operator);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerThreadsApi->getCustomerThreads: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]
 **date_add** | **string**|  | [optional]
 **date_add_operator** | **string**|  | [optional]

### Return type

[**\Kaemo\Client\Model\CustomerThread1**](#CustomerThread1)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

