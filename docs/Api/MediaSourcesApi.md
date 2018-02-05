# MediaSourcesApi

All URIs are relative to *http://1.0.63/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getMediaSource**](#getMediaSource) | **GET** /media-sources/{source_id} | 
[**getMediaSourceFiles**](#getMediaSourceFiles) | **GET** /media-sources/{source_id}/files | 
[**getMediaSources**](#getMediaSources) | **GET** /media-sources | 
[**postMediaSourceFiles**](#postMediaSourceFiles) | **POST** /media-sources/{source_id}/files | 


## **getMediaSource**
> \Kaemo\Client\Model\MediaSource getMediaSource($source_id)



Get media source

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\MediaSourcesApi();
$source_id = 789; // int | ID of the media source to fetch

try {
    $result = $api_instance->getMediaSource($source_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaSourcesApi->getMediaSource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **source_id** | **int**| ID of the media source to fetch |

### Return type

[**\Kaemo\Client\Model\MediaSource**](#MediaSource)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getMediaSourceFiles**
> \Kaemo\Client\Model\MediaFiles getMediaSourceFiles($source_id, $page, $per_page, $filters)



Get media source files

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\MediaSourcesApi();
$source_id = 789; // int | ID of the media source to fetch
$page = 789; // int | 
$per_page = 789; // int | 
$filters = "filters_example"; // string | ```     filters[name][value]=string&filters[name][operator]=contains&filters[date_add][value]=string&filters[date_add][operator]=lt     _______________      {     \"name\": {     \"value\": \"string\",     \"operator\": \"contains\"     },     \"date_add\": {     \"value\": \"string\",     \"operator\": \"lt\"     }     } ```Operator can be strict, contains, gt or lt.

try {
    $result = $api_instance->getMediaSourceFiles($source_id, $page, $per_page, $filters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaSourcesApi->getMediaSourceFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **source_id** | **int**| ID of the media source to fetch |
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]
 **filters** | **string**| &#x60;&#x60;&#x60;     filters[name][value]&#x3D;string&amp;filters[name][operator]&#x3D;contains&amp;filters[date_add][value]&#x3D;string&amp;filters[date_add][operator]&#x3D;lt     _______________      {     \&quot;name\&quot;: {     \&quot;value\&quot;: \&quot;string\&quot;,     \&quot;operator\&quot;: \&quot;contains\&quot;     },     \&quot;date_add\&quot;: {     \&quot;value\&quot;: \&quot;string\&quot;,     \&quot;operator\&quot;: \&quot;lt\&quot;     }     } &#x60;&#x60;&#x60;Operator can be strict, contains, gt or lt. | [optional]

### Return type

[**\Kaemo\Client\Model\MediaFiles**](#MediaFiles)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getMediaSources**
> \Kaemo\Client\Model\MediaSources getMediaSources($page, $per_page)



Get media source list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\MediaSourcesApi();
$page = 789; // int | 
$per_page = 789; // int | 

try {
    $result = $api_instance->getMediaSources($page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaSourcesApi->getMediaSources: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]

### Return type

[**\Kaemo\Client\Model\MediaSources**](#MediaSources)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **postMediaSourceFiles**
> \Kaemo\Client\Model\MediaFile postMediaSourceFiles($source_id, $body)



Post media file

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\MediaSourcesApi();
$source_id = 789; // int | ID of the media source to fetch
$body = new \Kaemo\Client\Model\MediaFile(); // \Kaemo\Client\Model\MediaFile | Create MediaFile object

try {
    $result = $api_instance->postMediaSourceFiles($source_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaSourcesApi->postMediaSourceFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **source_id** | **int**| ID of the media source to fetch |
 **body** | [**\Kaemo\Client\Model\MediaFile**](#\Kaemo\Client\Model\MediaFile)| Create MediaFile object |

### Return type

[**\Kaemo\Client\Model\MediaFile**](#MediaFile)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

