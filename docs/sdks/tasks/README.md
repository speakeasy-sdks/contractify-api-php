# tasks

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
use \Contractify\ContractifyAPI\Models\Operations\CreateTaskRequest;
use \Contractify\ContractifyAPI\Models\Shared\TaskWrite;
use \Contractify\ContractifyAPI\Models\Shared\TaskWriteDueDateDependsOn;
use \Contractify\ContractifyAPI\Models\Shared\TaskWriteStatus;
use \Contractify\ContractifyAPI\Models\Operations\CreateTaskSecurity;

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
    $request->company = 38425;

    $requestSecurity = new CreateTaskSecurity();
    $requestSecurity->oAuth2 = '';
    $requestSecurity->personalAccessToken = '';

    $response = $sdk->tasks->createTask($request, $requestSecurity);

    if ($response->createTask200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                         | Type                                                                                                              | Required                                                                                                          | Description                                                                                                       |
| ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                        | [\Contractify\ContractifyAPI\Models\Operations\CreateTaskRequest](../../models/operations/CreateTaskRequest.md)   | :heavy_check_mark:                                                                                                | The request object to use for the request.                                                                        |
| `security`                                                                                                        | [\Contractify\ContractifyAPI\Models\Operations\CreateTaskSecurity](../../models/operations/CreateTaskSecurity.md) | :heavy_check_mark:                                                                                                | The security requirements to use for the request.                                                                 |


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
use \Contractify\ContractifyAPI\Models\Operations\DeleteTaskRequest;
use \Contractify\ContractifyAPI\Models\Operations\DeleteTaskSecurity;

$sdk = ContractifyProduction::builder()
    ->build();

try {
    $request = new DeleteTaskRequest();
    $request->company = 438601;
    $request->task = 634274;

    $requestSecurity = new DeleteTaskSecurity();
    $requestSecurity->oAuth2 = '';
    $requestSecurity->personalAccessToken = '';

    $response = $sdk->tasks->deleteTask($request, $requestSecurity);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                         | Type                                                                                                              | Required                                                                                                          | Description                                                                                                       |
| ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                        | [\Contractify\ContractifyAPI\Models\Operations\DeleteTaskRequest](../../models/operations/DeleteTaskRequest.md)   | :heavy_check_mark:                                                                                                | The request object to use for the request.                                                                        |
| `security`                                                                                                        | [\Contractify\ContractifyAPI\Models\Operations\DeleteTaskSecurity](../../models/operations/DeleteTaskSecurity.md) | :heavy_check_mark:                                                                                                | The security requirements to use for the request.                                                                 |


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
use \Contractify\ContractifyAPI\Models\Operations\GetTaskRequest;
use \Contractify\ContractifyAPI\Models\Operations\GetTaskSecurity;

$sdk = ContractifyProduction::builder()
    ->build();

try {
    $request = new GetTaskRequest();
    $request->company = 988374;
    $request->task = 958950;

    $requestSecurity = new GetTaskSecurity();
    $requestSecurity->oAuth2 = '';
    $requestSecurity->personalAccessToken = '';

    $response = $sdk->tasks->getTask($request, $requestSecurity);

    if ($response->getTask200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                   | Type                                                                                                        | Required                                                                                                    | Description                                                                                                 |
| ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                  | [\Contractify\ContractifyAPI\Models\Operations\GetTaskRequest](../../models/operations/GetTaskRequest.md)   | :heavy_check_mark:                                                                                          | The request object to use for the request.                                                                  |
| `security`                                                                                                  | [\Contractify\ContractifyAPI\Models\Operations\GetTaskSecurity](../../models/operations/GetTaskSecurity.md) | :heavy_check_mark:                                                                                          | The security requirements to use for the request.                                                           |


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
use \Contractify\ContractifyAPI\Models\Operations\ListTasksRequest;
use \Contractify\ContractifyAPI\Models\Operations\ListTasksSecurity;

$sdk = ContractifyProduction::builder()
    ->build();

try {
    $request = new ListTasksRequest();
    $request->company = 102044;
    $request->page = 652790;

    $requestSecurity = new ListTasksSecurity();
    $requestSecurity->oAuth2 = '';
    $requestSecurity->personalAccessToken = '';

    $response = $sdk->tasks->listTasks($request, $requestSecurity);

    if ($response->taskCollection !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                       | Type                                                                                                            | Required                                                                                                        | Description                                                                                                     |
| --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                      | [\Contractify\ContractifyAPI\Models\Operations\ListTasksRequest](../../models/operations/ListTasksRequest.md)   | :heavy_check_mark:                                                                                              | The request object to use for the request.                                                                      |
| `security`                                                                                                      | [\Contractify\ContractifyAPI\Models\Operations\ListTasksSecurity](../../models/operations/ListTasksSecurity.md) | :heavy_check_mark:                                                                                              | The security requirements to use for the request.                                                               |


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
use \Contractify\ContractifyAPI\Models\Operations\UpdateTaskRequest;
use \Contractify\ContractifyAPI\Models\Shared\TaskUpdate;
use \Contractify\ContractifyAPI\Models\Shared\TaskUpdateDueDateDependsOn;
use \Contractify\ContractifyAPI\Models\Shared\TaskUpdateStatus;
use \Contractify\ContractifyAPI\Models\Operations\UpdateTaskSecurity;

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
    $request->company = 208876;
    $request->task = 635059;

    $requestSecurity = new UpdateTaskSecurity();
    $requestSecurity->oAuth2 = '';
    $requestSecurity->personalAccessToken = '';

    $response = $sdk->tasks->updateTask($request, $requestSecurity);

    if ($response->updateTask200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                         | Type                                                                                                              | Required                                                                                                          | Description                                                                                                       |
| ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                        | [\Contractify\ContractifyAPI\Models\Operations\UpdateTaskRequest](../../models/operations/UpdateTaskRequest.md)   | :heavy_check_mark:                                                                                                | The request object to use for the request.                                                                        |
| `security`                                                                                                        | [\Contractify\ContractifyAPI\Models\Operations\UpdateTaskSecurity](../../models/operations/UpdateTaskSecurity.md) | :heavy_check_mark:                                                                                                | The security requirements to use for the request.                                                                 |


### Response

**[?\Contractify\ContractifyAPI\Models\Operations\UpdateTaskResponse](../../models/operations/UpdateTaskResponse.md)**

