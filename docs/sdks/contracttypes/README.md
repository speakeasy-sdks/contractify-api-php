# ContractTypes


### Available Operations

* [listContractTypes](#listcontracttypes) - List contract types

## listContractTypes

List all the contract types within a company

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Contractify\ContractifyAPI;
use \Contractify\ContractifyAPI\Models\Shared;
use \Contractify\ContractifyAPI\Models\Operations;

$security = new Shared\Security();
$security->oAuth2 = 'Bearer <YOUR_ACCESS_TOKEN_HERE>';

$sdk = ContractifyAPI\ContractifyProduction::builder()->setSecurity($security)->build();

try {
        $request = new Operations\ListContractTypesRequest();
    $request->company = 839467;;

    $response = $sdk->contractTypes->listContractTypes($request);

    if ($response->contractTypeCollection !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                     | Type                                                                                                                          | Required                                                                                                                      | Description                                                                                                                   |
| ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                    | [\Contractify\ContractifyAPI\Models\Operations\ListContractTypesRequest](../../Models/Operations/ListContractTypesRequest.md) | :heavy_check_mark:                                                                                                            | The request object to use for the request.                                                                                    |


### Response

**[?\Contractify\ContractifyAPI\Models\Operations\ListContractTypesResponse](../../Models/Operations/ListContractTypesResponse.md)**

