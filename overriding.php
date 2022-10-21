<?php

class pargol{

    public function sayHello(){

        return 'hello';
    }

}

class Daniel extends Pargol{
    
    public function sayHello(){             // override the function from parent

        return 'hellooooo Mooooomyyy';
    }
}


$person1 = new Pargol();
echo $person1 -> sayHello();
echo "<br>";
$person2 = new Daniel();
echo $person2 -> sayHello();

?>