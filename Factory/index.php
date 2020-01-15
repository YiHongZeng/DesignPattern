<?php
namespace Factory;

include '../autoload.php';



/**
 * 工厂方法模式
 */
$pay_amount = 10;

$factory = new WechatFactory();
$mode = $factory->createMode(); // 使用工厂类获取产品类
$mode->doPay($pay_amount); // 执行产品类方法