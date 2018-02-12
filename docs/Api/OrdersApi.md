# OrdersApi

All URIs are relative to *http://version-api.kinow.fr/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCustomerOrders**](#getCustomerOrders) | **GET** /customers/{customer_id}/orders | 
[**getOrder**](#getOrder) | **GET** /orders/{order_id} | 
[**getOrderHistories**](#getOrderHistories) | **GET** /orders/{order_id}/histories | 
[**getOrderInvoice**](#getOrderInvoice) | **GET** /orders/{order_id}/invoice | 


## **getCustomerOrders**
> \Kaemo\Client\Model\Orders getCustomerOrders($customer_id, $page, $per_page)



Get customer orders

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\OrdersApi();
$customer_id = 789; // int | ID of the customer to fetch
$page = 789; // int | 
$per_page = 789; // int | 

try {
    $result = $api_instance->getCustomerOrders($customer_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->getCustomerOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **int**| ID of the customer to fetch |
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]

### Return type

[**\Kaemo\Client\Model\Orders**](#Orders)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getOrder**
> \Kaemo\Client\Model\Order getOrder($order_id)



Get order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\OrdersApi();
$order_id = 789; // int | ID of the order to fetch

try {
    $result = $api_instance->getOrder($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->getOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **int**| ID of the order to fetch |

### Return type

[**\Kaemo\Client\Model\Order**](#Order)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getOrderHistories**
> \Kaemo\Client\Model\OrderHistories getOrderHistories($order_id, $page, $per_page)



Get order histories

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\OrdersApi();
$order_id = 789; // int | ID of the order to fetch
$page = 789; // int | 
$per_page = 789; // int | 

try {
    $result = $api_instance->getOrderHistories($order_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->getOrderHistories: ', $e->getMessage(), PHP_EOL;
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

## **getOrderInvoice**
> string getOrderInvoice($order_id)



Get order invoice

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\OrdersApi();
$order_id = 789; // int | ID of the order to fetch

try {
    $result = $api_instance->getOrderInvoice($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->getOrderInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **int**| ID of the order to fetch |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

