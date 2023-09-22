# Contracts

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

$sdk = ContractifyProduction::builder()
    ->build();

try {
    $request = new CreateContractRequest();
    $request->contractWrite = new ContractWrite();
    $request->contractWrite->contractTypes = [
        844266,
    ];
    $request->contractWrite->customFieldValues = [
        new CustomFieldValueWrite(),
    ];
    $request->contractWrite->departments = [
        602763,
    ];
    $request->contractWrite->documents = [
        1,
    ];
    $request->contractWrite->dossierId = 1;
    $request->contractWrite->duration = 'P1Y';
    $request->contractWrite->endDate = DateTime::createFromFormat('Y-m-d', '2021-12-31');
    $request->contractWrite->isOpenEnded = false;
    $request->contractWrite->legalEntities = [
        857946,
    ];
    $request->contractWrite->name = 'Partnership agreement';
    $request->contractWrite->offices = [
        544883,
    ];
    $request->contractWrite->ownerId = 1;
    $request->contractWrite->phase = ContractPhase::Ongoing;
    $request->contractWrite->relations = [
        847252,
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
    $request->company = 423655;

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

$sdk = ContractifyProduction::builder()
    ->build();

try {
    $request = new DeleteContractRequest();
    $request->company = 623564;
    $request->contract = 645894;

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

$sdk = ContractifyProduction::builder()
    ->build();

try {
    $request = new GetContractRequest();
    $request->company = 384382;
    $request->contract = 437587;

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

$sdk = ContractifyProduction::builder()
    ->build();

try {
    $request = new ListContractsRequest();
    $request->company = 297534;
    $request->page = 891773;

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

$sdk = ContractifyProduction::builder()
    ->build();

try {
    $request = new UpdateContractRequest();
    $request->contractWrite = new ContractWrite();
    $request->contractWrite->contractTypes = [
        56713,
    ];
    $request->contractWrite->customFieldValues = [
        new CustomFieldValueWrite(),
    ];
    $request->contractWrite->departments = [
        963663,
    ];
    $request->contractWrite->documents = [
        1,
    ];
    $request->contractWrite->dossierId = 1;
    $request->contractWrite->duration = 'P1Y';
    $request->contractWrite->endDate = DateTime::createFromFormat('Y-m-d', '2021-12-31');
    $request->contractWrite->isOpenEnded = false;
    $request->contractWrite->legalEntities = [
        272656,
    ];
    $request->contractWrite->name = 'Partnership agreement';
    $request->contractWrite->offices = [
        383441,
    ];
    $request->contractWrite->ownerId = 1;
    $request->contractWrite->phase = ContractPhase::Ongoing;
    $request->contractWrite->relations = [
        477665,
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
    $request->company = 791725;
    $request->contract = 812169;

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

