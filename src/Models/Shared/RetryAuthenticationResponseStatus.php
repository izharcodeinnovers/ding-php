<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Ding\DingSDK\Models\Shared;


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
 */
enum RetryAuthenticationResponseStatus: string
{
    case Approved = 'approved';
    case Denied = 'denied';
    case NoAttempt = 'no_attempt';
    case RateLimited = 'rate_limited';
    case ExpiredAuth = 'expired_auth';
    case AlreadyValidated = 'already_validated';
}
