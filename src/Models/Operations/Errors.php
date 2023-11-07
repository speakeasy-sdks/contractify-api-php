<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Contractify\ContractifyAPI\Models\Operations;


class Errors
{
    /**
     * $errors
     * 
     * @var ?array<string> $errors
     */
	#[\JMS\Serializer\Annotation\SerializedName('errors')]
    #[\JMS\Serializer\Annotation\Type('array<string>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $errors = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('field')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $field = null;
    
	public function __construct()
	{
		$this->errors = null;
		$this->field = null;
	}
}
