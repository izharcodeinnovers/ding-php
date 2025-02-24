# Ding PHP SDK

The Ding PHP library provides convenient access to the Ding API from applications written in the PHP language.

# SDK Installation

## Composer

```bash
composer require "ding/sdk"
```

<!-- End SDK Installation -->

## SDK Example Usage

<!-- Start SDK Example Usage [usage] -->
## SDK Example Usage

### Send a code

Send an OTP code to a user's phone number.


```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Ding\DingSDK;
use Ding\DingSDK\Models\Shared;

$security = 'YOUR_API_KEY';

$sdk = DingSDK\Ding::builder()->setSecurity($security)->build();

$request = new Shared\CreateAuthenticationRequest(
    customerUuid: 'cf2edc1c-7fc6-48fb-86da-b7508c6b7b71',
    phoneNumber: '+1234567890',
    locale: 'fr-FR',
);

$response = $sdk->otp->createAuthentication(
    request: $request
);

if ($response->createAuthenticationResponse !== null) {
    // handle response
}
```

### Check a code

Check that a code entered by a user is valid.


```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Ding\DingSDK;
use Ding\DingSDK\Models\Shared;

$security = 'YOUR_API_KEY';

$sdk = DingSDK\Ding::builder()->setSecurity($security)->build();

$request = new Shared\CreateCheckRequest(
    authenticationUuid: 'eebe792b-2fcc-44a0-87f1-650e79259e02',
    checkCode: '123456',
    customerUuid: '64f66a7c-4b2c-4131-a8ff-d5b954cca05f',
);

$response = $sdk->otp->check(
    request: $request
);

if ($response->createCheckResponse !== null) {
    // handle response
}
```

### Perform a retry

Perform a retry if a user has not received the code.


```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Ding\DingSDK;
use Ding\DingSDK\Models\Shared;

$security = 'YOUR_API_KEY';

$sdk = DingSDK\Ding::builder()->setSecurity($security)->build();

$request = new Shared\RetryAuthenticationRequest(
    authenticationUuid: 'a4e4548a-1f7b-451a-81cb-a68ed5aff3b0',
    customerUuid: '28532118-1b33-420a-b57b-648c9bf85fee',
);

$response = $sdk->otp->retry(
    request: $request
);

if ($response->retryAuthenticationResponse !== null) {
    // handle response
}
```

### Send feedback

Send feedback about the authentication process.


```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Ding\DingSDK;
use Ding\DingSDK\Models\Shared;

$security = 'YOUR_API_KEY';

$sdk = DingSDK\Ding::builder()->setSecurity($security)->build();

$request = new Shared\FeedbackRequest(
    customerUuid: 'cc0f6c04-40de-448f-8301-3cb0e6565dff',
    phoneNumber: '+1234567890',
    status: Shared\FeedbackRequestStatus::Onboarded,
);

$response = $sdk->otp->feedback(
    request: $request
);

if ($response->feedbackResponse !== null) {
    // handle response
}
```

### Get authentication status

Get the status of an authentication.


```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Ding\DingSDK;

$security = 'YOUR_API_KEY';

$sdk = DingSDK\Ding::builder()->setSecurity($security)->build();



$response = $sdk->otp->getAuthenticationStatus(
    authUuid: 'd8446450-f2fa-4dd9-806b-df5b8c661f23'
);

if ($response->authenticationStatusResponse !== null) {
    // handle response
}
```

### Look up for phone number

Perform a phone number lookup.


```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Ding\DingSDK;

$security = 'YOUR_API_KEY';

$sdk = DingSDK\Ding::builder()->setSecurity($security)->build();



$response = $sdk->lookup->lookup(
    customerUuid: '69a197d9-356c-45d1-a807-41874e16b555',
    phoneNumber: '<value>'

);

if ($response->lookupResponse !== null) {
    // handle response
}
```
<!-- End SDK Example Usage [usage] -->

<!-- Start Available Resources and Operations [operations] -->
## Available Resources and Operations

<details open>
<summary>Available methods</summary>


### [lookup](docs/sdks/lookup/README.md)

