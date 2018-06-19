# Swagger\Client\FaxSendingApi

All URIs are relative to *https://api.fax.to/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**faxDocumentIdCostsGet**](FaxSendingApi.md#faxDocumentIdCostsGet) | **GET** /fax/{document_id}/costs | This API is for computing the cost of the fax to be sent
[**faxHistoryGet**](FaxSendingApi.md#faxHistoryGet) | **GET** /fax-history | This API gets the history of a fax
[**faxJobIdStatusGet**](FaxSendingApi.md#faxJobIdStatusGet) | **GET** /fax/{fax_job_id}/status | This API gets the status of a fax
[**faxPost**](FaxSendingApi.md#faxPost) | **POST** /fax | This API is for sending a new fax in any fax numbers anywhere in the world
[**fileCleanGet**](FaxSendingApi.md#fileCleanGet) | **GET** /file-clean | This API is used for cleaning a document
[**fileGeneratePreviewGet**](FaxSendingApi.md#fileGeneratePreviewGet) | **GET** /file-generate-preview | This API generates a preview of a document
[**filesDocumentIDDelete**](FaxSendingApi.md#filesDocumentIDDelete) | **DELETE** /files/{document_id} | This API deletes a document
[**filesGet**](FaxSendingApi.md#filesGet) | **GET** /files | This API gets all the files of a certain user


# **faxDocumentIdCostsGet**
> \Swagger\Client\Model\InlineResponse2001 faxDocumentIdCostsGet($document_id, $api_key, $fax_number)

This API is for computing the cost of the fax to be sent

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FaxSendingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$document_id = 56; // int | The id of the document to be sent
$api_key = "api_key_example"; // string | 
$fax_number = "fax_number_example"; // string | The fax number of the recipient

try {
    $result = $apiInstance->faxDocumentIdCostsGet($document_id, $api_key, $fax_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FaxSendingApi->faxDocumentIdCostsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **document_id** | **int**| The id of the document to be sent |
 **api_key** | **string**|  |
 **fax_number** | **string**| The fax number of the recipient | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **faxHistoryGet**
> \Swagger\Client\Model\InlineResponse2003 faxHistoryGet($api_key, $limit, $page)

This API gets the history of a fax

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FaxSendingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | 
$limit = "limit_example"; // string | The number of record to return
$page = "page_example"; // string | The page you want to get

try {
    $result = $apiInstance->faxHistoryGet($api_key, $limit, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FaxSendingApi->faxHistoryGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **limit** | **string**| The number of record to return | [optional]
 **page** | **string**| The page you want to get | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **faxJobIdStatusGet**
> \Swagger\Client\Model\InlineResponse2002 faxJobIdStatusGet($fax_job_id, $api_key)

This API gets the status of a fax

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FaxSendingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fax_job_id = 56; // int | The id of the fax job
$api_key = "api_key_example"; // string | 

try {
    $result = $apiInstance->faxJobIdStatusGet($fax_job_id, $api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FaxSendingApi->faxJobIdStatusGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fax_job_id** | **int**| The id of the fax job |
 **api_key** | **string**|  |

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **faxPost**
> \Swagger\Client\Model\InlineResponse200 faxPost($fax_number, $document_id, $api_key)

This API is for sending a new fax in any fax numbers anywhere in the world

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FaxSendingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fax_number = new \Swagger\Client\Model\null(); //  | The fax number of the recipient
$document_id = new \Swagger\Client\Model\null(); //  | The id of the document to be sent
$api_key = "api_key_example"; // string | 

try {
    $result = $apiInstance->faxPost($fax_number, $document_id, $api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FaxSendingApi->faxPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fax_number** | [****](../Model/.md)| The fax number of the recipient |
 **document_id** | [****](../Model/.md)| The id of the document to be sent |
 **api_key** | **string**|  |

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fileCleanGet**
> \Swagger\Client\Model\InlineResponse2009 fileCleanGet($document_id, $api_key)

This API is used for cleaning a document

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FaxSendingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$document_id = 56; // int | The id of the document
$api_key = "api_key_example"; // string | 

try {
    $result = $apiInstance->fileCleanGet($document_id, $api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FaxSendingApi->fileCleanGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **document_id** | **int**| The id of the document |
 **api_key** | **string**|  |

### Return type

[**\Swagger\Client\Model\InlineResponse2009**](../Model/InlineResponse2009.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fileGeneratePreviewGet**
> \Swagger\Client\Model\InlineResponse20010 fileGeneratePreviewGet($document_id, $api_key)

This API generates a preview of a document

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FaxSendingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$document_id = 56; // int | The id of the document
$api_key = "api_key_example"; // string | 

try {
    $result = $apiInstance->fileGeneratePreviewGet($document_id, $api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FaxSendingApi->fileGeneratePreviewGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **document_id** | **int**| The id of the document |
 **api_key** | **string**|  |

### Return type

[**\Swagger\Client\Model\InlineResponse20010**](../Model/InlineResponse20010.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **filesDocumentIDDelete**
> \Swagger\Client\Model\InlineResponse20011 filesDocumentIDDelete($document_id, $api_key)

This API deletes a document

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FaxSendingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$document_id = 56; // int | The id of the document
$api_key = "api_key_example"; // string | 

try {
    $result = $apiInstance->filesDocumentIDDelete($document_id, $api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FaxSendingApi->filesDocumentIDDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **document_id** | **int**| The id of the document |
 **api_key** | **string**|  |

### Return type

[**\Swagger\Client\Model\InlineResponse20011**](../Model/InlineResponse20011.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **filesGet**
> \Swagger\Client\Model\InlineResponse2008 filesGet($api_key, $limit, $page)

This API gets all the files of a certain user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FaxSendingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | 
$limit = "limit_example"; // string | The number of record to return
$page = "page_example"; // string | The page you want to get

try {
    $result = $apiInstance->filesGet($api_key, $limit, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FaxSendingApi->filesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **limit** | **string**| The number of record to return | [optional]
 **page** | **string**| The page you want to get | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

