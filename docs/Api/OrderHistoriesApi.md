# OrderHistoriesApi

All URIs are relative to *http://api.dev.km/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getOrderHistories**](#getOrderHistories) | **GET** /orders/{order_id}/histories | 


## **getOrderHistories**
> \Kaemo\Client\Model\OrderHistories getOrderHistories($order_id, $page, $per_page)



Get order histories

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\OrderHistoriesApi();
$order_id = 789; // int | ID of the order to fetch
$page = 789; // int | 
$per_page = 789; // int | 

try {
    $result = $api_instance->getOrderHistories($order_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderHistoriesApi->getOrderHistories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **int**| ID of the order to fetch |
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]

### Return type

[**\Kaemo\Client\Model\OrderHistories**](#OrderHistories)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