* [lookup](docs/sdks/lookup/README.md#lookup) - Look up for phone number

### [otp](docs/sdks/otp/README.md)

* [check](docs/sdks/otp/README.md#check) - Check a code
* [createAuthentication](docs/sdks/otp/README.md#createauthentication) - Send a code
* [feedback](docs/sdks/otp/README.md#feedback) - Send feedback
* [getAuthenticationStatus](docs/sdks/otp/README.md#getauthenticationstatus) - Get authentication status
* [retry](docs/sdks/otp/README.md#retry) - Perform a retry

</details>
<!-- End Available Resources and Operations [operations] -->



<!-- Start Summary [summary] -->
## Summary

Ding: The OTP API allows you to send authentication codes to your users using their phone numbers.
<!-- End Summary [summary] -->

<!-- Start Table of Contents [toc] -->
## Table of Contents

* [SDK Installation](#sdk-installation)
* [SDK Example Usage](#sdk-example-usage)
* [Available Resources and Operations](#available-resources-and-operations)
* [Error Handling](#error-handling)
* [Server Selection](#server-selection)
<!-- End Table of Contents [toc] -->

<!-- Start SDK Installation [installation] -->
## SDK Installation

The SDK relies on [Composer](https://getcomposer.org/) to manage its dependencies.

To install the SDK and add it as a dependency to an existing `composer.json` file:
```bash
composer require "ding-live/ding-php"
```
<!-- End SDK Installation [installation] -->

<!-- Start Error Handling [errors] -->
## Error Handling

Handling errors in this SDK should largely match your expectations. All operations return a response object or throw an exception.

By default an API error will raise a `Errors\SDKException` exception, which has the following properties:

| Property       | Type                                    | Description           |
|----------------|-----------------------------------------|-----------------------|
| `$message`     | *string*                                | The error message     |
| `$statusCode`  | *int*                                   | The HTTP status code  |
| `$rawResponse` | *?\Psr\Http\Message\ResponseInterface*  | The raw HTTP response |
| `$body`        | *string*                                | The response content  |

When custom error responses are specified for an operation, the SDK may also throw their associated exception. You can refer to respective *Errors* tables in SDK docs for more details on possible exception types for each operation. For example, the `check` method throws the following exceptions:

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

### Example

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Ding\DingSDK;
use Ding\DingSDK\Models\Shared;

$security = 'YOUR_API_KEY';

$sdk = DingSDK\Ding::builder()->setSecurity($security)->build();

try {
    $request = new Shared\CreateCheckRequest(
        authenticationUuid: 'eebe792b-2fcc-44a0-87f1-650e79259e02',
        checkCode: '123456',
        customerUuid: '64f66a7c-4b2c-4131-a8ff-d5b954cca05f',
    );

    $response = $sdk->otp->check(
        request: $request
    );

    if ($response->createCheckResponse !== null) {
        // handle response
    }
} catch (Errors\SDKException $e) {
    // handle default exception
    throw $e;
}
```
<!-- End Error Handling [errors] -->

<!-- Start Server Selection [server] -->
## Server Selection

## Server Selection

### Select Server by Index

You can override the default server globally by passing a server index to the `server_idx: int` optional parameter when initializing the SDK client instance. The selected server will then be used as the default on the operations that use it. This table lists the indexes associated with the available servers:

| # | Server | Variables |
| - | ------ | --------- |
| 0 | `https://api.ding.live/v1` | None |




### Override Server URL Per-Client

The default server can also be overridden globally by passing a URL to the `server_url: str` optional parameter when initializing the SDK client instance. For example:
<!-- End Server Selection [server] -->

<!-- Placeholder for Future Speakeasy SDK Sections -->

# Development

## Maturity

This SDK is in beta, and there may be breaking changes between versions without a major version update. Therefore, we recommend pinning usage
to a specific package version. This way, you can install the same version each time without breaking changes unless you are intentionally
looking for the latest version.

## Contributions

While we value open-source contributions to this SDK, this library is generated programmatically.
Feel free to open a PR or a Github issue as a proof of concept and we'll do our best to include it in a future release!
