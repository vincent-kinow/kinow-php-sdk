# WidgetsApi

All URIs are relative to *http://version.api.dev/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getIntroImage**](#getIntroImage) | **GET** /widgets/intro/images | 
[**getSliderImages**](#getSliderImages) | **GET** /widgets/slider/images | 


## **getIntroImage**
> \Kaemo\Client\Model\Image[] getIntroImage()



Get introduction image

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\WidgetsApi();

try {
    $result = $api_instance->getIntroImage();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WidgetsApi->getIntroImage: ', $e->getMessage(), PHP_EOL;
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

## **getSliderImages**
> \Kaemo\Client\Model\Image[] getSliderImages()



Get introduction image

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\WidgetsApi();

try {
    $result = $api_instance->getSliderImages();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WidgetsApi->getSliderImages: ', $e->getMessage(), PHP_EOL;
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

