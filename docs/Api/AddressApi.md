# AddressApi

All URIs are relative to *http://1.0.63/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCustomerAddress**](#getCustomerAddress) | **GET** /customers/{customer_id}/address | 
[**updateAddress**](#updateAddress) | **PUT** /addresses/{address_id} | 


## **getCustomerAddress**
> \Kaemo\Client\Model\Address getCustomerAddress($customer_id)



Get customer address

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\AddressApi();
$customer_id = 789; // int | ID of the customer to fetch

try {
    $result = $api_instance->getCustomerAddress($customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressApi->getCustomerAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **int**| ID of the customer to fetch |

### Return type

[**\Kaemo\Client\Model\Address**](#Address)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **updateAddress**
> \Kaemo\Client\Model\Address updateAddress($address_id, $body)



Update address

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\AddressApi();
$address_id = 789; // int | ID of the address to update
$body = new \Kaemo\Client\Model\Address(); // \Kaemo\Client\Model\Address | 

try {
    $result = $api_instance->updateAddress($address_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressApi->updateAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address_id** | **int**| ID of the address to update |
 **body** | [**\Kaemo\Client\Model\Address**](#\Kaemo\Client\Model\Address)|  |

### Return type

[**\Kaemo\Client\Model\Address**](#Address)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

