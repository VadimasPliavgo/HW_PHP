<?php
/**
 * Created by PhpStorm.
 * User: vadimas
 * Date: 17.10.15
 * Time: 17.32
 */

class City
{
    private $city;
    public function __get($city)
    {
        echo "You get $city!".PHP_EOL;
        return $this->city;
    }
    public function __set($city, $value)
    {
        echo "You set $city to $value".PHP_EOL;
        $this->city = $value;
    }
    public function __isset($name)
    {
        if ($name==$this->city)
        {
            echo "Variable already set".PHP_EOL;
        }
        else
        {
            echo "Variable not set".PHP_EOL;
        }
    }
    public function __unset($name)
    {
        unset($this->$name);
        echo"Unset variable successful".PHP_EOL;
    }

    public static function __callStatic($name, $arguments)
    {
        echo "Calling static method $name" . PHP_EOL;
    }
    function __debugInfo()
    {
        return ['$city length' => strlen($this->city)] ;
    }
}