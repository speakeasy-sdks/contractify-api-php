# CustomFields

### Available Operations

* [listCustomFields](#listcustomfields) - List custom fields

## listCustomFields

List all the custom fields within a company

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Contractify\ContractifyAPI\ContractifyProduction;
use \Contractify\ContractifyAPI\Models\Operations\ListCustomFieldsRequest;
use \Contractify\ContractifyAPI\Models\Operations\ListCustomFieldsSecurity;

$sdk = ContractifyProduction::builder()
    ->build();

try {
    $request = new ListCustomFieldsRequest();
    $request->company = 812169;

    $requestSecurity = new ListCustomFieldsSecurity();
    $requestSecurity->oAuth2 = '';
    $requestSecurity->personalAccessToken = '';

    $response = $sdk->customFields->listCustomFields($request, $requestSecurity);

    if ($response->customFieldCollection !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                     | Type                                                                                                                          | Required                                                                                                                      | Description                                                                                                                   |
| ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                    | [\Contractify\ContractifyAPI\Models\Operations\ListCustomFieldsRequest](../../models/operations/ListCustomFieldsRequest.md)   | :heavy_check_mark:                                                                                                            | The request object to use for the request.                                                                                    |
| `security`                                                                                                                    | [\Contractify\ContractifyAPI\Models\Operations\ListCustomFieldsSecurity](../../models/operations/ListCustomFieldsSecurity.md) | :heavy_check_mark:                                                                                                            | The security requirements to use for the request.                                                                             |


### Response

**[?\Contractify\ContractifyAPI\Models\Operations\ListCustomFieldsResponse](../../models/operations/ListCustomFieldsResponse.md)**

