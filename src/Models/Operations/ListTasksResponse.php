<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Contractify\ContractifyAPI\Models\Operations;


class ListTasksResponse
{
    /**
     * Unauthenticated
     * 
     * @var ?\Contractify\ContractifyAPI\Models\Operations\ListTasksResponseBody $fourHundredAndOneApplicationJsonObject
     */
	
    public ?ListTasksResponseBody $fourHundredAndOneApplicationJsonObject = null;
    
    /**
     * Forbidden
     * 
     * @var ?\Contractify\ContractifyAPI\Models\Operations\ListTasksTasksResponseBody $fourHundredAndThreeApplicationJsonObject
     */
	
    public ?ListTasksTasksResponseBody $fourHundredAndThreeApplicationJsonObject = null;
    
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
    
    /**
     * OK
     * 
     * @var ?\Contractify\ContractifyAPI\Models\Shared\TaskCollection $taskCollection
     */
	
    public ?\Contractify\ContractifyAPI\Models\Shared\TaskCollection $taskCollection = null;
    
	public function __construct()
	{
		$this->fourHundredAndOneApplicationJsonObject = null;
		$this->fourHundredAndThreeApplicationJsonObject = null;
		$this->contentType = "";
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->taskCollection = null;
	}
}
