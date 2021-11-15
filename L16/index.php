<?php



class User {
    public $name;
    public $age;
    public $sex;
}

class Builder {

    public static $counter = 0;

    public function createUser($name, $age, $sex) {

        $person = new User;
        $person->name = $name;
        $person->age = $age;
        $person->sex = $sex;

        self::$counter++;

        return $person;
    }
}


$user1 = Builder::createUser('Alex', 18, 'male');
$user2 = Builder::createUser('Olga', 21,'female');
$user3 = Builder::createUser('Boris', 30,'male');

var_dump($user1, $user2, $user3);

//$list = [];

//$list[] = Builder::createUser('Alex', 18, 'male');
//$list[] = Builder::createUser('Olga', 21,'female');
//$list[] = Builder::createUser('Boris', 30,'male');

//var_dump($list);

echo "\n";
echo Builder::$counter . "\n";







