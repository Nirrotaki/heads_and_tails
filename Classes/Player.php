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

    function Bank()
    {
        return $this->coins;
    }

    function Point($player)
    {
        $this->coins++;
        $player->coins--;
    }

    function Bankrupt()
    {
        return $this->coins == 0;
    }

}