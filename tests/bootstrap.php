<?php

require 'bootstrap.php';

$config = require APP_PATH . '/config/console.php';

$application = new yii\console\Application($config);
$application->init();