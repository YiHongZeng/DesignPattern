<?php
require_once __DIR__ . '/InterfaceCamera.php';

class CameraHigh implements InterfaceCamera
{
   public function photograph()
   {
       // TODO: Implement photograph() method.
       echo 'High 拍照系统';
   }
}