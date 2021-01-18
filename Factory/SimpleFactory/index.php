<?php

// 调用工厂

require_once __DIR__ . '/Factoty.php';


ini_set('display_errors', 1);
error_reporting(E_ALL);

// 苹果手机
$instance = Factory::create('IPhone');
$instance->call();
$instance->send();

echo "<br/>";

// 华为手机
$instance = Factory::create('Huawei');
$instance->call();
$instance->send();

echo "<br/>";

// 小米手机
$instance = Factory::create('Xiaomi');
$instance->call();
$instance->send();