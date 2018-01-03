<?php

$config = [
    'id' => 'yii2-setting',
    'name' => 'Yii2 Setting',
    'basePath' => dirname(__DIR__),
    'vendorPath' => dirname(dirname(dirname(__DIR__))) . '/vendor',
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=test',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
        ],
        'setting' => [
            'class' => 'yiithings\setting\Setting',
        ]
    ]
];

return $config;
