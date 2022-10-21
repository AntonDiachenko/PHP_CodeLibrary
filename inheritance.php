<?php

class BankAccount{

    private $balance;

    public function __construct($baln){             // father constructor
        $this -> balance = $baln;
    }

    public function getBalance(){
        return $this->balance;
    }

    public function deposit($amount){
        if($amount > 0 ){
            $this->balance += $amount;
        }
        return $this;
    }
}

class SavingAccount extends BankAccount {
    private $interestRate;

    public function __construct($bal , $interrate){             // kid's constructor
        parent:: __construct($bal);                     // using my father constructor to set the balance
        $this -> interestRate = $interrate;
    }

    public function setInterestRate($intRate){
        $this -> interestRate = $intRate;
    }

    public function addInterest(){
        $interest = $this -> interestRate * $this -> getBalance();
        $this -> deposit($interest);
    }

}

$account1 = new SavingAccount(3000 , 0.30);


$account1 -> deposit(200);
echo $account1 ->getBalance();
echo "<br>";
$account1 -> setInterestRate(0.12);
$account1 -> addInterest();
echo $account1 ->getBalance();

?>