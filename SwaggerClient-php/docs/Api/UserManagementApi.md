# Swagger\Client\UserManagementApi

All URIs are relative to *https://api.fax.to/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**subUserPost**](UserManagementApi.md#subUserPost) | **POST** /subuser | This API creates a subuser
[**userLoginPost**](UserManagementApi.md#userLoginPost) | **POST** /user/login | This API is used for logging in on an existing user account
[**userPost**](UserManagementApi.md#userPost) | **POST** /user | This API registers a new user account


# **subUserPost**
> \Swagger\Client\Model\InlineResponse2006 subUserPost($email, $password, $api_key)

This API creates a subuser

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UserManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$email = new \Swagger\Client\Model\null(); //  | The unique email of the user
$password = new \Swagger\Client\Model\null(); //  | The password of the subuser
$api_key = "api_key_example"; // string | 

try {
    $result = $apiInstance->subUserPost($email, $password, $api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserManagementApi->subUserPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | [****](../Model/.md)| The unique email of the user |
 **password** | [****](../Model/.md)| The password of the subuser |
 **api_key** | **string**|  |

### Return type

[**\Swagger\Client\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userLoginPost**
> \Swagger\Client\Model\InlineResponse2005 userLoginPost($email, $password)

This API is used for logging in on an existing user account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UserManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$email = new \Swagger\Client\Model\null(); //  | The unique email of the user
$password = new \Swagger\Client\Model\null(); //  | The password of the user

try {
    $result = $apiInstance->userLoginPost($email, $password);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserManagementApi->userLoginPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | [****](../Model/.md)| The unique email of the user |
 **password** | [****](../Model/.md)| The password of the user |

### Return type

[**\Swagger\Client\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userPost**
> \Swagger\Client\Model\InlineResponse2005 userPost($email, $password)

This API registers a new user account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UserManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$email = new \Swagger\Client\Model\null(); //  | The unique email of the user
$password = new \Swagger\Client\Model\null(); //  | The password of the user

try {
    $result = $apiInstance->userPost($email, $password);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserManagementApi->userPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | [****](../Model/.md)| The unique email of the user |
 **password** | [****](../Model/.md)| The password of the user |

### Return type

[**\Swagger\Client\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

