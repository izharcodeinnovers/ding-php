<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Ding\DingSDK\Models\Shared;


/**
 * A machine-readable code that describes the error. Possible values are:
 * 
 *   * `invalid_phone_number` - This is not a valid E.164 number.
 *   * `internal_server_error` - An internal server error occurred.
 *   * `bad_request` - The request was malformed.
 *   * `account_invalid` - The provided customer UUID is invalid.
 *   * `negative_balance` - You have a negative balance.
 *   * `invalid_line` - Ding does not support this type of phone number.
 *   * `unsupported_region` - Ding does not support this region yet.
 *   * `invalid_auth_uuid` - The provided authentication UUID is invalid.
 *   * `blocked_number` - The phone number is in the blocklist.
 *   * `invalid_app_version` - The provided application version is invalid.
 *   * `invalid_os_version` - The provided OS version is invalid.
 *   * `invalid_device_model` - The provided device model is invalid.
 *   * `invalid_device_id` - The provided device ID is invalid.
 *   * `no_associated_auth_found` - The associated authentication was not found.
 *   * `duplicated_feedback_status` - Duplicated feedback status has found.
 *   * `invalid_template_id` - The provided template ID is invalid.
 * 
 */
enum Code: string
{
    case InvalidPhoneNumber = 'invalid_phone_number';
    case InternalServerError = 'internal_server_error';
    case BadRequest = 'bad_request';
    case AccountInvalid = 'account_invalid';
    case NegativeBalance = 'negative_balance';
    case InvalidLine = 'invalid_line';
    case UnsupportedRegion = 'unsupported_region';
    case InvalidAuthUuid = 'invalid_auth_uuid';
    case InvalidAppRealm = 'invalid_app_realm';
    case UnsupportedAppRealmDeviceType = 'unsupported_app_realm_device_type';
    case AppRealmRequireDeviceType = 'app_realm_require_device_type';
    case BlockedNumber = 'blocked_number';
    case InvalidAppVersion = 'invalid_app_version';
    case InvalidOsVersion = 'invalid_os_version';
    case InvalidDeviceModel = 'invalid_device_model';
    case InvalidDeviceId = 'invalid_device_id';
    case NoAssociatedAuthFound = 'no_associated_auth_found';
    case DuplicatedFeedbackStatus = 'duplicated_feedback_status';
    case InvalidTemplateId = 'invalid_template_id';
}
