<?php

# Interface / Polymorphism


interface Richard{
    public function sayHi();
}

class Dan implements Richard{
    public function sayHi(){
        echo "I am your son";
    }
}

class Pan implements Richard{
    public function sayHi(){
        echo "I am test";
    }
}



$person1 = new Dan();
$person1->sayHi();

$person2 = new Pan();
$person2->sayHi();





?>