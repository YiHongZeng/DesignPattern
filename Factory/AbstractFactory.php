<?php

/**
* 抽象工厂方法
* 提供一个创建一系列相关或相互依赖对象的接口。
* 注意：这里和工厂方法的区别是：一系列，而工厂方法则是一个。
* 那么，我们是否就可以想到在接口create里再增加创建“一系列”对象的方法呢？
*/

interface PeopleInterface
{
    // 走路
    function walk();
}

class ManStrong implements PeopleInterface
{
    function walk()
    {
        // TODO: Implement Walk() method.
        echo 'ManStrong: walk';
    }
}

class ManThin implements PeopleInterface
{
    function walk()
    {
        // TODO: Implement Walk() method.
        echo 'Man: walk';
    }
}

class WomenStrong implements PeopleInterface
{
    function walk()
    {
        // TODO: Implement walk() method.
        echo "WomenStrong: walk";
    }
}

class WomenThin implements PeopleInterface
{
    function walk()
    {
        // TODO: Implement walk() method.
        echo "WomenThin: walk";
    }
}

// 将对象的创建抽象成一个接口。
interface AbstractFactory
{
    function createStrong();
    function createThin();
}


class FactoryMan implements AbstractFactory
{
    function createStrong()
    {
        return new ManStrong();
    }

    function createThin()
    {
        return new ManThin();
    }
}

class FactoryWoman implements AbstractFactory
{
    function createStrong()
    {
        return new WomenStrong();
    }

    function createThin()
    {
        return new WomenThin();
    }
}

$factory = new FactoryMan();
$man = $factory->createStrong();
$man->walk();