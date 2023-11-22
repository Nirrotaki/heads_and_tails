<?php
use App\Game;
use App\Player;

require_once(dirname(__FILE__) ."/.//vendor/autoload.php");

$game = new Game //создание игры
(
    new Player("Игрок1", 100),
    new Player("Игрок2",100)
);

if(isset($_POST["refresh"]))
{
    $game->Start();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>heads_and_tails</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>

<h2>Поздравляю <span><?php echo $game->Winner()->name?></span></h2>
<h3>Вы бросили монету <span><?php echo $game->Start() ?></span></h3>
<br>

<h4>
    <?php echo $game->player1->name ?>: <span><?php echo $game->player1->Bank() ?></span>
</h4>

<h4>
    <?php echo $game->player2->name ?>: <span><?php echo $game->player2->Bank() ?>
</h4>

<form action="refresh" method="POST">
    <button>Сыграть</button>
</form>

    
</body>
</html>