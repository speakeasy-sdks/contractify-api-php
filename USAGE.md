<!-- Start SDK Example Usage -->


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
    $request->company = 548814;

    $response = $sdk->contractTypes->listContractTypes($request);

    if ($response->contractTypeCollection !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
<!-- End SDK Example Usage -->