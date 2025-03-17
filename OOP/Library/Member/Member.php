<?php

namespace Library\Member;

class Member {
    private $name;
    private $memberId;

    public function __construct($name, $memberId) {
        $this->name= $name;
        $this->memberId = $memberId; 
    }

    public function memberdetail() {
        return "Name: ".$this->name." , Member ID: ".$this->memberId;
    }
}