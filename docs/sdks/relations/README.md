# Relations

### Available Operations

* [createRelation](#createrelation) - Create a relation
* [deleteRelation](#deleterelation) - Delete a relation
* [getRelation](#getrelation) - Get a relation
* [listRelations](#listrelations) - List relations
* [updateRelation](#updaterelation) - Update a relation

## createRelation

Create a relation

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Contractify\ContractifyAPI\ContractifyProduction;
use \Contractify\ContractifyAPI\Models\Operations\CreateRelationRequest;
use \Contractify\ContractifyAPI\Models\Shared\RelationWrite;
use \Contractify\ContractifyAPI\Models\Shared\Address;
use \Contractify\ContractifyAPI\Models\Operations\CreateRelationSecurity;

$sdk = ContractifyProduction::builder()
    ->build();

try {
    $request = new CreateRelationRequest();
    $request->relationWrite = new RelationWrite();
    $request->relationWrite->address = new Address();
    $request->relationWrite->address->addressLine1 = '221B Baker Street';
    $request->relationWrite->address->addressLine2 = 'Marylebone';
    $request->relationWrite->address->city = 'London';
    $request->relationWrite->address->country = 'United Kingdom';
    $request->relationWrite->address->postalCode = 'NW1 6XE';
    $request->relationWrite->email = 'sherlock@example.org';
    $request->relationWrite->fax = '+3211324354';
    $request->relationWrite->mobilePhone = '+23477123456';
    $request->relationWrite->name = 'Sherlock Holmes Detective Services';
    $request->relationWrite->phone = '+23477123456';
    $request->relationWrite->reference = 'REF123';
    $request->relationWrite->vat = 'BE12345678';
    $request->relationWrite->website = 'https://www.example.org';
    $request->company = 537373;

    $requestSecurity = new CreateRelationSecurity();
    $requestSecurity->oAuth2 = '';
    $requestSecurity->personalAccessToken = '';

    $response = $sdk->relations->createRelation($request, $requestSecurity);

    if ($response->createRelation201ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                 | Type                                                                                                                      | Required                                                                                                                  | Description                                                                                                               |
| ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                | [\Contractify\ContractifyAPI\Models\Operations\CreateRelationRequest](../../models/operations/CreateRelationRequest.md)   | :heavy_check_mark:                                                                                                        | The request object to use for the request.                                                                                |
| `security`                                                                                                                | [\Contractify\ContractifyAPI\Models\Operations\CreateRelationSecurity](../../models/operations/CreateRelationSecurity.md) | :heavy_check_mark:                                                                                                        | The security requirements to use for the request.                                                                         |


### Response

**[?\Contractify\ContractifyAPI\Models\Operations\CreateRelationResponse](../../models/operations/CreateRelationResponse.md)**


## deleteRelation

Delete a relation

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Contractify\ContractifyAPI\ContractifyProduction;
use \Contractify\ContractifyAPI\Models\Operations\DeleteRelationRequest;
use \Contractify\ContractifyAPI\Models\Operations\DeleteRelationSecurity;

$sdk = ContractifyProduction::builder()
    ->build();

try {
    $request = new DeleteRelationRequest();
    $request->company = 944669;
    $request->relation = 758616;

    $requestSecurity = new DeleteRelationSecurity();
    $requestSecurity->oAuth2 = '';
    $requestSecurity->personalAccessToken = '';

    $response = $sdk->relations->deleteRelation($request, $requestSecurity);

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
| `$request`                                                                                                                | [\Contractify\ContractifyAPI\Models\Operations\DeleteRelationRequest](../../models/operations/DeleteRelationRequest.md)   | :heavy_check_mark:                                                                                                        | The request object to use for the request.                                                                                |
| `security`                                                                                                                | [\Contractify\ContractifyAPI\Models\Operations\DeleteRelationSecurity](../../models/operations/DeleteRelationSecurity.md) | :heavy_check_mark:                                                                                                        | The security requirements to use for the request.                                                                         |


### Response

**[?\Contractify\ContractifyAPI\Models\Operations\DeleteRelationResponse](../../models/operations/DeleteRelationResponse.md)**


## getRelation

Get information about a relation

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Contractify\ContractifyAPI\ContractifyProduction;
use \Contractify\ContractifyAPI\Models\Operations\GetRelationRequest;
use \Contractify\ContractifyAPI\Models\Operations\GetRelationSecurity;

$sdk = ContractifyProduction::builder()
    ->build();

try {
    $request = new GetRelationRequest();
    $request->company = 521848;
    $request->relation = 105907;

    $requestSecurity = new GetRelationSecurity();
    $requestSecurity->oAuth2 = '';
    $requestSecurity->personalAccessToken = '';

    $response = $sdk->relations->getRelation($request, $requestSecurity);

    if ($response->getRelation200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                           | Type                                                                                                                | Required                                                                                                            | Description                                                                                                         |
| ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                          | [\Contractify\ContractifyAPI\Models\Operations\GetRelationRequest](../../models/operations/GetRelationRequest.md)   | :heavy_check_mark:                                                                                                  | The request object to use for the request.                                                                          |
| `security`                                                                                                          | [\Contractify\ContractifyAPI\Models\Operations\GetRelationSecurity](../../models/operations/GetRelationSecurity.md) | :heavy_check_mark:                                                                                                  | The security requirements to use for the request.                                                                   |


### Response

**[?\Contractify\ContractifyAPI\Models\Operations\GetRelationResponse](../../models/operations/GetRelationResponse.md)**


## listRelations

List all the relations within a company

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Contractify\ContractifyAPI\ContractifyProduction;
use \Contractify\ContractifyAPI\Models\Operations\ListRelationsRequest;
use \Contractify\ContractifyAPI\Models\Operations\ListRelationsSecurity;

$sdk = ContractifyProduction::builder()
    ->build();

try {
    $request = new ListRelationsRequest();
    $request->company = 414662;
    $request->page = 473600;
    $request->reference = 'modi';

    $requestSecurity = new ListRelationsSecurity();
    $requestSecurity->oAuth2 = '';
    $requestSecurity->personalAccessToken = '';

    $response = $sdk->relations->listRelations($request, $requestSecurity);

    if ($response->relationCollection !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\Contractify\ContractifyAPI\Models\Operations\ListRelationsRequest](../../models/operations/ListRelationsRequest.md)   | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |
| `security`                                                                                                              | [\Contractify\ContractifyAPI\Models\Operations\ListRelationsSecurity](../../models/operations/ListRelationsSecurity.md) | :heavy_check_mark:                                                                                                      | The security requirements to use for the request.                                                                       |


### Response

**[?\Contractify\ContractifyAPI\Models\Operations\ListRelationsResponse](../../models/operations/ListRelationsResponse.md)**


## updateRelation

Update a relation

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Contractify\ContractifyAPI\ContractifyProduction;
use \Contractify\ContractifyAPI\Models\Operations\UpdateRelationRequest;
use \Contractify\ContractifyAPI\Models\Shared\RelationWrite;
use \Contractify\ContractifyAPI\Models\Shared\Address;
use \Contractify\ContractifyAPI\Models\Operations\UpdateRelationSecurity;

$sdk = ContractifyProduction::builder()
    ->build();

try {
    $request = new UpdateRelationRequest();
    $request->relationWrite = new RelationWrite();
    $request->relationWrite->address = new Address();
    $request->relationWrite->address->addressLine1 = '221B Baker Street';
    $request->relationWrite->address->addressLine2 = 'Marylebone';
    $request->relationWrite->address->city = 'London';
    $request->relationWrite->address->country = 'United Kingdom';
    $request->relationWrite->address->postalCode = 'NW1 6XE';
    $request->relationWrite->email = 'sherlock@example.org';
    $request->relationWrite->fax = '+3211324354';
    $request->relationWrite->mobilePhone = '+23477123456';
    $request->relationWrite->name = 'Sherlock Holmes Detective Services';
    $request->relationWrite->phone = '+23477123456';
    $request->relationWrite->reference = 'REF123';
    $request->relationWrite->vat = 'BE12345678';
    $request->relationWrite->website = 'https://www.example.org';
    $request->company = 186332;
    $request->relation = 774234;

    $requestSecurity = new UpdateRelationSecurity();
    $requestSecurity->oAuth2 = '';
    $requestSecurity->personalAccessToken = '';

    $response = $sdk->relations->updateRelation($request, $requestSecurity);

    if ($response->updateRelation200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                 | Type                                                                                                                      | Required                                                                                                                  | Description                                                                                                               |
| ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                | [\Contractify\ContractifyAPI\Models\Operations\UpdateRelationRequest](../../models/operations/UpdateRelationRequest.md)   | :heavy_check_mark:                                                                                                        | The request object to use for the request.                                                                                |
| `security`                                                                                                                | [\Contractify\ContractifyAPI\Models\Operations\UpdateRelationSecurity](../../models/operations/UpdateRelationSecurity.md) | :heavy_check_mark:                                                                                                        | The security requirements to use for the request.                                                                         |


### Response

**[?\Contractify\ContractifyAPI\Models\Operations\UpdateRelationResponse](../../models/operations/UpdateRelationResponse.md)**

