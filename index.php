<?php
use App\Game;
use App\Player;

require_once(dirname(__FILE__) ."/.//vendor/autoload.php");

$game = new Game
(
    new Player("Владимир", 100),
    new Player("Полина",100)
);

$game->Start();