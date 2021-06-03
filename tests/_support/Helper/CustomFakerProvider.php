<?php
namespace Helper;

use Faker\Provider\Base;

class CustomFakerProvider extends Base
{
    protected $cards = [
        '4555',
        '3397',
        '6977',
        '7843'
    ];

    /**
     * Возврящает рандомный номер карты
     */
    public function getCardNumber()
    {
        return sprintf(
            '%d-%d-%d-%d',
            $this->cards[array_rand($this->cards)],
            random_int(1001, 3999),
            random_int(4001, 8999),
            random_int(9001, 9999),

        );
    }

    protected $cvv = [
        '355',
        '658',
        '587'
    ];

    /**
     * Возвращает рандомный CVV код
     */
    public function getCvv()
    {
        return sprintf(
            '%d',
            $this->cvv[array_rand($this->cvv)]
        );
    }
}
