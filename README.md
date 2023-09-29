# contractify/contractify-api-php

<!-- Start SDK Installation -->
## SDK Installation

### Composer

To install the SDK first add the below to your `composer.json` file:

```json
{
    "repositories": [
        {
            "type": "github",
            "url": "https://github.com/speakeasy-sdks/contractify-api-php.git"
        }
    ],
    "require": {
        "contractify/contractify-api-php": "*"
    }
}
```

Then run the following command:

```bash
composer update
```
<!-- End SDK Installation -->

## SDK Example Usage
<!-- Start SDK Example Usage -->
```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Contractify\ContractifyAPI\ContractifyProduction;
use \Contractify\ContractifyAPI\Models\Shared\Security;
use \Contractify\ContractifyAPI\Models\Operations\ListContractTypesRequest;

$sdk = ContractifyProduction::builder()
    ->build();

try {
    $request = new ListContractTypesRequest();
    $request->company = 839467;

    $response = $sdk->contractTypes->listContractTypes($request);

    if ($response->contractTypeCollection !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
<!-- End SDK Example Usage -->

<!-- Start SDK Available Operations -->
## Available Resources and Operations


### [contractTypes](docs/sdks/contracttypes/README.md)

* [listContractTypes](docs/sdks/contracttypes/README.md#listcontracttypes) - List contract types

### [contracts](docs/sdks/contracts/README.md)

* [createContract](docs/sdks/contracts/README.md#createcontract) - Create a contract
* [deleteContract](docs/sdks/contracts/README.md#deletecontract) - Delete a contract
* [getContract](docs/sdks/contracts/README.md#getcontract) - Get a contract
* [listContracts](docs/sdks/contracts/README.md#listcontracts) - List contracts
* [updateContract](docs/sdks/contracts/README.md#updatecontract) - Update a contract

### [customFields](docs/sdks/customfields/README.md)

* [listCustomFields](docs/sdks/customfields/README.md#listcustomfields) - List custom fields

### [departments](docs/sdks/departments/README.md)

* [createDepartment](docs/sdks/departments/README.md#createdepartment) - Create a department
* [deleteDepartment](docs/sdks/departments/README.md#deletedepartment) - Delete a department
* [getDepartment](docs/sdks/departments/README.md#getdepartment) - Get a department
* [listDepartments](docs/sdks/departments/README.md#listdepartments) - List departments
* [updateDepartment](docs/sdks/departments/README.md#updatedepartment) - Update a department

### [documents](docs/sdks/documents/README.md)

* [deleteDocument](docs/sdks/documents/README.md#deletedocument) - Delete a document
* [getDocument](docs/sdks/documents/README.md#getdocument) - Get a document
* [listDocuments](docs/sdks/documents/README.md#listdocuments) - List documents
* [updateDocument](docs/sdks/documents/README.md#updatedocument) - Update a document

### [legalEntities](docs/sdks/legalentities/README.md)

* [listLegalEntities](docs/sdks/legalentities/README.md#listlegalentities) - List legal entities

### [offices](docs/sdks/offices/README.md)

* [createOffice](docs/sdks/offices/README.md#createoffice) - Create an office
* [deleteOffice](docs/sdks/offices/README.md#deleteoffice) - Delete an office
* [getOffice](docs/sdks/offices/README.md#getoffice) - Get an office
* [listOffices](docs/sdks/offices/README.md#listoffices) - List offices
* [updateOffice](docs/sdks/offices/README.md#updateoffice) - Update an office

### [relations](docs/sdks/relations/README.md)

* [createRelation](docs/sdks/relations/README.md#createrelation) - Create a relation
* [deleteRelation](docs/sdks/relations/README.md#deleterelation) - Delete a relation
* [getRelation](docs/sdks/relations/README.md#getrelation) - Get a relation
* [listRelations](docs/sdks/relations/README.md#listrelations) - List relations
* [updateRelation](docs/sdks/relations/README.md#updaterelation) - Update a relation

### [subfolders](docs/sdks/subfolders/README.md)

* [listSubfolders](docs/sdks/subfolders/README.md#listsubfolders) - List subfolders

### [tasks](docs/sdks/tasks/README.md)

* [createTask](docs/sdks/tasks/README.md#createtask) - Create a task
* [deleteTask](docs/sdks/tasks/README.md#deletetask) - Delete a task
* [getTask](docs/sdks/tasks/README.md#gettask) - Get a task
* [listTasks](docs/sdks/tasks/README.md#listtasks) - List tasks
* [updateTask](docs/sdks/tasks/README.md#updatetask) - Update a task

### [users](docs/sdks/users/README.md)

* [currentUser](docs/sdks/users/README.md#currentuser) - Current User
* [listUsers](docs/sdks/users/README.md#listusers) - List users
<!-- End SDK Available Operations -->



<!-- Start Dev Containers -->

<!-- End Dev Containers -->

<!-- Placeholder for Future Speakeasy SDK Sections -->



### Maturity

This SDK is in beta, and there may be breaking changes between versions without a major version update. Therefore, we recommend pinning usage
to a specific package version. This way, you can install the same version each time without breaking changes unless you are intentionally
looking for the latest version.

### Contributions

While we value open-source contributions to this SDK, this library is generated programmatically.
Feel free to open a PR or a Github issue as a proof of concept and we'll do our best to include it in a future release !

### SDK Created by [Speakeasy](https://docs.speakeasyapi.dev/docs/using-speakeasy/client-sdks)
