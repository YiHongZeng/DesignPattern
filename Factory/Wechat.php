<?php
namespace Factory;

class Wechat implements PayInterface
{
    public function doPay($pay_amount)
    {
        echo '使用微信支付,支付金额:' . $pay_amount;
    }

    /**
     * 记录日志
     */
    public function payLog()
    {

    }

}