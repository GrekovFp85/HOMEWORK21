<?php

//Допустим, для примера это класс User, со свойствами имя и возраст;
class User {
    public $name;
    public $age;
}

/*Напиши второй класс, назови его Builder (строитель). Создай в нем метод, который будет принимать
в качестве аргументов имя и возраст, будет создавать нового пользователя, и возвращать его:*/

class Builder extends User {      //сомнение, что необходимо было создавать дочерний клас от User;

    public static $number = 0;
    public function addNewUser($name, $age) {
        $this->name = $name;
        $this->age = $age;

        self::$number++;

        return 'Name: ' . $this->name . ' Age: ' . $this->age;
    }
}

$person = new Builder();

$person->addNewUser('Ivan',40);
$person->addNewUser('Petr',30);
$person->addNewUser('Karl', 20);

//echo $person->addNewUser('Karl', 10);

echo Builder::$number;
