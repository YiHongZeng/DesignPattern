<?php
namespace Factory;

/**
 * 支付宝产品类转工厂类
 * Class ZhiFuBaoFactory
 * @package factory_method
 */
class AlipayFactory implements PayFactoryInterface
{
    public function createMode()
    {
        return new Alipay();
    }
}