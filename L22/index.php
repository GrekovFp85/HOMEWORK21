<?php

$connection = new PDO('mysql:host=localhost;port=3306;dbname=filipp', 'root', '123123');

//$connection->exec("INSERT INTO users (name, age, city) VALUES ('Matroskin', 7, 'Prostokvashino')");
//$connection->exec("UPDATE users SET name = 'Sharik', age = 10, city = 'Budka' WHERE ID = 14");
//$connection->exec('DELETE FROM users WHERE ID = 15');

$state = $connection->query('SELECT ID, name, city FROM users WHERE ID < 11');
$state->execute();

$users = $state->fetchAll(PDO::FETCH_ASSOC);
//var_dump($users);
