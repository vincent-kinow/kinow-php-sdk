# ProductsApi

All URIs are relative to *http://version.api.dev/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**attachFeaturesToProduct**](#attachFeaturesToProduct) | **POST** /products/{product_id}/features | 
[**attachProductToCategory**](#attachProductToCategory) | **POST** /products/{product_id}/categories | 
[**attachVideoToProduct**](#attachVideoToProduct) | **POST** /products/{product_id}/videos | 
[**createProduct**](#createProduct) | **POST** /products | 
[**deleteProduct**](#deleteProduct) | **DELETE** /products/{product_id} | 
[**detachFeatureToProduct**](#detachFeatureToProduct) | **DELETE** products/{product_id}/features/{feature_id} | 
[**detachProductFromCategory**](#detachProductFromCategory) | **DELETE** /products/{product_id}/categories/{category_id} | 
[**getCategoryProducts**](#getCategoryProducts) | **GET** /categories/{category_id}/products | 
[**getCustomerHasAccessToProduct**](#getCustomerHasAccessToProduct) | **GET** /customers/{customer_id}/products/{product_id}/has-access | 
[**getProduct**](#getProduct) | **GET** /products/{product_id} | 
[**getProductActors**](#getProductActors) | **GET** /products/{product_id}/actors | 
[**getProductAttributes**](#getProductAttributes) | **GET** /products/{product_id}/attributes | 
[**getProductAvailability**](#getProductAvailability) | **GET** /products/{product_id}/access | 
[**getProductCategories**](#getProductCategories) | **GET** /products/{product_id}/categories | 
[**getProductCoverImage**](#getProductCoverImage) | **GET** /products/{product_id}/cover | 
[**getProductDirectors**](#getProductDirectors) | **GET** /products/{product_id}/directors | 
[**getProductExtracts**](#getProductExtracts) | **GET** /products/{product_id}/extracts | 
[**getProductFeatures**](#getProductFeatures) | **GET** /products/{product_id}/features | 
[**getProductGeolocations**](#getProductGeolocations) | **GET** /products/{product_id}/geolocations | 
[**getProductGeolocationsByIp**](#getProductGeolocationsByIp) | **POST** /products/{product_id}/geolocations | 
[**getProductImages**](#getProductImages) | **GET** /products/{product_id}/images | 
[**getProducts**](#getProducts) | **GET** /products | 
[**getProductsFromProduct**](#getProductsFromProduct) | **GET** /products/{product_id}/products | 
[**getVideosFromProduct**](#getVideosFromProduct) | **GET** /products/{product_id}/videos | 
[**searchProducts**](#searchProducts) | **GET** /products/search/{search_query} | 
[**setProductGeolocation**](#setProductGeolocation) | **PUT** /products/{product_id}/geolocations | 
[**updateProduct**](#updateProduct) | **PUT** /products/{product_id} | 


## **attachFeaturesToProduct**
> attachFeaturesToProduct($product_id, $features)



Attach feature to product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\ProductsApi();
$product_id = 789; // int | 
$features = "features_example"; // string | To attach existing FeatureValue to Product:     ```     [{     \"id_feature\":3,     \"id_feature_value\":5     }]```      To create a custom FeatureValue:     ```     [{     \"id_feature\":3,     \"custom_value\":[{     \"lang\": 1,     \"value\": \"string\"     }]     }]```

try {
    $api_instance->attachFeaturesToProduct($product_id, $features);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->attachFeaturesToProduct: ', $e->getMessage(), PHP_EOL;
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

## **attachProductToCategory**
> attachProductToCategory($product_id, $category_id)



Attach product to category

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\ProductsApi();
$product_id = 789; // int | Id of the product
$category_id = 789; // int | ID of the category to attach

try {
    $api_instance->attachProductToCategory($product_id, $category_id);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->attachProductToCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| Id of the product |
 **category_id** | **int**| ID of the category to attach |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **attachVideoToProduct**
> attachVideoToProduct($product_id, $video_id)



Attach video to product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\ProductsApi();
$product_id = 789; // int | ID of the product to fetch
$video_id = 789; // int | ID of the video to attach

try {
    $api_instance->attachVideoToProduct($product_id, $video_id);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->attachVideoToProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| ID of the product to fetch |
 **video_id** | **int**| ID of the video to attach |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **createProduct**
> \Kaemo\Client\Model\Product createProduct($body)



Create new product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\ProductsApi();
$body = new \Kaemo\Client\Model\Product(); // \Kaemo\Client\Model\Product | 

try {
    $result = $api_instance->createProduct($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->createProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Kaemo\Client\Model\Product**](#\Kaemo\Client\Model\Product)|  |

### Return type

[**\Kaemo\Client\Model\Product**](#Product)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **deleteProduct**
> deleteProduct($product_id)



Delete product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\ProductsApi();
$product_id = 789; // int | ID of the product to fetch

try {
    $api_instance->deleteProduct($product_id);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->deleteProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| ID of the product to fetch |

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

$api_instance = new Kaemo\Client\Api\ProductsApi();
$product_id = 789; // int | 
$feature_id = 789; // int | 

try {
    $api_instance->detachFeatureToProduct($product_id, $feature_id);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->detachFeatureToProduct: ', $e->getMessage(), PHP_EOL;
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

## **detachProductFromCategory**
> detachProductFromCategory($product_id, $category_id)



Detach product from category

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\ProductsApi();
$product_id = 789; // int | Id of the product
$category_id = 789; // int | ID of the category to attach

try {
    $api_instance->detachProductFromCategory($product_id, $category_id);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->detachProductFromCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| Id of the product |
 **category_id** | **int**| ID of the category to attach |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getCategoryProducts**
> \Kaemo\Client\Model\Products getCategoryProducts($category_id, $page, $per_page, $sort_by, $sort_direction, $ip, $features, $filters)



Get category products

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\ProductsApi();
$category_id = 789; // int | ID of the category to fetch
$page = 789; // int | 
$per_page = 789; // int | 
$sort_by = "sort_by_example"; // string | Sort by this attribute (id by default)
$sort_direction = "sort_direction_example"; // string | Sorting direction (asc by default)
$ip = "ip_example"; // string | filter by customer ip
$features = "features_example"; // string | ```     features[*][value]=string&features[*][operator]=strict&features[1][value]=string&features[1][operator]=strict     _______________      {     \"*\": {     \"value\": \"string\",     \"operator\": \"strict\"     },     \"1\": {     \"value\": \"string\",     \"operator\": \"contains\"     }     } ```     Operator can be strict, contains, gt or lt.     To search on all features, you can pass * as featureId.
$filters = "filters_example"; // string | ```     filters[name][value]=string&filters[name][operator]=contains&filters[date_add][value]=string&filters[date_add][operator]=lt     _______________      {     \"name\": {     \"value\": \"string\",     \"operator\": \"contains\"     },     \"date_add\": {     \"value\": \"string\",     \"operator\": \"lt\"     }     } ```     Operator can be strict, contains, gt or lt.

try {
    $result = $api_instance->getCategoryProducts($category_id, $page, $per_page, $sort_by, $sort_direction, $ip, $features, $filters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getCategoryProducts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **category_id** | **int**| ID of the category to fetch |
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]
 **sort_by** | **string**| Sort by this attribute (id by default) | [optional]
 **sort_direction** | **string**| Sorting direction (asc by default) | [optional]
 **ip** | **string**| filter by customer ip | [optional]
 **features** | **string**| &#x60;&#x60;&#x60;     features[*][value]&#x3D;string&amp;features[*][operator]&#x3D;strict&amp;features[1][value]&#x3D;string&amp;features[1][operator]&#x3D;strict     _______________      {     \&quot;*\&quot;: {     \&quot;value\&quot;: \&quot;string\&quot;,     \&quot;operator\&quot;: \&quot;strict\&quot;     },     \&quot;1\&quot;: {     \&quot;value\&quot;: \&quot;string\&quot;,     \&quot;operator\&quot;: \&quot;contains\&quot;     }     } &#x60;&#x60;&#x60;     Operator can be strict, contains, gt or lt.     To search on all features, you can pass * as featureId. | [optional]
 **filters** | **string**| &#x60;&#x60;&#x60;     filters[name][value]&#x3D;string&amp;filters[name][operator]&#x3D;contains&amp;filters[date_add][value]&#x3D;string&amp;filters[date_add][operator]&#x3D;lt     _______________      {     \&quot;name\&quot;: {     \&quot;value\&quot;: \&quot;string\&quot;,     \&quot;operator\&quot;: \&quot;contains\&quot;     },     \&quot;date_add\&quot;: {     \&quot;value\&quot;: \&quot;string\&quot;,     \&quot;operator\&quot;: \&quot;lt\&quot;     }     } &#x60;&#x60;&#x60;     Operator can be strict, contains, gt or lt. | [optional]

### Return type

[**\Kaemo\Client\Model\Products**](#Products)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getCustomerHasAccessToProduct**
> getCustomerHasAccessToProduct($customer_id, $product_id)



Get customer access to video

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\ProductsApi();
$customer_id = 789; // int | ID of the customer to fetch
$product_id = 789; // int | ID of the product to fetch

try {
    $api_instance->getCustomerHasAccessToProduct($customer_id, $product_id);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getCustomerHasAccessToProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **int**| ID of the customer to fetch |
 **product_id** | **int**| ID of the product to fetch |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getProduct**
> \Kaemo\Client\Model\Product getProduct($product_id)



Get product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\ProductsApi();
$product_id = 789; // int | ID of the product to fetch

try {
    $result = $api_instance->getProduct($product_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| ID of the product to fetch |

### Return type

[**\Kaemo\Client\Model\Product**](#Product)

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

$api_instance = new Kaemo\Client\Api\ProductsApi();
$product_id = 789; // int | ID of the product to fetch
$page = 789; // int | 
$per_page = 789; // int | 

try {
    $result = $api_instance->getProductActors($product_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getProductActors: ', $e->getMessage(), PHP_EOL;
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

## **getProductAttributes**
> \Kaemo\Client\Model\ProductAttributesResponse getProductAttributes($product_id, $page, $per_page)



Get product attributes. Important to add product to a cart. Allow to select if the customer will buy the product for download, streaming or both

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\ProductsApi();
$product_id = 789; // int | ID of the product to fetch
$page = 789; // int | 
$per_page = 789; // int | 

try {
    $result = $api_instance->getProductAttributes($product_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getProductAttributes: ', $e->getMessage(), PHP_EOL;
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

## **getProductAvailability**
> getProductAvailability($product_id)



Get availability of a product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\ProductsApi();
$product_id = 789; // int | ID of the product to fetch

try {
    $api_instance->getProductAvailability($product_id);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getProductAvailability: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| ID of the product to fetch |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getProductCategories**
> \Kaemo\Client\Model\Categories getProductCategories($product_id, $page, $per_page, $filters, $sort_by, $sort_direction)



Get product categories

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\ProductsApi();
$product_id = 789; // int | ID of the product to fetch
$page = 789; // int | 
$per_page = 789; // int | 
$filters = "filters_example"; // string | ```     filters[name][value]=string&filters[name][operator]=contains&filters[date_add][value]=string&filters[date_add][operator]=lt     _______________      {     \"name\": {     \"value\": \"string\",     \"operator\": \"contains\"     },     \"date_add\": {     \"value\": \"string\",     \"operator\": \"lt\"     }     } ```     Operator can be strict, contains, gt or lt.
$sort_by = "sort_by_example"; // string | Sort by this attribute (id by default)
$sort_direction = "sort_direction_example"; // string | Sorting direction (asc by default)

try {
    $result = $api_instance->getProductCategories($product_id, $page, $per_page, $filters, $sort_by, $sort_direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getProductCategories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| ID of the product to fetch |
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]
 **filters** | **string**| &#x60;&#x60;&#x60;     filters[name][value]&#x3D;string&amp;filters[name][operator]&#x3D;contains&amp;filters[date_add][value]&#x3D;string&amp;filters[date_add][operator]&#x3D;lt     _______________      {     \&quot;name\&quot;: {     \&quot;value\&quot;: \&quot;string\&quot;,     \&quot;operator\&quot;: \&quot;contains\&quot;     },     \&quot;date_add\&quot;: {     \&quot;value\&quot;: \&quot;string\&quot;,     \&quot;operator\&quot;: \&quot;lt\&quot;     }     } &#x60;&#x60;&#x60;     Operator can be strict, contains, gt or lt. | [optional]
 **sort_by** | **string**| Sort by this attribute (id by default) | [optional]
 **sort_direction** | **string**| Sorting direction (asc by default) | [optional]

### Return type

[**\Kaemo\Client\Model\Categories**](#Categories)

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

$api_instance = new Kaemo\Client\Api\ProductsApi();
$product_id = 789; // int | ID of the product to fetch

try {
    $result = $api_instance->getProductCoverImage($product_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getProductCoverImage: ', $e->getMessage(), PHP_EOL;
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

## **getProductDirectors**
> \Kaemo\Client\Model\Director1 getProductDirectors($product_id, $page, $per_page)



Get directors of a product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\ProductsApi();
$product_id = 789; // int | ID of the product to fetch
$page = 789; // int | 
$per_page = 789; // int | 

try {
    $result = $api_instance->getProductDirectors($product_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getProductDirectors: ', $e->getMessage(), PHP_EOL;
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

## **getProductExtracts**
> \Kaemo\Client\Model\ProductExtractsResponse getProductExtracts($product_id, $page, $per_page)



Get extracts of a product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\ProductsApi();
$product_id = 789; // int | ID of the product to fetch
$page = 789; // int | 
$per_page = 789; // int | 

try {
    $result = $api_instance->getProductExtracts($product_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getProductExtracts: ', $e->getMessage(), PHP_EOL;
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

## **getProductFeatures**
> \Kaemo\Client\Model\Features getProductFeatures($product_id, $page, $per_page)



Get videos attached to product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\ProductsApi();
$product_id = 789; // int | ID of the product to fetch
$page = 789; // int | 
$per_page = 789; // int | 

try {
    $result = $api_instance->getProductFeatures($product_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getProductFeatures: ', $e->getMessage(), PHP_EOL;
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

[**\Kaemo\Client\Model\Features**](#Features)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getProductGeolocations**
> \Kaemo\Client\Model\Geolocs getProductGeolocations($product_id, $page, $per_page)



Get videos attached to product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\ProductsApi();
$product_id = 789; // int | ID of the product to fetch
$page = 789; // int | 
$per_page = 789; // int | 

try {
    $result = $api_instance->getProductGeolocations($product_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getProductGeolocations: ', $e->getMessage(), PHP_EOL;
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

[**\Kaemo\Client\Model\Geolocs**](#Geolocs)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getProductGeolocationsByIp**
> getProductGeolocationsByIp($product_id, $ip_address, $page, $per_page)



check access to a product by geolocation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\ProductsApi();
$product_id = 789; // int | ID of the product to fetch
$ip_address = "ip_address_example"; // string | address ip
$page = 789; // int | 
$per_page = 789; // int | 

try {
    $api_instance->getProductGeolocationsByIp($product_id, $ip_address, $page, $per_page);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getProductGeolocationsByIp: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| ID of the product to fetch |
 **ip_address** | **string**| address ip |
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]

### Return type

void (empty response body)

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

$api_instance = new Kaemo\Client\Api\ProductsApi();
$product_id = 789; // int | ID of the product to fetch
$type = "type_example"; // string | type as screen_small or screen_large
$page = 789; // int | 
$per_page = 789; // int | 

try {
    $result = $api_instance->getProductImages($product_id, $type, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getProductImages: ', $e->getMessage(), PHP_EOL;
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

## **getProducts**
> \Kaemo\Client\Model\Products getProducts($page, $per_page, $features, $filters, $sort_by, $sort_direction, $ip)



Get products list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\ProductsApi();
$page = 789; // int | 
$per_page = 789; // int | 
$features = "features_example"; // string | ```     features[*][value]=string&features[*][operator]=strict&features[1][value]=string&features[1][operator]=strict     _______________      {     \"*\": {     \"value\": \"string\",     \"operator\": \"strict\"     },     \"1\": {     \"value\": \"string\",     \"operator\": \"contains\"     }     } ```     Operator can be strict, contains, gt or lt.     To search on all features, you can pass * as featureId.
$filters = "filters_example"; // string | ```     filters[name][value]=string&filters[name][operator]=contains&filters[date_add][value]=string&filters[date_add][operator]=lt     _______________      {     \"name\": {     \"value\": \"string\",     \"operator\": \"contains\"     },     \"date_add\": {     \"value\": \"string\",     \"operator\": \"lt\"     }     } ```     Operator can be strict, contains, gt or lt.
$sort_by = "sort_by_example"; // string | Sort by this attribute (id by default)
$sort_direction = "sort_direction_example"; // string | Sorting direction (asc by default)
$ip = "ip_example"; // string | filter by customer ip

try {
    $result = $api_instance->getProducts($page, $per_page, $features, $filters, $sort_by, $sort_direction, $ip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getProducts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]
 **features** | **string**| &#x60;&#x60;&#x60;     features[*][value]&#x3D;string&amp;features[*][operator]&#x3D;strict&amp;features[1][value]&#x3D;string&amp;features[1][operator]&#x3D;strict     _______________      {     \&quot;*\&quot;: {     \&quot;value\&quot;: \&quot;string\&quot;,     \&quot;operator\&quot;: \&quot;strict\&quot;     },     \&quot;1\&quot;: {     \&quot;value\&quot;: \&quot;string\&quot;,     \&quot;operator\&quot;: \&quot;contains\&quot;     }     } &#x60;&#x60;&#x60;     Operator can be strict, contains, gt or lt.     To search on all features, you can pass * as featureId. | [optional]
 **filters** | **string**| &#x60;&#x60;&#x60;     filters[name][value]&#x3D;string&amp;filters[name][operator]&#x3D;contains&amp;filters[date_add][value]&#x3D;string&amp;filters[date_add][operator]&#x3D;lt     _______________      {     \&quot;name\&quot;: {     \&quot;value\&quot;: \&quot;string\&quot;,     \&quot;operator\&quot;: \&quot;contains\&quot;     },     \&quot;date_add\&quot;: {     \&quot;value\&quot;: \&quot;string\&quot;,     \&quot;operator\&quot;: \&quot;lt\&quot;     }     } &#x60;&#x60;&#x60;     Operator can be strict, contains, gt or lt. | [optional]
 **sort_by** | **string**| Sort by this attribute (id by default) | [optional]
 **sort_direction** | **string**| Sorting direction (asc by default) | [optional]
 **ip** | **string**| filter by customer ip | [optional]

### Return type

[**\Kaemo\Client\Model\Products**](#Products)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getProductsFromProduct**
> \Kaemo\Client\Model\Products getProductsFromProduct($product_id, $page, $per_page, $features, $filters, $sort_by, $sort_direction, $ip)



Get products linked to another product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\ProductsApi();
$product_id = 789; // int | 
$page = 789; // int | 
$per_page = 789; // int | 
$features = "features_example"; // string | ```     features[*][value]=string&features[*][operator]=strict&features[1][value]=string&features[1][operator]=strict     _______________      {     \"*\": {     \"value\": \"string\",     \"operator\": \"strict\"     },     \"1\": {     \"value\": \"string\",     \"operator\": \"contains\"     }     } ```     Operator can be strict, contains, gt or lt.     To search on all features, you can pass * as featureId.
$filters = "filters_example"; // string | ```     filters[name][value]=string&filters[name][operator]=contains&filters[date_add][value]=string&filters[date_add][operator]=lt     _______________      {     \"name\": {     \"value\": \"string\",     \"operator\": \"contains\"     },     \"date_add\": {     \"value\": \"string\",     \"operator\": \"lt\"     }     } ```     Operator can be strict, contains, gt or lt.
$sort_by = "sort_by_example"; // string | Sort by this attribute (id by default)
$sort_direction = "sort_direction_example"; // string | Sorting direction (asc by default)
$ip = "ip_example"; // string | filter by customer ip

try {
    $result = $api_instance->getProductsFromProduct($product_id, $page, $per_page, $features, $filters, $sort_by, $sort_direction, $ip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getProductsFromProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**|  |
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]
 **features** | **string**| &#x60;&#x60;&#x60;     features[*][value]&#x3D;string&amp;features[*][operator]&#x3D;strict&amp;features[1][value]&#x3D;string&amp;features[1][operator]&#x3D;strict     _______________      {     \&quot;*\&quot;: {     \&quot;value\&quot;: \&quot;string\&quot;,     \&quot;operator\&quot;: \&quot;strict\&quot;     },     \&quot;1\&quot;: {     \&quot;value\&quot;: \&quot;string\&quot;,     \&quot;operator\&quot;: \&quot;contains\&quot;     }     } &#x60;&#x60;&#x60;     Operator can be strict, contains, gt or lt.     To search on all features, you can pass * as featureId. | [optional]
 **filters** | **string**| &#x60;&#x60;&#x60;     filters[name][value]&#x3D;string&amp;filters[name][operator]&#x3D;contains&amp;filters[date_add][value]&#x3D;string&amp;filters[date_add][operator]&#x3D;lt     _______________      {     \&quot;name\&quot;: {     \&quot;value\&quot;: \&quot;string\&quot;,     \&quot;operator\&quot;: \&quot;contains\&quot;     },     \&quot;date_add\&quot;: {     \&quot;value\&quot;: \&quot;string\&quot;,     \&quot;operator\&quot;: \&quot;lt\&quot;     }     } &#x60;&#x60;&#x60;     Operator can be strict, contains, gt or lt. | [optional]
 **sort_by** | **string**| Sort by this attribute (id by default) | [optional]
 **sort_direction** | **string**| Sorting direction (asc by default) | [optional]
 **ip** | **string**| filter by customer ip | [optional]

### Return type

[**\Kaemo\Client\Model\Products**](#Products)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getVideosFromProduct**
> \Kaemo\Client\Model\Videos getVideosFromProduct($product_id, $page, $filters, $per_page, $ip)



Get videos attached to product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\ProductsApi();
$product_id = 789; // int | ID of the product to fetch
$page = 789; // int | 
$filters = "filters_example"; // string | ```     filters[name][value]=string&filters[name][operator]=strict&filters[duration][value]=string&filters[duration][operator]=gt     _______________      {     \"name\": {     \"value\": \"string\",     \"operator\": \"strict\"     },     \"duration\": {     \"value\": \"string\",     \"operator\": \"gt\"     }     } ```     Operator can be strict, contains, gt or lt.
$per_page = 789; // int | 
$ip = "ip_example"; // string | filter by customer ip

try {
    $result = $api_instance->getVideosFromProduct($product_id, $page, $filters, $per_page, $ip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getVideosFromProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| ID of the product to fetch |
 **page** | **int**|  | [optional]
 **filters** | **string**| &#x60;&#x60;&#x60;     filters[name][value]&#x3D;string&amp;filters[name][operator]&#x3D;strict&amp;filters[duration][value]&#x3D;string&amp;filters[duration][operator]&#x3D;gt     _______________      {     \&quot;name\&quot;: {     \&quot;value\&quot;: \&quot;string\&quot;,     \&quot;operator\&quot;: \&quot;strict\&quot;     },     \&quot;duration\&quot;: {     \&quot;value\&quot;: \&quot;string\&quot;,     \&quot;operator\&quot;: \&quot;gt\&quot;     }     } &#x60;&#x60;&#x60;     Operator can be strict, contains, gt or lt. | [optional]
 **per_page** | **int**|  | [optional]
 **ip** | **string**| filter by customer ip | [optional]

### Return type

[**\Kaemo\Client\Model\Videos**](#Videos)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **searchProducts**
> \Kaemo\Client\Model\Products searchProducts($search_query, $page, $per_page, $sort_by, $sort_direction, $in_categories, $in_features, $feature_values)



Search product with a keyword

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\ProductsApi();
$search_query = "search_query_example"; // string | Keyword used to search the products
$page = 789; // int | 
$per_page = 789; // int | 
$sort_by = "sort_by_example"; // string | default: position
$sort_direction = "sort_direction_example"; // string | default: desc
$in_categories = "in_categories_example"; // string | Search in given categories. Values are separated with comma (,)
$in_features = "in_features_example"; // string | Search in given features. Values are separated with comma (,)
$feature_values = "feature_values_example"; // string | Search by feature values. Values are separated with comma (,)

try {
    $result = $api_instance->searchProducts($search_query, $page, $per_page, $sort_by, $sort_direction, $in_categories, $in_features, $feature_values);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->searchProducts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search_query** | **string**| Keyword used to search the products |
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]
 **sort_by** | **string**| default: position | [optional]
 **sort_direction** | **string**| default: desc | [optional]
 **in_categories** | **string**| Search in given categories. Values are separated with comma (,) | [optional]
 **in_features** | **string**| Search in given features. Values are separated with comma (,) | [optional]
 **feature_values** | **string**| Search by feature values. Values are separated with comma (,) | [optional]

### Return type

[**\Kaemo\Client\Model\Products**](#Products)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **setProductGeolocation**
> setProductGeolocation($product_id, $enabled, $behavior_detected_countries, $behavior_non_detected_countries, $countries, $page, $per_page)



Handle geolocation for products by countries

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\ProductsApi();
$product_id = 789; // int | ID of the product to fetch
$enabled = 56; // int | Enabled
$behavior_detected_countries = "behavior_detected_countries_example"; // string | Behavior for detected countries
$behavior_non_detected_countries = "behavior_non_detected_countries_example"; // string | Behavior for non-detected countries
$countries = "countries_example"; // string | IDs of the non-detected countries separated by comma
$page = 789; // int | 
$per_page = 789; // int | 

try {
    $api_instance->setProductGeolocation($product_id, $enabled, $behavior_detected_countries, $behavior_non_detected_countries, $countries, $page, $per_page);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->setProductGeolocation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| ID of the product to fetch |
 **enabled** | **int**| Enabled |
 **behavior_detected_countries** | **string**| Behavior for detected countries |
 **behavior_non_detected_countries** | **string**| Behavior for non-detected countries |
 **countries** | **string**| IDs of the non-detected countries separated by comma | [optional]
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **updateProduct**
> \Kaemo\Client\Model\Product updateProduct($product_id, $body)



Update product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\ProductsApi();
$product_id = 789; // int | ID of the product to fetch
$body = new \Kaemo\Client\Model\Product(); // \Kaemo\Client\Model\Product | 

try {
    $result = $api_instance->updateProduct($product_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->updateProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| ID of the product to fetch |
 **body** | [**\Kaemo\Client\Model\Product**](#\Kaemo\Client\Model\Product)|  |

### Return type

[**\Kaemo\Client\Model\Product**](#Product)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

