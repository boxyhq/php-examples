<?php

return [
    'host' => 'http://localhost:5225',
    'api_key' => 'secret',
    'product' => 'saml-demo.boxyhq.com',

    'client_id' => 'dummy', // Keep this as `dummy`, we'll pass the tenant & product as dynamic params
    'client_secret' => 'dummy', // Keep this as `dummy`, we'll pass the tenant & product as dynamic params
    'redirect' => env('APP_URL') . '/sso/callback'
];