# AttributesApi

All URIs are relative to *http://version-api.kinow.fr/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createProductAttribute**](#createProductAttribute) | **POST** /attributes | 
[**getProductAttributes**](#getProductAttributes) | **GET** /products/{product_id}/attributes | 
[**updateProductAttribute**](#updateProductAttribute) | **PUT** /attributes/{attribute_id} | 


## **createProductAttribute**
> \Kaemo\Client\Model\ProductAttribute createProductAttribute($body)



Create new product attribute

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\AttributesApi();
$body = new \Kaemo\Client\Model\ProductAttributeCreateRequest(); // \Kaemo\Client\Model\ProductAttributeCreateRequest | 

try {
    $result = $api_instance->createProductAttribute($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttributesApi->createProductAttribute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Kaemo\Client\Model\ProductAttributeCreateRequest**](#\Kaemo\Client\Model\ProductAttributeCreateRequest)|  |

### Return type

[**\Kaemo\Client\Model\ProductAttribute**](#ProductAttribute)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getProductAttributes**
> \Kaemo\Client\Model\ProductAttributesResponse getProductAttributes($product_id, $page, $per_page)



Get product attributes. Important to add product to a cart. Allow to select if the customer will buy the product for download, streaming or both

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\AttributesApi();
$product_id = 789; // int | ID of the product to fetch
$page = 789; // int | 
$per_page = 789; // int | 

try {
    $result = $api_instance->getProductAttributes($product_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttributesApi->getProductAttributes: ', $e->getMessage(), PHP_EOL;
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

[**\Kaemo\Client\Model\ProductAttributesResponse**](#ProductAttributesResponse)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **updateProductAttribute**
> \Kaemo\Client\Model\ProductAttribute updateProductAttribute($attribute_id, $body)



Update product attribute

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\AttributesApi();
$attribute_id = 789; // int | Id of the attribute
$body = new \Kaemo\Client\Model\ProductAttributeUpdateRequest(); // \Kaemo\Client\Model\ProductAttributeUpdateRequest | 

try {
    $result = $api_instance->updateProductAttribute($attribute_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttributesApi->updateProductAttribute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attribute_id** | **int**| Id of the attribute |
 **body** | [**\Kaemo\Client\Model\ProductAttributeUpdateRequest**](#\Kaemo\Client\Model\ProductAttributeUpdateRequest)|  |

### Return type

[**\Kaemo\Client\Model\ProductAttribute**](#ProductAttribute)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

