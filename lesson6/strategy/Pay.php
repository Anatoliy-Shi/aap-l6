<?php


class Pay implements PayInterface
{
    public function pay(PayInterface $payment, float $sum, $phone): string
    {
        $payment->requestPay($sum, $phone);
        return $payment->responsePay();
    }

    /**
     * @return int
     */
    public function getTel(): int
    {
       return ""; // TODO: Implement getTel() method.
    }

    /**
     * @return float
     */
    public function getSum(): float
    {
        return "";// TODO: Implement getSum() method.
    }
}