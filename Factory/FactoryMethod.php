<?php
/**
 * 工厂方法模式
 */


interface OperationInterface
{
    function getVal($a, $b);
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

interface FactoryInterface
{
    public function operation();
}

class FactoryAdd implements FactoryInterface
{
    public function operation()
    {
        return new OperationAdd();
    }
}

class FactorySub implements FactoryInterface
{
    public function operation()
    {
        return new OperationSub();
    }
}


$addFactory = new FactoryAdd();
$add = $addFactory->operation();
echo $add->getVal(1,2);