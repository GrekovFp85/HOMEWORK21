<?php

class Car {
    public $brand;
    public $model;
    public $year;
    public $engine;
    public $gearbox;
    public $speed;
}

$car1 = new Car;

$car1->brand = 'TOYOTA';
$car1->model = 'AVENSIS';
$car1->year = 2015;
$car1->engine = 2.0;
$car1->gearbox = 'AUTOMATIC';
$car1->speed = 240;


$car2 = new Car;

$car2->brand = 'HONDA';
$car2->model = 'ACCORD';
$car2->year = 2009;
$car2->engine = 2.0;
$car2->gearbox = 'AUTOMATIC';
$car2->speed = 300;

echo $car2->brand . ' ' . $car2->model . '  Compare:  ' . $car1->brand . ' ' . $car1->model;

//var_dump($car1);