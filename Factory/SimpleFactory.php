<?php

/**
 * 简单工厂模式
 */

//Factory(工厂类):核心部分，负责实现创建所有People的内部逻辑，工厂类可以被外界直接调用，创建所需对象
//People (抽象产品类)：工厂类所创建的所有对象的父类，封装了People对象的公共方法，所有的具体People为其子类对象
//Man、Women(具体产品类)：简单工厂模式的创建目标，所有被创建的对象都是某个具体类的实例。它要实现抽象People中声明的抽象方法(有关抽象类)


interface OperationInterface
{
    function getVal($a,$b);
}

class OperationAdd implements OperationInterface
{
    public function getVal($a, $b)
    {
        // TODO: Implement getVal() method.
        return $a + $b;
    }
}

class OperationSub implements OperationInterface
{
   public function getVal($a, $b)
   {
       // TODO: Implement getVal() method.
       return $a - $b;
   }
}

class Factory
{
    private static $instance;

    static function operation($op)
    {
        switch ($op) {
            case '+':
                self::$instance = new OperationAdd();
                break;
            case '-':
                self::$instance = new OperationSub();
                break;
        }
        return self::$instance;
    }

}

$factory = Factory::operation('+');
echo $factory->getVal(1,2);