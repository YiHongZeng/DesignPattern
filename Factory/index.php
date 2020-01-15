<?php
namespace Factory;

ini_set('display_errors', 'on');
error_reporting(E_ALL);

include '../autoload.php';



/**
 * 工厂方法模式
 */
$pay_amount = 10;

$factory = new WechatFactory();
$mode = $factory->createMode(); // 使用工厂类获取产品类
$mode->doPay($pay_amount); // 执行产品类方法


exit();
// 单例模式
$instance = \Src\Singleton\Singleton::getInstance();
print_r($instance);