<?php

/**
 * 苹果手机
 * Class MobileIPhone
 */
require_once __DIR__ . '/AbstractMobile.php';

class MobileIPhone implements AbstractMobile
{

    public function call()
    {
        // TODO: Implement call() method.
        echo "IPhone: call" . "<br/>";
    }

    public function send()
    {
        // TODO: Implement send() method.
        echo "IPhone: send" . "<br/>";
    }

}