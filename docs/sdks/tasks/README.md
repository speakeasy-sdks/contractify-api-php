# Tasks
(*tasks*)

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

use \Contractify\ContractifyAPI\ContractifyProduction;
use \Contractify\ContractifyAPI\Models\Shared\Security;
use \Contractify\ContractifyAPI\Models\Operations\CreateTaskRequest;
use \Contractify\ContractifyAPI\Models\Shared\TaskWrite;
use \Contractify\ContractifyAPI\Models\Shared\TaskWriteDueDateDependsOn;
use \Contractify\ContractifyAPI\Models\Shared\TaskWriteStatus;

$sdk = ContractifyProduction::builder()
    ->build();

try {
    $request = new CreateTaskRequest();
    $request->taskWrite = new TaskWrite();
    $request->taskWrite->contractId = 1;
    $request->taskWrite->description = 'Lorem ipsum dolor sit amet.';
    $request->taskWrite->dueDate = DateTime::createFromFormat('Y-m-d', '2021-12-31');
    $request->taskWrite->dueDateDependsOn = TaskWriteDueDateDependsOn::EndDate;
    $request->taskWrite->dueDateInterval = '-P10D';
    $request->taskWrite->ownerId = 1;
    $request->taskWrite->reminderDuration = 'P1M';
    $request->taskWrite->repetitionInterval = 'P1Y';
    $request->taskWrite->status = TaskWriteStatus::Accomplished;
    $request->taskWrite->title = 'My task';
    $request->company = 296904;

    $response = $sdk->tasks->createTask($request);

    if ($response->createTask200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                       | Type                                                                                                            | Required                                                                                                        | Description                                                                                                     |
| --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                      | [\Contractify\ContractifyAPI\Models\Operations\CreateTaskRequest](../../models/operations/CreateTaskRequest.md) | :heavy_check_mark:                                                                                              | The request object to use for the request.                                                                      |


### Response

**[?\Contractify\ContractifyAPI\Models\Operations\CreateTaskResponse](../../models/operations/CreateTaskResponse.md)**


## deleteTask

Delete a task

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Contractify\ContractifyAPI\ContractifyProduction;
use \Contractify\ContractifyAPI\Models\Shared\Security;
use \Contractify\ContractifyAPI\Models\Operations\DeleteTaskRequest;

$sdk = ContractifyProduction::builder()
    ->build();

try {
    $request = new DeleteTaskRequest();
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
| `$request`                                                                                                      | [\Contractify\ContractifyAPI\Models\Operations\DeleteTaskRequest](../../models/operations/DeleteTaskRequest.md) | :heavy_check_mark:                                                                                              | The request object to use for the request.                                                                      |


### Response

**[?\Contractify\ContractifyAPI\Models\Operations\DeleteTaskResponse](../../models/operations/DeleteTaskResponse.md)**


## getTask

Get a task

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Contractify\ContractifyAPI\ContractifyProduction;
use \Contractify\ContractifyAPI\Models\Shared\Security;
use \Contractify\ContractifyAPI\Models\Operations\GetTaskRequest;

$sdk = ContractifyProduction::builder()
    ->build();

try {
    $request = new GetTaskRequest();
    $request->company = 717011;
    $request->task = 649018;

    $response = $sdk->tasks->getTask($request);

    if ($response->getTask200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                 | Type                                                                                                      | Required                                                                                                  | Description                                                                                               |
| --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                | [\Contractify\ContractifyAPI\Models\Operations\GetTaskRequest](../../models/operations/GetTaskRequest.md) | :heavy_check_mark:                                                                                        | The request object to use for the request.                                                                |


### Response

**[?\Contractify\ContractifyAPI\Models\Operations\GetTaskResponse](../../models/operations/GetTaskResponse.md)**


## listTasks

List all tasks within a company

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Contractify\ContractifyAPI\ContractifyProduction;
use \Contractify\ContractifyAPI\Models\Shared\Security;
use \Contractify\ContractifyAPI\Models\Operations\ListTasksRequest;

$sdk = ContractifyProduction::builder()
    ->build();

try {
    $request = new ListTasksRequest();
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
| `$request`                                                                                                    | [\Contractify\ContractifyAPI\Models\Operations\ListTasksRequest](../../models/operations/ListTasksRequest.md) | :heavy_check_mark:                                                                                            | The request object to use for the request.                                                                    |


### Response

**[?\Contractify\ContractifyAPI\Models\Operations\ListTasksResponse](../../models/operations/ListTasksResponse.md)**


## updateTask

Update a task

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Contractify\ContractifyAPI\ContractifyProduction;
use \Contractify\ContractifyAPI\Models\Shared\Security;
use \Contractify\ContractifyAPI\Models\Operations\UpdateTaskRequest;
use \Contractify\ContractifyAPI\Models\Shared\TaskUpdate;
use \Contractify\ContractifyAPI\Models\Shared\TaskUpdateDueDateDependsOn;
use \Contractify\ContractifyAPI\Models\Shared\TaskUpdateStatus;

$sdk = ContractifyProduction::builder()
    ->build();

try {
    $request = new UpdateTaskRequest();
    $request->taskUpdate = new TaskUpdate();
    $request->taskUpdate->description = 'Lorem ipsum dolor sit amet.';
    $request->taskUpdate->dueDate = DateTime::createFromFormat('Y-m-d', '2021-12-31');
    $request->taskUpdate->dueDateDependsOn = TaskUpdateDueDateDependsOn::EndDate;
    $request->taskUpdate->dueDateInterval = '-P10D';
    $request->taskUpdate->ownerId = 1;
    $request->taskUpdate->reminderDuration = 'P1M';
    $request->taskUpdate->repetitionInterval = 'P1Y';
    $request->taskUpdate->status = TaskUpdateStatus::Accomplished;
    $request->taskUpdate->title = 'My task';
    $request->company = 449699;
    $request->task = 675064;

    $response = $sdk->tasks->updateTask($request);

    if ($response->updateTask200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                       | Type                                                                                                            | Required                                                                                                        | Description                                                                                                     |
| --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                      | [\Contractify\ContractifyAPI\Models\Operations\UpdateTaskRequest](../../models/operations/UpdateTaskRequest.md) | :heavy_check_mark:                                                                                              | The request object to use for the request.                                                                      |


### Response

**[?\Contractify\ContractifyAPI\Models\Operations\UpdateTaskResponse](../../models/operations/UpdateTaskResponse.md)**

