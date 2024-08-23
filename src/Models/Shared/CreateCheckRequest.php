<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Ding\DingSDK\Models\Shared;


class CreateCheckRequest
{
    /**
     * The authentication UUID that was returned when you created the authentication.
     *
     * @var string $authenticationUuid
     */
    #[\JMS\Serializer\Annotation\SerializedName('authentication_uuid')]
    public string $authenticationUuid;

    /**
     * The code that the user entered.
     *
     * @var string $checkCode
     */
    #[\JMS\Serializer\Annotation\SerializedName('check_code')]
    public string $checkCode;

    /**
     * Your customer UUID, which can be found in the API settings in the Dashboard.
     *
     * @var string $customerUuid
     */
    #[\JMS\Serializer\Annotation\SerializedName('customer_uuid')]
    public string $customerUuid;

    /**
     * @param  ?string  $authenticationUuid
     * @param  ?string  $checkCode
     * @param  ?string  $customerUuid
     */
    public function __construct(?string $authenticationUuid = null, ?string $checkCode = null, ?string $customerUuid = null)
    {
        $this->authenticationUuid = $authenticationUuid;
        $this->checkCode = $checkCode;
        $this->customerUuid = $customerUuid;
    }
}