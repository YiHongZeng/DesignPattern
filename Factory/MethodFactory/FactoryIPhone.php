<?php
require_once __DIR__ . '/InterfaceFactory.php';

class FactoryIPhone implements InterfaceFactory
{
    public function create()
    {
        // TODO: Implement create() method.
        echo "FactoryIPhone: create" . "<br/>";
        require_once __DIR__ . '/MobileIPhone.php';
        return new MobileIPhone();
    }
}