<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Contractify\ContractifyAPI;

class LegalEntities 
{

	private SDKConfiguration $sdkConfiguration;

	/**
	 * @param SDKConfiguration $sdkConfig
	 */
	public function __construct(SDKConfiguration $sdkConfig)
	{
		$this->sdkConfiguration = $sdkConfig;
	}
	
    /**
     * List legal entities
     * 
     * List all the legal entities within a company
     * 
     * @param \Contractify\ContractifyAPI\Models\Operations\ListLegalEntitiesRequest $request
     * @return \Contractify\ContractifyAPI\Models\Operations\ListLegalEntitiesResponse
     */
	public function listLegalEntities(
        ?\Contractify\ContractifyAPI\Models\Operations\ListLegalEntitiesRequest $request,
    ): \Contractify\ContractifyAPI\Models\Operations\ListLegalEntitiesResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/api/companies/{company}/legal-entities', \Contractify\ContractifyAPI\Models\Operations\ListLegalEntitiesRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Contractify\ContractifyAPI\Models\Operations\ListLegalEntitiesResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->legalEntityCollection = $serializer->deserialize((string)$httpResponse->getBody(), 'Contractify\ContractifyAPI\Models\Shared\LegalEntityCollection', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 401) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->listLegalEntities401ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'Contractify\ContractifyAPI\Models\Operations\ListLegalEntities401ApplicationJSON', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 403) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->listLegalEntities403ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'Contractify\ContractifyAPI\Models\Operations\ListLegalEntities403ApplicationJSON', 'json');
            }
        }

        return $response;
    }
}