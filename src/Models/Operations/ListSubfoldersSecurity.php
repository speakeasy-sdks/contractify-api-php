<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Contractify\ContractifyAPI\Models\Operations;

use \Contractify\ContractifyAPI\Utils\SpeakeasyMetadata;
class ListSubfoldersSecurity
{
	#[SpeakeasyMetadata('security:scheme=true,type=oauth2,name=Authorization')]
    public string $oAuth2;
    
	#[SpeakeasyMetadata('security:scheme=true,type=http,subtype=bearer,name=Authorization')]
    public string $personalAccessToken;
    
	public function __construct()
	{
		$this->oAuth2 = "";
		$this->personalAccessToken = "";
	}
}
