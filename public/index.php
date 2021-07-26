<?php

require '../bootstrap.php';

$config = require APP_PATH . '/config/web.php';

$app = new yii\web\Application($config);
$app->run();
