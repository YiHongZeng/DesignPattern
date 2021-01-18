<?php

interface AbstractMobile
{
    /**
     * 打电话
     * @return mixed
     */
    public function call();

    /**
     * 发短信
     * @return mixed
     */
    public function send();
}