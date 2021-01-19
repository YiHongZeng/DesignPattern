<?php

/**
 * 苹果手机
 * Class MobileIPhone
 */
require_once __DIR__ . '/InterfaceMobile.php';

class MobileIPhone6 implements InterfaceMobile
{

    public function call()
    {
        // TODO: Implement call() method.
        echo "IPhone 6: call" . "<br/>";
    }

   public function photograph()
   {
       // TODO: Implement photograph() method.
       echo "IPhone 6: photograph" . "<br/>";
   }

}