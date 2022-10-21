<?php

class BankAccount {
    private $accountnum;
    private $balance;

    public function __construct($acnum, $bal){
        $this -> accountnum = $acnum;
        $this -> balance = $bal;
    }

        // function __construct(private $accountnum , private $balance){       // this is only for php 8 

        // }
    
            function __destruct()
            {
                if($this -> balance < 0){
                    echo"this is not correct value for account";
                }
            }

}

$account1 = new BankAccount(100,1000);
$account2 = new BankAccount(101, -200);




?>