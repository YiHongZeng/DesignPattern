<?php

// 调用工厂


ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/FactoryIPhone10.php';
require_once __DIR__ . '/FactoryIPhone6.php';
require_once __DIR__ . '/FactoryHuaweiP30.php';


// 生产Iphone10
$factory = new FactoryIPhone10();
$factory->system();
$factory->photograph();

echo "<br/>";

// 生产Iphone6
$factory = new FactoryIPhone6();
$factory->system();
$factory->photograph();

echo "<br/>";

// 生成华为P30
$factory = new FactoryHuaweiP30();
$factory->system();
$factory->photograph();
