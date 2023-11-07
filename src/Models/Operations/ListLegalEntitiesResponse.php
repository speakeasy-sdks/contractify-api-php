<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Contractify\ContractifyAPI\Models\Operations;


class ListLegalEntitiesResponse
{
    /**
     * Unauthenticated
     * 
     * @var ?\Contractify\ContractifyAPI\Models\Operations\ListLegalEntitiesResponseBody $fourHundredAndOneApplicationJsonObject
     */
	
    public ?ListLegalEntitiesResponseBody $fourHundredAndOneApplicationJsonObject = null;
    
    /**
     * Forbidden
     * 
     * @var ?\Contractify\ContractifyAPI\Models\Operations\ListLegalEntitiesLegalEntitiesResponseBody $fourHundredAndThreeApplicationJsonObject
     */
	
    public ?ListLegalEntitiesLegalEntitiesResponseBody $fourHundredAndThreeApplicationJsonObject = null;
    
    /**
     * HTTP response content type for this operation
     * 
     * @var string $contentType
     */
	
    public string $contentType;
    
    /**
     * OK
     * 
     * @var ?\Contractify\ContractifyAPI\Models\Shared\LegalEntityCollection $legalEntityCollection
     */
	
    public ?\Contractify\ContractifyAPI\Models\Shared\LegalEntityCollection $legalEntityCollection = null;
    
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
		$this->contentType = "";
		$this->legalEntityCollection = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
	}
}
