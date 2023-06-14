<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Contractify\ContractifyAPI\Models\Shared;


class CustomFieldValueRead
{
	#[\JMS\Serializer\Annotation\SerializedName('custom_field_id')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $customFieldId = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $id = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('value')]
    #[\JMS\Serializer\Annotation\Type('mixed')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public mixed $value = null;
    
	public function __construct()
	{
		$this->customFieldId = null;
		$this->id = null;
		$this->value = null;
	}
}
