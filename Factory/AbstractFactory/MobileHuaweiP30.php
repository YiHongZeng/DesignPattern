<?php

/**
 * 华为手机
 * Class MobileIPhone
 */

require_once __DIR__ . '/InterfaceMobile.php';

class MobileHuaweiP30 implements InterfaceMobile
{

    public function call()
    {
        // TODO: Implement call() method.
        echo "Huawei p30: call" . "<br/>";
    }

    public function photograph()
    {
        // TODO: Implement photograph() method.
        echo "Huawei p30: photograph" . "<br/>";
    }

}