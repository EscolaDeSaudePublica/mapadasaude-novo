<?php
return [
    'auth.config' => [
        'logout_url'            => env('LOGOUT_URL', ''),
        'client_id'             => env('CLIENT_ID', ''),
        'client_secret'         => env('CLIENT_SECRET', ''),
        'auth_endpoint'         => env('AUTH_ENDPOINT', ''),
        'token_endpoint'        => env('TOKEN_ENDPOINT', ''),
        'user_info_endpoint'    => env('USER_INFO_ENDPOINT', ''),
        'redirect_uri'          => env('REDIRECT_URI', ''),
    ],
];