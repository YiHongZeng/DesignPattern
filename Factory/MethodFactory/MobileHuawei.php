<?php

/**
 * 华为手机
 * Class MobileIPhone
 */

require_once __DIR__ . '/InterfaceMobile.php';

class MobileHuawei implements InterfaceMobile
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