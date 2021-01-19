<?php
require_once __DIR__ . '/InterfaceFactory.php';

class FactoryHuawei implements InterfaceFactory
{
    public function create()
    {
        // TODO: Implement create() method.
        echo "FactoryHuawei: create" . "<br/>";
        require_once __DIR__ . '/MobileHuawei.php';
        return new MobileHuawei();
    }
}