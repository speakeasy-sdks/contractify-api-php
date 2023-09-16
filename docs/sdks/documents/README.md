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
use \Contractify\ContractifyAPI\Models\Operations\DeleteDocumentRequest;
use \Contractify\ContractifyAPI\Models\Operations\DeleteDocumentSecurity;

$sdk = ContractifyProduction::builder()
    ->build();

try {
    $request = new DeleteDocumentRequest();
    $request->company = 87129;
    $request->document = 648172;

    $requestSecurity = new DeleteDocumentSecurity();
    $requestSecurity->oAuth2 = '';
    $requestSecurity->personalAccessToken = '';

    $response = $sdk->documents->deleteDocument($request, $requestSecurity);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                 | Type                                                                                                                      | Required                                                                                                                  | Description                                                                                                               |
| ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                | [\Contractify\ContractifyAPI\Models\Operations\DeleteDocumentRequest](../../models/operations/DeleteDocumentRequest.md)   | :heavy_check_mark:                                                                                                        | The request object to use for the request.                                                                                |
| `security`                                                                                                                | [\Contractify\ContractifyAPI\Models\Operations\DeleteDocumentSecurity](../../models/operations/DeleteDocumentSecurity.md) | :heavy_check_mark:                                                                                                        | The security requirements to use for the request.                                                                         |


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
use \Contractify\ContractifyAPI\Models\Operations\GetDocumentRequest;
use \Contractify\ContractifyAPI\Models\Operations\GetDocumentSecurity;

$sdk = ContractifyProduction::builder()
    ->build();

try {
    $request = new GetDocumentRequest();
    $request->company = 20218;
    $request->document = 368241;

    $requestSecurity = new GetDocumentSecurity();
    $requestSecurity->oAuth2 = '';
    $requestSecurity->personalAccessToken = '';

    $response = $sdk->documents->getDocument($request, $requestSecurity);

    if ($response->getDocument200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                           | Type                                                                                                                | Required                                                                                                            | Description                                                                                                         |
| ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                          | [\Contractify\ContractifyAPI\Models\Operations\GetDocumentRequest](../../models/operations/GetDocumentRequest.md)   | :heavy_check_mark:                                                                                                  | The request object to use for the request.                                                                          |
| `security`                                                                                                          | [\Contractify\ContractifyAPI\Models\Operations\GetDocumentSecurity](../../models/operations/GetDocumentSecurity.md) | :heavy_check_mark:                                                                                                  | The security requirements to use for the request.                                                                   |


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
use \Contractify\ContractifyAPI\Models\Operations\ListDocumentsRequest;
use \Contractify\ContractifyAPI\Models\Operations\ListDocumentsEsigningStatus;
use \Contractify\ContractifyAPI\Models\Operations\ListDocumentsSecurity;

$sdk = ContractifyProduction::builder()
    ->build();

try {
    $request = new ListDocumentsRequest();
    $request->company = 832620;
    $request->esigningStatus = ListDocumentsEsigningStatus::Revoked;
    $request->esigningUpdatedAfter = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-07-31T07:34:52.790Z');
    $request->page = 870013;
    $request->relationId = 870088;
    $request->signedAfter = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2021-07-31T09:34:50.024Z');

    $requestSecurity = new ListDocumentsSecurity();
    $requestSecurity->oAuth2 = '';
    $requestSecurity->personalAccessToken = '';

    $response = $sdk->documents->listDocuments($request, $requestSecurity);

    if ($response->documentCollection !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\Contractify\ContractifyAPI\Models\Operations\ListDocumentsRequest](../../models/operations/ListDocumentsRequest.md)   | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |
| `security`                                                                                                              | [\Contractify\ContractifyAPI\Models\Operations\ListDocumentsSecurity](../../models/operations/ListDocumentsSecurity.md) | :heavy_check_mark:                                                                                                      | The security requirements to use for the request.                                                                       |


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
use \Contractify\ContractifyAPI\Models\Operations\UpdateDocumentRequest;
use \Contractify\ContractifyAPI\Models\Shared\DocumentWrite;
use \Contractify\ContractifyAPI\Models\Shared\CustomFieldValueWrite;
use \Contractify\ContractifyAPI\Models\Operations\UpdateDocumentSecurity;

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
    $request->company = 799159;
    $request->document = 800911;

    $requestSecurity = new UpdateDocumentSecurity();
    $requestSecurity->oAuth2 = '';
    $requestSecurity->personalAccessToken = '';

    $response = $sdk->documents->updateDocument($request, $requestSecurity);

    if ($response->updateDocument200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                 | Type                                                                                                                      | Required                                                                                                                  | Description                                                                                                               |
| ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                | [\Contractify\ContractifyAPI\Models\Operations\UpdateDocumentRequest](../../models/operations/UpdateDocumentRequest.md)   | :heavy_check_mark:                                                                                                        | The request object to use for the request.                                                                                |
| `security`                                                                                                                | [\Contractify\ContractifyAPI\Models\Operations\UpdateDocumentSecurity](../../models/operations/UpdateDocumentSecurity.md) | :heavy_check_mark:                                                                                                        | The security requirements to use for the request.                                                                         |


### Response

**[?\Contractify\ContractifyAPI\Models\Operations\UpdateDocumentResponse](../../models/operations/UpdateDocumentResponse.md)**

