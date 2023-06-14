<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Contractify\ContractifyAPI\Models\Shared;


/**
 * DepartmentCollection - OK
 * 
 * @package Contractify\ContractifyAPI\Models\Shared
 * @access public
 */
class DepartmentCollection
{
    /**
     * $data
     * 
     * @var ?array<\Contractify\ContractifyAPI\Models\Shared\DepartmentRead> $data
     */
	#[\JMS\Serializer\Annotation\SerializedName('data')]
    #[\JMS\Serializer\Annotation\Type('array<Contractify\ContractifyAPI\Models\Shared\DepartmentRead>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $data = null;
    
	public function __construct()
	{
		$this->data = null;
	}
}
