<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */
    /*'twitter' => [
        'client_id' => 'KLIJENT_ID',
        'client_secret' => 'SECRET_APP',
        'redirect' => 'POVRATNI URL',
    ],*/
    'facebook' => [
        'client_id' => '1042986709074308',
        'client_secret' => '772479fabcd66307c43339f9da49449f',
        'redirect' => 'http://panajotov.xyz/profile',
    ],
    'google' => [
        'client_id' => 'KLIJENT_ID',
        'client_secret' => 'SECRET_APP',
        'redirect' => 'POVRATNI URL',
    ],

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'mandrill' => [
        'secret' => env('MANDRILL_SECRET'),
    ],

    'ses' => [
        'key'    => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'stripe' => [
        'model'  => App\User::class,
        'key'    => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

];
