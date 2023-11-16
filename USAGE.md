<!-- Start SDK Example Usage -->
```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use Contractify\ContractifyAPI;
use Contractify\ContractifyAPI\Models\Shared;
use Contractify\ContractifyAPI\Models\Operations;

$security = new Shared\Security();
$security->oAuth2 = '';
$security->personalAccessToken = '';

$sdk = ContractifyAPI\ContractifyProduction::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\ListContractTypesRequest();
    $request->company = 839467;

    $response = $sdk->contractTypes->listContractTypes($request);

    if ($response->contractTypeCollection !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}

```
<!-- End SDK Example Usage -->