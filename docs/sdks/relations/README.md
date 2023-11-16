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
    $request = new Operations\CreateRelationRequest();
    $request->relationWrite = new Shared\RelationWrite();
    $request->relationWrite->address = new Shared\Address();
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
    $request->company = 528070;

    $response = $sdk->relations->createRelation($request);

    if ($response->twoHundredAndOneApplicationJsonObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\Contractify\ContractifyAPI\Models\Operations\CreateRelationRequest](../../Models/Operations/CreateRelationRequest.md) | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |


### Response

**[?\Contractify\ContractifyAPI\Models\Operations\CreateRelationResponse](../../Models/Operations/CreateRelationResponse.md)**


## deleteRelation

Delete a relation

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
    $request = new Operations\DeleteRelationRequest();
    $request->company = 773418;
    $request->relation = 890630;

    $response = $sdk->relations->deleteRelation($request);

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
| `$request`                                                                                                              | [\Contractify\ContractifyAPI\Models\Operations\DeleteRelationRequest](../../Models/Operations/DeleteRelationRequest.md) | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |


### Response

**[?\Contractify\ContractifyAPI\Models\Operations\DeleteRelationResponse](../../Models/Operations/DeleteRelationResponse.md)**


## getRelation

Get information about a relation

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
    $request = new Operations\GetRelationRequest();
    $request->company = 734058;
    $request->relation = 979643;

    $response = $sdk->relations->getRelation($request);

    if ($response->twoHundredApplicationJsonObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                         | Type                                                                                                              | Required                                                                                                          | Description                                                                                                       |
| ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                        | [\Contractify\ContractifyAPI\Models\Operations\GetRelationRequest](../../Models/Operations/GetRelationRequest.md) | :heavy_check_mark:                                                                                                | The request object to use for the request.                                                                        |


### Response

**[?\Contractify\ContractifyAPI\Models\Operations\GetRelationResponse](../../Models/Operations/GetRelationResponse.md)**


## listRelations

List all the relations within a company

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
    $request = new Operations\ListRelationsRequest();
    $request->company = 454135;
    $request->page = 761434;
    $request->reference = 'string';

    $response = $sdk->relations->listRelations($request);

    if ($response->relationCollection !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\Contractify\ContractifyAPI\Models\Operations\ListRelationsRequest](../../Models/Operations/ListRelationsRequest.md) | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |


### Response

**[?\Contractify\ContractifyAPI\Models\Operations\ListRelationsResponse](../../Models/Operations/ListRelationsResponse.md)**


## updateRelation

Update a relation

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
    $request = new Operations\UpdateRelationRequest();
    $request->relationWrite = new Shared\RelationWrite();
    $request->relationWrite->address = new Shared\Address();
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
    $request->company = 573397;
    $request->relation = 281147;

    $response = $sdk->relations->updateRelation($request);

    if ($response->twoHundredApplicationJsonObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\Contractify\ContractifyAPI\Models\Operations\UpdateRelationRequest](../../Models/Operations/UpdateRelationRequest.md) | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |


### Response

**[?\Contractify\ContractifyAPI\Models\Operations\UpdateRelationResponse](../../Models/Operations/UpdateRelationResponse.md)**

