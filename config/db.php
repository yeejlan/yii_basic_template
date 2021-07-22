<?php

return [
    'db' => [
        'class' => 'yii\db\Connection',
        'dsn' => env('db_dsn'),
        'username' => env('db_username'),
        'password' => env('db_password'),
        'charset' => 'utf8',
    ]
];
