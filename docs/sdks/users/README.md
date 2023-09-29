# Users
(*users*)

### Available Operations

* [currentUser](#currentuser) - Current User
* [listUsers](#listusers) - List users

## currentUser

Get the current user details

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Contractify\ContractifyAPI\ContractifyProduction;
use \Contractify\ContractifyAPI\Models\Shared\Security;

$sdk = ContractifyProduction::builder()
    ->build();

try {
    $response = $sdk->users->currentUser();

    if ($response->currentUser200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```


### Response

**[?\Contractify\ContractifyAPI\Models\Operations\CurrentUserResponse](../../models/operations/CurrentUserResponse.md)**


## listUsers

List all the users within a company

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Contractify\ContractifyAPI\ContractifyProduction;
use \Contractify\ContractifyAPI\Models\Shared\Security;
use \Contractify\ContractifyAPI\Models\Operations\ListUsersRequest;

$sdk = ContractifyProduction::builder()
    ->build();

try {
    $request = new ListUsersRequest();
    $request->company = 606239;
    $request->page = 283983;

    $response = $sdk->users->listUsers($request);

    if ($response->userCollection !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                     | Type                                                                                                          | Required                                                                                                      | Description                                                                                                   |
| ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                    | [\Contractify\ContractifyAPI\Models\Operations\ListUsersRequest](../../models/operations/ListUsersRequest.md) | :heavy_check_mark:                                                                                            | The request object to use for the request.                                                                    |


### Response

**[?\Contractify\ContractifyAPI\Models\Operations\ListUsersResponse](../../models/operations/ListUsersResponse.md)**

