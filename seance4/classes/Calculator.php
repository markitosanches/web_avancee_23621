<?php


class Calculator{

   static public $message = 'The result is : ';

     static public function add($a, $b){
        return self::$message.$a+$b;
    }

    public function multi($a, $b){
        return $a*$b;
    }

}