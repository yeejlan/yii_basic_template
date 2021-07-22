<?php 

namespace app\controllers\console;

use Yii;
use yii\console\Controller;

class TestController extends BaseController
{
    public function actionEnv() {
        echo env('app_env');
    }

    public function actionRuntask() {
        $mytask = function() {
            $this->myTask();
        };
        $this->runTaskForever($mytask);
    }

    public function myTask() {
        echo "I'm doing my job...",PHP_EOL;
        sleep(5);
        echo "It's done.",PHP_EOL;
    }
}