# contractify/contractify-api-php

<div align="left">
    <a href="https://speakeasyapi.dev/"><img src="https://custom-icon-badges.demolab.com/badge/-Built%20By%20Speakeasy-212015?style=for-the-badge&logoColor=FBE331&logo=speakeasy&labelColor=545454" /></a>
    <a href="https://github.com/speakeasy-sdks/contractify-api-php.git/actions"><img src="https://img.shields.io/github/actions/workflow/status/speakeasy-sdks/contractify-api-php/speakeasy_sdk_generation.yml?style=for-the-badge" /></a>
    
</div>


## 🏗 **Welcome to your new SDK!** 🏗

It has been generated successfully based on your OpenAPI spec. However, it is not yet ready for production use. Here are some next steps:
- [ ] 🛠 Make your SDK feel handcrafted by [customizing it](https://www.speakeasyapi.dev/docs/customize-sdks)
- [ ] ♻️ Refine your SDK quickly by iterating locally with the [Speakeasy CLI](https://github.com/speakeasy-api/speakeasy)
- [ ] 🎁 Publish your SDK to package managers by [configuring automatic publishing](https://www.speakeasyapi.dev/docs/productionize-sdks/publish-sdks)
- [ ] ✨ When ready to productionize, delete this section from the README
<!-- Start SDK Installation [installation] -->
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
<!-- End SDK Installation [installation] -->

<!-- Start SDK Example Usage [usage] -->
## SDK Example Usage

### Example

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use Contractify\ContractifyAPI;
use Contractify\ContractifyAPI\Models\Shared;
use Contractify\ContractifyAPI\Models\Operations;

$security = new Shared\Security();
$security->oAuth2 = 'Bearer <YOUR_ACCESS_TOKEN_HERE>';

$sdk = ContractifyAPI\ContractifyProduction::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\ListContractTypesRequest();
    $request->company = 839467;

    $response = $sdk->contractTypes->listContractTypes($request);

    if ($response->contractTypeCollection !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}

```
<!-- End SDK Example Usage [usage] -->

<!-- Start Available Resources and Operations [operations] -->
## Available Resources and Operations

### [ContractTypes](docs/sdks/contracttypes/README.md)

* [listContractTypes](docs/sdks/contracttypes/README.md#listcontracttypes) - List contract types

### [Contracts](docs/sdks/contracts/README.md)

* [createContract](docs/sdks/contracts/README.md#createcontract) - Create a contract
* [deleteContract](docs/sdks/contracts/README.md#deletecontract) - Delete a contract
* [getContract](docs/sdks/contracts/README.md#getcontract) - Get a contract
* [listContracts](docs/sdks/contracts/README.md#listcontracts) - List contracts
* [updateContract](docs/sdks/contracts/README.md#updatecontract) - Update a contract

### [CustomFields](docs/sdks/customfields/README.md)

* [listCustomFields](docs/sdks/customfields/README.md#listcustomfields) - List custom fields

### [Departments](docs/sdks/departments/README.md)

* [createDepartment](docs/sdks/departments/README.md#createdepartment) - Create a department
* [deleteDepartment](docs/sdks/departments/README.md#deletedepartment) - Delete a department
* [getDepartment](docs/sdks/departments/README.md#getdepartment) - Get a department
* [listDepartments](docs/sdks/departments/README.md#listdepartments) - List departments
* [updateDepartment](docs/sdks/departments/README.md#updatedepartment) - Update a department

### [Documents](docs/sdks/documents/README.md)

* [deleteDocument](docs/sdks/documents/README.md#deletedocument) - Delete a document
* [getDocument](docs/sdks/documents/README.md#getdocument) - Get a document
* [listDocuments](docs/sdks/documents/README.md#listdocuments) - List documents
* [updateDocument](docs/sdks/documents/README.md#updatedocument) - Update a document

### [Subfolders](docs/sdks/subfolders/README.md)

* [listSubfolders](docs/sdks/subfolders/README.md#listsubfolders) - List subfolders

### [LegalEntities](docs/sdks/legalentities/README.md)

* [listLegalEntities](docs/sdks/legalentities/README.md#listlegalentities) - List legal entities

### [Offices](docs/sdks/offices/README.md)

* [createOffice](docs/sdks/offices/README.md#createoffice) - Create an office
* [deleteOffice](docs/sdks/offices/README.md#deleteoffice) - Delete an office
* [getOffice](docs/sdks/offices/README.md#getoffice) - Get an office
* [listOffices](docs/sdks/offices/README.md#listoffices) - List offices
* [updateOffice](docs/sdks/offices/README.md#updateoffice) - Update an office

### [Relations](docs/sdks/relations/README.md)

* [createRelation](docs/sdks/relations/README.md#createrelation) - Create a relation
* [deleteRelation](docs/sdks/relations/README.md#deleterelation) - Delete a relation
* [getRelation](docs/sdks/relations/README.md#getrelation) - Get a relation
* [listRelations](docs/sdks/relations/README.md#listrelations) - List relations
* [updateRelation](docs/sdks/relations/README.md#updaterelation) - Update a relation

### [Tasks](docs/sdks/tasks/README.md)

* [createTask](docs/sdks/tasks/README.md#createtask) - Create a task
* [deleteTask](docs/sdks/tasks/README.md#deletetask) - Delete a task
* [getTask](docs/sdks/tasks/README.md#gettask) - Get a task
* [listTasks](docs/sdks/tasks/README.md#listtasks) - List tasks
* [updateTask](docs/sdks/tasks/README.md#updatetask) - Update a task

### [Users](docs/sdks/users/README.md)

* [currentUser](docs/sdks/users/README.md#currentuser) - Current User
* [listUsers](docs/sdks/users/README.md#listusers) - List users
<!-- End Available Resources and Operations [operations] -->

<!-- Start Server Selection [server] -->
## Server Selection

## Server Selection

### Select Server by Index

You can override the default server globally by passing a server index to the `server_idx: int` optional parameter when initializing the SDK client instance. The selected server will then be used as the default on the operations that use it. This table lists the indexes associated with the available servers:

| # | Server | Variables |
| - | ------ | --------- |
| 0 | `https://app.contractify.be` | None |




### Override Server URL Per-Client

The default server can also be overridden globally by passing a URL to the `server_url: str` optional parameter when initializing the SDK client instance. For example:
<!-- End Server Selection [server] -->

<!-- Placeholder for Future Speakeasy SDK Sections -->

# Development

## Maturity

This SDK is in beta, and there may be breaking changes between versions without a major version update. Therefore, we recommend pinning usage
to a specific package version. This way, you can install the same version each time without breaking changes unless you are intentionally
looking for the latest version.

## Contributions

While we value open-source contributions to this SDK, this library is generated programmatically.
Feel free to open a PR or a Github issue as a proof of concept and we'll do our best to include it in a future release!

### SDK Created by [Speakeasy](https://docs.speakeasyapi.dev/docs/using-speakeasy/client-sdks)
