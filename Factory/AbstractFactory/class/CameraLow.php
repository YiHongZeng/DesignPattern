<?php
require_once __DIR__ . '/InterfaceCamera.php';

class CameraLow implements InterfaceCamera
{
    public function photograph()
    {
        // TODO: Implement photograph() method.
        echo 'Low 拍照系统';
    }
}