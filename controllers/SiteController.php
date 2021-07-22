<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;

class SiteController extends Controller
{
    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }


    public function actionEnv()
    {
        return 'app_env: ' . env('app_env') . ', timezone: '. date_default_timezone_get();
    }

    public function actionError()
    {
        $app = Yii::$app;
        $ex = $app->getErrorHandler()->exception;
        //$msg = $ex->statusCode.' '.$ex->getName();
        return $ex->getMessage();
    }

}
