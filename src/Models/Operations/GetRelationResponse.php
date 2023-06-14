<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Contractify\ContractifyAPI\Models\Operations;


class GetRelationResponse
{
	
    public string $contentType;
    
	
    public int $statusCode;
    
	
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
    /**
     * OK
     * 
     * @var ?\Contractify\ContractifyAPI\Models\Operations\GetRelation200ApplicationJSON $getRelation200ApplicationJSONObject
     */
	
    public ?GetRelation200ApplicationJSON $getRelation200ApplicationJSONObject = null;
    
    /**
     * Unauthenticated
     * 
     * @var ?\Contractify\ContractifyAPI\Models\Operations\GetRelation401ApplicationJSON $getRelation401ApplicationJSONObject
     */
	
    public ?GetRelation401ApplicationJSON $getRelation401ApplicationJSONObject = null;
    
    /**
     * Forbidden
     * 
     * @var ?\Contractify\ContractifyAPI\Models\Operations\GetRelation403ApplicationJSON $getRelation403ApplicationJSONObject
     */
	
    public ?GetRelation403ApplicationJSON $getRelation403ApplicationJSONObject = null;
    
    /**
     * Not Found
     * 
     * @var ?\Contractify\ContractifyAPI\Models\Operations\GetRelation404ApplicationJSON $getRelation404ApplicationJSONObject
     */
	
    public ?GetRelation404ApplicationJSON $getRelation404ApplicationJSONObject = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->getRelation200ApplicationJSONObject = null;
		$this->getRelation401ApplicationJSONObject = null;
		$this->getRelation403ApplicationJSONObject = null;
		$this->getRelation404ApplicationJSONObject = null;
	}
}
