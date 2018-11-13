<?php

return [
    'default-connection' => 'concrete',
    'connections' => [
        'concrete' => [
            'driver' => 'c5_pdo_mysql',
            'server' => 'localhost',
            'database' => 'losc5',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
        ],
    ],
];
