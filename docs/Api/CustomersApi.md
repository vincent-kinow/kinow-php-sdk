# CustomersApi

All URIs are relative to *http://version.api.dev/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**attachCartToCustomer**](#attachCartToCustomer) | **POST** /customers/{customer_id}/carts | 
[**checkCustomerCredentials**](#checkCustomerCredentials) | **POST** /customers/check-credentials | 
[**createCustomer**](#createCustomer) | **POST** /customers | 
[**createFacebookId**](#createFacebookId) | **POST** /facebook/customers | 
[**deleteCustomer**](#deleteCustomer) | **DELETE** /customers/{customer_id} | 
[**generateAuthenticationToken**](#generateAuthenticationToken) | **GET** /customers/{customer_id}/authentication-token | 
[**getCustomer**](#getCustomer) | **GET** /customers/{customer_id} | 
[**getCustomerAccessesSubscriptions**](#getCustomerAccessesSubscriptions) | **GET** /customers/{customer_id}/accesses/subscriptions | 
[**getCustomerAccessesVideos**](#getCustomerAccessesVideos) | **GET** /customers/{customer_id}/accesses/videos | 
[**getCustomerAddress**](#getCustomerAddress) | **GET** /customers/{customer_id}/address | 
[**getCustomerCurrentViews**](#getCustomerCurrentViews) | **GET** /customers/{customer_id}/current-views | 
[**getCustomerHasAccessToProduct**](#getCustomerHasAccessToProduct) | **GET** /customers/{customer_id}/products/{product_id}/has-access | 
[**getCustomerHasAccessToVideo**](#getCustomerHasAccessToVideo) | **GET** /customers/{customer_id}/videos/{video_id}/has-access | 
[**getCustomerOrders**](#getCustomerOrders) | **GET** /customers/{customer_id}/orders | 
[**getCustomers**](#getCustomers) | **GET** /customers | 
[**getDownloadUrl**](#getDownloadUrl) | **GET** /customers/{customer_id}/videos/{video_id}/download | 
[**getMarlinToken**](#getMarlinToken) | **GET** /customers/{customer_id}/videos/{video_id}/marlin | 
[**getPaymentCustomerId**](#getPaymentCustomerId) | **GET** /customers/{customer_id}/payments/{payment_name}/customer | 
[**getPlayerUrl**](#getPlayerUrl) | **GET** /customers/{customer_id}/videos/{video_id}/player | 
[**updateCustomer**](#updateCustomer) | **PUT** /customers/{customer_id} | 


## **attachCartToCustomer**
> \Kaemo\Client\Model\Cart attachCartToCustomer($customer_id, $cart_id)



Attach cart to customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\CustomersApi();
$customer_id = 789; // int | ID of the customer to fetch
$cart_id = 789; // int | ID of the cart to attach

try {
    $result = $api_instance->attachCartToCustomer($customer_id, $cart_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->attachCartToCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **int**| ID of the customer to fetch |
 **cart_id** | **int**| ID of the cart to attach |

### Return type

[**\Kaemo\Client\Model\Cart**](#Cart)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **checkCustomerCredentials**
> \Kaemo\Client\Model\Customer checkCustomerCredentials($email, $password)



Check customer credentials

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\CustomersApi();
$email = "email_example"; // string | Email of the customer to check
$password = "password_example"; // string | Password of the customer to check

try {
    $result = $api_instance->checkCustomerCredentials($email, $password);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->checkCustomerCredentials: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | **string**| Email of the customer to check |
 **password** | **string**| Password of the customer to check |

### Return type

[**\Kaemo\Client\Model\Customer**](#Customer)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **createCustomer**
> \Kaemo\Client\Model\Customer createCustomer($body)



Create new customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\CustomersApi();
$body = new \Kaemo\Client\Model\CustomerCreateRequest(); // \Kaemo\Client\Model\CustomerCreateRequest | Created user object

try {
    $result = $api_instance->createCustomer($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->createCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Kaemo\Client\Model\CustomerCreateRequest**](#\Kaemo\Client\Model\CustomerCreateRequest)| Created user object |

### Return type

[**\Kaemo\Client\Model\Customer**](#Customer)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **createFacebookId**
> createFacebookId($customer_id, $facebook_id)



Create new Facebook ID for user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\CustomersApi();
$customer_id = 789; // int | Customer ID
$facebook_id = "facebook_id_example"; // string | Facebook ID

try {
    $api_instance->createFacebookId($customer_id, $facebook_id);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->createFacebookId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **int**| Customer ID |
 **facebook_id** | **string**| Facebook ID |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **deleteCustomer**
> deleteCustomer($customer_id)



Delete customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\CustomersApi();
$customer_id = 789; // int | ID of the customer to delete

try {
    $api_instance->deleteCustomer($customer_id);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->deleteCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **int**| ID of the customer to delete |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **generateAuthenticationToken**
> generateAuthenticationToken($customer_id)



Create authentication token for customer.      You can use it to auto login customer using an iframe or a redirection to the user      Example url: `https://YOUR_PLATFORM.kinow.tv/?authentication_token=AUTHENTICATION_TOKEN`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\CustomersApi();
$customer_id = 789; // int | ID of the customer to authenticate

try {
    $api_instance->generateAuthenticationToken($customer_id);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->generateAuthenticationToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **int**| ID of the customer to authenticate |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getCustomer**
> \Kaemo\Client\Model\Customer getCustomer($customer_id)



Get customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\CustomersApi();
$customer_id = 789; // int | ID of the customer to fetch

try {
    $result = $api_instance->getCustomer($customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->getCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **int**| ID of the customer to fetch |

### Return type

[**\Kaemo\Client\Model\Customer**](#Customer)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getCustomerAccessesSubscriptions**
> \Kaemo\Client\Model\SubscriptionAccesses getCustomerAccessesSubscriptions($customer_id, $page, $per_page, $filters)



Get customer accesses for subscription

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\CustomersApi();
$customer_id = 789; // int | ID of the customer to fetch
$page = 789; // int | 
$per_page = 789; // int | 
$filters = "filters_example"; // string | ``` filters[type][value]=string&filters[type][operator]=strict&filters[cancel][value]=string&filters[cancel][operator]=contains _______________  { \"type\": { \"value\": \"string\", \"operator\": \"strict\" }, \"cancel\": { \"value\": \"string\", \"operator\": \"contains\" } } ```Operator can be strict, contains, gt or lt.

try {
    $result = $api_instance->getCustomerAccessesSubscriptions($customer_id, $page, $per_page, $filters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->getCustomerAccessesSubscriptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **int**| ID of the customer to fetch |
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]
 **filters** | **string**| &#x60;&#x60;&#x60; filters[type][value]&#x3D;string&amp;filters[type][operator]&#x3D;strict&amp;filters[cancel][value]&#x3D;string&amp;filters[cancel][operator]&#x3D;contains _______________  { \&quot;type\&quot;: { \&quot;value\&quot;: \&quot;string\&quot;, \&quot;operator\&quot;: \&quot;strict\&quot; }, \&quot;cancel\&quot;: { \&quot;value\&quot;: \&quot;string\&quot;, \&quot;operator\&quot;: \&quot;contains\&quot; } } &#x60;&#x60;&#x60;Operator can be strict, contains, gt or lt. | [optional]

### Return type

[**\Kaemo\Client\Model\SubscriptionAccesses**](#SubscriptionAccesses)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getCustomerAccessesVideos**
> \Kaemo\Client\Model\SubscriptionAccesses getCustomerAccessesVideos($customer_id, $page, $per_page)



Get customer access for videos

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\CustomersApi();
$customer_id = 789; // int | ID of the customer to fetch
$page = 789; // int | 
$per_page = 789; // int | 

try {
    $result = $api_instance->getCustomerAccessesVideos($customer_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->getCustomerAccessesVideos: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **int**| ID of the customer to fetch |
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]

### Return type

[**\Kaemo\Client\Model\SubscriptionAccesses**](#SubscriptionAccesses)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getCustomerAddress**
> \Kaemo\Client\Model\Address getCustomerAddress($customer_id)



Get customer address

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\CustomersApi();
$customer_id = 789; // int | ID of the customer to fetch

try {
    $result = $api_instance->getCustomerAddress($customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->getCustomerAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **int**| ID of the customer to fetch |

### Return type

[**\Kaemo\Client\Model\Address**](#Address)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getCustomerCurrentViews**
> \Kaemo\Client\Model\CustomerCurrentViews getCustomerCurrentViews($customer_id)



Get customer current number of views

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\CustomersApi();
$customer_id = 789; // int | ID of the customer to fetch

try {
    $result = $api_instance->getCustomerCurrentViews($customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->getCustomerCurrentViews: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **int**| ID of the customer to fetch |

### Return type

[**\Kaemo\Client\Model\CustomerCurrentViews**](#CustomerCurrentViews)

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

$api_instance = new Kaemo\Client\Api\CustomersApi();
$customer_id = 789; // int | ID of the customer to fetch
$product_id = 789; // int | ID of the product to fetch

try {
    $api_instance->getCustomerHasAccessToProduct($customer_id, $product_id);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->getCustomerHasAccessToProduct: ', $e->getMessage(), PHP_EOL;
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

## **getCustomerHasAccessToVideo**
> getCustomerHasAccessToVideo($customer_id, $video_id)



Get customer access to video

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\CustomersApi();
$customer_id = 789; // int | ID of the customer to fetch
$video_id = 789; // int | ID of the video to fetch

try {
    $api_instance->getCustomerHasAccessToVideo($customer_id, $video_id);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->getCustomerHasAccessToVideo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **int**| ID of the customer to fetch |
 **video_id** | **int**| ID of the video to fetch |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getCustomerOrders**
> \Kaemo\Client\Model\Orders getCustomerOrders($customer_id, $page, $per_page)



Get customer orders

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\CustomersApi();
$customer_id = 789; // int | ID of the customer to fetch
$page = 789; // int | 
$per_page = 789; // int | 

try {
    $result = $api_instance->getCustomerOrders($customer_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->getCustomerOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **int**| ID of the customer to fetch |
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]

### Return type

[**\Kaemo\Client\Model\Orders**](#Orders)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getCustomers**
> \Kaemo\Client\Model\Customers getCustomers($page, $per_page, $filters, $sort_by, $sort_direction)



Get customer list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\CustomersApi();
$page = 789; // int | 
$per_page = 789; // int | 
$filters = "filters_example"; // string | ```     filters[email][value]=string&filters[email][operator]=strict&filters[firstname][value]=string&filters[firstname][operator]=contains     _______________      {     \"email\": {     \"value\": \"string\",     \"operator\": \"strict\"     },     \"firstname\": {     \"value\": \"string\",     \"operator\": \"contains\"     }     } ```Operator can be strict, contains, gt or lt.
$sort_by = "sort_by_example"; // string | Sort by this attribute (id by default)
$sort_direction = "sort_direction_example"; // string | Sorting direction (asc by default)

try {
    $result = $api_instance->getCustomers($page, $per_page, $filters, $sort_by, $sort_direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->getCustomers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]
 **filters** | **string**| &#x60;&#x60;&#x60;     filters[email][value]&#x3D;string&amp;filters[email][operator]&#x3D;strict&amp;filters[firstname][value]&#x3D;string&amp;filters[firstname][operator]&#x3D;contains     _______________      {     \&quot;email\&quot;: {     \&quot;value\&quot;: \&quot;string\&quot;,     \&quot;operator\&quot;: \&quot;strict\&quot;     },     \&quot;firstname\&quot;: {     \&quot;value\&quot;: \&quot;string\&quot;,     \&quot;operator\&quot;: \&quot;contains\&quot;     }     } &#x60;&#x60;&#x60;Operator can be strict, contains, gt or lt. | [optional]
 **sort_by** | **string**| Sort by this attribute (id by default) | [optional]
 **sort_direction** | **string**| Sorting direction (asc by default) | [optional]

### Return type

[**\Kaemo\Client\Model\Customers**](#Customers)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getDownloadUrl**
> \Kaemo\Client\Model\DownloadUrl getDownloadUrl($customer_id, $video_id)



Get video download url

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\CustomersApi();
$customer_id = 789; // int | Id of the customer to fetch
$video_id = 789; // int | Id of the video to fetch

try {
    $result = $api_instance->getDownloadUrl($customer_id, $video_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->getDownloadUrl: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **int**| Id of the customer to fetch |
 **video_id** | **int**| Id of the video to fetch |

### Return type

[**\Kaemo\Client\Model\DownloadUrl**](#DownloadUrl)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getMarlinToken**
> \Kaemo\Client\Model\MarlinToken getMarlinToken($customer_id, $video_id)



Get Marlin access token for a video

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\CustomersApi();
$customer_id = 789; // int | Id of the customer to fetch
$video_id = 789; // int | Id of the video to fetch

try {
    $result = $api_instance->getMarlinToken($customer_id, $video_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->getMarlinToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **int**| Id of the customer to fetch |
 **video_id** | **int**| Id of the video to fetch |

### Return type

[**\Kaemo\Client\Model\MarlinToken**](#MarlinToken)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getPaymentCustomerId**
> string getPaymentCustomerId($customer_id, $payment_name)



Get payment modules list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\CustomersApi();
$customer_id = 789; // int | 
$payment_name = "payment_name_example"; // string | 

try {
    $result = $api_instance->getPaymentCustomerId($customer_id, $payment_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->getPaymentCustomerId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **int**|  |
 **payment_name** | **string**|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getPlayerUrl**
> \Kaemo\Client\Model\VideoUrl getPlayerUrl($customer_id, $video_id)



Get video player url

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\CustomersApi();
$customer_id = 789; // int | Id of the customer to fetch
$video_id = 789; // int | Id of the video to fetch

try {
    $result = $api_instance->getPlayerUrl($customer_id, $video_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->getPlayerUrl: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **int**| Id of the customer to fetch |
 **video_id** | **int**| Id of the video to fetch |

### Return type

[**\Kaemo\Client\Model\VideoUrl**](#VideoUrl)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **updateCustomer**
> \Kaemo\Client\Model\Customer updateCustomer($customer_id, $body)



Update customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\CustomersApi();
$customer_id = 789; // int | ID of the customer to fetch
$body = new \Kaemo\Client\Model\Customer(); // \Kaemo\Client\Model\Customer | Body of the customer

try {
    $result = $api_instance->updateCustomer($customer_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->updateCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **int**| ID of the customer to fetch |
 **body** | [**\Kaemo\Client\Model\Customer**](#\Kaemo\Client\Model\Customer)| Body of the customer |

### Return type

[**\Kaemo\Client\Model\Customer**](#Customer)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

