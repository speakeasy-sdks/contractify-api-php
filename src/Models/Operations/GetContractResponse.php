<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Contractify\ContractifyAPI\Models\Operations;


class GetContractResponse
{
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
    
    /**
     * OK
     * 
     * @var ?\Contractify\ContractifyAPI\Models\Operations\GetContract200ApplicationJSON $getContract200ApplicationJSONObject
     */
	
    public ?GetContract200ApplicationJSON $getContract200ApplicationJSONObject = null;
    
    /**
     * Unauthenticated
     * 
     * @var ?\Contractify\ContractifyAPI\Models\Operations\GetContract401ApplicationJSON $getContract401ApplicationJSONObject
     */
	
    public ?GetContract401ApplicationJSON $getContract401ApplicationJSONObject = null;
    
    /**
     * Forbidden
     * 
     * @var ?\Contractify\ContractifyAPI\Models\Operations\GetContract403ApplicationJSON $getContract403ApplicationJSONObject
     */
	
    public ?GetContract403ApplicationJSON $getContract403ApplicationJSONObject = null;
    
    /**
     * Not Found
     * 
     * @var ?\Contractify\ContractifyAPI\Models\Operations\GetContract404ApplicationJSON $getContract404ApplicationJSONObject
     */
	
    public ?GetContract404ApplicationJSON $getContract404ApplicationJSONObject = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->getContract200ApplicationJSONObject = null;
		$this->getContract401ApplicationJSONObject = null;
		$this->getContract403ApplicationJSONObject = null;
		$this->getContract404ApplicationJSONObject = null;
	}
}
