<?php

class User {

    private $name;
    private $age;
    private $city;

    public function __construct($name, $age, $city)
    {
        $this->name = $name;
        $this->age = $age;
        $this->city = $city;
    }

    public function getAge()
    {
        return $this->age;
    }
}
