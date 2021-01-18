<?php

/**
 * 工厂类
 * Class Factory
 */
class Factory
{
    private static $instance;

    public static function create($name)
    {
        $class = null;
        switch ($name) {
            case 'IPhone':
                require_once __DIR__ . '/MobileIPhone.php';
                self::$instance = new MobileIPhone();
                break;
            case 'Huawei':
                require_once __DIR__ . '/MobileHuawei.php';
                self::$instance = new MobileHuawei();
                break;
            case 'Xiaomi':
                require_once __DIR__ . '/MobileXiaomi.php';
                self::$instance = new MobileXiaomi();
                break;
            default:
                echo "类 {$name} 不存在";
                exit;
                break;
        }
        return self::$instance;
    }
}