<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Contractify\ContractifyAPI\Models\Operations;


/**
 * UpdateDocument200ApplicationJSON - OK
 * 
 * @package Contractify\ContractifyAPI\Models\Operations
 * @access public
 */
class UpdateDocument200ApplicationJSON
{
	#[\JMS\Serializer\Annotation\SerializedName('data')]
    #[\JMS\Serializer\Annotation\Type('Contractify\ContractifyAPI\Models\Shared\DocumentRead')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\Contractify\ContractifyAPI\Models\Shared\DocumentRead $data = null;
    
	public function __construct()
	{
		$this->data = null;
	}
}
