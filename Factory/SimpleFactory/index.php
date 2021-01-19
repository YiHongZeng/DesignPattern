<?php

// 调用工厂

ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/Factoty.php';

$mobile_name = 'IPhone';

$instance = Factory::create($mobile_name);// 只需传入需要创建的手机类型即可，不需要知道细节： IPhone | Huawei | Xiaomi
$instance->call();
$instance->photograph();