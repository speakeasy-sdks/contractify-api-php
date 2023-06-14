# offices

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

use \Contractify\ContractifyAPI\ContractifyProduction;
use \Contractify\ContractifyAPI\Models\Operations\CreateOfficeRequest;
use \Contractify\ContractifyAPI\Models\Shared\OfficeWrite;
use \Contractify\ContractifyAPI\Models\Operations\CreateOfficeSecurity;

$sdk = ContractifyProduction::builder()
    ->build();

try {
    $request = new CreateOfficeRequest();
    $request->officeWrite = new OfficeWrite();
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
    $request->company = 437032;

    $requestSecurity = new CreateOfficeSecurity();
    $requestSecurity->oAuth2 = '';
    $requestSecurity->personalAccessToken = '';

    $response = $sdk->offices->createOffice($request, $requestSecurity);

    if ($response->createOffice201ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\Contractify\ContractifyAPI\Models\Operations\CreateOfficeRequest](../../models/operations/CreateOfficeRequest.md)   | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |
| `security`                                                                                                            | [\Contractify\ContractifyAPI\Models\Operations\CreateOfficeSecurity](../../models/operations/CreateOfficeSecurity.md) | :heavy_check_mark:                                                                                                    | The security requirements to use for the request.                                                                     |


### Response

**[?\Contractify\ContractifyAPI\Models\Operations\CreateOfficeResponse](../../models/operations/CreateOfficeResponse.md)**


## deleteOffice

Delete an office

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Contractify\ContractifyAPI\ContractifyProduction;
use \Contractify\ContractifyAPI\Models\Operations\DeleteOfficeRequest;
use \Contractify\ContractifyAPI\Models\Operations\DeleteOfficeSecurity;

$sdk = ContractifyProduction::builder()
    ->build();

try {
    $request = new DeleteOfficeRequest();
    $request->company = 902349;
    $request->office = 697631;

    $requestSecurity = new DeleteOfficeSecurity();
    $requestSecurity->oAuth2 = '';
    $requestSecurity->personalAccessToken = '';

    $response = $sdk->offices->deleteOffice($request, $requestSecurity);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\Contractify\ContractifyAPI\Models\Operations\DeleteOfficeRequest](../../models/operations/DeleteOfficeRequest.md)   | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |
| `security`                                                                                                            | [\Contractify\ContractifyAPI\Models\Operations\DeleteOfficeSecurity](../../models/operations/DeleteOfficeSecurity.md) | :heavy_check_mark:                                                                                                    | The security requirements to use for the request.                                                                     |


### Response

**[?\Contractify\ContractifyAPI\Models\Operations\DeleteOfficeResponse](../../models/operations/DeleteOfficeResponse.md)**


## getOffice

Get information about an office

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Contractify\ContractifyAPI\ContractifyProduction;
use \Contractify\ContractifyAPI\Models\Operations\GetOfficeRequest;
use \Contractify\ContractifyAPI\Models\Operations\GetOfficeSecurity;

$sdk = ContractifyProduction::builder()
    ->build();

try {
    $request = new GetOfficeRequest();
    $request->company = 99280;
    $request->office = 60225;

    $requestSecurity = new GetOfficeSecurity();
    $requestSecurity->oAuth2 = '';
    $requestSecurity->personalAccessToken = '';

    $response = $sdk->offices->getOffice($request, $requestSecurity);

    if ($response->getOffice200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                       | Type                                                                                                            | Required                                                                                                        | Description                                                                                                     |
| --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                      | [\Contractify\ContractifyAPI\Models\Operations\GetOfficeRequest](../../models/operations/GetOfficeRequest.md)   | :heavy_check_mark:                                                                                              | The request object to use for the request.                                                                      |
| `security`                                                                                                      | [\Contractify\ContractifyAPI\Models\Operations\GetOfficeSecurity](../../models/operations/GetOfficeSecurity.md) | :heavy_check_mark:                                                                                              | The security requirements to use for the request.                                                               |


### Response

**[?\Contractify\ContractifyAPI\Models\Operations\GetOfficeResponse](../../models/operations/GetOfficeResponse.md)**


## listOffices

List all the offices within a company

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Contractify\ContractifyAPI\ContractifyProduction;
use \Contractify\ContractifyAPI\Models\Operations\ListOfficesRequest;
use \Contractify\ContractifyAPI\Models\Operations\ListOfficesSecurity;

$sdk = ContractifyProduction::builder()
    ->build();

try {
    $request = new ListOfficesRequest();
    $request->company = 969810;

    $requestSecurity = new ListOfficesSecurity();
    $requestSecurity->oAuth2 = '';
    $requestSecurity->personalAccessToken = '';

    $response = $sdk->offices->listOffices($request, $requestSecurity);

    if ($response->officeCollection !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                           | Type                                                                                                                | Required                                                                                                            | Description                                                                                                         |
| ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                          | [\Contractify\ContractifyAPI\Models\Operations\ListOfficesRequest](../../models/operations/ListOfficesRequest.md)   | :heavy_check_mark:                                                                                                  | The request object to use for the request.                                                                          |
| `security`                                                                                                          | [\Contractify\ContractifyAPI\Models\Operations\ListOfficesSecurity](../../models/operations/ListOfficesSecurity.md) | :heavy_check_mark:                                                                                                  | The security requirements to use for the request.                                                                   |


### Response

**[?\Contractify\ContractifyAPI\Models\Operations\ListOfficesResponse](../../models/operations/ListOfficesResponse.md)**


## updateOffice

Update an office

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Contractify\ContractifyAPI\ContractifyProduction;
use \Contractify\ContractifyAPI\Models\Operations\UpdateOfficeRequest;
use \Contractify\ContractifyAPI\Models\Shared\OfficeWrite;
use \Contractify\ContractifyAPI\Models\Operations\UpdateOfficeSecurity;

$sdk = ContractifyProduction::builder()
    ->build();

try {
    $request = new UpdateOfficeRequest();
    $request->officeWrite = new OfficeWrite();
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
    $request->company = 666767;
    $request->office = 653140;

    $requestSecurity = new UpdateOfficeSecurity();
    $requestSecurity->oAuth2 = '';
    $requestSecurity->personalAccessToken = '';

    $response = $sdk->offices->updateOffice($request, $requestSecurity);

    if ($response->updateOffice200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\Contractify\ContractifyAPI\Models\Operations\UpdateOfficeRequest](../../models/operations/UpdateOfficeRequest.md)   | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |
| `security`                                                                                                            | [\Contractify\ContractifyAPI\Models\Operations\UpdateOfficeSecurity](../../models/operations/UpdateOfficeSecurity.md) | :heavy_check_mark:                                                                                                    | The security requirements to use for the request.                                                                     |


### Response

**[?\Contractify\ContractifyAPI\Models\Operations\UpdateOfficeResponse](../../models/operations/UpdateOfficeResponse.md)**

