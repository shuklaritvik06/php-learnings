<?php
class User
{
    public $name;
    private $age;

    public function __construct($age, $name)
    {
        $this->age = $age;
        $this->name = $name;
    }
    private function hello()
    {
        return $this->name;
    }
    function printAge()
    {
        echo "The age is " . $this->age . " and name is " . $this->hello();
    }
}

class Student extends User
{
    public $email;
    public $marks;
    public function __construct($age, $name, $email, $marks)
    {
        parent::__construct($age, $name);
        $this->email = $email;
        $this->marks = $marks;
    }
    public function get_email()
    {
        return $this->email;
    }
}
abstract class AbstractClass
{
    abstract public function someMethod1();
}

class Implement extends AbstractClass
{
    public function someMethod1()
    {
        echo "he";
    }
    const CONSTANT = "Constant";
    public function byebye()
    {
        echo self::CONSTANT;
    }
}
echo Implement::CONSTANT;
$user = new User(10, "Ramesh");
$student = new Student(10, "Ramesh", "ramesh@ramesh.com", 10);
$user->printAge();
