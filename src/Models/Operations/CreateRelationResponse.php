<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Contractify\ContractifyAPI\Models\Operations;


class CreateRelationResponse
{
	
    public string $contentType;
    
	
    public int $statusCode;
    
	
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
    /**
     * Created
     * 
     * @var ?\Contractify\ContractifyAPI\Models\Operations\CreateRelation201ApplicationJSON $createRelation201ApplicationJSONObject
     */
	
    public ?CreateRelation201ApplicationJSON $createRelation201ApplicationJSONObject = null;
    
    /**
     * Unauthenticated
     * 
     * @var ?\Contractify\ContractifyAPI\Models\Operations\CreateRelation401ApplicationJSON $createRelation401ApplicationJSONObject
     */
	
    public ?CreateRelation401ApplicationJSON $createRelation401ApplicationJSONObject = null;
    
    /**
     * Forbidden
     * 
     * @var ?\Contractify\ContractifyAPI\Models\Operations\CreateRelation403ApplicationJSON $createRelation403ApplicationJSONObject
     */
	
    public ?CreateRelation403ApplicationJSON $createRelation403ApplicationJSONObject = null;
    
    /**
     * Invalid data posted
     * 
     * @var ?\Contractify\ContractifyAPI\Models\Operations\CreateRelation422ApplicationJSON $createRelation422ApplicationJSONObject
     */
	
    public ?CreateRelation422ApplicationJSON $createRelation422ApplicationJSONObject = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->createRelation201ApplicationJSONObject = null;
		$this->createRelation401ApplicationJSONObject = null;
		$this->createRelation403ApplicationJSONObject = null;
		$this->createRelation422ApplicationJSONObject = null;
	}
}
