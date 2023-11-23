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

<form action="refresh
$mysqli = new mysqli("192.168.0.190", "root", "1q2a3z4w", "def_db", 33306);ton>Сыграть</button>
</form>

<?php
if(isset($_POST["refresh"]))
{
    $game->Start();
}

$mysqli = new mysqli("192.168.0.190", "root", "1q2a3z4w", "def_db", 33306);
//$mysqli->query("DROP TABLE checkDB");
$mysqli->query('CREATE TABLE IF NOT EXISTS checkDB(id INT AUTO_INCREMENT PRIMARY KEY, nameWin TINYTEXT COLLATE utf8_general_ci, flips INT)');
$mysqli->set_charset("utf8mb4");
$var = $mysqli->prepare("INSERT INTO checkDB(nameWIN, flips) VALUES(?, ?)");
$var->bind_param("si", $game->Winner()->name, $game->flips);
$var->execute();



?>
    
</body>
</html>