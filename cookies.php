<?php

// $name = "uname";
// $value = "Peppa";
// setcookie($name , $value, time()+(86400),"/");

// $value = "test";

// setcookie($name, $value);

// echo $_COOKIE[$name];

// setcookie($name, $value, time()-30000);

if(count($_COOKIE)>0){
    echo "you have a cookie";
}else{
    echo "you don't have cookie";
}

?>