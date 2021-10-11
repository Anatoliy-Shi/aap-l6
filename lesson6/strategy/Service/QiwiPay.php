<?php


class QiwiPay implements PayInterface
{
    public function requestPay(float $sum, string $phone): void
    {
        // логика отправки запроса для Qiwi
    }

    public function responsePay(): string
    {
        return 'ответ... от Qiwi';
    }

    /**
     * @return int
     */
    public function getTel(): int
    {
        return " "; // TODO: Implement getTel() method.
    }

    /**
     * @return float
     */
    public function getSum(): float
    {
        return " ";  // TODO: Implement getSum() method.
    }
}