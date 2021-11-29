<?php

//include 'User.php';
//include 'Control.php';

spl_autoload_register(function ($f) {
    include $f . '.php';
});

$user = [];

$user[] = new User('Vladimir', rand(1, 100), 'Kharkov');
$user[] = new User('Oleg', rand(1, 100), 'Lvov');
$user[] = new User('Alena', rand(1, 100), 'Kiev');
$user[] = new User('Irina', rand(1, 100), 'Dnepropetrovsk');

var_dump($user);                     // вывели родительский массив пользователей;

print_r(Control::filter($user));     // выводим через статическую функцию пользователей в заданной логике (age < 18);


