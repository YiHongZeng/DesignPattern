<?php

/**
 * 华为手机
 * Class MobileIPhone
 */

require_once __DIR__ . '/AbstractMobile.php';

class MobileHuawei implements AbstractMobile
{

    public function call()
    {
        // TODO: Implement call() method.
        echo "Huawei: call" . "<br/>";
    }

    public function photograph()
    {
        // TODO: Implement photograph() method.
        echo "Huawei: photograph" . "<br/>";
    }

}