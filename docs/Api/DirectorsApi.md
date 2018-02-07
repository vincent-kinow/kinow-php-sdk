# DirectorsApi

All URIs are relative to *http://api.dev.km/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getDirector**](#getDirector) | **GET** /directors/{director_id} | 
[**getDirectors**](#getDirectors) | **GET** /directors | 
[**getProductDirectors**](#getProductDirectors) | **GET** /products/{product_id}/directors | 


## **getDirector**
> \Kaemo\Client\Model\Director getDirector($director_id)



Get director

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\DirectorsApi();
$director_id = 789; // int | ID of the director to fetch

try {
    $result = $api_instance->getDirector($director_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectorsApi->getDirector: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **director_id** | **int**| ID of the director to fetch |

### Return type

[**\Kaemo\Client\Model\Director**](#Director)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getDirectors**
> \Kaemo\Client\Model\Director1 getDirectors($page, $per_page)



Get directors list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\DirectorsApi();
$page = 789; // int | 
$per_page = 789; // int | 

try {
    $result = $api_instance->getDirectors($page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectorsApi->getDirectors: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]

### Return type

[**\Kaemo\Client\Model\Director1**](#Director1)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getProductDirectors**
> \Kaemo\Client\Model\Director1 getProductDirectors($product_id, $page, $per_page)



Get directors of a product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\DirectorsApi();
$product_id = 789; // int | ID of the product to fetch
$page = 789; // int | 
$per_page = 789; // int | 

try {
    $result = $api_instance->getProductDirectors($product_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectorsApi->getProductDirectors: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| ID of the product to fetch |
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]

### Return type

[**\Kaemo\Client\Model\Director1**](#Director1)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

