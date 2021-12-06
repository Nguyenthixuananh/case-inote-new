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
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    'google' => [

        'client_id' => '672894561057-6libmnudadnfuq6f4u6u29a13cjcmcon.apps.googleusercontent.com',

        'client_secret' => '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',

        'redirect' => 'http://127.0.0.1:8001/callback/google',

    ],
    'github' => [

        'client_id' => 'c5a877de9bf473438339',

        'client_secret' => 'aa57790ef4786a8490c3ee4df0652c281de6083e',

        'redirect' => 'http://127.0.0.1:8001/callback/github',

    ],

];
