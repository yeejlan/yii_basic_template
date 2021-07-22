<?php
$dbConfig = require __DIR__ . '/db.php';

$config = [
    'id' => env('app_name'),
    'timeZone' => env('app_timezone'),
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'aliases' => [
    ],
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
    ],
];

$config['components'] = array_merge($config['components'], $dbConfig);

return $config;