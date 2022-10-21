<?php


# Abstract class

abstract class Car{
    public $color;

    public function __construct($c){
        $this -> color = $c;
    }

    abstract public function saymyBrand();


}

class BMW extends Car{
    public function saymyBrand()
    {
        echo"this is BMW";
    }
}

class Nissan extends Car{
    public function saymyBrand()
    {
        echo"this is Nissan";
    }
}

$car1 = new BMW("white");
echo $car1 -> saymyBrand();

$car2 = new Nissan("red");
echo $car2 -> saymyBrand();



?>