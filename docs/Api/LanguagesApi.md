# LanguagesApi

All URIs are relative to *http://version.api.dev/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getLanguages**](#getLanguages) | **GET** /languages | 


## **getLanguages**
> \Kaemo\Client\Model\Languages getLanguages($page, $per_page)



Get language list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\LanguagesApi();
$page = 789; // int | 
$per_page = 789; // int | 

try {
    $result = $api_instance->getLanguages($page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LanguagesApi->getLanguages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]

### Return type

[**\Kaemo\Client\Model\Languages**](#Languages)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

