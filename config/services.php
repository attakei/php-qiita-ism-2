<?php
return [
    'google' => [
        'client_id' => getenv('OAUTH_CLIENT_ID'),
        'client_secret' => getenv('OAUTH_SECRET'),
        'redirect' => getenv('OAUTH_REDIRECT_URL'),
    ]
];
