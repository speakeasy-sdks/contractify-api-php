<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Contractify\ContractifyAPI\Models\Operations;


class DeleteDocumentResponse
{
    /**
     * Unauthenticated
     * 
     * @var ?\Contractify\ContractifyAPI\Models\Operations\DeleteDocumentResponseBody $fourHundredAndOneApplicationJsonObject
     */
	
    public ?DeleteDocumentResponseBody $fourHundredAndOneApplicationJsonObject = null;
    
    /**
     * Forbidden
     * 
     * @var ?\Contractify\ContractifyAPI\Models\Operations\DeleteDocumentDocumentsResponseBody $fourHundredAndThreeApplicationJsonObject
     */
	
    public ?DeleteDocumentDocumentsResponseBody $fourHundredAndThreeApplicationJsonObject = null;
    
    /**
     * Not Found
     * 
     * @var ?\Contractify\ContractifyAPI\Models\Operations\DeleteDocumentDocumentsResponseResponseBody $fourHundredAndFourApplicationJsonObject
     */
	
    public ?DeleteDocumentDocumentsResponseResponseBody $fourHundredAndFourApplicationJsonObject = null;
    
    /**
     * Invalid data posted
     * 
     * @var ?\Contractify\ContractifyAPI\Models\Operations\DeleteDocumentDocumentsResponse422ResponseBody $fourHundredAndTwentyTwoApplicationJsonObject
     */
	
    public ?DeleteDocumentDocumentsResponse422ResponseBody $fourHundredAndTwentyTwoApplicationJsonObject = null;
    
    /**
     * HTTP response content type for this operation
     * 
     * @var string $contentType
     */
	
    public string $contentType;
    
    /**
     * HTTP response status code for this operation
     * 
     * @var int $statusCode
     */
	
    public int $statusCode;
    
    /**
     * Raw HTTP response; suitable for custom response parsing
     * 
     * @var ?\Psr\Http\Message\ResponseInterface $rawResponse
     */
	
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
	public function __construct()
	{
		$this->fourHundredAndOneApplicationJsonObject = null;
		$this->fourHundredAndThreeApplicationJsonObject = null;
		$this->fourHundredAndFourApplicationJsonObject = null;
		$this->fourHundredAndTwentyTwoApplicationJsonObject = null;
		$this->contentType = "";
		$this->statusCode = 0;
		$this->rawResponse = null;
	}
}
