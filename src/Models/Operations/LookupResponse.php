<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Ding\DingSDK\Models\Operations;

use Ding\DingSDK\Models\Shared;
class LookupResponse
{
    /**
     * HTTP response content type for this operation
     *
     * @var string $contentType
     */
    public string $contentType;

    /**
     * Bad Request
     *
     * @var ?Shared\ErrorResponse $errorResponse
     */
    public ?Shared\ErrorResponse $errorResponse = null;

    /**
     * OK
     *
     * @var ?Shared\LookupResponse $lookupResponse
     */
    public ?Shared\LookupResponse $lookupResponse = null;

    /**
     * HTTP response status code for this operation
     *
     * @var int $statusCode
     */
    public int $statusCode;

    /**
     * Raw HTTP response; suitable for custom response parsing
     *
     * @var \Psr\Http\Message\ResponseInterface $rawResponse
     */
    public \Psr\Http\Message\ResponseInterface $rawResponse;

    /**
     * @param  string  $contentType
     * @param  int  $statusCode
     * @param  \Psr\Http\Message\ResponseInterface  $rawResponse
     * @param  ?Shared\ErrorResponse  $errorResponse
     * @param  ?Shared\LookupResponse  $lookupResponse
     */
    public function __construct(string $contentType, int $statusCode, \Psr\Http\Message\ResponseInterface $rawResponse, ?Shared\ErrorResponse $errorResponse = null, ?Shared\LookupResponse $lookupResponse = null)
    {
        $this->contentType = $contentType;
        $this->statusCode = $statusCode;
        $this->rawResponse = $rawResponse;
        $this->errorResponse = $errorResponse;
        $this->lookupResponse = $lookupResponse;
    }
}