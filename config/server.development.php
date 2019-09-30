<?php

return [
    'database' => [
        'adapter' => 'Mysql', /* Possible Values: Mysql, Postgres, Sqlite */
        'host' => '127.0.0.1',
        'username' => 'root',
        'password' => '',
        'dbname' => 'phalcon_rest',
        'charset' => 'utf8',
    ],
    'log_database' => [
        'adapter' => 'Mysql', /* Possible Values: Mysql, Postgres, Sqlite */
        'host' => '127.0.0.1',
        'username' => 'root',
        'password' => '',
        'dbname' => 'phalcon_rest_log',
        'charset' => 'utf8',
    ],
    'authentication' => [
        'secret' => '!mU8Xm3b/}hD', // This will sign the token. (still insecure)
        'encryption_key' => 'M?-xD?5Qa6F5$&A$', // Secure token with an ultra password
        'expiration_time' => 86400 * 7, // One week till token expires
        'iss' => 'myproject', // Token issuer eg. www.myproject.com
        'aud' => 'myproject', // Token audience eg. www.myproject.com
    ],
];
