<?php
use \kartik\datecontrol\Module;
$params = require(__DIR__ . '/params.php');

$config = [

    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'timezone' => 'UTC',

     'modules' =>
    [
            'gridview' =>  ['class' => '\kartik\grid\Module']
    ],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'cidizentrustndia',
        ],
        'i18n' => [
                'translations' => [
                    '*' => [
                        'class' => 'yii\i18n\PhpMessageSource',
                        'basePath' => '@app/messages', // if advanced application, set @frontend/messages
                        'sourceLanguage' => 'en',
                        'fileMap' => [
                            //'main' => 'main.php',
                        ],
                    ],
                ],
        ],
        'urlManager' => [
                'class' => 'yii\web\UrlManager',
                'enablePrettyUrl' => true,
                'showScriptName' => false,
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => false,
            'enableSession' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => false,
            'transport' => [
            'class' => 'Swift_SmtpTransport',
            'host' => 'smtp.gmail.com',
            'username' => 'noreply.autoinspektrochennai@gmail.com',
            'password' => 'axion123',
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
        'db' => require(__DIR__ . '/db.php'),
        'authManager' => [
            'class' => 'yii\rbac\DbManager',
            'defaultRoles' => ['Guest'],
        ],
    ],
    'params' => $params,
    'modules' => [
            'gridview' =>  [
                    'class' => '\kartik\grid\Module'
                    // enter optional module parameters below - only if you need to  
                    // use your own export download action or custom translation 
                    // message source
                    // 'downloadAction' => 'gridview/export/download',
                    // 'i18n' => []
            ],
            
            'datecontrol' => [
                    'class' => 'kartik\datecontrol\Module',

                    // format settings for displaying each date attribute
                     'displaySettings' => [
                        Module::FORMAT_DATE => 'dd-MM-yyyy',
                        Module::FORMAT_TIME => 'hh:mm:ss a',
                        Module::FORMAT_DATETIME => 'dd-MM-yyyy hh:mm a', 
                    ],

                    // format settings for saving each date attribute (PHP format example)
                    'saveSettings' => [
                        Module::FORMAT_DATE => 'php:Y-m-d', // saves as unix timestamp
                        Module::FORMAT_TIME => 'php:H:i:s',
                        Module::FORMAT_DATETIME => 'php:Y-m-d H:i:s',
                    ],

                    // automatically use kartik\widgets for each of the above formats
                    'autoWidget' => true,
            ],
            'admin' => [
            'class' => 'mdm\admin\Module',
            'controllerMap' => [
                'assignment' => [
                    'class' => 'mdm\admin\controllers\AssignmentController',
                    'userClassName' => 'app\models\User',
                    'idField' => 'id',
                    'usernameField' => 'email',
                  ],
                /*'searchClass' => 'app\models\Userdata'*/
                ],
            'layout' => 'left-menu',
            'mainLayout' => '@app/views/layouts/main.php',    
            ]
    ],
    'as access' => [
        'class' => 'mdm\admin\components\AccessControl',
        'allowActions' => [
            'site/*',
            'admin/*',
            'gii/*',
            'purchase-data/*',
            'party-data/*',
            'broker-data/*'
        ]
    ],

];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
    ];
}

return $config;
