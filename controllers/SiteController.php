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
        return env('app_env');
    }

    public function actionError()
    {
        $app = Yii::$app;
        $ex = $app->getErrorHandler()->exception;
        //$msg = $ex->statusCode.' '.$ex->getName();
        return $ex->getMessage();
    }

}
