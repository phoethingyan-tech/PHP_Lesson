<?php

// Constructor
// Obj ဆောက်တာနဲ့ အလုပ်လုပ်စေချင်ရင်သုံး

class BankAccount {
    public $balance;

    public function __construct($initial_balance) {
        if($initial_balance < 0) {
            $this->balance = 0;
        }else {
            $this->balance = $initial_balance;
        }
    }

    public function getBalance() {
        return $this->balance;
    }
}

$account = new BankAccount(5000);
echo $account->getBalance();