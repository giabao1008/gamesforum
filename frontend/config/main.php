<?php

use \yii\web\Request;

$request = new Request();//  khai báo một request mới
$baseUrl = str_replace('/frontend/web', '', $request->baseUrl); // thay thế /frontend/web trên $request->baseUrl bằng ''
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);
$rules = require __DIR__ . '/../../common/config/rules.php';
return [
    'timeZone' => 'Asia/Ho_Chi_Minh',
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
//        'time' => new \DateTime('now', new \DateTimeZone('Asia/Ho_Chi_Minh')),
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'useFileTransport' => false,
            'transport' => [
                'constructArgs' => ['localhost', 25],
                'class' => 'Swift_SmtpTransport',
                'host' => 'smtp.gmail.com',
                'username' => 'tuyenbq@peacesoft.net',
                'password' => 'dykfcrxfgofdhtte',
                'port' => '587',
                'encryption' => 'tls',
            ],
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
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'request' => [
            'baseUrl' => $baseUrl,
            'cookieValidationKey' => 'SksaUFwcUD_crpwH0O3_4SsjkojgKa_V',
        ],
        'urlManager' => [
            'baseUrl' => $baseUrl,
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => $rules,
        ],
        'formatter' => [
            'dateFormat' => 'php:d-m-Y',
            'datetimeFormat' => 'php: H:i:s d-m-Y',
        ],
        'assetManager' => [
            'bundles' => [
                'yii\web\JqueryAsset' => [
                    'sourcePath' => null,   // do not publish the bundle
                    'js' => [
                        '/js/jquery.min.js', // here specify your version of jquery

                    ],
                    'jsOptions' => [ 'position' => \yii\web\View::POS_HEAD ],
                ],
            ],
        ],

    ],
    'params' => $params,

];
