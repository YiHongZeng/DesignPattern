<?php
/**
 * 工厂方法模式
 */


interface PeopleInterface
{
    // 走路
    function walk();
}

class Man implements PeopleInterface
{
    function walk()
    {
        // TODO: Implement Walk() method.
        echo 'Man: walk';
    }
}

class Women implements PeopleInterface
{
    function walk()
    {
        // TODO: Implement walk() method.
        echo "Women: walk";
    }
}

// 与简单工厂方法的区别
interface FactoryMethod
{
    function create();
}


class FactoryMan implements FactoryMethod
{
    function create()
    {
        return new Man();
    }
}

class FactoryWoMan implements FactoryMethod
{
    function create()
    {
        return new Women();
    }
}



$factory = new FactoryMan();
$man = $factory->create();
$man->walk();