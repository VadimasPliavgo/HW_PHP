<?php

    function __autoload($nameClass)
    {
        require "$nameClass.php";
    };

    // __construct, __toString, __invoke,( __destruct inside class) methods use
    $person = new Person('Alex','Johnson','20');
    echo $person;
    $person();

    // __clone, __toString, __invoke method use
    $person2 = clone $person;
    echo $person2;
    $person2();

    // __call method use
    $person->runTest();



    $obj = new City();
    $city = "Vilnius";
    $city2= "Kaunas";

    //__get, __set, __callStatic, __isset, __unset, __debugInfo methods use
    $obj-> city = "Vilnius";
    isset($obj->$city);
    isset($obj->$city2);
    City::Test();
    var_dump($obj);
    unset($obj->city);
