<?php

/**
 * 简单工厂模式
 */
interface People
{
    // 走路
    function walk();
}

class Man implements People
{
    function walk()
    {
        // TODO: Implement Walk() method.
        echo 'Man: walk';
    }
}

class Women implements People
{
    function walk()
    {
        // TODO: Implement walk() method.
        echo "Women: walk";
    }
}

class SimpleFactory
{
    static function createMan()
    {
        return new Man();
    }

    static function createWomen(){
        return new Women();
    }
}

$man = SimpleFactory::createMan();
$man->walk();

$women = SimpleFactory::createWomen();
$women->walk();