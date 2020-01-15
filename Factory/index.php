<?php
namespace Factory;

include '../autoload.php';

/**
 * 工厂方法模式
 * 1、通过一个抽象的核心工厂类指定方法.
 * 2、具体工厂类实现抽象工厂类方法.
 * 3、创建一个支付接口
 * 4、支付具体类实现接口
 */


$pay_amount = 10;

$factory = new WechatFactory();
$mode = $factory->createMode(); // 使用工厂类获取产品类
$mode->doPay($pay_amount); // 执行产品类方法