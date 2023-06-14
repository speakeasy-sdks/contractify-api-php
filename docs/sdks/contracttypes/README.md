# contractTypes

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
use \Contractify\ContractifyAPI\Models\Operations\ListContractTypesRequest;
use \Contractify\ContractifyAPI\Models\Operations\ListContractTypesSecurity;

$sdk = ContractifyProduction::builder()
    ->build();

try {
    $request = new ListContractTypesRequest();
    $request->company = 592845;

    $requestSecurity = new ListContractTypesSecurity();
    $requestSecurity->oAuth2 = '';
    $requestSecurity->personalAccessToken = '';

    $response = $sdk->contractTypes->listContractTypes($request, $requestSecurity);

    if ($response->contractTypeCollection !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                       | Type                                                                                                                            | Required                                                                                                                        | Description                                                                                                                     |
| ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                      | [\Contractify\ContractifyAPI\Models\Operations\ListContractTypesRequest](../../models/operations/ListContractTypesRequest.md)   | :heavy_check_mark:                                                                                                              | The request object to use for the request.                                                                                      |
| `security`                                                                                                                      | [\Contractify\ContractifyAPI\Models\Operations\ListContractTypesSecurity](../../models/operations/ListContractTypesSecurity.md) | :heavy_check_mark:                                                                                                              | The security requirements to use for the request.                                                                               |


### Response

**[?\Contractify\ContractifyAPI\Models\Operations\ListContractTypesResponse](../../models/operations/ListContractTypesResponse.md)**

