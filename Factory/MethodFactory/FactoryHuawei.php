<?php
require_once __DIR__ . '/AbstractFactory.php';

class FactoryHuawei implements AbstractFactory
{
    public function create()
    {
        // TODO: Implement create() method.
        echo "FactoryHuawei: create" . "<br/>";
        require_once __DIR__ . '/MobileHuawei.php';
        return new MobileHuawei();
    }
}