<?php

/**
 * 华为手机
 * Class MobileIPhone
 */

require_once __DIR__ . '/InterfaceMobile.php';

class MobileHuaweiP10 implements InterfaceMobile
{

    public function call()
    {
        // TODO: Implement call() method.
        echo "Huawei p10: call" . "<br/>";
    }

    public function photograph()
    {
        // TODO: Implement photograph() method.
        echo "Huawei p10: photograph" . "<br/>";
    }

}