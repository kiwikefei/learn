<?php
// 1. getter and setter
class Task
{
    public $title;
    public $completed = false;

    public function __construct($title)
    {
        $this->title = $title;
    }

    public function complete()
    {
        $this->completed = true;
    }
}
$task = new Task('Blah blah');
$task2 = $task;
$task2->complete();
var_dump($task->completed);
var_dump($task2->completed);

// 2. encapsulation
class Kid
{
//    public $age; if don't declare , but assign it dynamically will be declared as a public property
//    protected $age;
    private $age;

    public function getAge()
    {
        return $this->age * 365;
    }

    public function setAge($age)
    {
        if ($age < 18) {
            throw new Exception('must above 18');
        }
        $this->age = $age;
    }
}

$kid = new Kid();
$kid->setAge(20);
var_dump($kid->getAge());
//$person->age = -2;
//var_dump($person->getAge());

// 3. inheritance (overwrite);
// class Shape
// {
//    protected $length = 4;
//    public function getArea()
//    {
//       return pow($this->length, 2);
//    }
// }
// class Square extends Shape
// {

// }
//class Triangle extends Shape
//{
//    // overwrite
//    protected $base = 3;
//    protected $height = 6;
//    public function getArea(){
//        return $this->base * $this->height / 2;
//    }
//}
//var_dump((new Square)->getArea());
//var_dump((new Triangle)->getArea());

// parent
//class Mother
//{
//    public function __construct()
//    {
//        var_dump($this);
//    }
//}
//class Child extends Mother
//{
//    public function __construct()
//    {
//        parent::__construct();
//        var_dump($this);
//    }
//}
//
//(new Child());

//class Shape
//{
//  what's the point? contract
//}
//class Square extends Shape
//{
//    protected $length = 4;
//    public function getArea()
//    {
//        return pow($this->length, 2);
//    }
//
//}
//class Triangle extends Shape
//{
//    // overwrite
//    protected $base = 3;
//    protected $height = 6;
//    public function getArea(){
//        return $this->base * $this->height / 2;
//    }
//}

// enforce contract by implement an interface or extend an abstract class

// 4. abstract & interface

abstract class Shape
{
    protected $color;

    public function __construct($color = 'red')
    {
        $this->color = $color;
    }

    public function getColor()
    {
        return $this->color;
    }

    abstract public function getArea();
}

class Square extends Shape
{
    protected $length = 4;

    public function getArea()
    {
        return pow($this->length, 2);
    }
}
class Circle extends Shape
{
    protected $radius = 5;

    public function getArea()
    {
        return M_PI * pow($this->radius, 2);
    }
}
var_dump((new Square)->getColor());
var_dump((new Square('blue'))->getColor());
var_dump((new Circle('green'))->getArea());

// 5. message(type hint and send messages)
class Person
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
}

class Business
{
    protected $staff;

    public function __construct(Staff $staff)
    {
        $this->staff = $staff;
    }

    // type hinting
    public function hire(Person $person)
    {
        // add $person to the staff collection
        // sending messages
        $this->staff->add($person);
    }
    
    public function getStaffMembers()
    {
        return $this->staff->getMembers();
    }
    
}
class Staff
{
    protected $members = [];

    public function __construct($members = [])
    {
        $this->members = $members;
    }

    public function add(Person $person)
    {
        $this->members[] = $person;
    }
    
    public function getMembers()
    {
        return $this->members;
    }

    // public function members()
    // {
    //     return $this->members;
    // }
    // difference $this->members between $this->members();
}

$andy = new Person('andy');
$test = new Person('test');

// $staff = new Staff
$staff = new Staff([$andy]);  //set default 
$business = new Business($staff);
$business->hire($test);
$business->hire(new Person('John Doe'));
var_dump($business->getStaffMembers());

// when to extending an abstract when to implementing an interface
//favor composition over inheritance
//To decide between an interface and inheritance of an abstract base class
//it can be helpful to take semantics (conceptual thinking) into account.
// On a semantic level inheritance represents an is_a-relationship.
// A FileLogger and a DatabaseLogger *are* both Loggers,
// so from a semantic (conceptual) point of view it is probably better to use inheritance: "class FileLogger extends Logger".
// But when a student logs entries into her journal it is better to use an interface,
// because a student is *not* a logger
// (the essence of being a student is not logging, but studying ;-),
// thus "class Student implements Logger".

//The class Student "has-a" Logger because a Student is not a Logger
//The class FileLogger "belongs-to" a Logger because a FileLogger is basically a 'Logger'