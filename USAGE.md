<!-- Start SDK Example Usage -->
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
    $request->company = 548814;

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
<!-- End SDK Example Usage -->