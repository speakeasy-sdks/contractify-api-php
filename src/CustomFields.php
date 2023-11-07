<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Contractify\ContractifyAPI;

class CustomFields 
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
     * List custom fields
     * 
     * List all the custom fields within a company
     * 
     * @param \Contractify\ContractifyAPI\Models\Operations\ListCustomFieldsRequest $request
     * @return \Contractify\ContractifyAPI\Models\Operations\ListCustomFieldsResponse
     */
	public function listCustomFields(
        ?\Contractify\ContractifyAPI\Models\Operations\ListCustomFieldsRequest $request,
    ): \Contractify\ContractifyAPI\Models\Operations\ListCustomFieldsResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/api/companies/{company}/custom-fields', \Contractify\ContractifyAPI\Models\Operations\ListCustomFieldsRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Contractify\ContractifyAPI\Models\Operations\ListCustomFieldsResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->customFieldCollection = $serializer->deserialize((string)$httpResponse->getBody(), 'Contractify\ContractifyAPI\Models\Shared\CustomFieldCollection', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 401) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->fourHundredAndOneApplicationJsonObject = $serializer->deserialize((string)$httpResponse->getBody(), 'Contractify\ContractifyAPI\Models\Operations\ListCustomFieldsResponseBody', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 403) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->fourHundredAndThreeApplicationJsonObject = $serializer->deserialize((string)$httpResponse->getBody(), 'Contractify\ContractifyAPI\Models\Operations\ListCustomFieldsCustomFieldsResponseBody', 'json');
            }
        }

        return $response;
    }
}