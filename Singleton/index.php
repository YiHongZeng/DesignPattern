<?php

require_once __DIR__ . '/Singleton.php';

ini_set('display_errors', '1');
error_reporting(E_ALL);



$instance = Singleton::getInstance();
print_r($instance);