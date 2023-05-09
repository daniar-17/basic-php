<?php

    class Car
    {
        public $color;
        public $type;
    }

    $myCar = new Car();
    $myCar->color = 'Red';
    $myCar->type = 'Sedan';

    $yourCar = new Car();
    $yourCar->color = 'Blue';
    $yourCar->type = 'Suv';

    $cars = array($myCar, $yourCar);

    foreach ($cars as $car) {
        echo 'This car is a ' . $car->color . ' ' . $car->type . "\n";
    }