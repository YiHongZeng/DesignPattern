<?php
namespace Factory;

class Alipay implements PayInterface
{
    public function doPay($pay_amount)
    {
        echo '使用支付宝支付,支付金额:' . $pay_amount;

    }

    /**
     * 记录日志
     */
    public function payLog()
    {

    }

}