# Departments


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

use \Contractify\ContractifyAPI;
use \Contractify\ContractifyAPI\Models\Shared;
use \Contractify\ContractifyAPI\Models\Operations;

$security = new Shared\Security();
$security->oAuth2 = 'Bearer <YOUR_ACCESS_TOKEN_HERE>';

$sdk = ContractifyAPI\ContractifyProduction::builder()->setSecurity($security)->build();

try {
        $request = new Operations\CreateDepartmentRequest();
    $request->departmentWrite = new Shared\DepartmentWrite();
    $request->departmentWrite->name = 'Sales';
    $request->company = 33324;;

    $response = $sdk->departments->createDepartment($request);

    if ($response->twoHundredAndOneApplicationJsonObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                   | Type                                                                                                                        | Required                                                                                                                    | Description                                                                                                                 |
| --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                  | [\Contractify\ContractifyAPI\Models\Operations\CreateDepartmentRequest](../../Models/Operations/CreateDepartmentRequest.md) | :heavy_check_mark:                                                                                                          | The request object to use for the request.                                                                                  |


### Response

**[?\Contractify\ContractifyAPI\Models\Operations\CreateDepartmentResponse](../../Models/Operations/CreateDepartmentResponse.md)**


## deleteDepartment

Delete a department

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Contractify\ContractifyAPI;
use \Contractify\ContractifyAPI\Models\Shared;
use \Contractify\ContractifyAPI\Models\Operations;

$security = new Shared\Security();
$security->oAuth2 = 'Bearer <YOUR_ACCESS_TOKEN_HERE>';

$sdk = ContractifyAPI\ContractifyProduction::builder()->setSecurity($security)->build();

try {
        $request = new Operations\DeleteDepartmentRequest();
    $request->company = 701942;
    $request->department = 751163;;

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
| `$request`                                                                                                                  | [\Contractify\ContractifyAPI\Models\Operations\DeleteDepartmentRequest](../../Models/Operations/DeleteDepartmentRequest.md) | :heavy_check_mark:                                                                                                          | The request object to use for the request.                                                                                  |


### Response

**[?\Contractify\ContractifyAPI\Models\Operations\DeleteDepartmentResponse](../../Models/Operations/DeleteDepartmentResponse.md)**


## getDepartment

Get information about a department

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Contractify\ContractifyAPI;
use \Contractify\ContractifyAPI\Models\Shared;
use \Contractify\ContractifyAPI\Models\Operations;

$security = new Shared\Security();
$security->oAuth2 = 'Bearer <YOUR_ACCESS_TOKEN_HERE>';

$sdk = ContractifyAPI\ContractifyProduction::builder()->setSecurity($security)->build();

try {
        $request = new Operations\GetDepartmentRequest();
    $request->company = 255130;
    $request->department = 855529;;

    $response = $sdk->departments->getDepartment($request);

    if ($response->twoHundredApplicationJsonObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\Contractify\ContractifyAPI\Models\Operations\GetDepartmentRequest](../../Models/Operations/GetDepartmentRequest.md) | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |


### Response

**[?\Contractify\ContractifyAPI\Models\Operations\GetDepartmentResponse](../../Models/Operations/GetDepartmentResponse.md)**


## listDepartments

List all the departments within a company

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Contractify\ContractifyAPI;
use \Contractify\ContractifyAPI\Models\Shared;
use \Contractify\ContractifyAPI\Models\Operations;

$security = new Shared\Security();
$security->oAuth2 = 'Bearer <YOUR_ACCESS_TOKEN_HERE>';

$sdk = ContractifyAPI\ContractifyProduction::builder()->setSecurity($security)->build();

try {
        $request = new Operations\ListDepartmentsRequest();
    $request->company = 117069;;

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
| `$request`                                                                                                                | [\Contractify\ContractifyAPI\Models\Operations\ListDepartmentsRequest](../../Models/Operations/ListDepartmentsRequest.md) | :heavy_check_mark:                                                                                                        | The request object to use for the request.                                                                                |


### Response

**[?\Contractify\ContractifyAPI\Models\Operations\ListDepartmentsResponse](../../Models/Operations/ListDepartmentsResponse.md)**


## updateDepartment

Update a department

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Contractify\ContractifyAPI;
use \Contractify\ContractifyAPI\Models\Shared;
use \Contractify\ContractifyAPI\Models\Operations;

$security = new Shared\Security();
$security->oAuth2 = 'Bearer <YOUR_ACCESS_TOKEN_HERE>';

$sdk = ContractifyAPI\ContractifyProduction::builder()->setSecurity($security)->build();

try {
        $request = new Operations\UpdateDepartmentRequest();
    $request->departmentWrite = new Shared\DepartmentWrite();
    $request->departmentWrite->name = 'Sales';
    $request->company = 431122;
    $request->department = 2342;;

    $response = $sdk->departments->updateDepartment($request);

    if ($response->twoHundredApplicationJsonObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                   | Type                                                                                                                        | Required                                                                                                                    | Description                                                                                                                 |
| --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                  | [\Contractify\ContractifyAPI\Models\Operations\UpdateDepartmentRequest](../../Models/Operations/UpdateDepartmentRequest.md) | :heavy_check_mark:                                                                                                          | The request object to use for the request.                                                                                  |


### Response

**[?\Contractify\ContractifyAPI\Models\Operations\UpdateDepartmentResponse](../../Models/Operations/UpdateDepartmentResponse.md)**

