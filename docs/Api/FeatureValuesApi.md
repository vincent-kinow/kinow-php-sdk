# FeatureValuesApi

All URIs are relative to *http://api.kinow.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**attachFeaturesToProduct**](#attachFeaturesToProduct) | **POST** /products/{product_id}/features | 
[**attachFeaturesToVideo**](#attachFeaturesToVideo) | **POST** /videos/{video_id}/features | 
[**detachFeatureToProduct**](#detachFeatureToProduct) | **DELETE** products/{product_id}/features/{feature_id} | 
[**getFeatureValues**](#getFeatureValues) | **GET** /feature-values | 


## **attachFeaturesToProduct**
> attachFeaturesToProduct($product_id, $features)



Attach feature to product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\FeatureValuesApi();
$product_id = 789; // int | 
$features = "features_example"; // string | To attach existing FeatureValue to Product:     ```     [{     \"id_feature\":3,     \"id_feature_value\":5     }]```      To create a custom FeatureValue:     ```     [{     \"id_feature\":3,     \"custom_value\":[{     \"lang\": 1,     \"value\": \"string\"     }]     }]```

try {
    $api_instance->attachFeaturesToProduct($product_id, $features);
} catch (Exception $e) {
    echo 'Exception when calling FeatureValuesApi->attachFeaturesToProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**|  |
 **features** | **string**| To attach existing FeatureValue to Product:     &#x60;&#x60;&#x60;     [{     \&quot;id_feature\&quot;:3,     \&quot;id_feature_value\&quot;:5     }]&#x60;&#x60;&#x60;      To create a custom FeatureValue:     &#x60;&#x60;&#x60;     [{     \&quot;id_feature\&quot;:3,     \&quot;custom_value\&quot;:[{     \&quot;lang\&quot;: 1,     \&quot;value\&quot;: \&quot;string\&quot;     }]     }]&#x60;&#x60;&#x60; |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **attachFeaturesToVideo**
> attachFeaturesToVideo($video_id, $features)



Attach feature to video

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\FeatureValuesApi();
$video_id = 789; // int | 
$features = "features_example"; // string | To attach existing FeatureValue to Product:     ```     [{     \"id_feature\":3,     \"id_feature_value\":5     }]     ```      To create a custom FeatureValue:     ```     [{     \"id_feature\":3,     \"custom_value\":[{     \"lang\": 1,     \"value\": \"string\"     }]     }]     ```

try {
    $api_instance->attachFeaturesToVideo($video_id, $features);
} catch (Exception $e) {
    echo 'Exception when calling FeatureValuesApi->attachFeaturesToVideo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **video_id** | **int**|  |
 **features** | **string**| To attach existing FeatureValue to Product:     &#x60;&#x60;&#x60;     [{     \&quot;id_feature\&quot;:3,     \&quot;id_feature_value\&quot;:5     }]     &#x60;&#x60;&#x60;      To create a custom FeatureValue:     &#x60;&#x60;&#x60;     [{     \&quot;id_feature\&quot;:3,     \&quot;custom_value\&quot;:[{     \&quot;lang\&quot;: 1,     \&quot;value\&quot;: \&quot;string\&quot;     }]     }]     &#x60;&#x60;&#x60; |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **detachFeatureToProduct**
> detachFeatureToProduct($product_id, $feature_id)



Detach feature to product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\FeatureValuesApi();
$product_id = 789; // int | 
$feature_id = 789; // int | 

try {
    $api_instance->detachFeatureToProduct($product_id, $feature_id);
} catch (Exception $e) {
    echo 'Exception when calling FeatureValuesApi->detachFeatureToProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**|  |
 **feature_id** | **int**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getFeatureValues**
> \Kaemo\Client\Model\Products1 getFeatureValues($page, $per_page)



Get feature value list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\FeatureValuesApi();
$page = 789; // int | 
$per_page = 789; // int | 

try {
    $result = $api_instance->getFeatureValues($page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeatureValuesApi->getFeatureValues: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]

### Return type

[**\Kaemo\Client\Model\Products1**](#Products1)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

