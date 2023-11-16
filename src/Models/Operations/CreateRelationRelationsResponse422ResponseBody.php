<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Contractify\ContractifyAPI\Models\Operations;


/**
 * CreateRelationRelationsResponse422ResponseBody - Invalid data posted
 * 
 * @package Contractify\ContractifyAPI\Models\Operations
 * @access public
 */
class CreateRelationRelationsResponse422ResponseBody
{
    /**
     * $errors
     * 
     * @var ?array<\Contractify\ContractifyAPI\Models\Operations\CreateRelationErrors> $errors
     */
	#[\JMS\Serializer\Annotation\SerializedName('errors')]
    #[\JMS\Serializer\Annotation\Type('array<Contractify\ContractifyAPI\Models\Operations\CreateRelationErrors>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $errors = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('message')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $message = null;
    
	public function __construct()
	{
		$this->errors = null;
		$this->message = null;
	}
}
