<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace ding\sdk;

class Otp 
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
     * Check an authentication code
     * 
     * @param \ding\sdk\Models\Shared\CreateCheckRequest $request
     * @return \ding\sdk\Models\Operations\CheckResponse
     */
	public function check(
        ?\ding\sdk\Models\Shared\CreateCheckRequest $request,
    ): \ding\sdk\Models\Operations\CheckResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/check');
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "request", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \ding\sdk\Models\Operations\CheckResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->createCheckResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'ding\sdk\Models\Shared\CreateCheckResponse', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 400) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->errorResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'ding\sdk\Models\Shared\ErrorResponse', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Create an authentication
     * 
     * @param \ding\sdk\Models\Shared\CreateAuthenticationRequest $request
     * @return \ding\sdk\Models\Operations\CreateAutenticationResponse
     */
	public function createAutentication(
        ?\ding\sdk\Models\Shared\CreateAuthenticationRequest $request,
    ): \ding\sdk\Models\Operations\CreateAutenticationResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/authentication');
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "request", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \ding\sdk\Models\Operations\CreateAutenticationResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->createAuthenticationResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'ding\sdk\Models\Shared\CreateAuthenticationResponse', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 400) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->errorResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'ding\sdk\Models\Shared\ErrorResponse', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Retry an authentication
     * 
     * @param \ding\sdk\Models\Shared\RetryAuthenticationRequest $request
     * @return \ding\sdk\Models\Operations\RetryResponse
     */
	public function retry(
        ?\ding\sdk\Models\Shared\RetryAuthenticationRequest $request,
    ): \ding\sdk\Models\Operations\RetryResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/retry');
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "request", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \ding\sdk\Models\Operations\RetryResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->retryAuthenticationResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'ding\sdk\Models\Shared\RetryAuthenticationResponse', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 400) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->errorResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'ding\sdk\Models\Shared\ErrorResponse', 'json');
            }
        }

        return $response;
    }
}