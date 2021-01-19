<?php

// 调用工厂

ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/Factoty.php';


// 苹果手机
$instance = Factory::create('1');
$instance->call();
$instance->photograph();

echo "<br/>";

// 华为手机
$instance = Factory::create('2');
$instance->call();
$instance->photograph();

echo "<br/>";

// 小米手机
$instance = Factory::create('3');
$instance->call();
$instance->photograph();