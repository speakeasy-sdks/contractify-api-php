# contracts

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
use \Contractify\ContractifyAPI\Models\Operations\CreateContractRequest;
use \Contractify\ContractifyAPI\Models\Shared\ContractWrite;
use \Contractify\ContractifyAPI\Models\Shared\CustomFieldValueWrite;
use \Contractify\ContractifyAPI\Models\Shared\ContractPhase;
use \Contractify\ContractifyAPI\Models\Shared\ContractRenewal;
use \Contractify\ContractifyAPI\Models\Shared\ContractAutomaticRenewal;
use \Contractify\ContractifyAPI\Models\Shared\ContractTermination;
use \Contractify\ContractifyAPI\Models\Operations\CreateContractSecurity;

$sdk = ContractifyProduction::builder()
    ->build();

try {
    $request = new CreateContractRequest();
    $request->contractWrite = new ContractWrite();
    $request->contractWrite->contractTypes = [
        844266,
        602763,
        857946,
    ];
    $request->contractWrite->customFieldValues = [
        new CustomFieldValueWrite(),
        new CustomFieldValueWrite(),
        new CustomFieldValueWrite(),
    ];
    $request->contractWrite->departments = [
        423655,
        623564,
        645894,
        384382,
    ];
    $request->contractWrite->documents = [
        1,
        1,
    ];
    $request->contractWrite->dossierId = 1;
    $request->contractWrite->duration = 'P1Y';
    $request->contractWrite->endDate = DateTime::createFromFormat('Y-m-d', '2021-12-31');
    $request->contractWrite->isOpenEnded = false;
    $request->contractWrite->legalEntities = [
        891773,
        56713,
    ];
    $request->contractWrite->name = 'Partnership agreement';
    $request->contractWrite->offices = [
        272656,
        383441,
        477665,
        791725,
    ];
    $request->contractWrite->ownerId = 1;
    $request->contractWrite->phase = ContractPhase::Ongoing;
    $request->contractWrite->relations = [
        528895,
        479977,
        568045,
        392785,
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
    $request->company = 925597;

    $requestSecurity = new CreateContractSecurity();
    $requestSecurity->oAuth2 = '';
    $requestSecurity->personalAccessToken = '';

    $response = $sdk->contracts->createContract($request, $requestSecurity);

    if ($response->createContract201ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                 | Type                                                                                                                      | Required                                                                                                                  | Description                                                                                                               |
| ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                | [\Contractify\ContractifyAPI\Models\Operations\CreateContractRequest](../../models/operations/CreateContractRequest.md)   | :heavy_check_mark:                                                                                                        | The request object to use for the request.                                                                                |
| `security`                                                                                                                | [\Contractify\ContractifyAPI\Models\Operations\CreateContractSecurity](../../models/operations/CreateContractSecurity.md) | :heavy_check_mark:                                                                                                        | The security requirements to use for the request.                                                                         |


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
use \Contractify\ContractifyAPI\Models\Operations\DeleteContractRequest;
use \Contractify\ContractifyAPI\Models\Operations\DeleteContractSecurity;

$sdk = ContractifyProduction::builder()
    ->build();

try {
    $request = new DeleteContractRequest();
    $request->company = 836079;
    $request->contract = 71036;

    $requestSecurity = new DeleteContractSecurity();
    $requestSecurity->oAuth2 = '';
    $requestSecurity->personalAccessToken = '';

    $response = $sdk->contracts->deleteContract($request, $requestSecurity);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                 | Type                                                                                                                      | Required                                                                                                                  | Description                                                                                                               |
| ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                | [\Contractify\ContractifyAPI\Models\Operations\DeleteContractRequest](../../models/operations/DeleteContractRequest.md)   | :heavy_check_mark:                                                                                                        | The request object to use for the request.                                                                                |
| `security`                                                                                                                | [\Contractify\ContractifyAPI\Models\Operations\DeleteContractSecurity](../../models/operations/DeleteContractSecurity.md) | :heavy_check_mark:                                                                                                        | The security requirements to use for the request.                                                                         |


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
use \Contractify\ContractifyAPI\Models\Operations\GetContractRequest;
use \Contractify\ContractifyAPI\Models\Operations\GetContractSecurity;

$sdk = ContractifyProduction::builder()
    ->build();

try {
    $request = new GetContractRequest();
    $request->company = 337396;
    $request->contract = 87129;

    $requestSecurity = new GetContractSecurity();
    $requestSecurity->oAuth2 = '';
    $requestSecurity->personalAccessToken = '';

    $response = $sdk->contracts->getContract($request, $requestSecurity);

    if ($response->getContract200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                           | Type                                                                                                                | Required                                                                                                            | Description                                                                                                         |
| ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                          | [\Contractify\ContractifyAPI\Models\Operations\GetContractRequest](../../models/operations/GetContractRequest.md)   | :heavy_check_mark:                                                                                                  | The request object to use for the request.                                                                          |
| `security`                                                                                                          | [\Contractify\ContractifyAPI\Models\Operations\GetContractSecurity](../../models/operations/GetContractSecurity.md) | :heavy_check_mark:                                                                                                  | The security requirements to use for the request.                                                                   |


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
use \Contractify\ContractifyAPI\Models\Operations\ListContractsRequest;
use \Contractify\ContractifyAPI\Models\Operations\ListContractsSecurity;

$sdk = ContractifyProduction::builder()
    ->build();

try {
    $request = new ListContractsRequest();
    $request->company = 648172;
    $request->page = 20218;

    $requestSecurity = new ListContractsSecurity();
    $requestSecurity->oAuth2 = '';
    $requestSecurity->personalAccessToken = '';

    $response = $sdk->contracts->listContracts($request, $requestSecurity);

    if ($response->contractCollection !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\Contractify\ContractifyAPI\Models\Operations\ListContractsRequest](../../models/operations/ListContractsRequest.md)   | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |
| `security`                                                                                                              | [\Contractify\ContractifyAPI\Models\Operations\ListContractsSecurity](../../models/operations/ListContractsSecurity.md) | :heavy_check_mark:                                                                                                      | The security requirements to use for the request.                                                                       |


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
use \Contractify\ContractifyAPI\Models\Operations\UpdateContractRequest;
use \Contractify\ContractifyAPI\Models\Shared\ContractWrite;
use \Contractify\ContractifyAPI\Models\Shared\CustomFieldValueWrite;
use \Contractify\ContractifyAPI\Models\Shared\ContractPhase;
use \Contractify\ContractifyAPI\Models\Shared\ContractRenewal;
use \Contractify\ContractifyAPI\Models\Shared\ContractAutomaticRenewal;
use \Contractify\ContractifyAPI\Models\Shared\ContractTermination;
use \Contractify\ContractifyAPI\Models\Operations\UpdateContractSecurity;

$sdk = ContractifyProduction::builder()
    ->build();

try {
    $request = new UpdateContractRequest();
    $request->contractWrite = new ContractWrite();
    $request->contractWrite->contractTypes = [
        832620,
        957156,
    ];
    $request->contractWrite->customFieldValues = [
        new CustomFieldValueWrite(),
        new CustomFieldValueWrite(),
        new CustomFieldValueWrite(),
        new CustomFieldValueWrite(),
    ];
    $request->contractWrite->departments = [
        870013,
    ];
    $request->contractWrite->documents = [
        1,
        1,
        1,
        1,
    ];
    $request->contractWrite->dossierId = 1;
    $request->contractWrite->duration = 'P1Y';
    $request->contractWrite->endDate = DateTime::createFromFormat('Y-m-d', '2021-12-31');
    $request->contractWrite->isOpenEnded = false;
    $request->contractWrite->legalEntities = [
        473608,
        799159,
        800911,
        461479,
    ];
    $request->contractWrite->name = 'Partnership agreement';
    $request->contractWrite->offices = [
        780529,
        678880,
        118274,
    ];
    $request->contractWrite->ownerId = 1;
    $request->contractWrite->phase = ContractPhase::Ongoing;
    $request->contractWrite->relations = [
        639921,
        582020,
        143353,
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
    $request->company = 537373;
    $request->contract = 944669;

    $requestSecurity = new UpdateContractSecurity();
    $requestSecurity->oAuth2 = '';
    $requestSecurity->personalAccessToken = '';

    $response = $sdk->contracts->updateContract($request, $requestSecurity);

    if ($response->updateContract200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                 | Type                                                                                                                      | Required                                                                                                                  | Description                                                                                                               |
| ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                | [\Contractify\ContractifyAPI\Models\Operations\UpdateContractRequest](../../models/operations/UpdateContractRequest.md)   | :heavy_check_mark:                                                                                                        | The request object to use for the request.                                                                                |
| `security`                                                                                                                | [\Contractify\ContractifyAPI\Models\Operations\UpdateContractSecurity](../../models/operations/UpdateContractSecurity.md) | :heavy_check_mark:                                                                                                        | The security requirements to use for the request.                                                                         |


### Response

**[?\Contractify\ContractifyAPI\Models\Operations\UpdateContractResponse](../../models/operations/UpdateContractResponse.md)**

