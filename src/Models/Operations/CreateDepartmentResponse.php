<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Contractify\ContractifyAPI\Models\Operations;


class CreateDepartmentResponse
{
    /**
     * Created
     * 
     * @var ?\Contractify\ContractifyAPI\Models\Operations\CreateDepartmentResponseBody $twoHundredAndOneApplicationJsonObject
     */
	
    public ?CreateDepartmentResponseBody $twoHundredAndOneApplicationJsonObject = null;
    
    /**
     * Unauthenticated
     * 
     * @var ?\Contractify\ContractifyAPI\Models\Operations\CreateDepartmentDepartmentsResponseBody $fourHundredAndOneApplicationJsonObject
     */
	
    public ?CreateDepartmentDepartmentsResponseBody $fourHundredAndOneApplicationJsonObject = null;
    
    /**
     * Forbidden
     * 
     * @var ?\Contractify\ContractifyAPI\Models\Operations\CreateDepartmentDepartmentsResponseResponseBody $fourHundredAndThreeApplicationJsonObject
     */
	
    public ?CreateDepartmentDepartmentsResponseResponseBody $fourHundredAndThreeApplicationJsonObject = null;
    
    /**
     * Invalid data posted
     * 
     * @var ?\Contractify\ContractifyAPI\Models\Operations\CreateDepartmentDepartmentsResponse422ResponseBody $fourHundredAndTwentyTwoApplicationJsonObject
     */
	
    public ?CreateDepartmentDepartmentsResponse422ResponseBody $fourHundredAndTwentyTwoApplicationJsonObject = null;
    
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
		$this->twoHundredAndOneApplicationJsonObject = null;
		$this->fourHundredAndOneApplicationJsonObject = null;
		$this->fourHundredAndThreeApplicationJsonObject = null;
		$this->fourHundredAndTwentyTwoApplicationJsonObject = null;
		$this->contentType = "";
		$this->statusCode = 0;
		$this->rawResponse = null;
	}
}
