<?php

namespace app\controllers\api;

use Yii;
use yii\web\Controller;

class UserController extends Controller
{

    public function actionIndex()
    {
        return 'this is user controller.';
    }


    public function actionInfo()
    {
        return 'this is user info action.';
    }
}
