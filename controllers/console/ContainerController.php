<?php 

namespace app\controllers\console;

use Yii;
use yii\console\Controller;
use lib\Make;

class ContainerController extends BaseController
{
    public function actionDemo() {
        $user = SomeUser::make();
        $user->sendCoupon();
    }
}

class Mailer
{
    public function send() {
        echo "Sending mail to somebody...",PHP_EOL;
    }
}

class SomeUser
{
    use Make;

    private $mailer;

    public function __construct(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    public function sendCoupon()
    {
        $this->mailer->send();
    }
}