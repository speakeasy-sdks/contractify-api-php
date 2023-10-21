<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Contractify\ContractifyAPI\Models\Operations;

use \Contractify\ContractifyAPI\Utils\SpeakeasyMetadata;
class UpdateDepartmentRequest
{
	#[SpeakeasyMetadata('request:mediaType=application/json')]
    public ?\Contractify\ContractifyAPI\Models\Shared\DepartmentWrite $departmentWrite = null;
    
    /**
     * Id of the company
     * 
     * @var int $company
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=company')]
    public int $company;
    
    /**
     * Id of the department
     * 
     * @var int $department
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=department')]
    public int $department;
    
	public function __construct()
	{
		$this->departmentWrite = null;
		$this->company = 0;
		$this->department = 0;
	}
}
