# Contracts
(*contracts*)

### Available Operations

* [createContract](#createcontract) - Create a contract
* [deleteContract](#deletecontract) - Delete a contract
* [getContract](#getcontract) - Get a contract
* [listContracts](#listcontracts) - List contracts
* [updateContract](#updatecontract) - Update a contract

## createContract

Create a contract

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Contractify\ContractifyAPI\ContractifyProduction;
use \Contractify\ContractifyAPI\Models\Shared\Security;
use \Contractify\ContractifyAPI\Models\Operations\CreateContractRequest;
use \Contractify\ContractifyAPI\Models\Shared\ContractWrite;
use \Contractify\ContractifyAPI\Models\Shared\CustomFieldValueWrite;
use \Contractify\ContractifyAPI\Models\Shared\ContractPhase;
use \Contractify\ContractifyAPI\Models\Shared\ContractRenewal;
use \Contractify\ContractifyAPI\Models\Shared\ContractAutomaticRenewal;
use \Contractify\ContractifyAPI\Models\Shared\ContractTermination;

$security = new Security();
$security->oAuth2 = '';
$security->personalAccessToken = '';

$sdk = ContractifyProduction::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new CreateContractRequest();
    $request->contractWrite = new ContractWrite();
    $request->contractWrite->contractTypes = [
        940947,
    ];
    $request->contractWrite->customFieldValues = [
        new CustomFieldValueWrite(),
    ];
    $request->contractWrite->departments = [
        426077,
    ];
    $request->contractWrite->documents = [
        1,
    ];
    $request->contractWrite->dossierId = 1;
    $request->contractWrite->duration = 'P1Y';
    $request->contractWrite->endDate = DateTime::createFromFormat('Y-m-d', '2021-12-31');
    $request->contractWrite->isOpenEnded = false;
    $request->contractWrite->legalEntities = [
        946586,
    ];
    $request->contractWrite->name = 'Partnership agreement';
    $request->contractWrite->offices = [
        559447,
    ];
    $request->contractWrite->ownerId = 1;
    $request->contractWrite->phase = ContractPhase::Ongoing;
    $request->contractWrite->relations = [
        657681,
    ];
    $request->contractWrite->renewal = new ContractRenewal();
    $request->contractWrite->renewal->automaticRenewal = new ContractAutomaticRenewal();
    $request->contractWrite->renewal->automaticRenewal->numberOfRenewals = 1;
    $request->contractWrite->renewal->automaticRenewal->renewalPeriod = 'P3Y';
    $request->contractWrite->renewal->isAutomaticallyRenewed = false;
    $request->contractWrite->startDate = DateTime::createFromFormat('Y-m-d', '2021-01-01');
    $request->contractWrite->termination = new ContractTermination();
    $request->contractWrite->termination->isTerminableAtAnyTime = false;
    $request->contractWrite->termination->terminationDate = DateTime::createFromFormat('Y-m-d', '2021-11-30');
    $request->contractWrite->termination->terminationDuration = 'P1M';
    $request->company = 410255;

    $response = $sdk->contracts->createContract($request);

    if ($response->createContract201ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\Contractify\ContractifyAPI\Models\Operations\CreateContractRequest](../../models/operations/CreateContractRequest.md) | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |


### Response

**[?\Contractify\ContractifyAPI\Models\Operations\CreateContractResponse](../../models/operations/CreateContractResponse.md)**


## deleteContract

Delete a contract

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Contractify\ContractifyAPI\ContractifyProduction;
use \Contractify\ContractifyAPI\Models\Shared\Security;
use \Contractify\ContractifyAPI\Models\Operations\DeleteContractRequest;

$security = new Security();
$security->oAuth2 = '';
$security->personalAccessToken = '';

$sdk = ContractifyProduction::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new DeleteContractRequest();
    $request->company = 791005;
    $request->contract = 200974;

    $response = $sdk->contracts->deleteContract($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\Contractify\ContractifyAPI\Models\Operations\DeleteContractRequest](../../models/operations/DeleteContractRequest.md) | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |


### Response

**[?\Contractify\ContractifyAPI\Models\Operations\DeleteContractResponse](../../models/operations/DeleteContractResponse.md)**


## getContract

Get information about a contract

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Contractify\ContractifyAPI\ContractifyProduction;
use \Contractify\ContractifyAPI\Models\Shared\Security;
use \Contractify\ContractifyAPI\Models\Operations\GetContractRequest;

$security = new Security();
$security->oAuth2 = '';
$security->personalAccessToken = '';

$sdk = ContractifyProduction::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetContractRequest();
    $request->company = 362495;
    $request->contract = 163842;

    $response = $sdk->contracts->getContract($request);

    if ($response->getContract200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                         | Type                                                                                                              | Required                                                                                                          | Description                                                                                                       |
| ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                        | [\Contractify\ContractifyAPI\Models\Operations\GetContractRequest](../../models/operations/GetContractRequest.md) | :heavy_check_mark:                                                                                                | The request object to use for the request.                                                                        |


### Response

**[?\Contractify\ContractifyAPI\Models\Operations\GetContractResponse](../../models/operations/GetContractResponse.md)**


## listContracts

List all the contracts within a company

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Contractify\ContractifyAPI\ContractifyProduction;
use \Contractify\ContractifyAPI\Models\Shared\Security;
use \Contractify\ContractifyAPI\Models\Operations\ListContractsRequest;

$security = new Security();
$security->oAuth2 = '';
$security->personalAccessToken = '';

$sdk = ContractifyProduction::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new ListContractsRequest();
    $request->company = 567515;
    $request->page = 62076;

    $response = $sdk->contracts->listContracts($request);

    if ($response->contractCollection !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\Contractify\ContractifyAPI\Models\Operations\ListContractsRequest](../../models/operations/ListContractsRequest.md) | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |


### Response

**[?\Contractify\ContractifyAPI\Models\Operations\ListContractsResponse](../../models/operations/ListContractsResponse.md)**


## updateContract

Update a contract

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Contractify\ContractifyAPI\ContractifyProduction;
use \Contractify\ContractifyAPI\Models\Shared\Security;
use \Contractify\ContractifyAPI\Models\Operations\UpdateContractRequest;
use \Contractify\ContractifyAPI\Models\Shared\ContractWrite;
use \Contractify\ContractifyAPI\Models\Shared\CustomFieldValueWrite;
use \Contractify\ContractifyAPI\Models\Shared\ContractPhase;
use \Contractify\ContractifyAPI\Models\Shared\ContractRenewal;
use \Contractify\ContractifyAPI\Models\Shared\ContractAutomaticRenewal;
use \Contractify\ContractifyAPI\Models\Shared\ContractTermination;

$security = new Security();
$security->oAuth2 = '';
$security->personalAccessToken = '';

$sdk = ContractifyProduction::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new UpdateContractRequest();
    $request->contractWrite = new ContractWrite();
    $request->contractWrite->contractTypes = [
        60280,
    ];
    $request->contractWrite->customFieldValues = [
        new CustomFieldValueWrite(),
    ];
    $request->contractWrite->departments = [
        331790,
    ];
    $request->contractWrite->documents = [
        1,
    ];
    $request->contractWrite->dossierId = 1;
    $request->contractWrite->duration = 'P1Y';
    $request->contractWrite->endDate = DateTime::createFromFormat('Y-m-d', '2021-12-31');
    $request->contractWrite->isOpenEnded = false;
    $request->contractWrite->legalEntities = [
        13295,
    ];
    $request->contractWrite->name = 'Partnership agreement';
    $request->contractWrite->offices = [
        178046,
    ];
    $request->contractWrite->ownerId = 1;
    $request->contractWrite->phase = ContractPhase::Ongoing;
    $request->contractWrite->relations = [
        331597,
    ];
    $request->contractWrite->renewal = new ContractRenewal();
    $request->contractWrite->renewal->automaticRenewal = new ContractAutomaticRenewal();
    $request->contractWrite->renewal->automaticRenewal->numberOfRenewals = 1;
    $request->contractWrite->renewal->automaticRenewal->renewalPeriod = 'P3Y';
    $request->contractWrite->renewal->isAutomaticallyRenewed = false;
    $request->contractWrite->startDate = DateTime::createFromFormat('Y-m-d', '2021-01-01');
    $request->contractWrite->termination = new ContractTermination();
    $request->contractWrite->termination->isTerminableAtAnyTime = false;
    $request->contractWrite->termination->terminationDate = DateTime::createFromFormat('Y-m-d', '2021-11-30');
    $request->contractWrite->termination->terminationDuration = 'P1M';
    $request->company = 693387;
    $request->contract = 670029;

    $response = $sdk->contracts->updateContract($request);

    if ($response->updateContract200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\Contractify\ContractifyAPI\Models\Operations\UpdateContractRequest](../../models/operations/UpdateContractRequest.md) | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |


### Response

**[?\Contractify\ContractifyAPI\Models\Operations\UpdateContractResponse](../../models/operations/UpdateContractResponse.md)**

