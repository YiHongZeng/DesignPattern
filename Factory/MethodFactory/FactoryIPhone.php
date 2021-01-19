<?php
require_once __DIR__ . '/AbstractFactory.php';

class FactoryIPhone implements AbstractFactory
{
    public function create()
    {
        // TODO: Implement create() method.
        echo "FactoryIPhone: create" . "<br/>";
        require_once __DIR__ . '/MobileIPhone.php';
        return new MobileIPhone();
    }
}