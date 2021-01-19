<?php
require_once __DIR__ . '/InterfaceFactory.php';

class FactoryXiaomi implements InterfaceFactory
{
    public function create()
    {
        // TODO: Implement create() method.
        echo "FactoryXiaomi: create" . "<br/>";
        require_once __DIR__ . '/MobileXiaomi.php';
        return new MobileXiaomi();
    }
}