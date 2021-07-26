<?php

require 'bootstrap.php';

$config = require APP_PATH . '/config/web.php';

$application = new yii\web\Application($config);
$application->init();