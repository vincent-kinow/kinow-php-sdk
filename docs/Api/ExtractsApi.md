# ExtractsApi

All URIs are relative to *http://api.dev.km/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createExtract**](#createExtract) | **POST** /extracts | 
[**deleteExtract**](#deleteExtract) | **DELETE** /extracts/{extract_id} | 
[**getExtractPlayer**](#getExtractPlayer) | **GET** /extracts/{extract_id}/player | 
[**getProductExtracts**](#getProductExtracts) | **GET** /products/{product_id}/extracts | 
[**updateExtract**](#updateExtract) | **PUT** /extracts/{extract_id} | 


## **createExtract**
> \Kaemo\Client\Model\Extract createExtract($body)



Create new extract

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\ExtractsApi();
$body = new \Kaemo\Client\Model\Extract(); // \Kaemo\Client\Model\Extract | 

try {
    $result = $api_instance->createExtract($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtractsApi->createExtract: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Kaemo\Client\Model\Extract**](#\Kaemo\Client\Model\Extract)|  |

### Return type

[**\Kaemo\Client\Model\Extract**](#Extract)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **deleteExtract**
> deleteExtract($extract_id)



Delete extract

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\ExtractsApi();
$extract_id = 789; // int | ID of the video to update

try {
    $api_instance->deleteExtract($extract_id);
} catch (Exception $e) {
    echo 'Exception when calling ExtractsApi->deleteExtract: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **extract_id** | **int**| ID of the video to update |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getExtractPlayer**
> \Kaemo\Client\Model\PlayerConfiguration getExtractPlayer($extract_id)



Get extract's player

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\ExtractsApi();
$extract_id = 789; // int | ID of the extract to fetch

try {
    $result = $api_instance->getExtractPlayer($extract_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtractsApi->getExtractPlayer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **extract_id** | **int**| ID of the extract to fetch |

### Return type

[**\Kaemo\Client\Model\PlayerConfiguration**](#PlayerConfiguration)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getProductExtracts**
> \Kaemo\Client\Model\ProductExtractsResponse getProductExtracts($product_id, $page, $per_page)



Get extracts of a product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\ExtractsApi();
$product_id = 789; // int | ID of the product to fetch
$page = 789; // int | 
$per_page = 789; // int | 

try {
    $result = $api_instance->getProductExtracts($product_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtractsApi->getProductExtracts: ', $e->getMessage(), PHP_EOL;
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

[**\Kaemo\Client\Model\ProductExtractsResponse**](#ProductExtractsResponse)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **updateExtract**
> \Kaemo\Client\Model\Extract updateExtract($extract_id, $body)



Update extract

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\ExtractsApi();
$extract_id = 789; // int | ID of the video to update
$body = new \Kaemo\Client\Model\Extract(); // \Kaemo\Client\Model\Extract | 

try {
    $result = $api_instance->updateExtract($extract_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExtractsApi->updateExtract: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **extract_id** | **int**| ID of the video to update |
 **body** | [**\Kaemo\Client\Model\Extract**](#\Kaemo\Client\Model\Extract)|  |

### Return type

[**\Kaemo\Client\Model\Extract**](#Extract)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

