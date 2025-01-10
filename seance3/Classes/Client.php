<?php
require_once('Classes/Person.php');

class Client extends Person{
    public string $account;

    public function setNames($account, $name = null){
        $this->account = $account;
        $this->name = $name;
    }
}