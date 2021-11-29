<?php

//$arr = [10, 20, 30, 50, 235, 3000];

//$number = 0;

//for ($i = 0; $i <= 5; $i++) {
//$number = $arr[$i];
//   echo $number[$i];
//}

//С помощью цикла foreach и оператора if выведите в консоль те элементы массива, которые больше 3-х, но меньше 10.

class Student {

    public $name;
    public static $course;

    public function __construct ($name)
    {
        $this->name = $name;
        self::$course = 1;
    }

    public function getCourse() {
       if ($this->correctCourse(self::$course)) {
           return self::$course;
       }
    }

    public function transferStudent() {
        if ($this->correctCourse(self::$course)) {
        self::$course++;
        } else {
            echo 'ERROR';
        }
    }

    public function correctCourse($course) {
        if(self::$course <= 5) {
            return self::$course;
        }
    }
}

$user = new Student('Filipp');

$user->transferStudent();
$user->transferStudent();


echo $user->getCourse();


