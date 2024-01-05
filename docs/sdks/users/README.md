# Users


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

use \Contractify\ContractifyAPI;
use \Contractify\ContractifyAPI\Models\Shared;

$security = new Shared\Security();
$security->oAuth2 = 'Bearer <YOUR_ACCESS_TOKEN_HERE>';

$sdk = ContractifyAPI\ContractifyProduction::builder()->setSecurity($security)->build();

try {
    $response = $sdk->users->currentUser();

    if ($response->twoHundredApplicationJsonObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```


### Response

**[?\Contractify\ContractifyAPI\Models\Operations\CurrentUserResponse](../../Models/Operations/CurrentUserResponse.md)**


## listUsers

List all the users within a company

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
        $request = new Operations\ListUsersRequest();
    $request->company = 606239;
    $request->page = 283983;;

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
| `$request`                                                                                                    | [\Contractify\ContractifyAPI\Models\Operations\ListUsersRequest](../../Models/Operations/ListUsersRequest.md) | :heavy_check_mark:                                                                                            | The request object to use for the request.                                                                    |


### Response

**[?\Contractify\ContractifyAPI\Models\Operations\ListUsersResponse](../../Models/Operations/ListUsersResponse.md)**

