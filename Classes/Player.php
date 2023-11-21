<?php

namespace App;

class Player
{
    public string $name;
    protected int $coins;

    function __construct(string $name, int $coins)
    {
        $this->name = $name;
        $this->coins = $coins;
    }

    function Bank() // сумма всех монет
    {
        return $this->coins;
    }

    function Point($player) // добавление и отнимание монет
    {
        $this->coins++;
        $player->coins--;
    }

    function Bankrupt() // возвращает true когда монет - нет
    {
        return $this->coins == 0;
    }

}