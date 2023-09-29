<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Contractify\ContractifyAPI;

class SDKConfiguration
{
	public ?\GuzzleHttp\ClientInterface $defaultClient = null;
	public ?\GuzzleHttp\ClientInterface $securityClient = null;
	public ?Models\Shared\Security $security = null;
	public string $serverUrl = '';
	public int $serverIndex = 0;
	public string $language = 'php';
	public string $openapiDocVersion = '2022-08-16';
	public string $sdkVersion = '1.8.0';
	public string $genVersion = '2.139.1';
	public string $userAgent = 'speakeasy-sdk/php 1.8.0 2.139.1 2022-08-16 contractify/contractify-api-php';
	

	public function getServerUrl(): string
	{
		
		if ($this->serverUrl !== '') {
			return $this->serverUrl;
		};
		return ContractifyProduction::SERVERS[$this->serverIndex];
	}
	
}