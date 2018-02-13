# SuppliersApi

All URIs are relative to *http://api.dev.km/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getSupplierCoverImage**](#getSupplierCoverImage) | **GET** /suppliers/{supplier_id}/cover | 


## **getSupplierCoverImage**
> \Kaemo\Client\Model\Image getSupplierCoverImage($supplier_id)



Get cover image of a supplier

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\SuppliersApi();
$supplier_id = 789; // int | ID of the supplier to fetch

try {
    $result = $api_instance->getSupplierCoverImage($supplier_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SuppliersApi->getSupplierCoverImage: ', $e->getMessage(), PHP_EOL;
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

