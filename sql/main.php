<?php


$mysqli = new mysqli("192.168.31.29", "root", "1q2a3z4w", "def_db", 33306);


echo $mysqli->host_info . "\n";