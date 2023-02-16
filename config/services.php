<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
        'scheme' => 'https',
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'facebook' => [
        'token' => 'EABW94dvaIZAcBAKXH8UmeMcmy6KK9vm2iedxZBcdThJZBZCZASJrX7fZB5LNLhLaBTwXu3IvZC7WEfPXZB1Hx7VHRnhIAr7o3NdgPhsrqIKZCzdOyghu1kAF2SLzv3wYZBrzQfJIDZBt0x75xML0pgVRUnSsKXH6Hvd2mlvHrkTnqtb3aTthKObcGmm',
        'app_secret' => '32789489aca32094a9ee81b01004c185',
        'verification' => "1234",
    ]

];
