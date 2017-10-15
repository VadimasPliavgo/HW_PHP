<?php


class Person
{
    private $name;
    private $lastname;
    private $age;
    private $counter = 0;
    public function __construct($name, $lastname,$age)
    {
        $this->name=$name;
        $this->lastname=$lastname;
        $this->age=$age;
        echo "Object construct done".PHP_EOL;
    }
    public function __destruct()
    {
        echo "Item was deleted".PHP_EOL;
    }

    public function __clone()
    {
        $this->name="$this->name clone";
        echo "Object clone successful ".PHP_EOL;
    }
    public function __invoke()
    {
        $this->counter++;
        echo "You call variable like function: $this->counter time(s)".PHP_EOL;
    }
    public function __toString()
    {
        return "Full name: $this->name $this->lastname Age: $this->age".PHP_EOL;
    }
    public function __call($name, $arguments)
    {
        echo "Calling method $name" . PHP_EOL;
    }
    public function __sleep()
    {
        echo array($this->name, $this->lastname, $this->age);
    }
    public function __wakeup()
    {
        $this->__sleep();
    }
}