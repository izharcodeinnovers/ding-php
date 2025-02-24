<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Ding\DingSDK\Models\Shared;


/**
 * The type of phone line.
 *
 *   * `CallingCards` - Numbers that are associated with providers of pre-paid domestic and international calling cards.
 *   * `FixedLine` - Landline phone numbers.
 *   * `InternetServiceProvider` - Numbers reserved for ISPs.
 *   * `LocalRate` - Numbers that can be assigned non-geographically.
 *   * `Mobile` - Mobile phone numbers.
 *   * `Other` - Other types of services.
 *   * `Pager` - Number ranges specifically allocated to paging devices.
 *   * `PayPhone` - Allocated numbers for payphone kiosks in some countries.
 *   * `PremiumRate` - Landline numbers where the calling party pays more than standard.
 *   * `Satellite` - Satellite phone numbers.
 *   * `Service` - Automated applications.
 *   * `SharedCost` - Specific landline ranges where the cost of making the call is shared between the calling and called party.
 *   * `ShortCodesCommercial` - Short codes are memorable, easy-to-use numbers, like the UK's NHS 111, often sold to businesses. Not available in all countries.
 *   * `TollFree` - Number where the called party pays for the cost of the call not the calling party.
 *   * `UniversalAccess` - Number ranges reserved for Universal Access initiatives.
 *   * `Unknown` - Unknown phone number type.
 *   * `VPN` - Numbers are used exclusively within a private telecommunications network, connecting the operator's terminals internally and not accessible via the public telephone network.
 *   * `VoiceMail` - A specific category of Interactive Voice Response (IVR) services.
 *   * `Voip` - Specific ranges for providers of VoIP services to allow incoming calls from the regular telephony network.
 *
 */
enum LineType: string
{
    case CallingCards = 'CallingCards';
    case FixedLine = 'FixedLine';
    case InternetServiceProvider = 'InternetServiceProvider';
    case LocalRate = 'LocalRate';
    case Mobile = 'Mobile';
    case Other = 'Other';
    case Pager = 'Pager';
    case PayPhone = 'PayPhone';
    case PremiumRate = 'PremiumRate';
    case Satellite = 'Satellite';
    case Service = 'Service';
    case SharedCost = 'SharedCost';
    case ShortCodesCommercial = 'ShortCodesCommercial';
    case TollFree = 'TollFree';
    case UniversalAccess = 'UniversalAccess';
    case Unknown = 'Unknown';
    case Vpn = 'VPN';
    case VoiceMail = 'VoiceMail';
    case Voip = 'Voip';
}
