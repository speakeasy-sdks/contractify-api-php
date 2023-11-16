<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Contractify\ContractifyAPI\Models\Operations;


class UpdateDocumentResponse
{
    /**
     * OK
     * 
     * @var ?\Contractify\ContractifyAPI\Models\Operations\UpdateDocumentResponseBody $twoHundredApplicationJsonObject
     */
	
    public ?UpdateDocumentResponseBody $twoHundredApplicationJsonObject = null;
    
    /**
     * Unauthenticated
     * 
     * @var ?\Contractify\ContractifyAPI\Models\Operations\UpdateDocumentDocumentsResponseBody $fourHundredAndOneApplicationJsonObject
     */
	
    public ?UpdateDocumentDocumentsResponseBody $fourHundredAndOneApplicationJsonObject = null;
    
    /**
     * Forbidden
     * 
     * @var ?\Contractify\ContractifyAPI\Models\Operations\UpdateDocumentDocumentsResponseResponseBody $fourHundredAndThreeApplicationJsonObject
     */
	
    public ?UpdateDocumentDocumentsResponseResponseBody $fourHundredAndThreeApplicationJsonObject = null;
    
    /**
     * Not Found
     * 
     * @var ?\Contractify\ContractifyAPI\Models\Operations\UpdateDocumentDocumentsResponse404ResponseBody $fourHundredAndFourApplicationJsonObject
     */
	
    public ?UpdateDocumentDocumentsResponse404ResponseBody $fourHundredAndFourApplicationJsonObject = null;
    
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
	
    public ?\Psr\Http\Message\ResponseInterface $rawResponse;
    
	public function __construct()
	{
		$this->twoHundredApplicationJsonObject = null;
		$this->fourHundredAndOneApplicationJsonObject = null;
		$this->fourHundredAndThreeApplicationJsonObject = null;
		$this->fourHundredAndFourApplicationJsonObject = null;
		$this->contentType = "";
		$this->statusCode = 0;
		$this->rawResponse = null;
	}
}
