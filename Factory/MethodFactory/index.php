<?php

// 调用工厂


ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/FactoryIPhone.php';
require_once __DIR__ . '/FactoryHuawei.php';
require_once __DIR__ . '/FactoryXiaomi.php';


// 苹果手机
$factory = new FactoryIPhone();
$instance = $factory->create();
$instance->call();
$instance->photograph();

echo "<br/>";

// 华为手机
$factory = new FactoryHuawei();
$instance = $factory->create();
$instance->call();
$instance->photograph();


echo "<br/>";

// 小米手机
$factory = new FactoryXiaomi();
$instance = $factory->create();
$instance->call();
$instance->photograph();
