<?php
namespace Factory;

/**
 * 微信产品类转为工厂类
 */
class WechatFactory implements PayFactoryInterface
{
    public function createMode()
    {
        return new Wechat();
    }
}