<?php

return [
    'sms-server' => [
        'url' => env('RESOURCES_SMS_EXTERNAL_HOST', 'https://sms.dots.live/'),
        'token' => env('SMS_INTERNAL_GATEWAY_TOKEN'),
    ],
];
