<?php

return [
    'paths' => [
        'api/*', 
        'sanctum/csrf-cookie', // Jika menggunakan Laravel Sanctum
        'login',
        'logout',
    ],

    'allowed_methods' => ['*'],

    'allowed_origins' => [
        // Untuk development (sesuaikan port React)
        'http://localhost:3000',
        'http://127.0.0.1:3000',
        
        // Untuk production (ganti dengan domain frontend)
        // 'https://your-react-app.com',
        // 'https://www.your-react-app.com',
    ],

    'allowed_origins_patterns' => [],

    'allowed_headers' => [
        'Authorization',
        'Content-Type',
        'X-Requested-With',
        'X-CSRF-TOKEN', // Jika menggunakan CSRF
    ],

    'exposed_headers' => [],

    'max_age' => 0,

    'supports_credentials' => true, // Penting untuk JWT/Sanctum
];