<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Ding\DingSDK\Models\Shared;


class RetryAuthenticationResponse
{
    /**
     * The UUID of the corresponding authentication.
     *
     * @var ?string $authenticationUuid
     */
    #[\JMS\Serializer\Annotation\SerializedName('authentication_uuid')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $authenticationUuid = null;

    /**
     *
     * @var ?\DateTime $createdAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('created_at')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $createdAt = null;

    /**
     * The time at which the next retry will be available.
     *
     * @var ?\DateTime $nextRetryAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('next_retry_at')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $nextRetryAt = null;

    /**
     * The number of remaining retries.
     *
     * @var ?int $remainingRetry
     */
    #[\JMS\Serializer\Annotation\SerializedName('remaining_retry')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?int $remainingRetry = null;

    /**
     * The status of the retry. Possible values are:
     *
     *   * `approved` - The retry was approved and a new code was sent.
     *   * `denied` - The retry was denied.
     *   * `no_attempt` - No attempt was sent yet, so a retry cannot be completed.
     *   * `rate_limited` - The authentication was rate limited and cannot be retried.
     *   * `expired_auth` - The authentication has expired and cannot be retried.
     *   * `already_validated` - The authentication has already been validated.
     *
     *
     * @var ?RetryAuthenticationResponseStatus $status
     */
    #[\JMS\Serializer\Annotation\SerializedName('status')]
    #[\JMS\Serializer\Annotation\Type('\Ding\DingSDK\Models\Shared\RetryAuthenticationResponseStatus|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?RetryAuthenticationResponseStatus $status = null;

    /**
     * @param  ?string  $authenticationUuid
     * @param  ?\DateTime  $createdAt
     * @param  ?\DateTime  $nextRetryAt
     * @param  ?int  $remainingRetry
     * @param  ?RetryAuthenticationResponseStatus  $status
     */
    public function __construct(?string $authenticationUuid = null, ?\DateTime $createdAt = null, ?\DateTime $nextRetryAt = null, ?int $remainingRetry = null, ?RetryAuthenticationResponseStatus $status = null)
    {
        $this->authenticationUuid = $authenticationUuid;
        $this->createdAt = $createdAt;
        $this->nextRetryAt = $nextRetryAt;
        $this->remainingRetry = $remainingRetry;
        $this->status = $status;
    }
}