<?php

/**
 * 苹果手机
 * Class MobileIPhone
 */
require_once __DIR__ . '/AbstractMobile.php';

class MobileIPhone8 implements AbstractMobile
{

    public function call()
    {
        // TODO: Implement call() method.
        echo "IPhone 6: call" . "<br/>";
    }

    public function send()
    {
        // TODO: Implement send() method.
        echo "IPhone 6: send" . "<br/>";
    }

}