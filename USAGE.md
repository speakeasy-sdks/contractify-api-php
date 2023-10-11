<!-- Start SDK Example Usage -->


```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use Contractify\ContractifyAPI\ContractifyProduction;
use Contractify\ContractifyAPI\Models\Shared\Security;
use Contractify\ContractifyAPI\Models\Operations\ListContractTypesRequest;

$security = new Security();
$security->oAuth2 = '';
$security->personalAccessToken = '';

$sdk = ContractifyProduction::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new ListContractTypesRequest();
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