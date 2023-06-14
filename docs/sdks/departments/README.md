# departments

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
use \Contractify\ContractifyAPI\Models\Operations\CreateDepartmentRequest;
use \Contractify\ContractifyAPI\Models\Shared\DepartmentWrite;
use \Contractify\ContractifyAPI\Models\Operations\CreateDepartmentSecurity;

$sdk = ContractifyProduction::builder()
    ->build();

try {
    $request = new CreateDepartmentRequest();
    $request->departmentWrite = new DepartmentWrite();
    $request->departmentWrite->name = 'Sales';
    $request->company = 521848;

    $requestSecurity = new CreateDepartmentSecurity();
    $requestSecurity->oAuth2 = '';
    $requestSecurity->personalAccessToken = '';

    $response = $sdk->departments->createDepartment($request, $requestSecurity);

    if ($response->createDepartment201ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                     | Type                                                                                                                          | Required                                                                                                                      | Description                                                                                                                   |
| ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                    | [\Contractify\ContractifyAPI\Models\Operations\CreateDepartmentRequest](../../models/operations/CreateDepartmentRequest.md)   | :heavy_check_mark:                                                                                                            | The request object to use for the request.                                                                                    |
| `security`                                                                                                                    | [\Contractify\ContractifyAPI\Models\Operations\CreateDepartmentSecurity](../../models/operations/CreateDepartmentSecurity.md) | :heavy_check_mark:                                                                                                            | The security requirements to use for the request.                                                                             |


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
use \Contractify\ContractifyAPI\Models\Operations\DeleteDepartmentRequest;
use \Contractify\ContractifyAPI\Models\Operations\DeleteDepartmentSecurity;

$sdk = ContractifyProduction::builder()
    ->build();

try {
    $request = new DeleteDepartmentRequest();
    $request->company = 105907;
    $request->department = 414662;

    $requestSecurity = new DeleteDepartmentSecurity();
    $requestSecurity->oAuth2 = '';
    $requestSecurity->personalAccessToken = '';

    $response = $sdk->departments->deleteDepartment($request, $requestSecurity);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                     | Type                                                                                                                          | Required                                                                                                                      | Description                                                                                                                   |
| ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                    | [\Contractify\ContractifyAPI\Models\Operations\DeleteDepartmentRequest](../../models/operations/DeleteDepartmentRequest.md)   | :heavy_check_mark:                                                                                                            | The request object to use for the request.                                                                                    |
| `security`                                                                                                                    | [\Contractify\ContractifyAPI\Models\Operations\DeleteDepartmentSecurity](../../models/operations/DeleteDepartmentSecurity.md) | :heavy_check_mark:                                                                                                            | The security requirements to use for the request.                                                                             |


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
use \Contractify\ContractifyAPI\Models\Operations\GetDepartmentRequest;
use \Contractify\ContractifyAPI\Models\Operations\GetDepartmentSecurity;

$sdk = ContractifyProduction::builder()
    ->build();

try {
    $request = new GetDepartmentRequest();
    $request->company = 473600;
    $request->department = 264555;

    $requestSecurity = new GetDepartmentSecurity();
    $requestSecurity->oAuth2 = '';
    $requestSecurity->personalAccessToken = '';

    $response = $sdk->departments->getDepartment($request, $requestSecurity);

    if ($response->getDepartment200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\Contractify\ContractifyAPI\Models\Operations\GetDepartmentRequest](../../models/operations/GetDepartmentRequest.md)   | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |
| `security`                                                                                                              | [\Contractify\ContractifyAPI\Models\Operations\GetDepartmentSecurity](../../models/operations/GetDepartmentSecurity.md) | :heavy_check_mark:                                                                                                      | The security requirements to use for the request.                                                                       |


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
use \Contractify\ContractifyAPI\Models\Operations\ListDepartmentsRequest;
use \Contractify\ContractifyAPI\Models\Operations\ListDepartmentsSecurity;

$sdk = ContractifyProduction::builder()
    ->build();

try {
    $request = new ListDepartmentsRequest();
    $request->company = 186332;

    $requestSecurity = new ListDepartmentsSecurity();
    $requestSecurity->oAuth2 = '';
    $requestSecurity->personalAccessToken = '';

    $response = $sdk->departments->listDepartments($request, $requestSecurity);

    if ($response->departmentCollection !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                   | Type                                                                                                                        | Required                                                                                                                    | Description                                                                                                                 |
| --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                  | [\Contractify\ContractifyAPI\Models\Operations\ListDepartmentsRequest](../../models/operations/ListDepartmentsRequest.md)   | :heavy_check_mark:                                                                                                          | The request object to use for the request.                                                                                  |
| `security`                                                                                                                  | [\Contractify\ContractifyAPI\Models\Operations\ListDepartmentsSecurity](../../models/operations/ListDepartmentsSecurity.md) | :heavy_check_mark:                                                                                                          | The security requirements to use for the request.                                                                           |


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
use \Contractify\ContractifyAPI\Models\Operations\UpdateDepartmentRequest;
use \Contractify\ContractifyAPI\Models\Shared\DepartmentWrite;
use \Contractify\ContractifyAPI\Models\Operations\UpdateDepartmentSecurity;

$sdk = ContractifyProduction::builder()
    ->build();

try {
    $request = new UpdateDepartmentRequest();
    $request->departmentWrite = new DepartmentWrite();
    $request->departmentWrite->name = 'Sales';
    $request->company = 774234;
    $request->department = 736918;

    $requestSecurity = new UpdateDepartmentSecurity();
    $requestSecurity->oAuth2 = '';
    $requestSecurity->personalAccessToken = '';

    $response = $sdk->departments->updateDepartment($request, $requestSecurity);

    if ($response->updateDepartment200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                     | Type                                                                                                                          | Required                                                                                                                      | Description                                                                                                                   |
| ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                    | [\Contractify\ContractifyAPI\Models\Operations\UpdateDepartmentRequest](../../models/operations/UpdateDepartmentRequest.md)   | :heavy_check_mark:                                                                                                            | The request object to use for the request.                                                                                    |
| `security`                                                                                                                    | [\Contractify\ContractifyAPI\Models\Operations\UpdateDepartmentSecurity](../../models/operations/UpdateDepartmentSecurity.md) | :heavy_check_mark:                                                                                                            | The security requirements to use for the request.                                                                             |


### Response

**[?\Contractify\ContractifyAPI\Models\Operations\UpdateDepartmentResponse](../../models/operations/UpdateDepartmentResponse.md)**

