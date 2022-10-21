<?php

class BankAccount1{
    public $accountnum;
    public $balance;

    public function deposit($amount){
        if($amount > 0){
            $this -> balance += $amount;
        }
    }

    public function withdraw($amount){
        if($amount < $this->balance){
            $this -> balance -= $amount;
        }
    }
}

$account = new BankAccount1();
$account1 -> accountnum = 100;
$account1 -> balance = 1000;


$account1 -> deposit(3000);
$account1 -> withdraw(500);

?>