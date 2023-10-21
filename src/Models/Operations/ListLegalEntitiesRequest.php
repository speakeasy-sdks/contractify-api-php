<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Contractify\ContractifyAPI\Models\Operations;

use \Contractify\ContractifyAPI\Utils\SpeakeasyMetadata;
class ListLegalEntitiesRequest
{
    /**
     * Id of the company
     * 
     * @var int $company
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=company')]
    public int $company;
    
	public function __construct()
	{
		$this->company = 0;
	}
}
