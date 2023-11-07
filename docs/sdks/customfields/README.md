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

use \Contractify\ContractifyAPI;
use \Contractify\ContractifyAPI\Models\Shared;
use \Contractify\ContractifyAPI\Models\Operations;

$security = new Shared\Security();
$security->oAuth2 = '';
$security->personalAccessToken = '';

$sdk = ContractifyAPI\ContractifyProduction::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\ListCustomFieldsRequest();
    $request->company = 318971;

    $response = $sdk->customFields->listCustomFields($request);

    if ($response->customFieldCollection !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                   | Type                                                                                                                        | Required                                                                                                                    | Description                                                                                                                 |
| --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                  | [\Contractify\ContractifyAPI\Models\Operations\ListCustomFieldsRequest](../../models/operations/ListCustomFieldsRequest.md) | :heavy_check_mark:                                                                                                          | The request object to use for the request.                                                                                  |


### Response

**[?\Contractify\ContractifyAPI\Models\Operations\ListCustomFieldsResponse](../../models/operations/ListCustomFieldsResponse.md)**

