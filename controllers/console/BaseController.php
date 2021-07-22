<?php

namespace app\controllers\console;

use Yii;
use yii\console\Controller;

class BaseController extends Controller
{

    protected bool $running = true;

    public function init() : void
    {
        parent::init();

        if(is_callable('pcntl_signal')){
            pcntl_signal(SIGINT, [$this, 'handleSignal']);
            pcntl_signal(SIGTERM, [$this, 'handleSignal']);
        }
    }

    public function handleSignal($signal) : void
    {
        echo 'got SIGTERM, exit.',PHP_EOL;
        $this->running = false;
    }

    public function runTaskForever($runnable, $waitTimeOnError = 10)
    {
        while($this->running){
            try{
                call_user_func($runnable);
            }catch(\Exception $e){
                echo $e->getMessage(),PHP_EOL;
                sleep($waitTimeOnError);
            }
            if(is_callable('pcntl_signal_dispatch')){
                pcntl_signal_dispatch();
            }
        }

    }
}
