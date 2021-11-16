<?php

class Student {
    protected $name;
    protected $age;
    protected $sex;

    public function __construct($name = 'Unknown', $age = 0, $sex = 'Unknown')
    {
        $this->name = $name;
        $this->age = $age;
        $this->sex = $sex;
    }

    public function __destruct()
    {
        echo 'Запись завершена!';
    }

    public function __toString()
    {
        return 'Name: ' . $this->name . 'Age: ' . $this->age . 'Sex: ' . $this->name;
    }
}

$student1 = new Student('Ivan', 21, 'male');

// работает __toString
echo $student1;

$listNewStudent = [];
// работает __construct
$listNewStudent[] = new Student('Ivan', 21, 'male');
$listNewStudent[] = new Student('Irina', 24, 'female');


var_dump($listNewStudent);


//после завершения скрипта по трем созданным пользователям срабатывает __destruct;
//еще почитаю , но пока не совсем понятен механизм _destruct;




