# Offices


### Available Operations

* [createOffice](#createoffice) - Create an office
* [deleteOffice](#deleteoffice) - Delete an office
* [getOffice](#getoffice) - Get an office
* [listOffices](#listoffices) - List offices
* [updateOffice](#updateoffice) - Update an office

## createOffice

Create an office

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
    $request = new Operations\CreateOfficeRequest();
    $request->officeWrite = new Shared\OfficeWrite();
    $request->officeWrite->bus = '1';
    $request->officeWrite->city = 'Sleidinge';
    $request->officeWrite->contactPerson = 'Ada Lovelace';
    $request->officeWrite->country = 'Belgium';
    $request->officeWrite->email = 'info@contractify.be';
    $request->officeWrite->id = 1;
    $request->officeWrite->name = 'Ghent';
    $request->officeWrite->numberIdentity = 'OFF-GHENT';
    $request->officeWrite->phone = '+32 9 234 28 97';
    $request->officeWrite->street = 'Polenstraat 163';
    $request->officeWrite->zip = '9940';
    $request->company = 244393;

    $response = $sdk->offices->createOffice($request);

    if ($response->twoHundredAndOneApplicationJsonObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                           | Type                                                                                                                | Required                                                                                                            | Description                                                                                                         |
| ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                          | [\Contractify\ContractifyAPI\Models\Operations\CreateOfficeRequest](../../Models/Operations/CreateOfficeRequest.md) | :heavy_check_mark:                                                                                                  | The request object to use for the request.                                                                          |


### Response

**[?\Contractify\ContractifyAPI\Models\Operations\CreateOfficeResponse](../../Models/Operations/CreateOfficeResponse.md)**


## deleteOffice

Delete an office

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
    $request = new Operations\DeleteOfficeRequest();
    $request->company = 327183;
    $request->office = 668605;

    $response = $sdk->offices->deleteOffice($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                           | Type                                                                                                                | Required                                                                                                            | Description                                                                                                         |
| ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                          | [\Contractify\ContractifyAPI\Models\Operations\DeleteOfficeRequest](../../Models/Operations/DeleteOfficeRequest.md) | :heavy_check_mark:                                                                                                  | The request object to use for the request.                                                                          |


### Response

**[?\Contractify\ContractifyAPI\Models\Operations\DeleteOfficeResponse](../../Models/Operations/DeleteOfficeResponse.md)**


## getOffice

Get information about an office

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
    $request = new Operations\GetOfficeRequest();
    $request->company = 616050;
    $request->office = 134885;

    $response = $sdk->offices->getOffice($request);

    if ($response->twoHundredApplicationJsonObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                     | Type                                                                                                          | Required                                                                                                      | Description                                                                                                   |
| ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                    | [\Contractify\ContractifyAPI\Models\Operations\GetOfficeRequest](../../Models/Operations/GetOfficeRequest.md) | :heavy_check_mark:                                                                                            | The request object to use for the request.                                                                    |


### Response

**[?\Contractify\ContractifyAPI\Models\Operations\GetOfficeResponse](../../Models/Operations/GetOfficeResponse.md)**


## listOffices

List all the offices within a company

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
    $request = new Operations\ListOfficesRequest();
    $request->company = 303557;

    $response = $sdk->offices->listOffices($request);

    if ($response->officeCollection !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                         | Type                                                                                                              | Required                                                                                                          | Description                                                                                                       |
| ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                        | [\Contractify\ContractifyAPI\Models\Operations\ListOfficesRequest](../../Models/Operations/ListOfficesRequest.md) | :heavy_check_mark:                                                                                                | The request object to use for the request.                                                                        |


### Response

**[?\Contractify\ContractifyAPI\Models\Operations\ListOfficesResponse](../../Models/Operations/ListOfficesResponse.md)**


## updateOffice

Update an office

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
    $request = new Operations\UpdateOfficeRequest();
    $request->officeWrite = new Shared\OfficeWrite();
    $request->officeWrite->bus = '1';
    $request->officeWrite->city = 'Sleidinge';
    $request->officeWrite->contactPerson = 'Ada Lovelace';
    $request->officeWrite->country = 'Belgium';
    $request->officeWrite->email = 'info@contractify.be';
    $request->officeWrite->id = 1;
    $request->officeWrite->name = 'Ghent';
    $request->officeWrite->numberIdentity = 'OFF-GHENT';
    $request->officeWrite->phone = '+32 9 234 28 97';
    $request->officeWrite->street = 'Polenstraat 163';
    $request->officeWrite->zip = '9940';
    $request->company = 989026;
    $request->office = 647378;

    $response = $sdk->offices->updateOffice($request);

    if ($response->twoHundredApplicationJsonObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                           | Type                                                                                                                | Required                                                                                                            | Description                                                                                                         |
| ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                          | [\Contractify\ContractifyAPI\Models\Operations\UpdateOfficeRequest](../../Models/Operations/UpdateOfficeRequest.md) | :heavy_check_mark:                                                                                                  | The request object to use for the request.                                                                          |


### Response

**[?\Contractify\ContractifyAPI\Models\Operations\UpdateOfficeResponse](../../Models/Operations/UpdateOfficeResponse.md)**

