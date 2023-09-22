# Subfolders

### Available Operations

* [listSubfolders](#listsubfolders) - List subfolders

## listSubfolders

List all the subfolders within a company

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Contractify\ContractifyAPI\ContractifyProduction;
use \Contractify\ContractifyAPI\Models\Shared\Security;
use \Contractify\ContractifyAPI\Models\Operations\ListSubfoldersRequest;

$sdk = ContractifyProduction::builder()
    ->build();

try {
    $request = new ListSubfoldersRequest();
    $request->company = 456150;

    $response = $sdk->subfolders->listSubfolders($request);

    if ($response->dossierCollection !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\Contractify\ContractifyAPI\Models\Operations\ListSubfoldersRequest](../../models/operations/ListSubfoldersRequest.md) | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |


### Response

**[?\Contractify\ContractifyAPI\Models\Operations\ListSubfoldersResponse](../../models/operations/ListSubfoldersResponse.md)**

