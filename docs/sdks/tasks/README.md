# Tasks


### Available Operations

* [createTask](#createtask) - Create a task
* [deleteTask](#deletetask) - Delete a task
* [getTask](#gettask) - Get a task
* [listTasks](#listtasks) - List tasks
* [updateTask](#updatetask) - Update a task

## createTask

Create a task

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
    $request = new Operations\CreateTaskRequest();
    $request->taskWrite = new Shared\TaskWrite();
    $request->taskWrite->contractId = 1;
    $request->taskWrite->description = 'Lorem ipsum dolor sit amet.';
    $request->taskWrite->dueDate = DateTime::createFromFormat('Y-m-d', '2021-12-31');
    $request->taskWrite->dueDateDependsOn = Shared\TaskWriteDueDateDependsOn::EndDate;
    $request->taskWrite->dueDateInterval = '-P10D';
    $request->taskWrite->ownerId = 1;
    $request->taskWrite->reminderDuration = 'P1M';
    $request->taskWrite->repetitionInterval = 'P1Y';
    $request->taskWrite->status = Shared\TaskWriteStatus::Accomplished;
    $request->taskWrite->title = 'My task';
    $request->company = 296904;

    $response = $sdk->tasks->createTask($request);

    if ($response->twoHundredApplicationJsonObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                       | Type                                                                                                            | Required                                                                                                        | Description                                                                                                     |
| --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                      | [\Contractify\ContractifyAPI\Models\Operations\CreateTaskRequest](../../Models/Operations/CreateTaskRequest.md) | :heavy_check_mark:                                                                                              | The request object to use for the request.                                                                      |


### Response

**[?\Contractify\ContractifyAPI\Models\Operations\CreateTaskResponse](../../Models/Operations/CreateTaskResponse.md)**


## deleteTask

Delete a task

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
    $request = new Operations\DeleteTaskRequest();
    $request->company = 357574;
    $request->task = 394977;

    $response = $sdk->tasks->deleteTask($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                       | Type                                                                                                            | Required                                                                                                        | Description                                                                                                     |
| --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                      | [\Contractify\ContractifyAPI\Models\Operations\DeleteTaskRequest](../../Models/Operations/DeleteTaskRequest.md) | :heavy_check_mark:                                                                                              | The request object to use for the request.                                                                      |


### Response

**[?\Contractify\ContractifyAPI\Models\Operations\DeleteTaskResponse](../../Models/Operations/DeleteTaskResponse.md)**


## getTask

Get a task

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
    $request = new Operations\GetTaskRequest();
    $request->company = 717011;
    $request->task = 649018;

    $response = $sdk->tasks->getTask($request);

    if ($response->twoHundredApplicationJsonObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                 | Type                                                                                                      | Required                                                                                                  | Description                                                                                               |
| --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                | [\Contractify\ContractifyAPI\Models\Operations\GetTaskRequest](../../Models/Operations/GetTaskRequest.md) | :heavy_check_mark:                                                                                        | The request object to use for the request.                                                                |


### Response

**[?\Contractify\ContractifyAPI\Models\Operations\GetTaskResponse](../../Models/Operations/GetTaskResponse.md)**


## listTasks

List all tasks within a company

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
    $request = new Operations\ListTasksRequest();
    $request->company = 715197;
    $request->page = 192941;

    $response = $sdk->tasks->listTasks($request);

    if ($response->taskCollection !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                     | Type                                                                                                          | Required                                                                                                      | Description                                                                                                   |
| ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                    | [\Contractify\ContractifyAPI\Models\Operations\ListTasksRequest](../../Models/Operations/ListTasksRequest.md) | :heavy_check_mark:                                                                                            | The request object to use for the request.                                                                    |


### Response

**[?\Contractify\ContractifyAPI\Models\Operations\ListTasksResponse](../../Models/Operations/ListTasksResponse.md)**


## updateTask

Update a task

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
    $request = new Operations\UpdateTaskRequest();
    $request->taskUpdate = new Shared\TaskUpdate();
    $request->taskUpdate->description = 'Lorem ipsum dolor sit amet.';
    $request->taskUpdate->dueDate = DateTime::createFromFormat('Y-m-d', '2021-12-31');
    $request->taskUpdate->dueDateDependsOn = Shared\TaskUpdateDueDateDependsOn::EndDate;
    $request->taskUpdate->dueDateInterval = '-P10D';
    $request->taskUpdate->ownerId = 1;
    $request->taskUpdate->reminderDuration = 'P1M';
    $request->taskUpdate->repetitionInterval = 'P1Y';
    $request->taskUpdate->status = Shared\TaskUpdateStatus::Accomplished;
    $request->taskUpdate->title = 'My task';
    $request->company = 449699;
    $request->task = 675064;

    $response = $sdk->tasks->updateTask($request);

    if ($response->twoHundredApplicationJsonObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                       | Type                                                                                                            | Required                                                                                                        | Description                                                                                                     |
| --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                      | [\Contractify\ContractifyAPI\Models\Operations\UpdateTaskRequest](../../Models/Operations/UpdateTaskRequest.md) | :heavy_check_mark:                                                                                              | The request object to use for the request.                                                                      |


### Response

**[?\Contractify\ContractifyAPI\Models\Operations\UpdateTaskResponse](../../Models/Operations/UpdateTaskResponse.md)**

