<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Contractify\ContractifyAPI\Models\Operations;


class DeleteContractResponse
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
     * Precondition failed
     * 
     * @var ?\Contractify\ContractifyAPI\Models\Operations\DeleteContract400ApplicationJSON $deleteContract400ApplicationJSONObject
     */
	
    public ?DeleteContract400ApplicationJSON $deleteContract400ApplicationJSONObject = null;
    
    /**
     * Unauthenticated
     * 
     * @var ?\Contractify\ContractifyAPI\Models\Operations\DeleteContract401ApplicationJSON $deleteContract401ApplicationJSONObject
     */
	
    public ?DeleteContract401ApplicationJSON $deleteContract401ApplicationJSONObject = null;
    
    /**
     * Forbidden
     * 
     * @var ?\Contractify\ContractifyAPI\Models\Operations\DeleteContract403ApplicationJSON $deleteContract403ApplicationJSONObject
     */
	
    public ?DeleteContract403ApplicationJSON $deleteContract403ApplicationJSONObject = null;
    
    /**
     * Not Found
     * 
     * @var ?\Contractify\ContractifyAPI\Models\Operations\DeleteContract404ApplicationJSON $deleteContract404ApplicationJSONObject
     */
	
    public ?DeleteContract404ApplicationJSON $deleteContract404ApplicationJSONObject = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->deleteContract400ApplicationJSONObject = null;
		$this->deleteContract401ApplicationJSONObject = null;
		$this->deleteContract403ApplicationJSONObject = null;
		$this->deleteContract404ApplicationJSONObject = null;
	}
}
