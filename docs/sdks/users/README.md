# users

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
use \Contractify\ContractifyAPI\Models\Operations\CurrentUserSecurity;

$sdk = ContractifyProduction::builder()
    ->build();

try {
    $requestSecurity = new CurrentUserSecurity();
    $requestSecurity->oAuth2 = '';
    $requestSecurity->personalAccessToken = '';

    $response = $sdk->users->currentUser($requestSecurity);

    if ($response->currentUser200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                           | Type                                                                                                                | Required                                                                                                            | Description                                                                                                         |
| ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- |
| `security`                                                                                                          | [\Contractify\ContractifyAPI\Models\Operations\CurrentUserSecurity](../../models/operations/CurrentUserSecurity.md) | :heavy_check_mark:                                                                                                  | The security requirements to use for the request.                                                                   |


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
use \Contractify\ContractifyAPI\Models\Operations\ListUsersRequest;
use \Contractify\ContractifyAPI\Models\Operations\ListUsersSecurity;

$sdk = ContractifyProduction::builder()
    ->build();

try {
    $request = new ListUsersRequest();
    $request->company = 161309;
    $request->page = 995300;

    $requestSecurity = new ListUsersSecurity();
    $requestSecurity->oAuth2 = '';
    $requestSecurity->personalAccessToken = '';

    $response = $sdk->users->listUsers($request, $requestSecurity);

    if ($response->userCollection !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                       | Type                                                                                                            | Required                                                                                                        | Description                                                                                                     |
| --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                      | [\Contractify\ContractifyAPI\Models\Operations\ListUsersRequest](../../models/operations/ListUsersRequest.md)   | :heavy_check_mark:                                                                                              | The request object to use for the request.                                                                      |
| `security`                                                                                                      | [\Contractify\ContractifyAPI\Models\Operations\ListUsersSecurity](../../models/operations/ListUsersSecurity.md) | :heavy_check_mark:                                                                                              | The security requirements to use for the request.                                                               |


### Response

**[?\Contractify\ContractifyAPI\Models\Operations\ListUsersResponse](../../models/operations/ListUsersResponse.md)**

