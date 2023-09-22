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

use \Contractify\ContractifyAPI\ContractifyProduction;
use \Contractify\ContractifyAPI\Models\Shared\Security;
use \Contractify\ContractifyAPI\Models\Operations\ListContractTypesRequest;

$sdk = ContractifyProduction::builder()
    ->build();

try {
    $request = new ListContractTypesRequest();
    $request->company = 715190;

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
| `$request`                                                                                                                    | [\Contractify\ContractifyAPI\Models\Operations\ListContractTypesRequest](../../models/operations/ListContractTypesRequest.md) | :heavy_check_mark:                                                                                                            | The request object to use for the request.                                                                                    |


### Response

**[?\Contractify\ContractifyAPI\Models\Operations\ListContractTypesResponse](../../models/operations/ListContractTypesResponse.md)**

