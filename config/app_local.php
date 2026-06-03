<?php

use function Cake\Core\env;

return [
    'debug' => filter_var(env('DEBUG', true), FILTER_VALIDATE_BOOLEAN),

    'Security' => [
        'salt' => env('SECURITY_SALT', '8c17ae945a840c21cca5c2289bbd467d7f84e17e7259add2ae3e13f3daf5c851'),
    ],

    'Datasources' => [
        'default' => [
            'className' => 'Cake\Database\Connection',
            'driver' => 'Cake\Database\Driver\Mysql',
            'persistent' => false,
            'host' => env('MYSQLHOST'),
            'port' => (int)env('MYSQLPORT'),
            'username' => env('MYSQLUSER'),
            'password' => env('MYSQLPASSWORD'),
            'database' => env('MYSQLDATABASE'),
            'encoding' => 'utf8mb4',
            'timezone' => 'UTC',
            'cacheMetadata' => true,
            
        ],

        'test' => [
            'className' => 'Cake\Database\Connection',
            'driver' => 'Cake\Database\Driver\Mysql',
            'persistent' => false,
            'host' => env('MYSQLHOST'),
            'port' => (int)env('MYSQLPORT'),
            'username' => env('MYSQLUSER'),
            'password' => env('MYSQLPASSWORD'),
            'database' => env('MYSQLDATABASE'),
            'encoding' => 'utf8mb4',
            'timezone' => 'UTC',
            'cacheMetadata' => true,
        ],
    ],

    'EmailTransport' => [
        'default' => [
            'host' => 'localhost',
            'port' => 25,
            'username' => null,
            'password' => null,
            'client' => null,
            'url' => env('EMAIL_TRANSPORT_DEFAULT_URL', null),
        ],
    'DebugKit' => [
        'safeTld' => [
        'localhost',
        'railway.app',
        'up.railway.app',
        ],
        'forceEnable' => true,
        ],
    ],
];