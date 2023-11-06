<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Contractify\ContractifyAPI;

class ContractTypes 
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
     * List contract types
     * 
     * List all the contract types within a company
     * 
     * @param \Contractify\ContractifyAPI\Models\Operations\ListContractTypesRequest $request
     * @return \Contractify\ContractifyAPI\Models\Operations\ListContractTypesResponse
     */
	public function listContractTypes(
        ?\Contractify\ContractifyAPI\Models\Operations\ListContractTypesRequest $request,
    ): \Contractify\ContractifyAPI\Models\Operations\ListContractTypesResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/api/companies/{company}/contract-types', \Contractify\ContractifyAPI\Models\Operations\ListContractTypesRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Contractify\ContractifyAPI\Models\Operations\ListContractTypesResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->contractTypeCollection = $serializer->deserialize((string)$httpResponse->getBody(), 'Contractify\ContractifyAPI\Models\Shared\ContractTypeCollection', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 401) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->listContractTypes401ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'Contractify\ContractifyAPI\Models\Operations\ListContractTypes401ApplicationJSON', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 403) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->listContractTypes403ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'Contractify\ContractifyAPI\Models\Operations\ListContractTypes403ApplicationJSON', 'json');
            }
        }

        return $response;
    }
}