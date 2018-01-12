<?php
// class Person
// {
//     private $age;
//     private $gender;
//     private $name;

//     //initialize object
//     public function __construct($age, $name, $gender = 'm')
//     {
//         $this->age = $age; // $age = 41
//         $this->gender = $gender;
//         $this->name = $name;
//     }

//     public function getAge() //getter
//     {
//         // if ($this->age < 17) {
//         //     die('hey you dont have access to kid <' . $this->name . '>');
//         // }
//         if ($this->gender != 'm') {
//             return 'it is not polite to ask mss ' . $this->name . ' \' age';
//         }
//         return $this->age;
//     }

//     public function hasBirthday()
//     {
//         $this->age++;
//     }

//     public function getGender()
//     {
//         return $this->gender;
//     }

//     public function getName()
//     {
//         return $this->name;
//     }
// }
// $andy = new Person(26, 'andy', 'm');
// $thomas = new Person(7, 'thomas', 'f');
// echo $thomas->getAge();
// echo $thomas->getAge();
// $thomas->hasBirthday();
// echo $thomas->getAge();
// $thomas->hasBirthday();
// echo $thomas->getAge();
// // $thomas->gender = 'Miss';
// echo $thomas->getgender();
// // $andyAge = $andy->getAge();
// // $andyAge = $andy->age;
// // echo "$andyAge";
// // $thomasAge = $thomas->getAge();
// echo "$thomasAge";
// $andy = new Person(41, 'Ms.');
// $andy->age = 29;
// function test()
// {
//     'abc';
// }
// $a = test();
// echo $a;
//getter, setter

// echo "$thomas->age, $thomas->gender\n";
// $thomas->age = 18;
// $andy->age = 41;
// echo "$andy->age, $andy->title";
// echo "thomas is $andy->age";

//  class Father
//  {
//      public $eyeCount = 2;
//      protected $familyName = 'Wang';
//      private $money = 100;
//      private static $nationality = 'Chinese';
//  }

// class Child extends Father
// {
//     public function getMoney()
//     {
//         return $this->money;
//     }

//     public function getFamilyName()
//     {
//         return $this->familyName;
//     }
// }

// class User
// {
// }
// echo Father::$nationality;
// $f = new Father;
// $f->nationality;
// echo (new Father)->nationality;
// $m = new Mother;
// $u = new User;
// echo $u->eyeCount;
// echo $kid->eyeCount;
// echo $m->eyeCount;
// echo Father::$nationality;
// pubic  protected  private
// static
abstract class Shape
{
    protected $length = 10;

    abstract public function getArea();
}

class Square extends Shape
{
    public function getArea()
    {
        return pow($this->length, 2);
    }
}
class Triangle extends Shape
{
    // overwrite
    protected $base = 3;
    protected $height = 6;

    public function getArea()
    {
    }

    public function getArea1()
    {
        return $this->base * $this->height / 2;
    }
}
$s = new Triangle;
echo $s->getArea1();
