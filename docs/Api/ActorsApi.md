# ActorsApi

All URIs are relative to *http://api.dev.km/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getActor**](#getActor) | **GET** /actors/{actor_id} | 
[**getActors**](#getActors) | **GET** /actors | 
[**getProductActors**](#getProductActors) | **GET** /products/{product_id}/actors | 


## **getActor**
> \Kaemo\Client\Model\Actor getActor($actor_id)



Get actor

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\ActorsApi();
$actor_id = 789; // int | ID of the actor to fetch

try {
    $result = $api_instance->getActor($actor_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActorsApi->getActor: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **actor_id** | **int**| ID of the actor to fetch |

### Return type

[**\Kaemo\Client\Model\Actor**](#Actor)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getActors**
> \Kaemo\Client\Model\Actors getActors($page, $per_page)



Get actors list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\ActorsApi();
$page = 789; // int | 
$per_page = 789; // int | 

try {
    $result = $api_instance->getActors($page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActorsApi->getActors: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]

### Return type

[**\Kaemo\Client\Model\Actors**](#Actors)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getProductActors**
> \Kaemo\Client\Model\Actors getProductActors($product_id, $page, $per_page)



Get actors attached to product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\ActorsApi();
$product_id = 789; // int | ID of the product to fetch
$page = 789; // int | 
$per_page = 789; // int | 

try {
    $result = $api_instance->getProductActors($product_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActorsApi->getProductActors: ', $e->getMessage(), PHP_EOL;
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

[**\Kaemo\Client\Model\Actors**](#Actors)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

