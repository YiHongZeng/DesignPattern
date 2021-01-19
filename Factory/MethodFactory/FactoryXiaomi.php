<?php
require_once __DIR__ . '/AbstractFactory.php';

class FactoryXiaomi implements AbstractFactory
{
    public function create()
    {
        // TODO: Implement create() method.
        echo "FactoryXiaomi: create" . "<br/>";
        require_once __DIR__ . '/MobileXiaomi.php';
        return new MobileXiaomi();
    }
}