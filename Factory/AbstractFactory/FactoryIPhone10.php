<?php
require_once __DIR__ . '/InterfaceFactory.php';
require_once __DIR__ . '/class/CameraHigh.php';
require_once __DIR__ . '/class/CameraLow.php';
require_once __DIR__ . '/class/SystemAndroid.php';
require_once __DIR__ . '/class/SystemIOS.php';

class FactoryIPhone10 implements InterfaceFactory
{
    public function __construct()
    {
        echo "生产 IPhone 10 <br/>";
    }

    public function system()
    {
        // TODO: Implement system() method.
        echo "接入 IOS 系统 <br/>";
        return new SystemIOS();
    }

    public function photograph()
    {
        // TODO: Implement photograph() method.
        echo "接入 高清 拍照 <br/>";
        return new CameraHigh();
    }
}