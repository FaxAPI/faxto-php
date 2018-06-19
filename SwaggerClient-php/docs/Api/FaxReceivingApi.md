# Swagger\Client\FaxReceivingApi

All URIs are relative to *https://api.fax.to/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**areaCodesCountryCodeStateIdGet**](FaxReceivingApi.md#areaCodesCountryCodeStateIdGet) | **GET** /areacodes/{COUNTRY_CODE}/{STATE_ID} | This API gets a list of countries with its area code
[**countriesCountryCodeDidGroupsGet**](FaxReceivingApi.md#countriesCountryCodeDidGroupsGet) | **GET** /countries/{countryCode}/didgroups | This API gets a list of DID groups
[**countriesGet**](FaxReceivingApi.md#countriesGet) | **GET** /countries | This API gets a list of countries available in the Fax.to coverage
[**incomingFaxesGet**](FaxReceivingApi.md#incomingFaxesGet) | **GET** /incoming-faxes | This API gets a list of incoming faxes
[**incomingFaxesRecipientGet**](FaxReceivingApi.md#incomingFaxesRecipientGet) | **GET** /incoming-faxes/{recipient} | This API gets a list of incoming faxes for a specific recipient
[**numbersGet**](FaxReceivingApi.md#numbersGet) | **GET** /numbers | This API gets a list of numbers to get the current configuration of one or multiple number
[**provisionNumbersGet**](FaxReceivingApi.md#provisionNumbersGet) | **GET** /countries/didgroups/{did_group_id}/provision | This API gets a list of provisioned numbers
[**statesCountryCodeGet**](FaxReceivingApi.md#statesCountryCodeGet) | **GET** /states/{COUNTRY_CODE} | This API gets a list of states of a given country available in the Fax.to coverage


# **areaCodesCountryCodeStateIdGet**
> \Swagger\Client\Model\InlineResponse20014 areaCodesCountryCodeStateIdGet($country_code, $state_id, $api_key)

This API gets a list of countries with its area code

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FaxReceivingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$country_code = 56; // int | Indicates the country code in its ISO 3166-1 alpha-3 format
$state_id = 56; // int | The numerical identifier for the state
$api_key = "api_key_example"; // string | 

try {
    $result = $apiInstance->areaCodesCountryCodeStateIdGet($country_code, $state_id, $api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FaxReceivingApi->areaCodesCountryCodeStateIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **country_code** | **int**| Indicates the country code in its ISO 3166-1 alpha-3 format |
 **state_id** | **int**| The numerical identifier for the state |
 **api_key** | **string**|  |

### Return type

[**\Swagger\Client\Model\InlineResponse20014**](../Model/InlineResponse20014.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **countriesCountryCodeDidGroupsGet**
> \Swagger\Client\Model\InlineResponse20015 countriesCountryCodeDidGroupsGet($country_code, $area_code, $api_key, $did_group_ids, $state_id, $city_name_pattern)

This API gets a list of DID groups

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FaxReceivingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$country_code = 56; // int | Indicates the country code of the DID group in its ISO 3166-1 alpha-3 format
$area_code = 56; // int | The area code of the DID group
$api_key = "api_key_example"; // string | 
$did_group_ids = 56; // int | Used to display more information about specific DID groups
$state_id = 56; // int | The numerical identifier for the didGroup's state
$city_name_pattern = 56; // int | A string pattern for the beginning of city name

try {
    $result = $apiInstance->countriesCountryCodeDidGroupsGet($country_code, $area_code, $api_key, $did_group_ids, $state_id, $city_name_pattern);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FaxReceivingApi->countriesCountryCodeDidGroupsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **country_code** | **int**| Indicates the country code of the DID group in its ISO 3166-1 alpha-3 format |
 **area_code** | **int**| The area code of the DID group |
 **api_key** | **string**|  |
 **did_group_ids** | **int**| Used to display more information about specific DID groups | [optional]
 **state_id** | **int**| The numerical identifier for the didGroup&#39;s state | [optional]
 **city_name_pattern** | **int**| A string pattern for the beginning of city name | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20015**](../Model/InlineResponse20015.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **countriesGet**
> \Swagger\Client\Model\InlineResponse20012 countriesGet($api_key)

This API gets a list of countries available in the Fax.to coverage

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FaxReceivingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | 

try {
    $result = $apiInstance->countriesGet($api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FaxReceivingApi->countriesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |

### Return type

[**\Swagger\Client\Model\InlineResponse20012**](../Model/InlineResponse20012.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **incomingFaxesGet**
> \Swagger\Client\Model\InlineResponse2004 incomingFaxesGet($api_key, $limit, $page)

This API gets a list of incoming faxes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FaxReceivingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | 
$limit = "limit_example"; // string | The number of record to return
$page = "page_example"; // string | The page you want to get

try {
    $result = $apiInstance->incomingFaxesGet($api_key, $limit, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FaxReceivingApi->incomingFaxesGet: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **incomingFaxesRecipientGet**
> \Swagger\Client\Model\InlineResponse2004 incomingFaxesRecipientGet($recipient, $api_key, $limit, $page)

This API gets a list of incoming faxes for a specific recipient

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FaxReceivingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recipient = 56; // int | The recipient's fax number
$api_key = "api_key_example"; // string | 
$limit = "limit_example"; // string | The number of record to return
$page = "page_example"; // string | The page you want to get

try {
    $result = $apiInstance->incomingFaxesRecipientGet($recipient, $api_key, $limit, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FaxReceivingApi->incomingFaxesRecipientGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **recipient** | **int**| The recipient&#39;s fax number |
 **api_key** | **string**|  |
 **limit** | **string**| The number of record to return | [optional]
 **page** | **string**| The page you want to get | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **numbersGet**
> \Swagger\Client\Model\InlineResponse20017 numbersGet($api_key, $limit, $page)

This API gets a list of numbers to get the current configuration of one or multiple number

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FaxReceivingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | 
$limit = "limit_example"; // string | The number of record to return
$page = "page_example"; // string | The page you want to get

try {
    $result = $apiInstance->numbersGet($api_key, $limit, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FaxReceivingApi->numbersGet: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\InlineResponse20017**](../Model/InlineResponse20017.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **provisionNumbersGet**
> \Swagger\Client\Model\InlineResponse20016 provisionNumbersGet($did_group_id, $api_key)

This API gets a list of provisioned numbers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FaxReceivingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$did_group_id = 56; // int | The id of the did group
$api_key = "api_key_example"; // string | 

try {
    $result = $apiInstance->provisionNumbersGet($did_group_id, $api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FaxReceivingApi->provisionNumbersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **did_group_id** | **int**| The id of the did group |
 **api_key** | **string**|  |

### Return type

[**\Swagger\Client\Model\InlineResponse20016**](../Model/InlineResponse20016.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **statesCountryCodeGet**
> \Swagger\Client\Model\InlineResponse20013 statesCountryCodeGet($country_code, $api_key)

This API gets a list of states of a given country available in the Fax.to coverage

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FaxReceivingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$country_code = 56; // int | Indicates the country code in its ISO 3166-1 alpha-3 format
$api_key = "api_key_example"; // string | 

try {
    $result = $apiInstance->statesCountryCodeGet($country_code, $api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FaxReceivingApi->statesCountryCodeGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **country_code** | **int**| Indicates the country code in its ISO 3166-1 alpha-3 format |
 **api_key** | **string**|  |

### Return type

[**\Swagger\Client\Model\InlineResponse20013**](../Model/InlineResponse20013.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

