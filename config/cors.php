<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Cross-Origin Resource Sharing (CORS) Configuration
    |--------------------------------------------------------------------------
    |
    | Here you may configure your settings for cross-origin resource sharing
    | or "CORS". This determines what cross-origin operations may execute
    | in web browsers. You are free to adjust these settings as needed.
    |
    | To learn more: https://developer.mozilla.org/en-US/docs/Web/HTTP/CORS
    |
    */

    "paths" => ["sections/*", "questions/*", "token", "contact", "api/*", "sanctum/csrf-cookie"],

    "allowed_methods" => ["GET", "POST"],

    "allowed_origins" => [env("FRONTEND_URL", "http://localhost:3000")],

    "allowed_origins_patterns" => [],

    "allowed_headers" => ["Accept", "Accept-Encoding", "Accept-Language", "Cache-Control", "Connection", "Cookie", "Host", "Origin", "Pragma", "Referer", "Sec-Ch-Ua", "Sec-Ch-Ua-Mobile", "Sec-Ch-Ua-Platform", "Sec-Fetch-Dest", "Sec-Fetch-Mode", "Sec-Fetch-Site", "Sec-Gpc", "User-Agent", "X-Xsrf-Token"],

    "exposed_headers" => [],

    "max_age" => 0,

    "supports_credentials" => true,
];
