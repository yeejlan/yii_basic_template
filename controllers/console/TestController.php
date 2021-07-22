<?php 

namespace app\controllers\console;

use Yii;
use yii\console\Controller;

class TestController extends BaseController
{
    public function actionEnv() {
        echo env('app_env');
    }  
}