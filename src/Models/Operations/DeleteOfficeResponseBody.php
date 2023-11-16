<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Contractify\ContractifyAPI\Models\Operations;


/**
 * DeleteOfficeResponseBody - Precondition failed
 * 
 * @package Contractify\ContractifyAPI\Models\Operations
 * @access public
 */
class DeleteOfficeResponseBody
{
	#[\JMS\Serializer\Annotation\SerializedName('message')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $message = null;
    
	public function __construct()
	{
		$this->message = null;
	}
}
