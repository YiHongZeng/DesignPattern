<?php
namespace Factory;

use Singleton\Singleton;

ini_set('display_errors', 'on');
error_reporting(E_ALL);

include '../autoload.php';


$instance = Singleton::getInstance();
print_r($instance);