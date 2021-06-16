<?php

return [
    'consumer_key' => env('ETSY_API_CONSUMER_KEY', ''),
    'consumer_secret' => env('ETSY_API_CONSUMER_SECRET', ''),
    'access_token' => env('ETSY_API_ACCESS_TOKEN', ''),
    'access_token_secret' => env('ETSY_API_ACCESS_TOKEN_SECRET', ''),
    'scope' => env('ETSY_API_SCOPE', ''),

    'options' => [
        'log' => [
            'api_request' => env('ETSY_API_OPTIONS_LOG_API_REQUEST', 0),
            'api_response' => env('ETSY_API_OPTIONS_LOG_API_RESPONSE', 0),
        ],
        'rate_limit' => [
            'max_attempts' => env('ETSY_API_OPTIONS_RATE_LIMIT_MAX_ATTEMPTS', 3),
            'delay_in_seconds' => env('ETSY_API_OPTIONS_RATE_LIMIT_DELAY_IN_SECONDS', 3),
        ]
    ]
];
