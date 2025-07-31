<?php
return [
    'paths' => ['api/*', 'login'],
    'allowed_methods' => ['*'],
    'allowed_origins' => ['https://frontend-taura.vercel.app'],
    'allowed_origins_patterns' => [],
    'allowed_headers' => ['*'],
    'exposed_headers' => [],
    'max_age' => 0,
    'supports_credentials' => true,
];