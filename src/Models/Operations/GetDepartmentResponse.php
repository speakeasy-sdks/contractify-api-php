<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Contractify\ContractifyAPI\Models\Operations;


class GetDepartmentResponse
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
     * @var ?\Contractify\ContractifyAPI\Models\Operations\GetDepartment200ApplicationJSON $getDepartment200ApplicationJSONObject
     */
	
    public ?GetDepartment200ApplicationJSON $getDepartment200ApplicationJSONObject = null;
    
    /**
     * Unauthenticated
     * 
     * @var ?\Contractify\ContractifyAPI\Models\Operations\GetDepartment401ApplicationJSON $getDepartment401ApplicationJSONObject
     */
	
    public ?GetDepartment401ApplicationJSON $getDepartment401ApplicationJSONObject = null;
    
    /**
     * Forbidden
     * 
     * @var ?\Contractify\ContractifyAPI\Models\Operations\GetDepartment403ApplicationJSON $getDepartment403ApplicationJSONObject
     */
	
    public ?GetDepartment403ApplicationJSON $getDepartment403ApplicationJSONObject = null;
    
    /**
     * Not Found
     * 
     * @var ?\Contractify\ContractifyAPI\Models\Operations\GetDepartment404ApplicationJSON $getDepartment404ApplicationJSONObject
     */
	
    public ?GetDepartment404ApplicationJSON $getDepartment404ApplicationJSONObject = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->getDepartment200ApplicationJSONObject = null;
		$this->getDepartment401ApplicationJSONObject = null;
		$this->getDepartment403ApplicationJSONObject = null;
		$this->getDepartment404ApplicationJSONObject = null;
	}
}
