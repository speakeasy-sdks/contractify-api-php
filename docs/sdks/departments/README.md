# Departments
(*departments*)

### Available Operations

* [createDepartment](#createdepartment) - Create a department
* [deleteDepartment](#deletedepartment) - Delete a department
* [getDepartment](#getdepartment) - Get a department
* [listDepartments](#listdepartments) - List departments
* [updateDepartment](#updatedepartment) - Update a department

## createDepartment

Create a department

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Contractify\ContractifyAPI\ContractifyProduction;
use \Contractify\ContractifyAPI\Models\Shared\Security;
use \Contractify\ContractifyAPI\Models\Operations\CreateDepartmentRequest;
use \Contractify\ContractifyAPI\Models\Shared\DepartmentWrite;

$security = new Security();
$security->oAuth2 = '';
$security->personalAccessToken = '';

$sdk = ContractifyProduction::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new CreateDepartmentRequest();
    $request->departmentWrite = new DepartmentWrite();
    $request->departmentWrite->name = 'Sales';
    $request->company = 33324;

    $response = $sdk->departments->createDepartment($request);

    if ($response->createDepartment201ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                   | Type                                                                                                                        | Required                                                                                                                    | Description                                                                                                                 |
| --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                  | [\Contractify\ContractifyAPI\Models\Operations\CreateDepartmentRequest](../../models/operations/CreateDepartmentRequest.md) | :heavy_check_mark:                                                                                                          | The request object to use for the request.                                                                                  |


### Response

**[?\Contractify\ContractifyAPI\Models\Operations\CreateDepartmentResponse](../../models/operations/CreateDepartmentResponse.md)**


## deleteDepartment

Delete a department

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Contractify\ContractifyAPI\ContractifyProduction;
use \Contractify\ContractifyAPI\Models\Shared\Security;
use \Contractify\ContractifyAPI\Models\Operations\DeleteDepartmentRequest;

$security = new Security();
$security->oAuth2 = '';
$security->personalAccessToken = '';

$sdk = ContractifyProduction::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new DeleteDepartmentRequest();
    $request->company = 701942;
    $request->department = 751163;

    $response = $sdk->departments->deleteDepartment($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                   | Type                                                                                                                        | Required                                                                                                                    | Description                                                                                                                 |
| --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                  | [\Contractify\ContractifyAPI\Models\Operations\DeleteDepartmentRequest](../../models/operations/DeleteDepartmentRequest.md) | :heavy_check_mark:                                                                                                          | The request object to use for the request.                                                                                  |


### Response

**[?\Contractify\ContractifyAPI\Models\Operations\DeleteDepartmentResponse](../../models/operations/DeleteDepartmentResponse.md)**


## getDepartment

Get information about a department

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Contractify\ContractifyAPI\ContractifyProduction;
use \Contractify\ContractifyAPI\Models\Shared\Security;
use \Contractify\ContractifyAPI\Models\Operations\GetDepartmentRequest;

$security = new Security();
$security->oAuth2 = '';
$security->personalAccessToken = '';

$sdk = ContractifyProduction::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetDepartmentRequest();
    $request->company = 255130;
    $request->department = 855529;

    $response = $sdk->departments->getDepartment($request);

    if ($response->getDepartment200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\Contractify\ContractifyAPI\Models\Operations\GetDepartmentRequest](../../models/operations/GetDepartmentRequest.md) | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |


### Response

**[?\Contractify\ContractifyAPI\Models\Operations\GetDepartmentResponse](../../models/operations/GetDepartmentResponse.md)**


## listDepartments

List all the departments within a company

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Contractify\ContractifyAPI\ContractifyProduction;
use \Contractify\ContractifyAPI\Models\Shared\Security;
use \Contractify\ContractifyAPI\Models\Operations\ListDepartmentsRequest;

$security = new Security();
$security->oAuth2 = '';
$security->personalAccessToken = '';

$sdk = ContractifyProduction::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new ListDepartmentsRequest();
    $request->company = 117069;

    $response = $sdk->departments->listDepartments($request);

    if ($response->departmentCollection !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                 | Type                                                                                                                      | Required                                                                                                                  | Description                                                                                                               |
| ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                | [\Contractify\ContractifyAPI\Models\Operations\ListDepartmentsRequest](../../models/operations/ListDepartmentsRequest.md) | :heavy_check_mark:                                                                                                        | The request object to use for the request.                                                                                |


### Response

**[?\Contractify\ContractifyAPI\Models\Operations\ListDepartmentsResponse](../../models/operations/ListDepartmentsResponse.md)**


## updateDepartment

Update a department

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Contractify\ContractifyAPI\ContractifyProduction;
use \Contractify\ContractifyAPI\Models\Shared\Security;
use \Contractify\ContractifyAPI\Models\Operations\UpdateDepartmentRequest;
use \Contractify\ContractifyAPI\Models\Shared\DepartmentWrite;

$security = new Security();
$security->oAuth2 = '';
$security->personalAccessToken = '';

$sdk = ContractifyProduction::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new UpdateDepartmentRequest();
    $request->departmentWrite = new DepartmentWrite();
    $request->departmentWrite->name = 'Sales';
    $request->company = 431122;
    $request->department = 2342;

    $response = $sdk->departments->updateDepartment($request);

    if ($response->updateDepartment200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                   | Type                                                                                                                        | Required                                                                                                                    | Description                                                                                                                 |
| --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                  | [\Contractify\ContractifyAPI\Models\Operations\UpdateDepartmentRequest](../../models/operations/UpdateDepartmentRequest.md) | :heavy_check_mark:                                                                                                          | The request object to use for the request.                                                                                  |


### Response

**[?\Contractify\ContractifyAPI\Models\Operations\UpdateDepartmentResponse](../../models/operations/UpdateDepartmentResponse.md)**

