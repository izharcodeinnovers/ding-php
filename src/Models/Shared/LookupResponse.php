<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Ding\DingSDK\Models\Shared;


class LookupResponse
{
    /**
     * The carrier of the phone number.
     *
     * @var ?string $carrier
     */
    #[\JMS\Serializer\Annotation\SerializedName('carrier')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $carrier = null;

    /**
     * The ISO 3166-1 alpha-2 country code of the phone number.
     *
     * @var ?string $countryCode
     */
    #[\JMS\Serializer\Annotation\SerializedName('country_code')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $countryCode = null;

    /**
     * The type of phone line.
     *
     * @var ?LineType $lineType
     */
    #[\JMS\Serializer\Annotation\SerializedName('line_type')]
    #[\JMS\Serializer\Annotation\Type('\Ding\DingSDK\Models\Shared\LineType|null')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?LineType $lineType = null;

    /**
     * The mobile country code of the phone number.
     *
     * @var ?string $mcc
     */
    #[\JMS\Serializer\Annotation\SerializedName('mcc')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $mcc = null;

    /**
     * The mobile network code of the phone number.
     *
     * @var ?string $mnc
     */
    #[\JMS\Serializer\Annotation\SerializedName('mnc')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $mnc = null;

    /**
     * Whether the phone number has been ported.
     *
     * @var ?bool $numberPorted
     */
    #[\JMS\Serializer\Annotation\SerializedName('number_ported')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $numberPorted = null;

    /**
     * An E.164 formatted phone number.
     *
     * @var ?string $phoneNumber
     */
    #[\JMS\Serializer\Annotation\SerializedName('phone_number')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $phoneNumber = null;

    /**
     * @param  ?string  $carrier
     * @param  ?string  $countryCode
     * @param  ?LineType  $lineType
     * @param  ?string  $mcc
     * @param  ?string  $mnc
     * @param  ?bool  $numberPorted
     * @param  ?string  $phoneNumber
     */
    public function __construct(?string $carrier = null, ?string $countryCode = null, ?LineType $lineType = null, ?string $mcc = null, ?string $mnc = null, ?bool $numberPorted = null, ?string $phoneNumber = null)
    {
        $this->carrier = $carrier;
        $this->countryCode = $countryCode;
        $this->lineType = $lineType;
        $this->mcc = $mcc;
        $this->mnc = $mnc;
        $this->numberPorted = $numberPorted;
        $this->phoneNumber = $phoneNumber;
    }
}