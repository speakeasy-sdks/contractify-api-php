# Documents


### Available Operations

* [deleteDocument](#deletedocument) - Delete a document
* [getDocument](#getdocument) - Get a document
* [listDocuments](#listdocuments) - List documents
* [updateDocument](#updatedocument) - Update a document

## deleteDocument

Delete a document

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
    $request = new Operations\DeleteDocumentRequest();
    $request->company = 431806;
    $request->document = 379848;

    $response = $sdk->documents->deleteDocument($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\Contractify\ContractifyAPI\Models\Operations\DeleteDocumentRequest](../../models/operations/DeleteDocumentRequest.md) | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |


### Response

**[?\Contractify\ContractifyAPI\Models\Operations\DeleteDocumentResponse](../../models/operations/DeleteDocumentResponse.md)**


## getDocument

Get information about a document

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
    $request = new Operations\GetDocumentRequest();
    $request->company = 67810;
    $request->document = 267106;

    $response = $sdk->documents->getDocument($request);

    if ($response->twoHundredApplicationJsonObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                         | Type                                                                                                              | Required                                                                                                          | Description                                                                                                       |
| ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                        | [\Contractify\ContractifyAPI\Models\Operations\GetDocumentRequest](../../models/operations/GetDocumentRequest.md) | :heavy_check_mark:                                                                                                | The request object to use for the request.                                                                        |


### Response

**[?\Contractify\ContractifyAPI\Models\Operations\GetDocumentResponse](../../models/operations/GetDocumentResponse.md)**


## listDocuments

List all the documents within a company

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
    $request = new Operations\ListDocumentsRequest();
    $request->company = 581480;
    $request->esigningStatus = Operations\EsigningStatus::LegalDeclined;
    $request->esigningUpdatedAfter = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-04-10T07:42:42.736Z');
    $request->page = 893340;
    $request->relationId = 873217;
    $request->signedAfter = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-04-10T09:49:45.540Z');

    $response = $sdk->documents->listDocuments($request);

    if ($response->documentCollection !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\Contractify\ContractifyAPI\Models\Operations\ListDocumentsRequest](../../models/operations/ListDocumentsRequest.md) | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |


### Response

**[?\Contractify\ContractifyAPI\Models\Operations\ListDocumentsResponse](../../models/operations/ListDocumentsResponse.md)**


## updateDocument

Update a document

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
    $request = new Operations\UpdateDocumentRequest();
    $request->documentWrite = new Shared\DocumentWrite();
    $request->documentWrite->contracts = [
        1,
    ];
    $request->documentWrite->customFieldValues = [
        new Shared\CustomFieldValueWrite(),
    ];
    $request->documentWrite->description = 'Lorem ipsum dolor sit amet.';
    $request->documentWrite->dossiers = [
        1,
    ];
    $request->documentWrite->name = 'filename.pdf';
    $request->documentWrite->ownerId = 1;
    $request->company = 653381;
    $request->document = 312704;

    $response = $sdk->documents->updateDocument($request);

    if ($response->twoHundredApplicationJsonObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\Contractify\ContractifyAPI\Models\Operations\UpdateDocumentRequest](../../models/operations/UpdateDocumentRequest.md) | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |


### Response

**[?\Contractify\ContractifyAPI\Models\Operations\UpdateDocumentResponse](../../models/operations/UpdateDocumentResponse.md)**

