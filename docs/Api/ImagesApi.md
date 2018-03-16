# ImagesApi

All URIs are relative to *http://api.kinow.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCategoryBanner**](#getCategoryBanner) | **GET** /categories/{category_id}/banner | 
[**getIntroImage**](#getIntroImage) | **GET** /widgets/intro/images | 
[**getManufacturerCoverImage**](#getManufacturerCoverImage) | **GET** /manufacturers/{manufacturer_id}/cover | 
[**getProductCoverImage**](#getProductCoverImage) | **GET** /products/{product_id}/cover | 
[**getProductImages**](#getProductImages) | **GET** /products/{product_id}/images | 
[**getSliderImages**](#getSliderImages) | **GET** /widgets/slider/images | 
[**getSubscriptionCoverImage**](#getSubscriptionCoverImage) | **GET** /subscriptions/{subscription_id}/cover | 
[**getSupplierCoverImage**](#getSupplierCoverImage) | **GET** /suppliers/{supplier_id}/cover | 
[**getVideoCover**](#getVideoCover) | **GET** /videos/{video_id}/cover | 


## **getCategoryBanner**
> \Kaemo\Client\Model\Image getCategoryBanner($category_id)



Get banner of a category

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\ImagesApi();
$category_id = 789; // int | ID of the category to fetch

try {
    $result = $api_instance->getCategoryBanner($category_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImagesApi->getCategoryBanner: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **category_id** | **int**| ID of the category to fetch |

### Return type

[**\Kaemo\Client\Model\Image**](#Image)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getIntroImage**
> \Kaemo\Client\Model\Image[] getIntroImage()



Get introduction image

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\ImagesApi();

try {
    $result = $api_instance->getIntroImage();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImagesApi->getIntroImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Kaemo\Client\Model\Image[]**](#Image)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getManufacturerCoverImage**
> \Kaemo\Client\Model\Image getManufacturerCoverImage($manufacturer_id)



Get cover image of a manufacturer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\ImagesApi();
$manufacturer_id = 789; // int | ID of the manufacturer to fetch

try {
    $result = $api_instance->getManufacturerCoverImage($manufacturer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImagesApi->getManufacturerCoverImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **manufacturer_id** | **int**| ID of the manufacturer to fetch |

### Return type

[**\Kaemo\Client\Model\Image**](#Image)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getProductCoverImage**
> \Kaemo\Client\Model\Image getProductCoverImage($product_id)



Get cover image of a product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\ImagesApi();
$product_id = 789; // int | ID of the product to fetch

try {
    $result = $api_instance->getProductCoverImage($product_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImagesApi->getProductCoverImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| ID of the product to fetch |

### Return type

[**\Kaemo\Client\Model\Image**](#Image)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getProductImages**
> \Kaemo\Client\Model\ProductImagesResponse getProductImages($product_id, $type, $page, $per_page)



Get images attached to product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\ImagesApi();
$product_id = 789; // int | ID of the product to fetch
$type = "type_example"; // string | type as screen_small or screen_large
$page = 789; // int | 
$per_page = 789; // int | 

try {
    $result = $api_instance->getProductImages($product_id, $type, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImagesApi->getProductImages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| ID of the product to fetch |
 **type** | **string**| type as screen_small or screen_large | [optional]
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]

### Return type

[**\Kaemo\Client\Model\ProductImagesResponse**](#ProductImagesResponse)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getSliderImages**
> \Kaemo\Client\Model\Image[] getSliderImages()



Get introduction image

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\ImagesApi();

try {
    $result = $api_instance->getSliderImages();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImagesApi->getSliderImages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Kaemo\Client\Model\Image[]**](#Image)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getSubscriptionCoverImage**
> \Kaemo\Client\Model\Image getSubscriptionCoverImage($subscription_id)



Get cover image of a subscription

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\ImagesApi();
$subscription_id = 789; // int | ID of the subscription to fetch

try {
    $result = $api_instance->getSubscriptionCoverImage($subscription_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImagesApi->getSubscriptionCoverImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription_id** | **int**| ID of the subscription to fetch |

### Return type

[**\Kaemo\Client\Model\Image**](#Image)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getSupplierCoverImage**
> \Kaemo\Client\Model\Image getSupplierCoverImage($supplier_id)



Get cover image of a supplier

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\ImagesApi();
$supplier_id = 789; // int | ID of the supplier to fetch

try {
    $result = $api_instance->getSupplierCoverImage($supplier_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImagesApi->getSupplierCoverImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **supplier_id** | **int**| ID of the supplier to fetch |

### Return type

[**\Kaemo\Client\Model\Image**](#Image)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getVideoCover**
> \Kaemo\Client\Model\Image getVideoCover($video)



Get video cover

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\ImagesApi();
$video = 789; // int | ID of the video to fetch

try {
    $result = $api_instance->getVideoCover($video);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImagesApi->getVideoCover: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **video** | **int**| ID of the video to fetch |

### Return type

[**\Kaemo\Client\Model\Image**](#Image)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

