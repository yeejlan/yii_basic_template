<?php

define('APP_PATH', realpath(dirname(__FILE__)));

set_include_path(implode(PATH_SEPARATOR, array(
    realpath(APP_PATH . '/lib'), 
    get_include_path(),
)));

require APP_PATH . '/vendor/autoload.php';
require APP_PATH . '/lib/Make.php';

$dotenv = Dotenv\Dotenv::createImmutable(APP_PATH);
$dotenv->load();

defined('YII_DEBUG') or define('YII_DEBUG', envBool('app_debug', false));
defined('YII_ENV') or define('YII_ENV', env('app_env', 'prod'));


require APP_PATH . '/vendor/yiisoft/yii2/Yii.php';