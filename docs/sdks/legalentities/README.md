# LegalEntities


### Available Operations

* [listLegalEntities](#listlegalentities) - List legal entities

## listLegalEntities

List all the legal entities within a company

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
    $request = new Operations\ListLegalEntitiesRequest();
    $request->company = 730248;

    $response = $sdk->legalEntities->listLegalEntities($request);

    if ($response->legalEntityCollection !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                     | Type                                                                                                                          | Required                                                                                                                      | Description                                                                                                                   |
| ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                    | [\Contractify\ContractifyAPI\Models\Operations\ListLegalEntitiesRequest](../../models/operations/ListLegalEntitiesRequest.md) | :heavy_check_mark:                                                                                                            | The request object to use for the request.                                                                                    |


### Response

**[?\Contractify\ContractifyAPI\Models\Operations\ListLegalEntitiesResponse](../../models/operations/ListLegalEntitiesResponse.md)**

