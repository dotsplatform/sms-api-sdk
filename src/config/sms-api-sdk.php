<?php

return [
    'sms-server' => [
        'url' => env('RESOURCES_SMS_EXTERNAL_HOST', 'https://sms.dots.live/'),
        'token' => env('INTERNAL_GATEWAY_TOKEN'),
    ],
];
