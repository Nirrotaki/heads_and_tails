<?php
use App\Game;
use App\Player;

require_once(dirname(__FILE__) ."/.//vendor/autoload.php");

$game = new Game //создание игры
(
    new Player("Игрок1", 100),
    new Player("Игрок2",100)
);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>heads_and_tails</title>
</head>
<body>

<h2>Поздравляю <?php $game->Winner()->name?></h2>
    
</body>
</html>