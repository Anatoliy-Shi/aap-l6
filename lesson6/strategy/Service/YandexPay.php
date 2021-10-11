<?php



class YandexPay implements PayInterface
{
    
    public function requestPay(float $sum, string $phone): void
    {
        // логика отправки запроса для Yandex
    }

    public function responsePay(): string
    {
        return " ответ... от Yandex ";
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
        return " "; // TODO: Implement getSum() method.
    }

}