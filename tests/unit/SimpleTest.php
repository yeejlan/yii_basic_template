<?php


use PHPUnit\Framework\TestCase;
use lib\Make;

class SimpleTest extends TestCase
{
    public function test1() 
    {
        container()->bind(Mailer::class, FakeMailer::class);
        $user = SomeUser::make();
        $this->assertTrue($user->sendCoupon(1));
    }
}

class Mailer
{
    public function send() {
        echo "Sending mail to somebody...",PHP_EOL;
        return true;
    }
}

class FakeMailer extends Mailer
{
    public function send() {
        //sending mail process
        return true;
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

    public function getCoupon($couponId)
    {
        throw new ServiceException("Method not implement for test.");
    }

    public function sendCoupon()
    {
        return $this->mailer->send();
    }
}

class ServiceException extends \Exception
{

}