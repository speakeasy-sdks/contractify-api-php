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

use \Contractify\ContractifyAPI\ContractifyProduction;
use \Contractify\ContractifyAPI\Models\Shared\Security;
use \Contractify\ContractifyAPI\Models\Operations\DeleteDocumentRequest;

$sdk = ContractifyProduction::builder()
    ->build();

try {
    $request = new DeleteDocumentRequest();
    $request->company = 648172;
    $request->document = 20218;

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

use \Contractify\ContractifyAPI\ContractifyProduction;
use \Contractify\ContractifyAPI\Models\Shared\Security;
use \Contractify\ContractifyAPI\Models\Operations\GetDocumentRequest;

$sdk = ContractifyProduction::builder()
    ->build();

try {
    $request = new GetDocumentRequest();
    $request->company = 368241;
    $request->document = 832620;

    $response = $sdk->documents->getDocument($request);

    if ($response->getDocument200ApplicationJSONObject !== null) {
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

use \Contractify\ContractifyAPI\ContractifyProduction;
use \Contractify\ContractifyAPI\Models\Shared\Security;
use \Contractify\ContractifyAPI\Models\Operations\ListDocumentsRequest;
use \Contractify\ContractifyAPI\Models\Operations\ListDocumentsEsigningStatus;

$sdk = ContractifyProduction::builder()
    ->build();

try {
    $request = new ListDocumentsRequest();
    $request->company = 957156;
    $request->esigningStatus = ListDocumentsEsigningStatus::FinishedButPartiallySigned;
    $request->esigningUpdatedAfter = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-02-17T10:41:36.857Z');
    $request->page = 870088;
    $request->relationId = 978619;
    $request->signedAfter = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-03-15T07:22:15.330Z');

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

use \Contractify\ContractifyAPI\ContractifyProduction;
use \Contractify\ContractifyAPI\Models\Shared\Security;
use \Contractify\ContractifyAPI\Models\Operations\UpdateDocumentRequest;
use \Contractify\ContractifyAPI\Models\Shared\DocumentWrite;
use \Contractify\ContractifyAPI\Models\Shared\CustomFieldValueWrite;

$sdk = ContractifyProduction::builder()
    ->build();

try {
    $request = new UpdateDocumentRequest();
    $request->documentWrite = new DocumentWrite();
    $request->documentWrite->contracts = [
        1,
    ];
    $request->documentWrite->customFieldValues = [
        new CustomFieldValueWrite(),
    ];
    $request->documentWrite->description = 'Lorem ipsum dolor sit amet.';
    $request->documentWrite->dossiers = [
        1,
    ];
    $request->documentWrite->name = 'filename.pdf';
    $request->documentWrite->ownerId = 1;
    $request->company = 800911;
    $request->document = 461479;

    $response = $sdk->documents->updateDocument($request);

    if ($response->updateDocument200ApplicationJSONObject !== null) {
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

