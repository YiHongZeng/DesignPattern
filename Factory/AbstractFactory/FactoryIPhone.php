<?php
require_once __DIR__ . '/InterfaceFactory.php';

class FactoryIPhone implements InterfaceFactory
{
    /**
     * 语音通话
     * @return mixed
     */
    public function call_voice()
    {

    }

    /**
     * 视频通话
     * @return mixed
     */
    public function call_video()
    {

    }

    /**
     * 超清拍照
     * @return mixed
     */
    public function photograph_1080()
    {

    }

    /**
     * 高清拍照
     * @return mixed
     */
    public function photograph_720()
    {

    }
}