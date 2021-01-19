<?php

/**
 * 小米手机
 * Class MobileIPhone
 */
require_once __DIR__ . '/InterfaceMobile.php';

class MobileXiaomi implements InterfaceMobile
{

    public function call()
    {
        // TODO: Implement call() method.
        echo "Xiaomi: call" . "<br/>";
    }

    public function photograph()
    {
        // TODO: Implement photograph() method.
        echo "Xiaomi: photograph" . "<br/>";
    }

}