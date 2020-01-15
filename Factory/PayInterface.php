<?php
namespace Factory;
/**
 * Interface PayInterface
 * 定义支付Api规范接口
 */
interface PayInterface
{

    /**
     * 支付
     * @param $pay_amount
     * @return mixed
     */
    public function doPay($pay_amount);

    /**
     * 记录日志
     * @return mixed
     */
    public function payLog();

}