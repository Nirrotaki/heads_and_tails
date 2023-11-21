<?php
use App\Game;
use App\Player;

require_once(dirname(__FILE__) ."/.//vendor/autoload.php");

$game = new Game //создание игры
(
    new Player("Игрок1", 100),
    new Player("Игрок2",100)
);

$game->Start();