<?php

class User {
    protected $name;
    protected $age;

    public function setName(string $name) {
        $this->name = $name;
    }
    public function getName() {
      return $this->name;
    }
    public  function setAge(int $age) {
        $this->age = $age;
    }
    public function getAge() {
        return $this->age;
    }
}

class Worker extends User {
    private $salary;

    public function setSalary(int $salary) {
        $this->salary = $salary;
    }
    public function getSalary() {
        return $this->salary;
    }
}

$worker1 = new Worker();
$worker1->setName('Иван');
$worker1->setAge(25);
$worker1->setSalary(1000);

$worker2 = new Worker();
$worker2->setName('Василий');
$worker2->setAge(26);
$worker2->setSalary(2000);

echo $worker1->getSalary() + $worker2->getSalary() . "\n";

class Student extends User {
    private $course;
    private $stipend;

    public function setCourse(int $course) {
        $this->course = $course;
    }
    public  function getCourse() {
        return $this->course;
    }
    public function setStipend(int $stipend) {
        $this->stipend = $stipend;
    }
    public function getStipend() {
        return $this->stipend;
    }
}

$st1 = new Student();
$st1->setName('Иван');
$st1->setCourse(1);
$st1->setStipend(500);

$st2 = new Student();
$st2->setName('Василий');
$st2->setCourse(1);
$st2->setStipend(500);

echo sprintf('%s'.' и '.'%s', $st1->getName(), $st2->getName());