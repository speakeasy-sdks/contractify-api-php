<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Contractify\ContractifyAPI\Models\Operations;


/**
 * UpdateDepartmentResponseBody - OK
 * 
 * @package Contractify\ContractifyAPI\Models\Operations
 * @access public
 */
class UpdateDepartmentResponseBody
{
	#[\JMS\Serializer\Annotation\SerializedName('data')]
    #[\JMS\Serializer\Annotation\Type('Contractify\ContractifyAPI\Models\Shared\DepartmentRead')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\Contractify\ContractifyAPI\Models\Shared\DepartmentRead $data = null;
    
	public function __construct()
	{
		$this->data = null;
	}
}
